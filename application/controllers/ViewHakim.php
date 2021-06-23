<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ViewHakim extends CI_Controller
{
    public function index()
    {
        //konten
        $data['judul'] = 'Dashboard';
        $data['js'] = 'dashboard_hakim.js';
        $data['css'] = 'dashboard_hakim.css';

        $this->load->view('hakim/header', $data);
        $this->load->view('hakim/index');
        $this->load->view('hakim/footer', $data);
    }


    public function banding()
    {
        //konten
        $data['judul'] = 'Banding';
        $data['js'] = 'view_hakim_banding.js';
        $data['css'] = 'dashboard_hakim.css';

        $this->load->view('hakim/header', $data);
        $this->load->view('hakim/banding');
        $this->load->view('hakim/footer', $data);
    }
}
