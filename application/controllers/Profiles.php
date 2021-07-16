<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profiles extends CI_Controller
{



    public function get_profile()
    {
        $id = $this->session->userdata('id');
        $data = $this->db->get_where('users', ['id' => $id])->result();
        echo json_encode($data);
    }

    //update data profile diluar password
    public function update_data()
    {
        $id = $this->input->post('id');
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
        ];

        $this->db->where('id', $id);
        $result = $this->db->update('users', $data);
        echo json_encode($result);
    }

    //update password
    public function update_password()
    {
        $this->form_validation->set_rules('oldPassword', 'Password lama', 'required|trim', [
            'required' => 'Silahkan masukkan password lama!!'
        ]);
        $this->form_validation->set_rules('newPassword', 'Password baru', 'required|trim|min_length[4]', [
            'required' => 'Silahkan masukkan password baru!!',
            'min_length[4]' => 'Password minimum 4 Karakter!!'
        ]);
        $this->form_validation->set_rules('repeatPassword', 'Password baru', 'required|trim|matches[newPassword]', [
            'required' => 'Silahkan ketikkan lagi password baru',
            'matches' => 'Password tidak sama!!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $json = [
                'status' => FALSE,
                'oldPassword' => form_error('oldPassword'),
                'newPassword' => form_error('newPassword'),
                'repeatPassword' => form_error('repeat-password')
            ];
            echo json_encode($json);
        } else {
            $json = [
                'status' => TRUE,
                'message' => 'success'
            ];
            echo json_encode($json);
        }
    }
}
