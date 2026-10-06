<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends MX_Controller
{
    //wGtRkO8VoEyUjS
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
        $this->load->model('mdl_blog');
    }
   
    function index()
    {
        $this->load->view('form');
    }
    
    function save_data()
    {
//         print_r($_FILES); die();
//         echo "swdsds";die();
        $this->load->library('form_validation');
        $this->form_validation->set_rules("title","Title","required|trim");
        $this->form_validation->set_rules("description","Description","required|trim");
        $this->form_validation->set_rules("date","Date","required|trim");
        $this->form_validation->set_rules("time","Time","required|trim");
        $this->form_validation->set_rules("author","Author","trim"); 
        $this->form_validation->set_rules("tags","Tags","trim"); 
        $this->form_validation->set_rules("meta_title","Meta Title","trim|max_length[255]");
        $this->form_validation->set_rules("meta_desc","Meta Description","trim|max_length[300]");
        $this->form_validation->set_rules("slug","Slug","trim|max_length[255]");
        
        if ($this->form_validation->run()==TRUE)
        {
            $data['title']=$_POST['title'];
            $data['description']=$_POST['description'];
            $data['author']=$_POST['author'];
             $data['date']=$_POST['date'];
            $data['time']=$_POST['time']; 
            $data['tags']=$_POST['tags']; 
            $data['meta_title']=$_POST['meta_title'];
            $data['meta_desc']=$_POST['meta_desc'];
            $data['slug']=$_POST['slug'];
            if (empty($data['slug'])) {
                $data['slug'] = $this->slugify($data['title']);
            }
            if (!isset($_POST['b_id']) || !$_POST['b_id']) {
                $data['views'] = 0;
                $data['main_title'] = $data['title'];
            }
          
            if (!empty($_FILES['image']['name'])) 
            {
                // $data['url_type']=0;
                $data['image']=$this->image_upload($data['title']);
                if ($_POST['old_image'])
                {
                    $this->remove_image($_POST['old_image']);
                }
            }else if ($this->input->post('image_url')){
                // $data['url_type']=1;
                $data['image']=$this->input->post('image_url');
                if ($_POST['old_image'])
                {
                    $this->remove_image($_POST['old_image']);
                }
            }else{
                if (!isset($_POST['b_id']) || !$_POST['b_id']) {
                    $data['image'] = '';
                }
            }
            
            if (isset($_POST['b_id']) && $_POST['b_id'])//update
            {
                $where['b_id']=$_POST['b_id'];
                echo $this->mdl_blog->update_data($where,$data);
            }
            else //add
            {
               
                echo $this->mdl_blog->add_data($data);
            }
        }
        else
        {
            echo validation_errors();
        }
    }
    
    function view_data()
    {
        $where=null;
        if (isset($_GET['b_id']))
	         $where['b_id']=$_GET['b_id'];
        
        if (isset($_GET['data']))
	        $select=$_GET['data'];
	    else $select="*";
        
	    
        $return=$this->mdl_blog->view_data($where,$select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }
    
    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id'])
        {
            
            $this->db->where('b_id', $_GET['id']);
            foreach ($this->db->get("blog")->result() as $row)
            {
                $image_delete_path1="./assets/uploads/blog/$row->image";
                 $image_delete_path2="./assets/uploads/blog/thumb/$row->image";
            }
            if (!empty($image_delete_path1) && file_exists($image_delete_path1)) {
                unlink($image_delete_path1);
            }
            if (!empty($image_delete_path2) && file_exists($image_delete_path2)) {
                unlink($image_delete_path2);
            }
           
            $where['b_id']=$_GET['id'];
            echo $this->mdl_blog->delete_data($where) ? "1" : "0";
        }else echo "Not Deleted";
    }
        function image_upload($title = '')
        {
            $folder = "blog";
            $upload_dir = './assets/uploads/' . $folder . '/';
            $thumb_dir  = './assets/uploads/' . $folder . '/thumb/';

            if (!is_dir($upload_dir)) {
                @mkdir($upload_dir, 0777, true);
            }
            if (!is_dir($thumb_dir)) {
                @mkdir($thumb_dir, 0777, true);
            }

            $config['upload_path']   = $upload_dir;
            $config['allowed_types'] = 'gif|jpg|png|jpeg|webp|svg|bmp|JPG|JPEG|PNG|WEBP';
            $config['overwrite']     = false;
            $config['remove_spaces'] = true;

            $rand_number = mt_rand(10, 99);
            $timestamp   = time();
            $config['file_name'] = $rand_number . $timestamp;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image'))
            {
                return '';
            }
            else
            {
                $image = $this->upload->data();
                $file_name = $image['file_name'];

                // Generate thumbnail
                $source_file = $upload_dir . $file_name;
                $thumb_file  = $thumb_dir . $file_name;

                $thumb_config['image_library']  = 'gd2';
                $thumb_config['source_image']   = $source_file;
                $thumb_config['new_image']      = $thumb_file;
                $thumb_config['maintain_ratio'] = TRUE;
                $thumb_config['width']          = 600;
                $thumb_config['height']         = 400;

                $this->load->library('image_lib');
                $this->image_lib->initialize($thumb_config);
                if (!$this->image_lib->resize()) {
                    @copy($source_file, $thumb_file);
                }
                $this->image_lib->clear();

                return $file_name;
            }
        }
        
    function remove_image($title)
    {
        if (substr($title, 0,4)!="http")
        {
            $path1="./assets/uploads/blog/".$title;
            unlink($path1);
            $path2="./assets/uploads/blog/thumb/".$title;
            unlink($path2);
        }
      
    }
    
    private function slugify($text)
    {
        $text = strtolower(trim($text));
        $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
        $text = preg_replace('/[\s-]+/', '-', $text);
        return trim($text, '-');
    }
        
        
}
?>

