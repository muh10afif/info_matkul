<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function index()
    {
        $data  = ['title'       => 'Mata Kuliah Tedaftar',
                  'id_siswa'    => $this->session->userdata('id_siswa')
                ];

        $this->template->load('template/index','matakuliah/lihat', $data);
    }

    public function tampil_matkul()
    {
        $list = $this->matakuliah->get_data_matakuliah();

        $data = array();

        $no   = $this->input->post('start');

        foreach ($list as $o) {
            $no++;
            $tbody = array();

            if ($this->input->post('id_siswa') == '') {
            
            }

            $tbody[]    = "<div align='center'>".$no.".</div>";
            $tbody[]    = $o['matkul'];
            $tbody[]    = $o['narasumber'];
            if ($this->input->post('id_siswa') == '') {
                $tbody[]    = $o['nama'];
            }
            $tbody[]    = "<div align='center'>".date('d-M-Y H:i:s', strtotime($o['add_time'])).".</div>";
            $tbody[]    = "<div align='center'><span style='cursor:pointer' class='text-danger hapus ttip' data-toggle='tooltip' data-placement='top' title='Hapus' data-id='".$o['id_tr_kuota_matkul']."'  matkul='".$o['matkul']."' id_matkul='".$o['id_matkul']."'><i class='mdi mdi-trash-can-outline mdi-24px'></i></span></div>";
            $data[]     = $tbody;
        }

        $output = [ "draw"             => $_POST['draw'],
                    "recordsTotal"     => $this->matakuliah->jumlah_semua_matakuliah(),
                    "recordsFiltered"  => $this->matakuliah->jumlah_filter_matakuliah(),   
                    "data"             => $data
                ];

        echo json_encode($output);
    }

    public function hapus_matkul()
    {
        $id_tr_kuota_matkul     = $this->input->post('id_tr');
        $id_matkul              = $this->input->post('id_matkul');
        
        $this->db->trans_begin();

        $this->db->delete('tr_kuota_matkul', ['id_tr_kuota_matkul' => $id_tr_kuota_matkul]);

        // cari
        $cari = $this->master->cari_data('m_matkul', ['id_matkul' => $id_matkul])->row_array();

        $sisa = $cari['sisa_kuota'] + 1;

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

/* End of file Matakuliah.php */
