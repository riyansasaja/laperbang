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
        $data['perkara_harian'] = $this->m_banding->countLapHarianHakim();
        $data['regis_harian'] = $this->m_banding->countRegis();

        $this->load->view('hakim/header', $data);
        $this->load->view('hakim/index');
        $this->load->view('hakim/footer', $data);
    }

    public function getData()
    {
        // $this->load->model('m_banding');
        $data = $this->m_banding->countBanding();
        $cek = json_encode($data);
        var_dump($cek);
        die;
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
        $data['js'] = 'view_berkas_banding.js';
        $data['css'] = 'dashboard_hakim.css';

        $data['detail_berkas'] = $this->db->get_where('v_all_perkara', ['id_perkara' => $id])->result_object();


        $this->load->view('hakim/header', $data);
        $this->load->view('hakim/view_berkas_banding', $data);
        $this->load->view('hakim/footer', $data);
    }

    public function get_data_banding()
    {
        $data = $this->db->get('v_berkas_hakim')->result();
        $result =  [
            'response' => 'success',
            'code' => 600,
            'data' => $data

        ];
        echo json_encode($result);
    }

    public function get_catatan()
    {

        $id = $this->input->post('id_perkara');
        $nm_berkas = $this->input->post('nm_berkas');



        $data = $this->db->get_where('v_c_hakim', ['id_perkara' => $id, 'nm_berkas' => $nm_berkas])->result();
        echo json_encode($data);
    }

    public function set_catatan()
    {

        $pengedit = $this->session->userdata('nama');

        $data = [
            'id_catatan' => '',
            'id_perkara' => $this->input->post('id_perkara'),
            'id_user' => $this->session->userdata('id'),
            'nm_berkas' => $this->input->post('nm_berkas'),
            'catatan' => $this->input->post('catatan'),
            'time' => date('d-m-Y H:i:s')
        ];

        $res = $this->db->insert('catatan_hakim_baru', $data);

        $audittrail = array(
            'log_id' => '',
            'isi_log' => "User <b>" . $pengedit . "</b> telah memberikan catatan",
            'nama_log' => $pengedit
        );

        $this->db->set('rekam_log', 'NOW()', FALSE);
        $this->db->insert('log_audittrail', $audittrail);

        echo json_encode($res);
    }
}
