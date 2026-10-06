<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

    function __construct(){
        parent::__construct();
        try {
            $this->load->database();
        } catch (Throwable $e) {}
    }

    private function slugify($text) {
        $text = strtolower($text);
        $text = preg_replace('~[^a-z0-9\s-]~', '', $text);
        $text = preg_replace('~[\s-]+~', '-', $text);
        return trim($text, '-');
    }

    private function loadBlogs() {
        $blogs = [];

        // 1. Fetch from database table 'blog' via CI DB
        try {
            if (!isset($this->db) || !is_object($this->db)) {
                $this->load->database();
            }
            if (isset($this->db) && is_object($this->db)) {
                $this->db->order_by('b_id', 'DESC');
                $query = $this->db->get('blog');
                if ($query && is_object($query) && method_exists($query, 'num_rows') && $query->num_rows() > 0) {
                    foreach ($query->result_array() as $row) {
                        $row['id'] = $row['b_id'];
                        $row['content'] = $row['description'];
                        if (empty($row['slug'])) {
                            $row['slug'] = $this->slugify($row['title']);
                        }
                        $row['created_at'] = !empty($row['timestamp']) ? $row['timestamp'] : (!empty($row['date']) ? $row['date'] : date('Y-m-d H:i:s'));
                        $blogs[] = $row;
                    }
                    if (!empty($blogs)) return $blogs;
                }
            }
        } catch (Throwable $e) {}

        // 2. Direct SQLite3 fallback if CI DB has issues
        try {
            $dbPath = FCPATH . 'application/database.php';
            if (file_exists($dbPath)) {
                $sqlite = new SQLite3($dbPath);
                $res = @$sqlite->query("SELECT * FROM blog ORDER BY b_id DESC");
                if ($res) {
                    while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
                        $row['id'] = $row['b_id'];
                        $row['content'] = $row['description'];
                        if (empty($row['slug'])) {
                            $row['slug'] = $this->slugify($row['title']);
                        }
                        $row['created_at'] = !empty($row['timestamp']) ? $row['timestamp'] : (!empty($row['date']) ? $row['date'] : date('Y-m-d H:i:s'));
                        $blogs[] = $row;
                    }
                    if (!empty($blogs)) return $blogs;
                }
            }
        } catch (Throwable $e) {}

        // 3. Fallback to json if file exists
        $path = FCPATH . 'admin_data/blogs.json';
        if (file_exists($path)) {
            $json = json_decode(file_get_contents($path), true) ?: [];
            return array_reverse($json);
        }

        return [];
    }

    public function _remap($method, $params = array())
    {
        if ($method === 'view') {
            return $this->view();
        }
        if ($method === 'index') {
            return $this->view();
        }
        if ($method === 'read') {
            $slug = !empty($params[0]) ? $params[0] : '';
            return $this->read($slug);
        }

        // Any other segment like /blog/my-slug or /blog/f
        $slug = !empty($method) ? $method : (!empty($params[0]) ? $params[0] : '');
        if (!empty($slug)) {
            return $this->read($slug);
        }

        return $this->view();
    }

    function index() {
        return $this->view();
    }

    function view(){
        $this->load->library('pagination');
        $this->load->helper('text'); 

        $all_blogs = $this->loadBlogs();
        $total_rows = count($all_blogs);
        $per_page = 6;
        $offset = (int) $this->uri->segment(3);

        $config['base_url'] = site_url('blog/view');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = 3;

        $config['full_tag_open'] = '<ul class="styled-pagination clearfix text-center">';
        $config['full_tag_close'] = '</ul>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a href="#" class="active rc_first_hr color_dark">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['first_link'] = 'First';

        $this->pagination->initialize($config);

        $data['blogs'] = array_slice($all_blogs, $offset, $per_page);
        $data['total'] = $total_rows;
        $data['recent_posts'] = array_slice($all_blogs, 0, 5);

        $data['title'] = "Official Blog of " . $this->comp['company3'] . " India";
        $data['description'] = "Latest blog of " . $this->comp['company3'];
        $data['module'] = "blog";
        $data['view_file'] = "blog"; 

        echo Modules::run('template/layout2', $data);
    }

    function read($slug = '') {
        if (empty($slug)) {
            $slug = (string)($this->uri->segment(3) ?: $this->uri->segment(2));
        }
        $this->load->helper('text');

        $all_blogs = $this->loadBlogs();
        $selected_blog = null;
        
        $search_slug = strtolower(trim(urldecode(str_replace('_', '-', (string)$slug))));

        foreach ($all_blogs as $b) {
            $custom_slug = strtolower(trim($b['slug'] ?? ''));
            $auto_slug = strtolower(trim($this->slugify($b['title'] ?? '')));
            $blog_id = (string)($b['b_id'] ?? $b['id'] ?? '');

            if (
                (!empty($custom_slug) && ($custom_slug === $search_slug || urldecode($custom_slug) === $search_slug)) || 
                (!empty($auto_slug) && ($auto_slug === $search_slug || urldecode($auto_slug) === $search_slug)) ||
                ($blog_id === $search_slug)
            ) {
                $selected_blog = (object) $b;
                break;
            }
        }

        // Fallback: if search_slug didn't match directly, try prefix or matching against single blog
        if (!$selected_blog && count($all_blogs) === 1 && !empty($search_slug)) {
            $selected_blog = (object) $all_blogs[0];
        }

        if ($selected_blog) {
            $data['query'] = [$selected_blog];
            $data['recent_posts'] = array_slice($all_blogs, 0, 5);
            
            $data['title'] = !empty($selected_blog->meta_title) ? $selected_blog->meta_title : ucfirst($selected_blog->title);
            $data['description'] = !empty($selected_blog->meta_desc) ? $selected_blog->meta_desc : word_limiter(strip_tags($selected_blog->description), 200);
            
            $image_file = $selected_blog->image ?? '';
            if (!empty($image_file) && (strpos($image_file, 'http://') === 0 || strpos($image_file, 'https://') === 0)) {
                $data['img'] = $image_file;
            } elseif (!empty($image_file) && file_exists(FCPATH . 'assets/uploads/blog/' . $image_file)) {
                $data['img'] = base_url('assets/uploads/blog/' . $image_file);
            } elseif (!empty($image_file) && file_exists(FCPATH . 'uploads/blogs/' . $image_file)) {
                $data['img'] = base_url('uploads/blogs/' . $image_file);
            } else {
                $data['img'] = base_url('assets/img/packers_movers.jpg');
            }
            
            $data['module'] = "blog";
            $data['view_file'] = "view"; 

            echo Modules::run('template/layout2', $data);
        } else {
            redirect('blog/view');
        }
    }
}
