<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function index()
    {
        $data  = ['matkul' => $this->master->get_data_order('m_matkul', 'matkul', 'asc')->result_array()];

        $this->load->view('beranda/lihat', $data);
    }

    public function tampil_siswa()
    {
        $id_matkul = $this->input->post('id_matkul');

        if ($id_matkul) {
            $list = $this->beranda->get_siswa($id_matkul)->result_array();

            $data = array();

            $no   = $this->input->post('start');

            foreach ($list as $o) {
                $no++;
                $tbody = array();

                $tbody[]    = "<div align='center'>".$no.".</div>";
                $tbody[]    = $o['nama'];
                $tbody[]    = $o['jenis_kelamin'];
                $tbody[]    = $o['alamat'];
                $tbody[]    = $o['email'];
                $tbody[]    = $o['no_wa'];
                $data[]     = $tbody;
            }

        echo json_encode(['data' => $data]);
        } else {
        echo json_encode(['data' => []]);
        }
    }

}

/* End of file Beranda.php */
