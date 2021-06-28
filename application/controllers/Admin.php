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

    public function view_berkas_admin($id)
    {
        //konten
        $data['judul'] = 'Input Nomor Perkara';
        $data['css'] = 'dashboard_admin.css';
        $data['js'] = 'view_berkas_admin.js';

        $data['detail_berkas'] = $this->db->get_where('v_all_perkara', ['id_perkara' => $id])->result_object();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/view_berkas_admin', $data);
        $this->load->view('admin/footer', $data);
    }

    public function users()
    {
        //konten
        $data['judul'] = 'Manajemen Users';
        $data['css'] = 'dashboard_admin.css';
        $data['js'] = 'manajemen_users.js';

        //get data users
        $data['users'] = $this->db->get('users')->result_object();


        $this->load->view('admin/header', $data);
        $this->load->view('admin/manajemen_users', $data);
        $this->load->view('admin/footer', $data);
    }

    public function get_data_user()
    {
        $id = $this->input->post('id');
        $data = $this->db->get_where('users', ['id' => $id])->result();

        echo json_encode($data);
    }


    public function updatenoper()
    {
        $no_perkara_banding = $this->input->post('nomor_perkara_banding');
        $tahun_perkara_banding = $this->input->post('tahun_perkara_banding');
        $nomor_perkara_fix = $no_perkara_banding . '/' . 'Pdt.G/' . $tahun_perkara_banding . '/PTA.Mdo';
        $id_perkara = $this->input->post('id_perkara');
        $data = [
            'id_perkara' => $id_perkara,
            'no_perkara_banding' => $nomor_perkara_fix
        ];

        $this->db->where('id_perkara', $id_perkara);
        $data =  $this->db->update('list_perkara', $data);
        json_encode($data);
    }
}
