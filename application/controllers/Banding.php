<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banding extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/sbadmin/header');
        $this->load->view('templates/sbadmin/topbar');
        $this->load->view('templates/sbadmin/sidebar');
        $this->load->view('banding/index');
        $this->load->view('templates/sbadmin/footer');
    }

    public function uploadbundle()
    {
        $this->load->view('templates/sbadmin/header');
        $this->load->view('templates/sbadmin/topbar');
        $this->load->view('templates/sbadmin/sidebar');
        $this->load->view('banding/uploadbundle');
        $this->load->view('templates/sbadmin/footer');
    }
    public function userProfile()
    {
        $this->load->view('templates/sbadmin/header');
        $this->load->view('templates/sbadmin/topbar');
        $this->load->view('templates/sbadmin/sidebar');
        $this->load->view('banding/userprofile');
        $this->load->view('templates/sbadmin/footer');
    }
}
