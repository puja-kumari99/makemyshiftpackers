<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Contacts extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function index()
    {
        $data['title'] = "Contact Us | " . $this->comp['company3'];
        $data['description'] = "Get in touch with " . $this->comp['company3'] . " for all your relocation and transportation needs. Call us at " . $this->comp['phone'] . ".";
        $data['module'] = "contacts";
        $data['view_file'] = "contacts";
        echo Modules::run('template/layout2', $data);
    }


    function booking()
    {
        if (empty($this->input->post('name'))) {
            $_POST['name'] = 'Quick Quote Inquiry';
        }
        if ($this->input->post('phone')) {
            $raw_phone = preg_replace('/[^0-9]/', '', (string)$this->input->post('phone'));
            if (strlen($raw_phone) > 10) {
                if (substr($raw_phone, 0, 2) === '91' && strlen($raw_phone) === 12) {
                    $raw_phone = substr($raw_phone, 2);
                } elseif (substr($raw_phone, 0, 1) === '0' && strlen($raw_phone) === 11) {
                    $raw_phone = substr($raw_phone, 1);
                } else {
                    $raw_phone = substr($raw_phone, -10);
                }
            }
            $_POST['phone'] = $raw_phone;
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        $this->form_validation->set_rules('email', 'Email', 'trim');
        $this->form_validation->set_rules('message', 'Message', 'trim');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->bookings();
            if ($check == true) {
                echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }

    function contact()
    {
        if (empty($this->input->post('name'))) {
            $_POST['name'] = 'Contact Inquiry';
        }
        if ($this->input->post('phone')) {
            $raw_phone = preg_replace('/[^0-9]/', '', (string)$this->input->post('phone'));
            if (strlen($raw_phone) > 10) {
                if (substr($raw_phone, 0, 2) === '91' && strlen($raw_phone) === 12) {
                    $raw_phone = substr($raw_phone, 2);
                } elseif (substr($raw_phone, 0, 1) === '0' && strlen($raw_phone) === 11) {
                    $raw_phone = substr($raw_phone, 1);
                } else {
                    $raw_phone = substr($raw_phone, -10);
                }
            }
            $_POST['phone'] = $raw_phone;
        }
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim');
        $this->form_validation->set_rules('phone', 'Mobile', 'required|trim|numeric|exact_length[10]');
        $this->form_validation->set_rules('email', 'Email', 'trim');
        $this->form_validation->set_rules('message', 'Message', 'trim');
        if ($this->form_validation->run() == true) {
            $this->load->model('contacts_mdl');
            $check = $this->contacts_mdl->contact();
            if ($check == true) {
                echo "1";
            }
        } else {
            echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
        }
    }

}