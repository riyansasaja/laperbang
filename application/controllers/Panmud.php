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
        $data['perkara'] = $this->db->get('v_user_pp')->result_array();
        $data['perkara_banding'] = $this->m_banding->get_data_perkara();

        $this->load->view('panmud/header', $data);
        $this->load->view('panmud/view_panmud', $data);
        $this->load->view('panmud/footer', $data);
    }

    public function get_data_banding()
    {
        $data = $this->m_banding->DataBanding();

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

    public function updatenoper()
    {

        $pengedit = $this->session->userdata('nama');

        $no_perkara_banding = $this->input->post('nomor_perkara_banding');
        $tahun_perkara_banding = $this->input->post('tahun_perkara_banding');
        $nomor_perkara_fix = $no_perkara_banding . '/' . 'Pdt.G/' . $tahun_perkara_banding . '/PTA.Mdo';
        $id_perkara = $this->input->post('id_perkara');
        $tgl_reg_banding = $this->input->post('tgl_reg_banding');
        $data = [
            'id_perkara' => $id_perkara,
            'tgl_reg_banding' => $tgl_reg_banding,
            'no_perkara_banding' => $nomor_perkara_fix
        ];

        $this->db->where('id_perkara', $id_perkara);
        $data =  $this->db->update('list_perkara', $data);

        $audittrail = array(
            'log_id' => '',
            'isi_log' => "User <b>" . $pengedit . "</b> telah input nomor perkara banding pada id perkara <b>" . $id_perkara . "</b>",
            'nama_log' => $pengedit
        );

        $this->db->set('rekam_log', 'NOW()', FALSE);
        $this->db->insert('log_audittrail', $audittrail);

        json_encode($data);
    }

    public function updateStatus()
    {

        $pengedit = $this->session->userdata('nama');

        $status_perkara = $this->input->post('status_perkara');
        $id_perkara = $this->input->post('id_perkara');

        $data = [
            'id_perkara' => $id_perkara,
            'status_perkara' => $status_perkara
        ];

        $this->db->where('id_perkara', $id_perkara);
        $array = $this->db->update('list_perkara', $data);

        $audittrail = array(
            'log_id' => '',
            'isi_log' => "User <b>" . $pengedit . "</b> telah input status perkara banding pada id perkara <b>" . $id_perkara . "</b>",
            'nama_log' => $pengedit
        );

        $this->db->set('rekam_log', 'NOW()', FALSE);
        $this->db->insert('log_audittrail', $audittrail);

        json_encode($array);
    }

    public function uploadPutusan()
    {

        $pengedit = $this->session->userdata('nama');

        $config['upload_path']          = './assets/files/putusan';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (($_FILES['file_putusan']['name'] != null)) {
            if ($this->upload->do_upload('file_putusan')) {
                $putusan_banding = $this->upload->data("file_name");
                $id_perkara = $this->input->post('id_perkara');
                $data = [
                    'id_perkara' => $id_perkara,
                    'putusan_banding' => $putusan_banding
                ];
                $this->db->where('id_perkara', $id_perkara);
                $this->db->update('list_perkara', $data);

                $this->session->set_flashdata('flash', 'Upload berhasil');

                $audittrail = array(
                    'log_id' => '',
                    'isi_log' => "User <b>" . $pengedit . "</b> telah upload putusan perkara banding pada id perkara <b>" . $id_perkara . "</b>",
                    'nama_log' => $pengedit
                );

                $this->db->set('rekam_log', 'NOW()', FALSE);
                $this->db->insert('log_audittrail', $audittrail);

                redirect('Panmud');
                // $this->db->set('putusan_banding', $putusan_banding);
            } else {
                $this->session->set_flashdata('msg', 'Upload file gagal, ekstensi file harus pdf dan ukuran tidak boleh lebih dari 5 mb');
                // redirect('banding/');
            }
        } else {
            $this->session->set_flashdata('msg', 'Tidak ada file yang di upload');
            // redirect('banding/');
        }
    }

    public function uploadPenunjukkan_PP()
    {

        $pengedit = $this->session->userdata('nama');


        $config['upload_path']          = './assets/files';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (($_FILES['file_putusan']['name'] != null)) {
            if ($this->upload->do_upload('file_putusan')) {
                $nama_file = $this->upload->data("file_name");
                $id_perkara = $this->input->post('id_perkara');
                $id_user = $this->input->post('id_user');
                $data = [
                    'id_perkara' => $id_perkara,
                    'id_user' => $id_user,
                    'nama_file' => $nama_file,

                ];
                $where = array('id_perkara' => $id_perkara);

                $this->db->insert('penunjukan_pp', $data, $where);

                $this->session->set_flashdata('flash', 'Upload berhasil');

                $audittrail = array(
                    'log_id' => '',
                    'isi_log' => "User <b>" . $pengedit . "</b> telah upload putusan perkara banding pada id perkara <b>" . $id_perkara . "</b>",
                    'nama_log' => $pengedit
                );

                $this->db->set('rekam_log', 'NOW()', FALSE);
                $this->db->insert('log_audittrail', $audittrail);

                redirect('Panmud');
                // $this->db->set('putusan_banding', $putusan_banding);
            } else {
                $this->session->set_flashdata('msg', 'Upload file gagal, ekstensi file harus pdf dan ukuran tidak boleh lebih dari 5 mb');
                // redirect('banding/');
            }
        } else {
            $this->session->set_flashdata('msg', 'Tidak ada file yang di upload');
            // redirect('banding/');
        }
    }

    public function get_log_inbox()
    {

        $this->db->count_all_results('log_inbox');
        $data = $this->db->get_where('log_inbox', ['is_read' => 1])->result();
        $total = $this->db->count_all_results();
        $result =  [
            'response' => 'success',
            'code' => 600,
            'data' => $data,
            'total' => $total

        ];
        echo json_encode($result);
    }
    //--end

    //function saat klik log inbox
    public function click_log_inbox()
    {
        $id = $this->input->post('id');
        $update = [
            'is_read' => 2
        ];
        $this->db->where('id_log_inbox', $id);
        $data = $this->db->update('log_inbox', $update);
        echo json_encode($data);
    }
    //--end
}
