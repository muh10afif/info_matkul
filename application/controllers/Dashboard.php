<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $bln = array();
		$day = array();

        $skrg 	= date("Y-m", now('Asia/Jakarta'));
        $skrg_t = date("Y-m-d", now('Asia/Jakarta'));

        for ($i=4; $i >= 0; $i--) { 

            $a = date('Y-m', strtotime("$skrg -$i months"));
			array_push($bln, date("M Y", strtotime($a)));
			
            $b = date('Y-m-d', strtotime("$skrg_t -$i days"));
			array_push($day, date("d-M-Y", strtotime($b)));
			
        }
        
		$siswa_b 	= array();
		$matkul_b 	= array();

        // bulan
		foreach ($bln as $b) {
            
            $bulan = date('Y-m', strtotime($b));

			$tt_transaksi   = $this->laporan->tot_siswa_chart($bulan, 'bulan');
			$tt_pengunjung  = $this->laporan->tot_matkul_chart($bulan, 'bulan');

			array_push($siswa_b, $tt_transaksi);
			array_push($matkul_b, ($tt_pengunjung) ? $tt_pengunjung : 0);
            
        }

		$siswa_h 	= array();
		$matkul_h 	= array();
        
        // hari
		foreach ($day as $d) {

            $tanggal = date('Y-m-d', strtotime($d));

            $tt_siswa_h     = $this->laporan->tot_siswa_chart($tanggal, 'tanggal');
            $tt_matkul_h    = $this->laporan->tot_matkul_chart($tanggal, 'tanggal');

            array_push($siswa_h, $tt_siswa_h);
            array_push($matkul_h, ($tt_matkul_h) ? $tt_matkul_h : 0);
			
        }

        $data = ['title'        => 'Dashboard',
                 'tot_siswa'    => $this->master->get_data_order('m_siswa', '','')->num_rows(),
                 'tot_matkul'   => $this->master->get_data_order('m_matkul', '','')->num_rows(),
                 'tot_kuota'    => $this->laporan->sum_kuota(),
                 'tot_pendaftar'=> $this->laporan->sum_daftar(),
                 'bln'		    => $bln,
                'day'		    => $day,
                'siswa_h'       => $siswa_h,
                'matkul_h'      => $matkul_h,
                'siswa_b'       => $siswa_b,
                'matkul_b'      => $matkul_b,
                'matkul_sis'    => $this->master->cari_data('tr_kuota_matkul', ['id_siswa' => $this->session->userdata('id_siswa')])->num_rows()
                ];

        if ($this->session->userdata('id_siswa') == '') {
            $this->template->load('template/index','dashboard', $data);
        } else {
            $this->template->load('template/index','dashboard_siswa', $data);
        }

        
    }

}

/* End of file Dashboard.php */
