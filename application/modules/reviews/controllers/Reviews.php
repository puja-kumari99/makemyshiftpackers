<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        try {
            @$this->load->database();
        } catch (Throwable $e) {}
    }

    function index()
    {
        $this->load->library('pagination');
        
        $star_filter = $this->input->get('star');
        $total_rows = 0;
        $query = null;
        
        try {
            if (isset($this->db) && is_object($this->db) && method_exists($this->db, 'table_exists') && @$this->db->table_exists('reviews')) {
                // Count total active reviews for pagination
                $this->db->where('status', 1);
                if ($star_filter) {
                    $this->db->where('stars', $star_filter);
                }
                $total_rows = $this->db->count_all_results('reviews');
                
                // Pagination Config
                $config['base_url'] = site_url('reviews');
                $config['total_rows'] = $total_rows;
                $config['per_page'] = 9;
                $config['page_query_string'] = TRUE;
                $config['reuse_query_string'] = TRUE;
                
                $config['full_tag_open'] = '<ul class="pagination justify-content-center reviews-pagination-list">';
                $config['full_tag_close'] = '</ul>';
                $config['prev_link'] = '&laquo;';
                $config['prev_tag_open'] = '<li class="page-item">';
                $config['prev_tag_close'] = '</li>';
                $config['next_link'] = '&raquo;';
                $config['next_tag_open'] = '<li class="page-item">';
                $config['next_tag_close'] = '</li>';
                $config['cur_tag_open'] = '<li class="page-item active"><a href="javascript:void(0)" class="page-link reviews-pagination-current">';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li class="page-item">';
                $config['num_tag_close'] = '</li>';
                $config['first_link'] = 'First';
                $config['first_tag_open'] = '<li class="page-item">';
                $config['first_tag_close'] = '</li>';
                $config['last_link'] = 'Last';
                $config['last_tag_open'] = '<li class="page-item">';
                $config['last_tag_close'] = '</li>';
                $config['attributes'] = array('class' => 'page-link');
                
                $this->pagination->initialize($config);
                
                $offset = $this->input->get('per_page') ? (int) $this->input->get('per_page') : 0;

                // Fetch data
                $this->db->order_by('r_id', 'desc');
                $this->db->where('status', 1);
                if ($star_filter) {
                    $this->db->where('stars', $star_filter);
                }
                
                $query = $this->db->get('reviews', $config['per_page'], $offset);
            }
        } catch (Throwable $e) {
            $query = null;
        }
        
        $data['reviews'] = $query;
        $data['pagination'] = (isset($this->pagination) && method_exists($this->pagination, 'create_links')) ? $this->pagination->create_links() : '';
        $data['title'] = "Customer Reviews & Ratings | " . $this->comp['company3'];
        $data['description'] = "Detailed feedback and ratings from our satisfied clients. Read real reviews about our freight forwarding services at " . $this->comp['company3'] . ".";
        $data['module'] = "reviews";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
    }

    function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->load->database();
            
            $is_ajax = $this->input->is_ajax_request() || !empty($_POST['is_ajax']);

            $name   = trim((string) $this->input->post('name'));
            $email  = trim((string) $this->input->post('email'));
            $city   = trim((string) $this->input->post('city'));
            $review = trim((string) $this->input->post('review'));
            $rating = (int) $this->input->post('rating');
            if ($rating < 1 || $rating > 5) {
                $rating = 5;
            }

            if (empty($name) || empty($review)) {
                if ($is_ajax) {
                    echo json_encode(['err' => 1, 'msg' => 'Please enter your name and review.']);
                    return;
                }
                $this->session->set_flashdata('error', 'Please enter your name and review.');
                redirect($_SERVER['HTTP_REFERER'] ?? 'testimonials');
                return;
            }

            $uploaded_images = [];
            if (isset($_FILES['review_images']) && !empty($_FILES['review_images']['name'][0])) {
                $upload_path = FCPATH . 'assets/images/reviews/';
                if (!is_dir($upload_path)) mkdir($upload_path, 0777, true);
                
                $files = $_FILES['review_images'];
                $count = is_array($files['name']) ? count($files['name']) : 0;
                
                for($i = 0; $i < $count; $i++) {
                    if (empty($files['name'][$i])) continue;
                    $tmp_name = $files['tmp_name'][$i];
                    $error = $files['error'][$i];
                    
                    if ($error === UPLOAD_ERR_OK && is_uploaded_file($tmp_name)) {
                        $ext = strtolower(pathinfo($files['name'][$i], PATHINFO_EXTENSION));
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
                            $new_name = uniqid('rev_') . '.' . $ext;
                            $dest = $upload_path . $new_name;
                            if (move_uploaded_file($tmp_name, $dest)) {
                                $uploaded_images[] = 'assets/images/reviews/' . $new_name;
                            }
                        }
                    }
                }
            }
            
            $r_img_val = implode(',', $uploaded_images);
            
            $data = array(
                'name'        => $name,
                'email'       => $email,
                'r_title'     => !empty($city) ? $city : 'Customer Review',
                'r_desc'      => $review,
                'stars'       => $rating,
                'status'      => 1, // Visible by default (admin can toggle to hide anytime)
                'b_id'        => 0,
                'r_img'       => $r_img_val,
                'views'       => 0,
                'city'        => $city,
                'posted_date' => date('Y-m-d H:i:s'),
                'timestamp'   => date('Y-m-d H:i:s')
            );
            
            $this->db->insert('reviews', $data);

            if ($is_ajax) {
                echo json_encode([
                    'err' => 0, 
                    'msg' => 'Thank you! Your review has been submitted successfully.'
                ]);
                return;
            }
            
            $this->session->set_flashdata('success', 'Thank you! Your review has been submitted successfully.');
            redirect($_SERVER['HTTP_REFERER'] ?? 'testimonials');
        }
    }
}