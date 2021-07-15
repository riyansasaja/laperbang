<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profiles extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            redirect('auth');
        }
    }


    public function index()
    {
        $data['judul'] = 'Profiles';
        $data['css'] = 'profiles.css';
        $data['js'] = 'profiles.js';

        $this->load->view('profiles/header', $data);
        $this->load->view('profiles/index', $data);
        $this->load->view('profiles/footer', $data);
    }
}
