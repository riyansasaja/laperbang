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
        $config['upload_path']          = './assets/files/bundle_a';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        //untuk upload file 1 dan seterusnya.....
        if (($_FILES['file1']['name'])) {
            if ($this->upload->do_upload('file1')) {
                $sp_perkara = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Surat Pengantar gagal');
                redirect('banding/');
            }
        }

        $data = [
            'id_perkara' => '',
            'id_user' => $this->session->userdata('id'),
            'no_perkara' => $this->input->post('no_perkara', true),
            'nm_pihak' => $this->input->post('nm_pihak', true),
            'jns_perkara' => $this->input->post('jns_perkara', true),
            'tgl_register' => $this->input->post('tgl_register', true),
            'status_perkara' => '',
            'sp_perkara' => $sp_perkara,
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

    function multiple_upload()
    {
        $config['upload_path']          = './assets/files/bundle_a';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        //untuk upload file 1 dan seterusnya.....
        if (($_FILES['file1']['name'])) {
            if ($this->upload->do_upload('file1')) {
                $suratgugatan = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Surat Gugatan gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file2']['name'])) {
            if ($this->upload->do_upload('file2')) {
                $skbundlea = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Surat kuasa dari kedua belah pihak gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file3']['name'])) {
            if ($this->upload->do_upload('file3')) {
                $bukti_pemb_panjar = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Bukti Pembayaran Panjar gagal');
                // redirect('banding/');
            }
        }

        if (($_FILES['file4']['name'])) {
            if ($this->upload->do_upload('file4')) {
                $majelis_hakim = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Penetapan Majelis Hakim gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file5']['name'])) {
            if ($this->upload->do_upload('file5')) {
                $penunjukan_pp = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Penunjukan Panitera Pengganti gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file6']['name'])) {
            if ($this->upload->do_upload('file6')) {
                $penunjukan_js = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Penunjukan jurusita/Jurusita Pengganti gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file7']['name'])) {
            if ($this->upload->do_upload('file7')) {
                $penetapan_hari_sidang = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Penetapan hari sidang gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file8']['name'])) {
            if ($this->upload->do_upload('file8')) {
                $relaas_panggilan = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Relaas - relaan panggilan gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file9']['name'])) {
            if ($this->upload->do_upload('file9')) {
                $ba_sidang = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Berita acara sidang gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file10']['name'])) {
            if ($this->upload->do_upload('file10')) {
                $penetapan_sita = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Penetapan sita Conservatoir/Revindicatoir gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file11']['name'])) {
            if ($this->upload->do_upload('file11')) {
                $ba_sita = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Berita acara sita Conservatoir/Revindicatoir gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file12']['name'])) {
            if ($this->upload->do_upload('file12')) {
                $lampiran_surat = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Lampiran-lampiran surat yang diajukan oleh kedua belah pihak gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file13']['name'])) {
            if ($this->upload->do_upload('file13')) {
                $surat_bukti_penggugat = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Surat-surat bukti penggugat gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file14']['name'])) {
            if ($this->upload->do_upload('file14')) {
                $surat_bukti_tergugat = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Surat-surat bukti tergugat gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file15']['name'])) {
            if ($this->upload->do_upload('file15')) {
                $tanggapan_bukti_tergugat = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Tanggapan bukti-bukti tergugat dari penggugat gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file16']['name'])) {
            if ($this->upload->do_upload('file16')) {
                $tanggapan_bukti_penggugat = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Tanggapan bukti-bukti penggugat dari tergugat gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file17']['name'])) {
            if ($this->upload->do_upload('file17')) {
                $gambar_situasi = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Gambar situasi gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file18']['name'])) {
            if ($this->upload->do_upload('file18')) {
                $surat_lain = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Surat-surat lain gagal');
                redirect('banding/');
            }
        }

        // 

        $data = [
            'id_perkara' => $this->input->post('id_perkara'),
            'surat_gugatan' => $suratgugatan,
            'sk_bundelA' => $skbundlea,
            'bukti_pemb_panjar' => $bukti_pemb_panjar,
            'majelis_hakim' => $majelis_hakim,
            'penunjukan_pp' => $penunjukan_pp,
            'penunjukan_js' => $penunjukan_js,
            'penetapan_hari_sidang' => $penetapan_hari_sidang,
            'relaas_panggilan' => $relaas_panggilan,
            'ba_sidang' => $ba_sidang,
            'penetapan_sita' => $penetapan_sita,
            'ba_sita' => $ba_sita,
            'lampiran_surat' => $lampiran_surat,
            'surat_bukti_penggugat' => $surat_bukti_penggugat,
            'surat_bukti_tergugat' => $surat_bukti_tergugat,
            'tanggapan_bukti_tergugat' => $tanggapan_bukti_tergugat,
            'tanggapan_bukti_penggugat' => $tanggapan_bukti_penggugat,
            'gambar_situasi' => $gambar_situasi,
            'surat_lain' => $surat_lain,
        ];
        $this->db->insert('bundel_a', $data);
        $this->session->set_flashdata('message', 'Upload data berhasil');
        redirect('banding/');
    }

    function multiple_uploadB()
    {
        $config['upload_path']          = './assets/files/bundle_b';
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['max_size']             = 5000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        //untuk upload file 1 dan seterusnya.....
        if (($_FILES['file1']['name'])) {
            if ($this->upload->do_upload('file1')) {
                $salinan_putusan_pa = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Salinan putusan Pengandilan Agama atau Mahkamah gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file2']['name'])) {
            if ($this->upload->do_upload('file2')) {
                $skbundleb = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Surat kuasa dari kedua belah pihak gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file3']['name'])) {
            if ($this->upload->do_upload('file3')) {
                $akta_banding = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Akta banding gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file4']['name'])) {
            if ($this->upload->do_upload('file4')) {
                $akta_penerimaan_mb = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Akta penerimaan memori banding gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file5']['name'])) {
            if ($this->upload->do_upload('file5')) {
                $memori_banding = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Memori banding gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file6']['name'])) {
            if ($this->upload->do_upload('file6')) {
                $akta_pemberitahuan_banding = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Akta pemberitahuan banding gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file7']['name'])) {
            if ($this->upload->do_upload('file7')) {
                $pemberitahuan_penyerahan_mb = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Pemberitahuan penyerahan memori banding gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file8']['name'])) {
            if ($this->upload->do_upload('file8')) {
                $akta_penerimaankontra_mb = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Akta penerimaan kontra memori banding gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file9']['name'])) {
            if ($this->upload->do_upload('file9')) {
                $kontra_mb = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Kontra memori banding gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file10']['name'])) {
            if ($this->upload->do_upload('file10')) {
                $pemberitahuan_penyerahankontra_mb = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Pemberitahuan penyerahan kontra memori banding gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file11']['name'])) {
            if ($this->upload->do_upload('file11')) {
                $relaas_periksa_berkas_pb = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Relaas pemberitahuan untuk memeriksa (Inzage) berkas perkara banding gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file12']['name'])) {
            if ($this->upload->do_upload('file12')) {
                $sk_khusus = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Surat kuasa khusus gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file13']['name'])) {
            if ($this->upload->do_upload('file13')) {
                $bukti_pengiriman_bpb = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Bukti pengiriman biaya perkara banding gagal');
                redirect('banding/');
            }
        }

        if (($_FILES['file14']['name'])) {
            if ($this->upload->do_upload('file14')) {
                $bukti_setor_bp_kasnegara = $this->upload->data("file_name");
            } else {
                $this->session->set_flashdata('msg', 'Upload data Bukti setor biaya pendaftaran ke kas negara gagal');
                redirect('banding/');
            }
        }

        // 

        $data = [
            'id_perkara' => $this->input->post('id_perkara'),
            'salinan_putusan_pa' => $salinan_putusan_pa,
            'sk_bundelb' => $skbundleb,
            'akta_banding' => $akta_banding,
            'akta_penerimaan_mb' => $akta_penerimaan_mb,
            'memori_banding' => $memori_banding,
            'akta_pemberitahuan_banding' => $akta_pemberitahuan_banding,
            'pemberitahuan_penyerahan_mb' => $pemberitahuan_penyerahan_mb,
            'akta_penerimaankontra_mb' => $akta_penerimaankontra_mb,
            'kontra_mb' => $kontra_mb,
            'pemberitahuan_penyerahankontra_mb' => $pemberitahuan_penyerahankontra_mb,
            'relaas_periksa_berkas_pb' => $relaas_periksa_berkas_pb,
            'sk_khusus' => $sk_khusus,
            'bukt_pengiriman_bpb' => $bukti_pengiriman_bpb,
            'bukti_setor_bp_kasnegara' => $bukti_setor_bp_kasnegara,
        ];
        $this->db->insert('bundel_b', $data);
        $this->session->set_flashdata('message', 'Upload data berhasil');
        redirect('banding/');
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
    public function userProfile()
    {
        $this->load->view('templates/sbadmin/header');
        $this->load->view('templates/sbadmin/topbar');
        $this->load->view('templates/sbadmin/sidebar');
        $this->load->view('banding/userprofile');
        $this->load->view('templates/sbadmin/footer');
    }
}
