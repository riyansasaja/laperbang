<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banding extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('m_banding');
        $this->load->library('form_validation');

        //usir user yang ga punya session
        if (!$this->session->userdata('id') || $this->session->userdata('role_id') != 2) {
            redirect('auth');
        }
    }
    public function index()
    {
        $masuk = $this->m_banding->countLapHarian();
        $putus = $this->m_banding->countPerkaraPutus();
        //konten
        $data['js'] = 'indexbanding.js';
        $data['css'] = 'dashboard_banding.css';
        $data['judul'] = 'Dashboard Banding';
        //data in database
        $data['perkara'] = $this->db->get('kategori_perkara')->result_array();
        $data['perkara_banding'] = $this->m_banding->get_list_perkara();
        $data['data_harian'] = $masuk;
        $data['putus_harian'] = $putus;
        $data['sisa_harian'] = $masuk - $putus;

        $this->load->view('banding/header', $data);
        $this->load->view('banding/index', $data);
        $this->load->view('banding/footer', $data);
    }


    public function tambah_perkara()
    {
        //ambil inputan nomor perkara
        $nomor_perkara = $this->input->post('nomor_perkara', true);
        $kode_perkara = $this->input->post('kode_perkara', true);
        $tahun_perkara = $this->input->post('tahun_perkara', true);
        $kode_pa = $this->input->post('kode_pa');
        //ambil inputan nomor surat pengantar
        $kode_surat_pa = $this->input->post('kode_surat_pa');
        $nomor_surat_pengantar = $this->input->post('nomor_surat_pengantar');
        $bulan_surat_pengantar = $this->input->post('bulan_surat_pengantar');
        $tahun_surat_pengantar = $this->input->post('tahun_surat_pengantar');
        //ambil  nama user
        $pengedit = $this->session->userdata('nama');


        $no_perkara_input = $nomor_perkara . '/' . $kode_perkara . '/' . $tahun_perkara . '/' . $kode_pa;
        $no_surat_pengantar_input = $kode_surat_pa . '/' . $nomor_surat_pengantar . '/' . 'HK.05/' . $bulan_surat_pengantar . '/' . $tahun_surat_pengantar;
        $data = [
            'id_perkara' => '',
            'id_user' => $this->session->userdata('id'),
            'no_perkara' => $no_perkara_input,
            'nm_pihak_penggugat' => $this->input->post('nm_pihak_penggugat', true),
            'nm_pihak_tergugat' => $this->input->post('nm_pihak_tergugat', true),
            'jns_perkara' => $this->input->post('jns_perkara', true),
            'tgl_register' => $this->input->post('tgl_register', true),
            'no_surat_pengantar' => $no_surat_pengantar_input,
            'pejabat_berwenang' => $this->input->post('pejabat_berwenang', true),
            'nm_pejabat' => $this->input->post('nm_pejabat', true),
            'nip_pejabat' => $this->input->post('nip_pejabat', true),
            'banyaknya' => $this->input->post('banyaknya', true),
            'keterangan' => $this->input->post('keterangan', true),
        ];
        $this->db->insert('list_perkara', $data);
        // $perkara_id = $this->db->insert_id();
        // // var_dump($perkara_id);
        // // die;
        // $pp = [
        //     'id_perkara' => $perkara_id,
        // ];
        // $this->db->insert('penunjukan_pp', $pp);
        $this->session->set_flashdata('flash', 'berhasil disimpan');

        $audittrail = array(
            'log_id' => '',
            'isi_log' => "User <b>" . $pengedit . "</b> telah menambah data perkara",
            'nama_log' => $pengedit
        );

        $this->db->set('rekam_log', 'NOW()', FALSE);
        $this->db->insert('log_audittrail', $audittrail);

        redirect('banding/');
    }

    public function edit_perkara()
    {
        //ambil inputan nomor perkara
        $nomor_perkara = $this->input->post('nomor_perkara', true);
        $kode_perkara = $this->input->post('kode_perkara', true);
        $tahun_perkara = $this->input->post('tahun_perkara', true);
        $kode_pa = $this->input->post('kode_pa');
        //ambil inputan nomor surat pengantar
        $kode_surat_pa = $this->input->post('kode_surat_pa');
        $nomor_surat_pengantar = $this->input->post('nomor_surat_pengantar');
        $bulan_surat_pengantar = $this->input->post('bulan_surat_pengantar');
        $tahun_surat_pengantar = $this->input->post('tahun_surat_pengantar');
        //ambil nama user
        $pengedit = $this->session->userdata('nama');


        $no_perkara_input = $nomor_perkara . '/' . $kode_perkara . '/' . $tahun_perkara . '/' . $kode_pa;
        $no_surat_pengantar_input = $kode_surat_pa . '/' . $nomor_surat_pengantar . '/' . 'HK.05/' . $bulan_surat_pengantar . '/' . $tahun_surat_pengantar;

        $id_perkara = $this->input->post('id_perkara');
        $nm_pihak_penggugat = $this->input->post('nm_pihak_penggugat');
        $nm_pihak_tergugat = $this->input->post('nm_pihak_tergugat');
        $jns_perkara = $this->input->post('jns_perkara');
        $no_surat_pengantar = $this->input->post('no_surat_pengantar');
        $pejabat_berwenang = $this->input->post('pejabat_berwenang');
        $nm_pejabat = $this->input->post('nm_pejabat');
        $nip_pejabat = $this->input->post('nip_pejabat');
        $banyaknya = $this->input->post('banyaknya');
        $keterangan = $this->input->post('keterangan');

        // $this->db->set('no_perkara', $no_perkara);
        // $this->db->set('nm_pihak', $nm_pihak);
        // $this->db->set('jns_perkara', $jns_perkara);
        // $this->db->where('id_perkara', $id_perkara);
        // $this->db->update('list_perkara');

        // $this->session->set_flashdata('flash', 'berhasil diubah');
        // redirect('banding/');

        $data = [
            'id_perkara' => $id_perkara,
            'no_perkara' => $no_perkara_input,
            'nm_pihak_penggugat' => $nm_pihak_penggugat,
            'nm_pihak_tergugat' => $nm_pihak_tergugat,
            'jns_perkara' => $jns_perkara,
            'no_surat_pengantar' => $no_surat_pengantar_input,
            'pejabat_berwenang' => $pejabat_berwenang,
            'nm_pejabat' => $nm_pejabat,
            'nip_pejabat' => $nip_pejabat,
            'banyaknya' => $banyaknya,
            'keterangan' => $keterangan,
        ];
        $where = array('id_perkara' => $id_perkara);
        $this->m_banding->UpdatePerkara('list_perkara', $data, $where);
        $this->session->set_flashdata('flash', 'Berhasil di update');

        $audittrail = array(
            'log_id' => '',
            'isi_log' => "User <b>" . $pengedit . "</b> telah update data perkara",
            'nama_log' => $pengedit
        );

        $this->db->set('rekam_log', 'NOW()', FALSE);
        $this->db->insert('log_audittrail', $audittrail);

        redirect('banding/');
    }

    // private function _uploadFile($path)
    // {
    //     $config['upload_path']          = './assets/files/' . $path;
    //     $config['allowed_types']        = 'doc|docx|pdf';
    //     $config['max_size']             = 5000;


    //     $this->load->library('upload', $config);
    //     $this->upload->initialize($config);
    //     if ($this->upload->do_upload('file_upload')) {
    //         return $this->upload->data("file_name");
    //     } else {
    //         $this->session->set_flashdata('msg', 'Upload data gagal');
    //         redirect('banding/');
    //     }
    // }

    function pengantar_upload()
    {
        //ambil nama user
        $pengedit = $this->session->userdata('nama');
        // $kode_pa = $this->session->userdata('kode_pa');
        // $tanggal = date("Ymd");
        // $nama_file = $tanggal . '_' . $kode_pa . '_';

        $config['upload_path']          = './assets/files/SuratPengantar';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 5024;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (($_FILES['file1']['name'] != null)) {
            if ($this->upload->do_upload('file1')) {
                $sp_perkara = $this->upload->data("file_name");
                $this->db->set('sp_perkara', $sp_perkara);
            } else {
                $this->session->set_flashdata('msg', 'Upload file gagal, ekstensi file harus pdf dan ukuran tidak boleh lebih dari 5 mb');
                redirect('banding/');
            }
        } else {
            $this->session->set_flashdata('msg', 'Tidak ada file yang di upload');
            redirect('banding/');
        }

        $id_perkara = $this->input->post('id_perkara');
        $this->db->where('id_perkara', $id_perkara);
        $this->db->update('list_perkara');

        $this->session->set_flashdata('flash', 'berhasil upload surat pengantar');

        $audittrail = array(
            'log_id' => '',
            'isi_log' => "User <b>" . $pengedit . "</b> telah upload surat pengantar pada id perkara <b>" . $id_perkara . "</b>",
            'nama_log' => $pengedit
        );

        $this->db->set('rekam_log', 'NOW()', FALSE);
        $this->db->insert('log_audittrail', $audittrail);

        redirect('banding/');
    }

    function multiple_upload()
    {

        $pengedit = $this->session->userdata('nama');

        $config['upload_path']          = './assets/files/bundle_a';
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 80000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        //untuk upload file 1 dan seterusnya.....

        if (($_FILES['file1']['name']) == null && ($_FILES['file2']['name']) == null && ($_FILES['file3']['name']) == null
            && ($_FILES['file4']['name']) == null && ($_FILES['file5']['name']) == null && ($_FILES['file6']['name']) == null && ($_FILES['file7']['name']) == null
            && ($_FILES['file8']['name']) == null && ($_FILES['file9']['name']) == null && ($_FILES['file10']['name']) == null && ($_FILES['file11']['name']) == null
            && ($_FILES['file12']['name']) == null && ($_FILES['file13']['name']) == null && ($_FILES['file14']['name']) == null && ($_FILES['file15']['name']) == null
            && ($_FILES['file16']['name']) == null && ($_FILES['file17']['name']) == null && ($_FILES['file18']['name']) == null
        ) {
            $this->session->set_flashdata('msg', 'Tidak ada file yang di upload');
            redirect('banding/');
        } else {
            if (($_FILES['file1']['name'])) {
                if ($this->upload->do_upload('file1')) {
                    $suratgugatan = $this->upload->data("file_name");
                    $this->db->set('surat_gugatan', $suratgugatan);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Surat Gugatan gagal');
                    redirect('banding/');
                    // $error = array('error' => $this->upload->display_errors());
                    // $this->load->view('banding/uploadbundle', $error);
                }
            }

            if (($_FILES['file2']['name'])) {
                if ($this->upload->do_upload('file2')) {
                    $skbundlea = $this->upload->data("file_name");
                    $this->db->set('sk_bundelA', $skbundlea);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Surat kuasa dari kedua belah pihak gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file3']['name'])) {
                if ($this->upload->do_upload('file3')) {
                    $bukti_pemb_panjar = $this->upload->data("file_name");
                    $this->db->set('bukti_pemb_panjar', $bukti_pemb_panjar);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Bukti Pembayaran Panjar gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file4']['name'])) {
                if ($this->upload->do_upload('file4')) {
                    $majelis_hakim = $this->upload->data("file_name");
                    $this->db->set('majelis_hakim', $majelis_hakim);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Penetapan Majelis Hakim gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file5']['name'])) {
                if ($this->upload->do_upload('file5')) {
                    $penunjukan_pp = $this->upload->data("file_name");
                    $this->db->set('penunjukan_pp', $penunjukan_pp);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Penunjukan Panitera Pengganti gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file6']['name'])) {
                if ($this->upload->do_upload('file6')) {
                    $penunjukan_js = $this->upload->data("file_name");
                    $this->db->set('penunjukan_js', $penunjukan_js);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Penunjukan jurusita/Jurusita Pengganti gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file7']['name'])) {
                if ($this->upload->do_upload('file7')) {
                    $penetapan_hari_sidang = $this->upload->data("file_name");
                    $this->db->set('penetapan_hari_sidang', $penetapan_hari_sidang);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Penetapan hari sidang gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file8']['name'])) {
                if ($this->upload->do_upload('file8')) {
                    $relaas_panggilan = $this->upload->data("file_name");
                    $this->db->set('relaas_panggilan', $relaas_panggilan);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Relaas - relaan panggilan gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file9']['name'])) {
                if ($this->upload->do_upload('file9')) {
                    $ba_sidang = $this->upload->data("file_name");
                    $this->db->set('ba_sidang', $ba_sidang);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Berita acara sidang gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file10']['name'])) {
                if ($this->upload->do_upload('file10')) {
                    $penetapan_sita = $this->upload->data("file_name");
                    $this->db->set('penetapan_sita', $penetapan_sita);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Penetapan sita Conservatoir/Revindicatoir gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file11']['name'])) {
                if ($this->upload->do_upload('file11')) {
                    $ba_sita = $this->upload->data("file_name");
                    $this->db->set('ba_sita', $ba_sita);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Berita acara sita Conservatoir/Revindicatoir gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file12']['name'])) {
                if ($this->upload->do_upload('file12')) {
                    $lampiran_surat = $this->upload->data("file_name");
                    $this->db->set('lampiran_surat', $lampiran_surat);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Lampiran-lampiran surat yang diajukan oleh kedua belah pihak gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file13']['name'])) {
                if ($this->upload->do_upload('file13')) {
                    $surat_bukti_penggugat = $this->upload->data("file_name");
                    $this->db->set('surat_bukti_penggugat', $surat_bukti_penggugat);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Surat-surat bukti penggugat gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file14']['name'])) {
                if ($this->upload->do_upload('file14')) {
                    $surat_bukti_tergugat = $this->upload->data("file_name");
                    $this->db->set('surat_bukti_tergugat', $surat_bukti_tergugat);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Surat-surat bukti tergugat gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file15']['name'])) {
                if ($this->upload->do_upload('file15')) {
                    $tanggapan_bukti_tergugat = $this->upload->data("file_name");
                    $this->db->set('tanggapan_bukti_tergugat', $tanggapan_bukti_tergugat);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Tanggapan bukti-bukti tergugat dari penggugat gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file16']['name'])) {
                if ($this->upload->do_upload('file16')) {
                    $tanggapan_bukti_penggugat = $this->upload->data("file_name");
                    $this->db->set('tanggapan_bukti_penggugat', $tanggapan_bukti_penggugat);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Tanggapan bukti-bukti penggugat dari tergugat gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file17']['name'])) {
                if ($this->upload->do_upload('file17')) {
                    $gambar_situasi = $this->upload->data("file_name");
                    $this->db->set('gambar_situasi', $gambar_situasi);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Gambar situasi gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file18']['name'])) {
                if ($this->upload->do_upload('file18')) {
                    $surat_lain = $this->upload->data("file_name");
                    $this->db->set('surat_lain', $surat_lain);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Surat-surat lain gagal');
                    redirect('banding/');
                }
            }
        }


        $id_perkara = $this->input->post('id_perkara');
        $this->db->where('id_perkara', $id_perkara);
        $this->db->update('list_perkara');
        $this->session->set_flashdata('flash', 'berhasil upload bundel A');

        $audittrail = array(
            'log_id' => '',
            'isi_log' => "User <b>" . $pengedit . "</b> telah upload berkas bundel A pada id perkara <b>" . $id_perkara . "</b>",
            'nama_log' => $pengedit
        );

        $this->db->set('rekam_log', 'NOW()', FALSE);
        $this->db->insert('log_audittrail', $audittrail);

        redirect('banding/');
    }

    function multiple_uploadB()
    {

        $pengedit = $this->session->userdata('nama');

        $config['upload_path']          = './assets/files/bundle_b';
        $config['allowed_types']        = 'pdf|rtf';
        $config['max_size']             = 80024;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        //untuk upload file 1 dan seterusnya.....

        if (($_FILES['file1']['name']) == null && ($_FILES['file2']['name']) == null && ($_FILES['file3']['name']) == null && ($_FILES['file4']['name']) == null
            && ($_FILES['file5']['name']) == null && ($_FILES['file6']['name']) == null && ($_FILES['file7']['name']) == null && ($_FILES['file8']['name']) == null
            && ($_FILES['file9']['name']) == null && ($_FILES['file10']['name']) == null && ($_FILES['file11']['name']) == null && ($_FILES['file12']['name']) == null
            && ($_FILES['file13']['name']) == null && ($_FILES['file14']['name']) == null && ($_FILES['file15']['name']) == null && ($_FILES['file16']['name']) == null
            && ($_FILES['file17']['name']) == null && ($_FILES['file18']['name']) == null
        ) {
            $this->session->set_flashdata('msg', 'Tidak ada file yang di upload');
            redirect('banding/');
        } else {
            if (($_FILES['file1']['name'])) {
                if ($this->upload->do_upload('file1')) {
                    $salinan_putusan_pa = $this->upload->data("file_name");
                    $this->db->set('salinan_putusan_pa', $salinan_putusan_pa);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Surat kuasa dari kedua belah pihak gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file2']['name'])) {
                if ($this->upload->do_upload('file2')) {
                    $skbundleb = $this->upload->data("file_name");
                    $this->db->set('sk_bundelb', $skbundleb);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Surat kuasa dari kedua belah pihak gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file3']['name'])) {
                if ($this->upload->do_upload('file3')) {
                    $akta_banding = $this->upload->data("file_name");
                    $this->db->set('akta_banding', $akta_banding);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Akta banding gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file4']['name'])) {
                if ($this->upload->do_upload('file4')) {
                    $akta_penerimaan_mb = $this->upload->data("file_name");
                    $this->db->set('akta_penerimaan_mb', $akta_penerimaan_mb);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Akta penerimaan memori banding gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file5']['name'])) {
                if ($this->upload->do_upload('file5')) {
                    $memori_banding = $this->upload->data("file_name");
                    $this->db->set('memori_banding', $memori_banding);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Memori banding gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file6']['name'])) {
                if ($this->upload->do_upload('file6')) {
                    $akta_pemberitahuan_banding = $this->upload->data("file_name");
                    $this->db->set('akta_pemberitahuan_banding', $akta_pemberitahuan_banding);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Akta pemberitahuan banding gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file7']['name'])) {
                if ($this->upload->do_upload('file7')) {
                    $pemberitahuan_penyerahan_mb = $this->upload->data("file_name");
                    $this->db->set('pemberitahuan_penyerahan_mb', $pemberitahuan_penyerahan_mb);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Pemberitahuan penyerahan memori banding gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file8']['name'])) {
                if ($this->upload->do_upload('file8')) {
                    $akta_penerimaankontra_mb = $this->upload->data("file_name");
                    $this->db->set('akta_penerimaankontra_mb', $akta_penerimaankontra_mb);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Akta penerimaan kontra memori banding gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file9']['name'])) {
                if ($this->upload->do_upload('file9')) {
                    $kontra_mb = $this->upload->data("file_name");
                    $this->db->set('kontra_mb', $kontra_mb);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Kontra memori banding gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file10']['name'])) {
                if ($this->upload->do_upload('file10')) {
                    $pemberitahuan_penyerahankontra_mb = $this->upload->data("file_name");
                    $this->db->set('pemberitahuan_penyerahankontra_mb', $pemberitahuan_penyerahankontra_mb);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Pemberitahuan penyerahan kontra memori banding gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file11']['name'])) {
                if ($this->upload->do_upload('file11')) {
                    $relaas_periksa_berkas_pb = $this->upload->data("file_name");
                    $this->db->set('relaas_periksa_berkas_pb', $relaas_periksa_berkas_pb);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Relaas pemberitahuan untuk memeriksa (Inzage) berkas perkara banding gagal');
                    redirect('banding/');
                }
            }
            if (($_FILES['file12']['name'])) {
                if ($this->upload->do_upload('file12')) {
                    $sk_khusus = $this->upload->data("file_name");
                    $this->db->set('sk_khusus', $sk_khusus);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Surat kuasa khusus gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file13']['name'])) {
                if ($this->upload->do_upload('file13')) {
                    $bukt_pengiriman_bpb = $this->upload->data("file_name");
                    $this->db->set('bukt_pengiriman_bpb', $bukt_pengiriman_bpb);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Bukti pengiriman biaya perkara banding gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file14']['name'])) {
                if ($this->upload->do_upload('file14')) {
                    $bukti_setor_bp_kasnegara = $this->upload->data("file_name");
                    $this->db->set('bukti_setor_bp_kasnegara', $bukti_setor_bp_kasnegara);
                } else {
                    $this->session->set_flashdata('msg', 'Upload data Bukti setor biaya pendaftaran ke kas negara gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file15']['name'])) {
                if ($this->upload->do_upload('file15')) {
                    $surat_lainnya_b = $this->upload->data("file_name");
                    $this->db->set('surat_lainnya_b', $surat_lainnya_b);
                } else {
                    $this->session->set_flashdata('msg', 'Upload surat lainnya gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file16']['name'])) {
                if ($this->upload->do_upload('file16')) {
                    $salinan_putusan_pa_rtf = $this->upload->data("file_name");
                    $this->db->set('salinan_putusan_pa_rtf', $salinan_putusan_pa_rtf);
                } else {
                    $this->session->set_flashdata('msg', 'Upload salinan putusan.rtf gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file17']['name'])) {
                if ($this->upload->do_upload('file17')) {
                    $memori_banding_rtf = $this->upload->data("file_name");
                    $this->db->set('memori_banding_rtf', $memori_banding_rtf);
                } else {
                    $this->session->set_flashdata('msg', 'Upload memori banding.rtf gagal');
                    redirect('banding/');
                }
            }

            if (($_FILES['file18']['name'])) {
                if ($this->upload->do_upload('file18')) {
                    $kontra_mb_rtf = $this->upload->data("file_name");
                    $this->db->set('kontra_mb_rtf', $kontra_mb_rtf);
                } else {
                    $this->session->set_flashdata('msg', 'Upload kontra memori banding.rtf gagal');
                    redirect('banding/');
                }
            }
        }

        $id_perkara = $this->input->post('id_perkara');
        $this->db->where('id_perkara', $id_perkara);
        $this->db->update('list_perkara');

        $this->session->set_flashdata('flash', 'berhasil upload bundel B');

        $audittrail = array(
            'log_id' => '',
            'isi_log' => "User <b>" . $pengedit . "</b> telah upload berkas bundel B pada id perkara <b>" . $id_perkara . "</b>",
            'nama_log' => $pengedit
        );

        $this->db->set('rekam_log', 'NOW()', FALSE);
        $this->db->insert('log_audittrail', $audittrail);

        redirect('banding/');
    }

    public function uploadbundle($id)
    {
        //konten
        $data['js'] = 'uploadbanding.js';
        $data['css'] = 'dashboard_banding.css';
        $data['judul'] = 'Upload Banding';

        //ambil data
        $data['perkara'] = $this->db->get_where('list_perkara', ['id_perkara' => $id])->result_array();

        //usir id tidak sesuai
        if ($this->session->userdata('id') != $data['perkara'][0]['id_user']) {
            redirect('banding');
        } else {
            $this->load->view('banding/header', $data);
            $this->load->view('banding/uploadbundle', $data);
            $this->load->view('banding/footer', $data);
        }
    }

    public function download_putusan($id)
    {
        $data['perkara'] = $this->db->get_where('list_perkara', ['id_perkara' => $id])->result_array();
        force_download('assets/files/putusan/' . $data['perkara'][0]['putusan_banding'], NULL);

        if ($data['perkara'][0]['putusan_banding'] != null) {
            force_download('assets/files/putusan/' . $data['perkara'][0]['putusan_banding'], NULL);
        } else {
            $this->session->set_flashdata('msg', 'Belum ada file putusan');
            redirect('banding/');
        }
    }

    public function get_profile()
    {
        $id = $this->session->userdata('id');
        $data = $this->db->get_where('users', ['id' => $id])->result();
        echo json_encode($data);
    }

    public function userProfile()
    {

        $data['js'] = 'banding_userprofile.js';
        $data['css'] = 'dashboard_banding.css';
        $data['judul'] = 'User Profile';

        $this->load->view('banding/header', $data);
        $this->load->view('banding/userprofile', $data);
        $this->load->view('banding/footer', $data);
    }
}
