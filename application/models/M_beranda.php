<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model {

    public function cari_data_order($tabel, $where, $field, $order)
    {
        $this->db->order_by($field, $order);

        return $this->db->get_where($tabel, $where);
    }

    public function get_siswa($id_matkul)
    {
        $this->db->select('s.*');
        $this->db->from('tr_kuota_matkul as t');
        $this->db->join('m_siswa as s', 'id_siswa', 'inner');
        $this->db->where('t.id_matkul', $id_matkul);
        
        return $this->db->get();
    }

}

/* End of file M_beranda.php */
