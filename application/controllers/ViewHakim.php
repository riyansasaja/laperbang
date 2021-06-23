<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ViewHakim extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/sbadmin/header');
        $this->load->view('hakim/topbar');
        $this->load->view('hakim/index');
        $this->load->view('templates/sbadmin/footer');
    }
}
