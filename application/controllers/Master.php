<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

    public function siswa()
    {
        $data 	= [ 'title'      => 'Master Siswa',
                    'provinsi'	=> $this->master->get_data_order('m_provinsi', '','')->result_array()
                  ];

        $this->template->load('template/index','master/siswa/lihat', $data);
    }

    // menampilkan list siswa 
    public function tampil_data_siswa()
    {
        $list = $this->master->get_data_siswa();

        $data = array();

        $no   = $this->input->post('start');

        foreach ($list as $o) {
            $no++;
            $tbody = array();

            $tbody[]    = "<div align='center'>".$no.".</div>";
            $tbody[]    = $o['nama'];
            $tbody[]    = $o['jenis_kelamin'];
            $tbody[]    = $o['alamat'];
            $tbody[]    = $o['no_wa'];
            $tbody[]    = "<span style='cursor:pointer' class='mr-3 text-primary edit-siswa ttip' data-toggle='tooltip' data-placement='top' title='Ubah' data-id='".$o['id_siswa']."'><i class='mdi mdi-pencil-outline mdi-24px'></i></span><span style='cursor:pointer' class='text-danger hapus-siswa ttip' data-toggle='tooltip' data-placement='top' title='Hapus' data-id='".$o['id_siswa']."' nama='".$o['nama']."'><i class='mdi mdi-trash-can-outline mdi-24px'></i></span>";
            $data[]     = $tbody;
        }

        $output = [ "draw"             => $_POST['draw'],
                    "recordsTotal"     => $this->master->jumlah_semua_siswa(),
                    "recordsFiltered"  => $this->master->jumlah_filter_siswa(),   
                    "data"             => $data
                ];

        echo json_encode($output);
    }

    // aksi proses simpan data siswa
    public function simpan_data_siswa()
    {
        $aksi           = $this->input->post('aksi');
        $id_siswa       = $this->input->post('id_siswa');
        
        $nik			= $this->input->post('nik');		
		$nama			= $this->input->post('nama');		
		$jk				= $this->input->post('jk');		
		$alamat			= $this->input->post('alamat');		
		$id_provinsi	= $this->input->post('id_provinsi');		
		$id_kota_kab	= $this->input->post('id_kota_kab');		
		$email			= $this->input->post('email');		
		$no_wa			= $this->input->post('no_wa');			


        $data = [	'nik'				=> $nik,
                    'nama'				=> $nama,
                    'jenis_kelamin'		=> $jk,
                    'alamat'			=> $alamat,
                    'id_provinsi'		=> ($id_provinsi != '') ? $id_provinsi : null,
                    'id_kota_kab'		=> ($id_kota_kab != '') ? $id_kota_kab : null,
                    'email'				=> $email,
                    'no_wa'				=> $no_wa,
                    'add_by'            => $this->session->userdata('id_user')
            ];

        if ($aksi == 'Tambah') {
            $this->master->input_data('m_siswa', $data);
        } elseif ($aksi == 'Ubah') {
            $this->master->ubah_data('m_siswa', $data, array('id_siswa' => $id_siswa));
        } elseif ($aksi == 'Hapus') {
            $this->master->hapus_data('m_siswa', array('id_siswa' => $id_siswa));
        }

        echo json_encode($aksi);
    }

    // ambil data siswa
    public function ambil_data_siswa($id_siswa)
    {
        $data = $this->master->cari_data('m_siswa', array('id_siswa' => $id_siswa))->row_array();

        echo json_encode($data);
    }

    public function matkul()
    {
        $data 	= [ 'title'      => 'Master Mata Kuliah'
                  ];

        $this->template->load('template/index','master/matkul/lihat', $data);
    }

    // menampilkan list matkul 
    public function tampil_data_matkul()
    {
        $list = $this->master->get_data_matkul();

        $data = array();

        $no   = $this->input->post('start');

        foreach ($list as $o) {
            $no++;
            $tbody = array();

            $tbody[]    = "<div align='center'>".$no.".</div>";
            $tbody[]    = $o['narasumber'];
            $tbody[]    = $o['matkul'];
            $tbody[]    = $o['kuota'];
            $tbody[]    = $o['sisa_kuota'];
            $tbody[]    = $o['kuota'] - $o['sisa_kuota'];
            $tbody[]    = "<span style='cursor:pointer' class='mr-3 text-success detail-matkul ttip' data-toggle='tooltip' data-placement='top' title='Detail' data-id='".$o['id_matkul']."' nama='".$o['matkul']."'><i class='mdi mdi-account-card-details-outline mdi-24px'></i></span><span style='cursor:pointer' class='mr-3 text-primary edit-matkul ttip' data-toggle='tooltip' data-placement='top' title='Ubah' data-id='".$o['id_matkul']."'><i class='mdi mdi-pencil-outline mdi-24px'></i></span><span style='cursor:pointer' class='text-danger hapus-matkul ttip' data-toggle='tooltip' data-placement='top' title='Hapus' data-id='".$o['id_matkul']."' nama='".$o['matkul']."'><i class='mdi mdi-trash-can-outline mdi-24px'></i></span>";
            $data[]     = $tbody;
        }

        $output = [ "draw"             => $_POST['draw'],
                    "recordsTotal"     => $this->master->jumlah_semua_matkul(),
                    "recordsFiltered"  => $this->master->jumlah_filter_matkul(),   
                    "data"             => $data
                ];

        echo json_encode($output);
    }

    // aksi proses simpan data matkul
    public function simpan_data_matkul()
    {
        $aksi           = $this->input->post('aksi');
        $id_matkul      = $this->input->post('id_matkul');
        
        $matkul			= $this->input->post('matkul');		
        $narasumber		= $this->input->post('narasumber');		
        $kuota			= $this->input->post('kuota');		
        
        $this->db->select('COUNT(id_siswa) as jumlah');
        $this->db->from('tr_kuota_matkul');
        $this->db->where('id_matkul', $id_matkul);
        $c = $this->db->get()->row_array();

        $data = [	'matkul'        => $matkul,
                    'narasumber'    => $narasumber,
                    'kuota'		    => $kuota,
                    'sisa_kuota'    => $kuota - $c['jumlah'],
                    'add_by'        => $this->session->userdata('id_user')
            ];

        if ($aksi == 'Tambah') {
            $this->master->input_data('m_matkul', $data);
        } elseif ($aksi == 'Ubah') {
            $this->master->ubah_data('m_matkul', $data, array('id_matkul' => $id_matkul));
        } elseif ($aksi == 'Hapus') {
            $this->master->hapus_data('m_matkul', array('id_matkul' => $id_matkul));
        }

        echo json_encode($aksi);
    }

    // ambil data matkul
    public function ambil_data_matkul($id_matkul)
    {
        $data = $this->master->cari_data('m_matkul', array('id_matkul' => $id_matkul))->row_array();

        echo json_encode($data);
    }

    public function provinsi()
    {
        $data 	= [ 'title'      => 'Master Provinsi'
                  ];

        $this->template->load('template/index','master/provinsi/lihat', $data);
    }

    // menampilkan list provinsi 
    public function tampil_data_provinsi()
    {
        $list = $this->master->get_data_provinsi();

        $data = array();

        $no   = $this->input->post('start');

        foreach ($list as $o) {
            $no++;
            $tbody = array();

            $tbody[]    = "<div align='center'>".$no.".</div>";
            $tbody[]    = $o['provinsi'];
            $tbody[]    = "<span style='cursor:pointer' class='mr-3 text-primary edit-provinsi ttip' data-toggle='tooltip' data-placement='top' title='Ubah' data-id='".$o['id_provinsi']."'><i class='mdi mdi-pencil-outline mdi-24px'></i></span><span style='cursor:pointer' class='text-danger hapus-provinsi ttip' data-toggle='tooltip' data-placement='top' title='Hapus' data-id='".$o['id_provinsi']."' nama='".$o['provinsi']."'><i class='mdi mdi-trash-can-outline mdi-24px'></i></span>";
            $data[]     = $tbody;
        }

        $output = [ "draw"             => $_POST['draw'],
                    "recordsTotal"     => $this->master->jumlah_semua_provinsi(),
                    "recordsFiltered"  => $this->master->jumlah_filter_provinsi(),   
                    "data"             => $data
                ];

        echo json_encode($output);
    }

    // aksi proses simpan data provinsi
    public function simpan_data_provinsi()
    {
        $aksi           = $this->input->post('aksi');
        $id_provinsi    = $this->input->post('id_provinsi');
        
        $provinsi       = $this->input->post('provinsi');			


        $data = [	'provinsi'			=> $provinsi,
                    'add_by'            => $this->session->userdata('id_user')
            ];

        if ($aksi == 'Tambah') {
            $this->master->input_data('m_provinsi', $data);
        } elseif ($aksi == 'Ubah') {
            $this->master->ubah_data('m_provinsi', $data, array('id_provinsi' => $id_provinsi));
        } elseif ($aksi == 'Hapus') {
            $this->master->hapus_data('m_provinsi', array('id_provinsi' => $id_provinsi));
        }

        echo json_encode($aksi);
    }

    // ambil data provinsi
    public function ambil_data_provinsi($id_provinsi)
    {
        $data = $this->master->cari_data('m_provinsi', array('id_provinsi' => $id_provinsi))->row_array();

        echo json_encode($data);
    }

    public function kota_kab()
    {
        $data 	= [ 'title'      => 'Master Kota/Kab',
                    'provinsi'	=> $this->master->get_data_order('m_provinsi', '','')->result_array()
                  ];

        $this->template->load('template/index','master/kota_kab/lihat', $data);
    }

    // menampilkan list kota_kab 
    public function tampil_data_kota_kab()
    {
        $list = $this->master->get_data_kota_kab();

        $data = array();

        $no   = $this->input->post('start');

        foreach ($list as $o) {
            $no++;
            $tbody = array();

            $tbody[]    = "<div align='center'>".$no.".</div>";
            $tbody[]    = $o['kota_kab'];
            $tbody[]    = $o['provinsi'];
            $tbody[]    = "<span style='cursor:pointer' class='mr-3 text-primary edit-kota_kab ttip' data-toggle='tooltip' data-placement='top' title='Ubah' data-id='".$o['id_kota_kab']."'><i class='mdi mdi-pencil-outline mdi-24px'></i></span><span style='cursor:pointer' class='text-danger hapus-kota_kab ttip' data-toggle='tooltip' data-placement='top' title='Hapus' data-id='".$o['id_kota_kab']."' nama='".$o['kota_kab']."'><i class='mdi mdi-trash-can-outline mdi-24px'></i></span>";
            $data[]     = $tbody;
        }

        $output = [ "draw"             => $_POST['draw'],
                    "recordsTotal"     => $this->master->jumlah_semua_kota_kab(),
                    "recordsFiltered"  => $this->master->jumlah_filter_kota_kab(),   
                    "data"             => $data
                ];

        echo json_encode($output);
    }

    // aksi proses simpan data kota_kab
    public function simpan_data_kota_kab()
    {
        $aksi           = $this->input->post('aksi');
        $id_kota_kab    = $this->input->post('id_kota_kab');
        
        $kota_kab	    = $this->input->post('kota_kab');		
        $provinsi	    = $this->input->post('provinsi');		


        $data = [	'kota_kab'	    => $kota_kab,
                    'id_provinsi'   => $provinsi,
                    'add_by'        => $this->session->userdata('id_user')
            ];

        if ($aksi == 'Tambah') {
            $this->master->input_data('m_kota_kab', $data);
        } elseif ($aksi == 'Ubah') {
            $this->master->ubah_data('m_kota_kab', $data, array('id_kota_kab' => $id_kota_kab));
        } elseif ($aksi == 'Hapus') {
            $this->master->hapus_data('m_kota_kab', array('id_kota_kab' => $id_kota_kab));
        }

        echo json_encode($aksi);
    }

    // ambil data kota_kab
    public function ambil_data_kota_kab($id_kota_kab)
    {
        $data = $this->master->cari_data('m_kota_kab', array('id_kota_kab' => $id_kota_kab))->row_array();

        echo json_encode($data);
    }

    public function user()
    {
        $data 	= [ 'title'     => 'Master User',
                    'level'	    => $this->master->get_data_order('m_level', '','')->result_array(),
                    'siswa'	    => $this->master->get_data_order('m_siswa', 'nama','asc')->result_array()
                  ];

        $this->template->load('template/index','master/user/lihat', $data);
    }

    // menampilkan list user 
    public function tampil_data_user()
    {
        $list = $this->master->get_data_user();

        $data = array();

        $no   = $this->input->post('start');

        foreach ($list as $o) {
            $no++;
            $tbody = array();

            $tbody[]    = "<div align='center'>".$no.".</div>";
            $tbody[]    = $o['username'];
            $tbody[]    = $o['nama'];
            $tbody[]    = $o['level'];
            $tbody[]    = "<span style='cursor:pointer' class='mr-3 text-primary edit-user ttip' data-toggle='tooltip' data-placement='top' title='Ubah' data-id='".$o['id_user']."'><i class='mdi mdi-pencil-outline mdi-24px'></i></span><span style='cursor:pointer' class='text-danger hapus-user ttip' data-toggle='tooltip' data-placement='top' title='Hapus' data-id='".$o['id_user']."' nama='".$o['username']."'><i class='mdi mdi-trash-can-outline mdi-24px'></i></span>";
            $data[]     = $tbody;
        }

        $output = [ "draw"             => $_POST['draw'],
                    "recordsTotal"     => $this->master->jumlah_semua_user(),
                    "recordsFiltered"  => $this->master->jumlah_filter_user(),   
                    "data"             => $data
                ];

        echo json_encode($output);
    }

    // aksi proses simpan data user
    public function simpan_data_user()
    {
        $aksi       = $this->input->post('aksi');
        $id_user    = $this->input->post('id_user');
        
        $username	= $this->input->post('username');		
        $password   = $this->input->post('password');			
        $id_siswa   = $this->input->post('id_siswa');			
        $id_level   = $this->input->post('id_level');			


        $data = [	'username'		    => $username,
                    'password'		    => ($password != '') ? password_hash($password, PASSWORD_DEFAULT) : '',
                    'id_siswa'		    => $id_siswa,
                    'id_level'		    => $id_level,
                    'add_by'            => $this->session->userdata('id_user')
            ];

        if ($aksi == 'Tambah') {
            $this->master->input_data('user', $data);
        } elseif ($aksi == 'Ubah') {
            $this->master->ubah_data('user', $data, array('id_user' => $id_user));
        } elseif ($aksi == 'Hapus') {
            $this->master->hapus_data('user', array('id_user' => $id_user));
        }

        echo json_encode($aksi);
    }

    // ambil data user
    public function ambil_data_user($id_user)
    {
        $data = $this->master->cari_data('user', array('id_user' => $id_user))->row_array();

        echo json_encode($data);
    }

}

/* End of file Master.php */
