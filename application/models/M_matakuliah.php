<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_matakuliah extends CI_Model {

    var $kolom_order_matakuliah = [null, 'm.matkul', 'm.narasumber', 't.add_time'];
    var $kolom_cari_matakuliah  = ['LOWER(m.matkul)', 'LOWER(m.narasumber)', 't.add_time'];
    var $order_matakuliah       = ['t.id_tr_kuota_matkul' => 'desc'];

    public function get_data_matakuliah()
    {
        $this->_get_datatables_query_matakuliah();

        if ($this->input->post('length') != -1) {
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
            
            return $this->db->get()->result_array();
        }
    }

    public function _get_datatables_query_matakuliah()
    {
        $this->db->select('t.id_tr_kuota_matkul, s.nama, m.matkul, t.id_matkul, t.add_time, m.narasumber');
        $this->db->from('tr_kuota_matkul as t'); 
        $this->db->join('m_siswa as s', 'id_siswa', 'inner');
        $this->db->join('m_matkul as m', 'id_matkul', 'inner');

        if ($this->input->post('id_siswa') != '') {
            $this->db->where('t.id_siswa', $this->input->post('id_siswa'));
        }

        $awal   = date("Y-m-d", strtotime($this->input->post('tgl_awal')));
        $akhir  = date("Y-m-d", strtotime($this->input->post('tgl_akhir'))); 

        if ($this->input->post('tgl_awal') != '' && $this->input->post('tgl_akhir') != '') {
            $this->db->where("DATE_FORMAT(t.add_time, '%Y-%m-%d') BETWEEN '$awal' AND '$akhir'");
        } 
        
        $b = 0;
        
        $input_cari = strtolower($_POST['search']['value']);
        $kolom_cari = $this->kolom_cari_matakuliah;

        foreach ($kolom_cari as $cari) {
            if ($input_cari) {
                if ($b === 0) {
                    $this->db->group_start();
                    $this->db->like($cari, $input_cari);
                } else {
                    $this->db->or_like($cari, $input_cari);
                }

                if ((count($kolom_cari) - 1) == $b ) {
                    $this->db->group_end();
                }
            }

            $b++;
        }

        if (isset($_POST['order'])) {

            $kolom_order = $this->kolom_order_matakuliah;
            $this->db->order_by($kolom_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            
        } elseif (isset($this->order_matakuliah)) {
            
            $order = $this->order_matakuliah;
            $this->db->order_by(key($order), $order[key($order)]);
            
        }
        
    }

    public function jumlah_semua_matakuliah()
    {
        $this->db->select('t.id_tr_kuota_matkul, s.nama, m.matkul, t.id_matkul, t.add_time, m.narasumber');
        $this->db->from('tr_kuota_matkul as t'); 
        $this->db->join('m_siswa as s', 'id_siswa', 'inner');
        $this->db->join('m_matkul as m', 'id_matkul', 'inner');

        if ($this->input->post('id_siswa') != '') {
            $this->db->where('t.id_siswa', $this->input->post('id_siswa'));
        }

        $awal   = date("Y-m-d", strtotime($this->input->post('tgl_awal')));
        $akhir  = date("Y-m-d", strtotime($this->input->post('tgl_akhir'))); 

        if ($this->input->post('tgl_awal') != '' && $this->input->post('tgl_akhir') != '') {
            $this->db->where("DATE_FORMAT(t.add_time, '%Y-%m-%d') BETWEEN '$awal' AND '$akhir'");
        }

        return $this->db->count_all_results();
    }

    public function jumlah_filter_matakuliah()
    {
        $this->_get_datatables_query_matakuliah();

        return $this->db->get()->num_rows();
        
    }

}

/* End of file M_matakuliah.php */
