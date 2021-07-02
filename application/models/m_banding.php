<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_banding extends CI_model
{

    public function countLapHarian()
    {
        $id_user =  $this->session->userdata('id');
        $query = $this->db->query(
            "SELECT COUNT(no_perkara) as list_perkara
                               FROM list_perkara
                               WHERE id_user = $id_user"
        );
        if ($query->num_rows() > 0) {
            return $query->row()->list_perkara;
        } else {
            return 0;
        }
    }

    public function countLapHarianHakim()
    {

        $query = $this->db->query(
            "SELECT COUNT(no_perkara) as list_perkara
                               FROM list_perkara"
        );
        if ($query->num_rows() > 0) {
            return $query->row()->list_perkara;
        } else {
            return 0;
        }
    }

    public function countRegis()
    {

        $query = $this->db->query(
            "SELECT COUNT(no_perkara_banding) as list_perkara
                               FROM list_perkara"
        );
        if ($query->num_rows() > 0) {
            return $query->row()->list_perkara;
        } else {
            return 0;
        }
    }

    public function countPerkaraPutus()
    {
        $id_user =  $this->session->userdata('id');
        $query = $this->db->query(
            "SELECT COUNT(putusan_banding) as list_perkara
                               FROM list_perkara
                               WHERE id_user = $id_user"
        );
        if ($query->num_rows() > 0) {
            return $query->row()->list_perkara;
        } else {
            return 0;
        }
    }

    public function countSisaPerkara()
    {
        $id_user =  $this->session->userdata('id');
        $query = $this->db->query(
            "SELECT COUNT(putusan_banding) as list_perkara
                               FROM list_perkara
                               WHERE id_user = $id_user"
        );
        if ($query->num_rows() > 0) {
            return $query->row()->list_perkara;
        } else {
            return 0;
        }
    }


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

    public function UpdatePerkara($tabelName, $data, $where)
    {
        $res = $this->db->update($tabelName, $data, $where);
        return $res;
    }
}
