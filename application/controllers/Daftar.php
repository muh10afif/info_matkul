<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

    public function index()
    {
        $data  = ['matkul'      => $this->master->get_data_order('m_matkul', 'matkul', 'asc')->result_array(),
                  'id_siswa'    => $this->session->userdata('id_siswa')
                ];

        $this->template->load('template/index','daftar/lihat', $data);
    }

    public function simpan_data()
    {
        $id_siswa   = $this->input->post('id_siswa');
        $id_matkul  = $this->input->post('id_matkul');
        
        $this->db->trans_begin();

        $data = ['id_siswa'     => $id_siswa,
                 'id_matkul'    => $id_matkul,
                 'add_by'       => $this->session->userdata('id_user')
                ];

        $this->db->insert('tr_kuota_matkul', $data);

        // cari
        $cari = $this->master->cari_data('m_matkul', ['id_matkul' => $id_matkul])->row_array();

        $sisa = $cari['sisa_kuota'] - 1;

        $this->db->update('m_matkul', ['sisa_kuota' => $sisa], ['id_matkul' => $id_matkul]);

        if($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
    
            echo json_encode(['status' => false, 'sisa' => '']);
        }else{
            $this->db->trans_commit();
    
            echo json_encode(['status' => true, 'sisa' => $sisa]);
        }
        
    }


}

/* End of file Daftar.php */
