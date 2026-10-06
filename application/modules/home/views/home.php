<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Load the Services grid widget
$this->load->view('service_widget');

// Load the About Us widget
$this->load->view('about_widget');

// Load the Why Choose Us widget
$this->load->view('why_choose_widget');

// Load the Moving Process widget
$this->load->view('process_widget');

//load the rate chart
$this->load->view('rate_widget');

// Load the Reviews widget
$this->load->view('review_widget');
// $this->load->view('city_list');

// load the news widegt 
$this->load->view('news_widget');

//recognization 
$this->load->view('recognization_widget');

// Load the FAQs widget
$this->load->view('faqs_widget');

?>
