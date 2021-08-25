<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panmud extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //usir user yang ga punya session
        if (!$this->session->userdata('id')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['judul'] = 'Halaman Panmud';
        $data['css'] = 'dashboard_admin.css';
        $data['js'] = 'view_panmud.js';

        $this->load->view('panmud/header', $data);
        $this->load->view('panmud/view_panmud', $data);
        $this->load->view('panmud/footer', $data);
    }

    public function get_data_banding()
    {
        $data = $this->db->get('v_all_perkara')->result();
        $result =  [
            'response' => 'success',
            'code' => 600,
            'data' => $data

        ];
        echo json_encode($result);
    }

    public function view_berkas_admin($id)
    {
        //konten
        $data['judul'] = 'Halaman Panmud';
        $data['css'] = 'dashboard_admin.css';
        $data['js'] = 'view_berkas_admin.js';

        $data['detail_berkas'] = $this->db->get_where('v_all_perkara', ['id_perkara' => $id])->result_object();

        $this->load->view('panmud/header', $data);
        $this->load->view('panmud/view_berkas_admin', $data);
        $this->load->view('panmud/footer', $data);
    }
}
