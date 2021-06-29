<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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

        $this->load->view('templates/dasar/header');
        $this->load->view('dashboard/home');
        $this->load->view('templates/dasar/footer');
    }
}
