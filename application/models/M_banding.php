<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_banding extends CI_model
{

    public function perkara_januari()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=1)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }
    public function perkara_februari()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=2)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }
    public function perkara_maret()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=3)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }
    public function perkara_april()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=4)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }
    public function perkara_may()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=5)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }
    public function perkara_juni()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=6)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }
    public function perkara_juli()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=7)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }
    public function perkara_agustus()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=8)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }
    public function perkara_september()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=9)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }
    public function perkara_oktober()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=10)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }
    public function perkara_november()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=11)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }
    public function perkara_desember()
    {
        return $query = $this->db->query("SELECT * FROM list_perkara WHERE ((Month(tgl_register)=12)AND (YEAR(tgl_register)=" . date('Y') . "))");
    }

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

    public function DataBanding()
    {
        $this->db->select('*');
        $this->db->from('v_all_perkara');
        $this->db->order_by('tgl_register', 'DESC');
        $query = $this->db->get()->result();
        return $query;
    }

    public function DataBandingHakim()
    {
        $this->db->select('*');
        $this->db->from('v_berkas_hakim');
        $this->db->order_by('no_perkara_banding', 'DESC');
        $query = $this->db->get()->result();
        return $query;
    }
}
