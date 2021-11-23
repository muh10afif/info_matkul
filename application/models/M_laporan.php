<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

    public function __construct()
    {
        $this->id_user  = $this->session->userdata('id_user');
        $this->tgl      = date("Y-m-d", now('Asia/Jakarta'));
    }

    public function sum_kuota()
    {
        $this->db->select_sum('kuota');
        $this->db->from('m_matkul');
        
        $a = $this->db->get()->row_array();

        return $a['kuota'];
    }

    public function sum_daftar()
    {
        $this->db->select('COUNT(id_siswa) as jumlah');
        $this->db->from('tr_kuota_matkul');
        
        $a = $this->db->get()->row_array();

        return $a['jumlah'];
    }

    public function tot_siswa_chart($tgl, $aksi)
    {
        $this->db->select('id_siswa');
        $this->db->from('tr_kuota_matkul');       
        
        if ($aksi == 'tanggal') {
            $this->db->where("DATE_FORMAT(add_time, '%Y-%m-%d') =", $tgl);
        } else {
            $this->db->where("DATE_FORMAT(add_time, '%Y-%m') =", $tgl);
        }
        
        return $this->db->get()->num_rows();
    }

    public function tot_matkul_chart($tgl, $aksi)
    {
        $this->db->select('id_matkul');
        $this->db->from('tr_kuota_matkul');

        if ($aksi == 'tanggal') {
            $this->db->where("DATE_FORMAT(add_time, '%Y-%m-%d') =", $tgl);
        } else {
            $this->db->where("DATE_FORMAT(add_time, '%Y-%m') =", $tgl);
        }

        $this->db->group_by('id_matkul');
        
        return $this->db->get()->num_rows();
    
    }
}

/* End of file M_laporan.php */
