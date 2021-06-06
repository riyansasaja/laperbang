<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_banding extends CI_model
{
    public function get_list_perkara()
    {
        $id_user =  $this->session->userdata('id');
        $this->db->select('*');
        $this->db->from('list_perkara');
        $this->db->where('id_user', $id_user);
        $this->db->order_by('id_perkara', 'DESC');
        $this->db->limit(10);
        $query = $this->db->get()->result_array();
        return $query;
    }
}
