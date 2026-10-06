<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeShifting()
    {
        $data['title'] = "Best Home Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting services from " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Professional Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office shifting services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        $data['title'] = "Reliable Bike Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike shifting services from " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    {
        $data['title'] = "Safe Car Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and transportation services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function packingMoving()
    {
        $data['title'] = "Packing and Moving Services | " . $this->comp['company3'];
        $data['description'] = "Secure packing and moving services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Loading Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Safe and professional loading and unloading services by " . $this->comp['company3'] . ".";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }
}
