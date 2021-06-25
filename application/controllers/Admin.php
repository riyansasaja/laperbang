<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {

        //konten
        $data['judul'] = 'Dashboard';
        $data['css'] = 'dashboard_admin.css';
        $data['js'] = 'dashboard_admin.js';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer', $data);
    }

    public function inputNoper()
    {
        $data['judul'] = 'Input Nomor Perkara';
        $data['css'] = 'dashboard_admin.css';
        $data['js'] = 'inputnoper.js';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/inputnoper', $data);
        $this->load->view('admin/footer', $data);
    }


    public function inputStaper()
    {
        $data['judul'] = 'Input Status Perkara';
        $data['css'] = 'dashboard_admin.css';
        $data['js'] = 'inputstaper.js';

        $this->load->view('admin/header', $data);
        $this->load->view('admin/inputstaper', $data);
        $this->load->view('admin/footer', $data);
    }
}
