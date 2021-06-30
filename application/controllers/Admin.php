<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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

        //konten
        $data['judul'] = 'Dashboard';
        $data['css'] = 'dashboard_admin.css';
        $data['js'] = 'dashboard_adm
        in.js';

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

    public function updateUser()
    {
        $this->load->library('form_validation');
        $check_password = $this->input->post('password');

        if ($check_password != '') {
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('password_r', 'confirm password', 'matches[password]');
        } else {
            $this->form_validation->set_rules('nama', 'nama', 'required');
        }
        if ($this->form_validation->run() == false) {

            $array = array(
                'error'   => true,
                'password_error' => form_error('password_r'),
            );
        } else {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = password_hash($this->input->post('password_r'), PASSWORD_DEFAULT);
            $role_id = $this->input->post('role_id');
            $is_active = $this->input->post('is_active');
            if ($check_password != '') {
                $data = [
                    'id' => $id,
                    'nama' => $nama,
                    'email' => $email,
                    'username' => $username,
                    'password' => $password,
                    'role_id' => $role_id,
                    'is_active' => $is_active
                ];
            } else {
                $data = [
                    'id' => $id,
                    'nama' => $nama,
                    'email' => $email,
                    'username' => $username,
                    'role_id' => $role_id,
                    'is_active' => $is_active
                ];
            }


            $this->db->where('id', $id);
            $array = $this->db->update('users', $data);
        }


        echo json_encode($array);
    }

    public function addUser()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('password_r', 'confirm password', 'matches[password]|required');

        if ($this->form_validation->run() == false) {
            $array = array(
                'error'   => true,
                'username_error' => form_error('username'),
                'password_error' => form_error('password'),
                'password_r_error' => form_error('password_r'),
            );
        } else {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $username = $this->input->post('username');
            $password = password_hash($this->input->post('password_r'), PASSWORD_DEFAULT);
            $role_id = $this->input->post('role_id');
            $is_active = $this->input->post('is_active');

            $data = [
                'id' => $id,
                'nama' => $nama,
                'email' => $email,
                'username' => $username,
                'password' => $password,
                'role_id' => $role_id,
                'is_active' => $is_active
            ];
            $array = $this->db->insert('users', $data);
        }
        echo json_encode($array);
    }

    public function del_user()
    {
        $id = $this->input->post('id');
        $array = $this->db->delete('users', array('id' => $id));

        echo json_encode($array);
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

    public function updateStatus()
    {
        $staper = $this->input->post('status_perkara');
        $id_perkara = $this->input->post('id_perkara');

        $data = [
            'id_perkara' => $id_perkara,
            'status_perkara' => $staper
        ];

        $this->db->where('id_perkara', $id_perkara);
        $data = $this->db->update('list_perkara', $data);
        json_encode($data);
    }
}
