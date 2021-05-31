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

<<<<<<< HEAD
    public function tambah_perkara(){
    
    }
        
=======
    public function uploadbundle()
    {
        $this->load->view('templates/sbadmin/header');
        $this->load->view('templates/sbadmin/topbar');
        $this->load->view('templates/sbadmin/sidebar');
        $this->load->view('banding/uploadbundle');
        $this->load->view('templates/sbadmin/footer');
>>>>>>> 1f20d3c7cefd8235876c0ba57d77349eeb241e1f
    }
}
