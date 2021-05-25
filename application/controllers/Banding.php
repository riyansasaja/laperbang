<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banding extends CI_Controller
{
    public function index()
    {
        $this->load->view('banding/index');
    }
}
