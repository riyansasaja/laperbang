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

    public function view_berkas_banding($id)
    {
        $data['judul'] = 'Banding';
        $data['js'] = 'view_hakim_banding.js';
        $data['css'] = 'dashboard_hakim.css';

        $data['detail_berkas'] = $this->db->get_where('v_all_perkara', ['id_perkara' => $id])->result_object();

        $this->load->view('hakim/header', $data);
        $this->load->view('hakim/view_berkas_banding', $data);
        $this->load->view('hakim/footer', $data);
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
}
