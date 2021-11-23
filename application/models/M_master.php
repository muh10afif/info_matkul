<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model {

    public function get_data_order($tabel, $field, $urut)
    {
        if ($field != '' & $urut != '') {
            $this->db->order_by($field, $urut);
        }

        return $this->db->get($tabel);
        
    }

    public function cari_data($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function input_data($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function ubah_data($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }

    public function hapus_data($tabel, $where)
    {
        $this->db->delete($tabel, $where);
    }

    // Menampilkan list siswa
    public function get_data_siswa()
    {
        $this->_get_datatables_query_siswa();

        if ($this->input->post('length') != -1) {
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
            
            return $this->db->get()->result_array();
        }
    }

    var $kolom_order_siswa = [null, 'LOWER(nama)', 'LOWER(jenis_kelamin)', 'LOWER(alamat)', 'no_wa'];
    var $kolom_cari_siswa  = ['LOWER(nama)', 'LOWER(jenis_kelamin)', 'LOWER(alamat)', 'no_wa'];
    var $order_siswa       = ['id_siswa' => 'desc'];

    public function _get_datatables_query_siswa()
    {
        $this->db->from('m_siswa'); 
        
        $b = 0;
        
        $input_cari = strtolower($_POST['search']['value']);
        $kolom_cari = $this->kolom_cari_siswa;

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

            $kolom_order = $this->kolom_order_siswa;
            $this->db->order_by($kolom_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            
        } elseif (isset($this->order_siswa)) {
            
            $order = $this->order_siswa;
            $this->db->order_by(key($order), $order[key($order)]);
            
        }
        
    }

    public function jumlah_semua_siswa()
    {
        $this->db->from('m_siswa');

        return $this->db->count_all_results();
    }

    public function jumlah_filter_siswa()
    {
        $this->_get_datatables_query_siswa();

        return $this->db->get()->num_rows();
        
    }

    // Menampilkan list matkul
    public function get_data_matkul()
    {
        $this->_get_datatables_query_matkul();

        if ($this->input->post('length') != -1) {
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
            
            return $this->db->get()->result_array();
        }
    }

    var $kolom_order_matkul = [null, 'LOWER(matkul)', 'LOWER(narasumber)', 'kuota', 'sisa'];
    var $kolom_cari_matkul  = ['LOWER(matkul)', 'LOWER(narasumber)', 'kuota', 'sisa'];
    var $order_matkul       = ['id_matkul' => 'desc'];

    public function _get_datatables_query_matkul()
    {
        $this->db->from('m_matkul'); 
        
        $b = 0;
        
        $input_cari = strtolower($_POST['search']['value']);
        $kolom_cari = $this->kolom_cari_matkul;

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

            $kolom_order = $this->kolom_order_matkul;
            $this->db->order_by($kolom_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            
        } elseif (isset($this->order_matkul)) {
            
            $order = $this->order_matkul;
            $this->db->order_by(key($order), $order[key($order)]);
            
        }
        
    }

    public function jumlah_semua_matkul()
    {
        $this->db->from('m_matkul');

        return $this->db->count_all_results();
    }

    public function jumlah_filter_matkul()
    {
        $this->_get_datatables_query_matkul();

        return $this->db->get()->num_rows();
        
    }

    // Menampilkan list provinsi
    public function get_data_provinsi()
    {
        $this->_get_datatables_query_provinsi();

        if ($this->input->post('length') != -1) {
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
            
            return $this->db->get()->result_array();
        }
    }

    var $kolom_order_provinsi = [null, 'LOWER(provinsi)'];
    var $kolom_cari_provinsi  = ['LOWER(provinsi)'];
    var $order_provinsi       = ['id_provinsi' => 'asc'];

    public function _get_datatables_query_provinsi()
    {
        $this->db->from('m_provinsi'); 
        
        $b = 0;
        
        $input_cari = strtolower($_POST['search']['value']);
        $kolom_cari = $this->kolom_cari_provinsi;

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

            $kolom_order = $this->kolom_order_provinsi;
            $this->db->order_by($kolom_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            
        } elseif (isset($this->order_provinsi)) {
            
            $order = $this->order_provinsi;
            $this->db->order_by(key($order), $order[key($order)]);
            
        }
        
    }

    public function jumlah_semua_provinsi()
    {
        $this->db->from('m_provinsi');

        return $this->db->count_all_results();
    }

    public function jumlah_filter_provinsi()
    {
        $this->_get_datatables_query_provinsi();

        return $this->db->get()->num_rows();
        
    }

    // Menampilkan list kota_kab
    public function get_data_kota_kab()
    {
        $this->_get_datatables_query_kota_kab();

        if ($this->input->post('length') != -1) {
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
            
            return $this->db->get()->result_array();
        }
    }

    var $kolom_order_kota_kab = [null, 'LOWER(kota_kab)', 'LOWER(provinsi)'];
    var $kolom_cari_kota_kab  = ['LOWER(kota_kab)', 'LOWER(provinsi)'];
    var $order_kota_kab       = ['id_kota_kab' => 'asc'];

    public function _get_datatables_query_kota_kab()
    {
        $this->db->from('m_kota_kab as k'); 
        $this->db->join('m_provinsi as p', 'id_provinsi', 'inner');
        
        
        $b = 0;
        
        $input_cari = strtolower($_POST['search']['value']);
        $kolom_cari = $this->kolom_cari_kota_kab;

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

            $kolom_order = $this->kolom_order_kota_kab;
            $this->db->order_by($kolom_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            
        } elseif (isset($this->order_kota_kab)) {
            
            $order = $this->order_kota_kab;
            $this->db->order_by(key($order), $order[key($order)]);
            
        }
        
    }

    public function jumlah_semua_kota_kab()
    {
        $this->db->from('m_kota_kab as k'); 
        $this->db->join('m_provinsi as p', 'id_provinsi', 'inner');

        return $this->db->count_all_results();
    }

    public function jumlah_filter_kota_kab()
    {
        $this->_get_datatables_query_kota_kab();

        return $this->db->get()->num_rows();
        
    }

    // Menampilkan list user
    public function get_data_user()
    {
        $this->_get_datatables_query_user();

        if ($this->input->post('length') != -1) {
            $this->db->limit($this->input->post('length'), $this->input->post('start'));
            
            return $this->db->get()->result_array();
        }
    }

    var $kolom_order_user = [null, 'LOWER(u.username)', 'LOWER(s.nama)', 'LOWER(l.level)'];
    var $kolom_cari_user  = ['LOWER(u.username)', 'LOWER(s.nama)', 'LOWER(l.level)'];
    var $order_user       = ['u.id_user' => 'desc'];

    public function _get_datatables_query_user()
    {
        $this->db->from('user as u'); 
        $this->db->join('m_siswa as s', 'id_siswa', 'left');
        $this->db->join('m_level as l', 'id_level', 'inner');
        
        $b = 0;
        
        $input_cari = strtolower($_POST['search']['value']);
        $kolom_cari = $this->kolom_cari_user;

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

            $kolom_order = $this->kolom_order_user;
            $this->db->order_by($kolom_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            
        } elseif (isset($this->order_user)) {
            
            $order = $this->order_user;
            $this->db->order_by(key($order), $order[key($order)]);
            
        }
        
    }

    public function jumlah_semua_user()
    {
        $this->db->from('user as u'); 
        $this->db->join('m_siswa as s', 'id_siswa', 'left');
        $this->db->join('m_level as l', 'id_level', 'inner');
        
        return $this->db->count_all_results();
    }

    public function jumlah_filter_user()
    {
        $this->_get_datatables_query_user();

        return $this->db->get()->num_rows();
        
    }

}

/* End of file M_master.php */
