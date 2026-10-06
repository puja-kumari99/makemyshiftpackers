<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
        $this->load->model('gallery_mdl');
    }

    function index()
    {
        $this->load->view('index');
    }

    function image_upload()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'trim');
        
        if (empty($_FILES['image']['name']) && empty($_POST['auto_id'])) {
            $this->form_validation->set_rules('image', 'Image', 'required');
        }
        if ($this->form_validation->run() == TRUE) 
        {
            $data = array();
            $data['title'] = isset($_POST['title']) ? trim($_POST['title']) : '';
            $data['album_id'] = 0;
            $data['album_name'] = !empty($data['title']) ? $data['title'] : 'General';
            
            if (!empty($_FILES['image']['name'])) {
                if (!is_dir('./assets/uploads/gallery')) {
                    @mkdir('./assets/uploads/gallery', 0777, true);
                }
                if (!is_dir('./assets/uploads/gallery/thumb')) {
                    @mkdir('./assets/uploads/gallery/thumb', 0777, true);
                }

                $config['upload_path']   = './assets/uploads/gallery/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp|svg|bmp';
                $config['overwrite']     = false;
                $config['remove_spaces'] = true;
                
                $rand_number = mt_rand(10, 99);
                $timestamp   = time();
                $config['file_name'] = $rand_number . $timestamp;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) 
                {
                    echo $this->upload->display_errors();
                    die();
                } 
                else 
                {   
                    $image = $this->upload->data();
                    $file_name = $image['file_name'];
                    $data['image'] = $file_name;

                    // Generate thumbnail
                    $source_file = './assets/uploads/gallery/' . $file_name;
                    $thumb_file  = './assets/uploads/gallery/thumb/' . $file_name;

                    $thumb_config['image_library']  = 'gd2';
                    $thumb_config['source_image']   = $source_file;
                    $thumb_config['new_image']      = $thumb_file;
                    $thumb_config['maintain_ratio'] = TRUE;
                    $thumb_config['width']          = 400;
                    $thumb_config['height']         = 300;

                    $this->load->library('image_lib');
                    $this->image_lib->initialize($thumb_config);
                    if (!$this->image_lib->resize()) {
                        @copy($source_file, $thumb_file);
                    }
                    $this->image_lib->clear();
                }
            }
            
            if (!empty($_POST['auto_id'])) {
                $where['auto_id'] = $_POST['auto_id'];
                echo $this->gallery_mdl->update_data($where, $data);
            } else {
                $data['status'] = 1;
                echo $this->gallery_mdl->add_data($data);
            }
        }
        else echo validation_errors();
        // Upload code end
    }
   
    function view_data()
    {
        if (isset($_GET['id']))
	         $where['auto_id']=$_GET['id'];
        else $where = null;
        
        if (isset($_GET['data']))
	        $select=$_GET['data'];
	    else $select="*";
	    
        $return=$this->gallery_mdl->view_data($where,$select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }
    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id'])
        {
            
            $this->db->where('auto_id', $_GET['id']);
            foreach ($this->db->get("gallery")->result() as $row)
            {
                $image_delete_path1="./assets/uploads/gallery/$row->image";
                $image_delete_path2="./assets/uploads/gallery/thumb/$row->image";
            }
            if(file_exists($image_delete_path1)) unlink($image_delete_path1);
            if(file_exists($image_delete_path2)) unlink($image_delete_path2);
            $where['auto_id']=$_GET['id'];
            echo $this->gallery_mdl->delete_data($where);
        }else echo "Not Deleted";
    }
    function update_status()
    {
        if (isset($_GET['id']) && $_GET['id'] && isset($_GET['status']))
        {
            $where['auto_id'] = $_GET['id'];
            $data['status'] = $_GET['status'];
            echo $this->gallery_mdl->update_data($where,$data);
        }else echo "invalid Request";
    }
    function update_album_names($where,$name)
    {
        $data['album_name']=$name;
        return $this->gallery_mdl->update_data($where,$data);
    }
}
