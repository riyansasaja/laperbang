<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banding extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('m_banding');
    }
    public function index()
    {
        $data['perkara'] = $this->db->get('kategori_perkara')->result_array();
        $data['perkara_banding'] = $this->m_banding->get_list_perkara();
        $this->load->view('templates/sbadmin/header');
        $this->load->view('templates/sbadmin/topbar');
        $this->load->view('templates/sbadmin/sidebar');
        $this->load->view('banding/index', $data);
        $this->load->view('templates/sbadmin/footer');
    }


    public function tambah_perkara()
    {
        $data = [
            'id_perkara' => '',
            'id_user' => $this->session->userdata('id'),
            'no_perkara' => $this->input->post('no_perkara', true),
            'nm_pihak' => $this->input->post('nm_pihak', true),
            'jns_perkara' => $this->input->post('jns_perkara', true),
            'tgl_register' => $this->input->post('tgl_register', true),
            'status_perkara' => '',
            'sp_perkara' => $this->_uploadFile('SuratPengantar'),
            'no_perkara_banding' => ''
        ];
        $this->db->insert('list_perkara', $data);
        $this->session->set_flashdata('message', 'Upload data berhasil');
        redirect('banding/');
    }

    private function _uploadFile($path)
    {
        $config['upload_path']          = './assets/files/' . $path;
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 5000;


        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file_upload')) {
            return $this->upload->data("file_name");
        } else {
            $this->session->set_flashdata('msg', 'Upload data gagal');
            redirect('banding/');
        }
    }

    public function uploadbundle_a()
    {
        $data = [
            'id_perkara' => $this->input->post('id_perkara'),
            'surat_gugatan' => $this->_uploadFile('bundle_a'),
            'sk_bundelA' => $this->_uploadFile('bundle_a'),
            'bukti_pemb_panjar' => $this->_uploadFile('bundle_a'),
            'majelis_hakim' => $this->_uploadFile('bundle_a'),
            'penunjukan_pp' => $this->_uploadFile('bundle_a'),
            'penunjukan_js' => $this->_uploadFile('bundle_a'),
            'penetapan_hari_sidang' => $this->_uploadFile('bundle_a'),
            'relaas_panggilan' => $this->_uploadFile('bundle_a'),
            'ba_sidang' => $this->_uploadFile('bundle_a'),
            'penetapan_sita' => $this->_uploadFile('bundle_a'),
            'ba_sita' => $this->_uploadFile('bundle_a'),
            'lampiran_surat' => $this->_uploadFile('bundle_a'),
            'surat_bukti_penggugat' => $this->_uploadFile('bundle_a'),
            'surat_bukti_tergugat' => $this->_uploadFile('bundle_a'),
            'tanggapan_bukti_tergugat' => $this->_uploadFile('bundle_a'),
            'tanggapan_bukti_penggugat' => $this->_uploadFile('bundle_a'),
            'gambar_situasi' => $this->_uploadFile('bundle_a'),
            'surat_lain' => $this->_uploadFile('bundle_a'),
        ];
        $chek = $this->db->insert('bundel_a', $data);
        $this->session->set_flashdata('message', 'Upload data berhasil');
        // redirect('banding/uploadbundle');
        var_dump($chek);
        die;
    }



    public function uploadbundle($id)
    {
        $data['perkara'] = $this->db->get_where('list_perkara', ['id_perkara' => $id])->result_array();
        $this->load->view('templates/sbadmin/header');
        $this->load->view('templates/sbadmin/topbar');
        $this->load->view('templates/sbadmin/sidebar');
        $this->load->view('banding/uploadbundle', $data);
        $this->load->view('templates/sbadmin/footer');
    }
}
