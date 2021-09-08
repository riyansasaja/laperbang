<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cobadropzone extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->load->view('cobadropzone/index');
    }

    public function upload($tes)
    {
        if (!empty($_FILES['file']['name'])) {

            // Set preference
            $config['upload_path'] = "uploads/$tes";
            $config['allowed_types'] = 'pdf|rtf';
            $config['overwrite'] = true;
            // $config['file_name'] = $_FILES['file']['name'];


            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                # code...
                $data = array('error' => $this->upload->display_errors());
                $this->load->view('cobadropzone/hasil', $data);
            } else {
                $data = array('upload_data' => $this->upload->data());
                $this->load->view('cobadropzone/hasil', $data);
            }
        }
    }
}
