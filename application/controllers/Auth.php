<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_banding');
    }

    public function index()
    {
        //validasi user yang sudah login tidak dapat mengakses halaman login
        switch ($this->session->userdata('role_id')) {
            case 'null':
                redirect('Auth');
                break;
            case '1':
                redirect('Admin');
                break;
            case '2':
                redirect('Home');
                break;
            case '3':
                redirect('ViewHakim');
                break;
        }

        $this->form_validation->set_rules('username', 'User Name', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            # di sini tampilan
            $this->load->view('auth/login_asli');
        } else {
            #di sini lolos form validation
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user = $this->db->get_where('users', array('username' => $username))->row_array();
            if ($user) {
                if ($user['is_active'] == 1) {
                    if (password_verify($password, $user['password'])) {
                        $data = [
                            'id' => $user['id'],
                            'nama' => $user['nama'],
                            'username' => $user['username'],
                            'role_id' => $user['role_id'],
                            'kode_pa' => $user['kode_pa']
                        ];
                        $this->session->set_userdata($data);
                        if ($user['role_id'] == 1) {
                            redirect('Admin/inputNoper');
                        } elseif ($user['role_id'] == 2) {
                            redirect('home');
                        } else {
                            redirect('ViewHakim');
                        }
                    } else {
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Password salah</div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">User Tidak aktif</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Username dan Password tidak sama</div>');
                redirect('auth/index');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Logout sukses..</div>');
        redirect('auth/');
    }
}
