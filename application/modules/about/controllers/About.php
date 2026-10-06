<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "About Us | " . $this->comp['company3'];
        $data['description'] = "Learn more about " . $this->comp['company3'] . ", our " . $this->comp['experience'] . " Years Legacy, infrastructure, expert team, mission, and vision in the packing and moving industry.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us | " . $this->comp['company3'];
        $data['description'] = "Discover why customers trust " . $this->comp['company3'] . " for safe, reliable, and transparently priced shifting, vehicle transport, and corporate relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function how_to_choose()
    {
        $data['title'] = "How to Choose a Verified Packers & Movers | " . $this->comp['company3'];
        $data['description'] = "Essential checklist and expert guide on how to choose verified, licensed, and reliable packers and movers in India. Avoid scams and ensure safe shifting.";
        $data['module'] = "about";
        $data['view_file'] = "how_to_choose";
        echo Modules::run('template/layout2', $data);
    }

    function beware_fraud()
    {
        $data['title'] = "Beware of Fraud Packers & Movers | Protection Guide | " . $this->comp['company3'];
        $data['description'] = "Learn how to identify fake moving companies, recognize moving fraud red flags, hidden charges scams, and protect your goods during relocation.";
        $data['module'] = "about";
        $data['view_file'] = "beware_fraud";
        echo Modules::run('template/layout2', $data);
    }

    function transit_insurance()
    {
        $data['title'] = "Transit Insurance for Relocation & Shifting | " . $this->comp['company3'];
        $data['description'] = "Complete guide to transit insurance for household shifting, vehicle transport, and commercial relocation. Learn coverage types, claims, and benefits.";
        $data['module'] = "about";
        $data['view_file'] = "transit_insurance";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Frequently Asked Questions (FAQs) | " . $this->comp['company3'];
        $data['description'] = "Get answers to common queries about packing and shifting charges, transit insurance, delivery timeline, tracking, and restricted items at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        $db_reviews = [];
        try {
            if (!isset($this->db)) {
                @$this->load->database();
            }
            if (isset($this->db) && is_object($this->db) && method_exists($this->db, 'table_exists') && @$this->db->table_exists('reviews')) {
                $this->db->where('status', 1);
                $this->db->order_by('r_id', 'desc');
                $this->db->limit(100);
                $query = $this->db->get('reviews');
                if ($query && is_object($query) && method_exists($query, 'num_rows') && $query->num_rows() > 0) {
                    $db_reviews = $query->result();
                }
            }
        } catch (Throwable $e) {
            $db_reviews = [];
        }
        $data['db_reviews'] = $db_reviews;

        $data['title'] = "Customer Reviews & Testimonials | " . $this->comp['company3'];
        $data['description'] = "Read genuine client testimonials and feedback about " . $this->comp['company3'] . " home shifting, vehicle transportation, and office relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function testimonial()
    {
        $this->testimonials();
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | " . $this->comp['company3'];
        $data['description'] = "How " . $this->comp['company3'] . " handles and protects your personal data during your relocation.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | " . $this->comp['company3'];
        $data['description'] = "The terms and conditions governing our relocation services at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }

    function payment()
    {
        $data['title'] = "Payment Options & Bank Details | " . $this->comp['company3'];
        $data['description'] = "Official bank account details and QR code payment options for " . $this->comp['company3'] . " relocation services.";
        $data['module'] = "about";
        $data['view_file'] = "payment";
        echo Modules::run('template/layout2', $data);
    }
}

