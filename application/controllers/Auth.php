<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('username') != null)
        {
            redirect('Dashboard');
        }
        else
        {
			$data = [
				'title'	=> 'Log In'
			];
			$this->load->view('V_login', $data);
		}
	}

	public function cek()
	{
		$id_matkul	= $this->input->post('id_matkul');
		$status		= $this->input->post('status');
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$jumlah 	= $this->user->get_user()->num_rows();
		if($jumlah > 0)
		{
			$user 	= $this->user->cek_user($username);
			if($user != null)
			{
				$pass = $user->password;
				if(password_verify($password, $pass))
				{

					$array = array(
						'id_user'		=> $user->id_user,
						'username' 		=> $user->username,
						'id_level'		=> $user->id_level,
						'level'			=> $user->level,
						'id_siswa'		=> $user->id_siswa,
						'siswa'			=> $user->nama
					);
					
					$this->session->set_userdata( $array );

					if ($status == 'daftar_diawal') {
						$r = $this->daftar($id_matkul, $user->id_siswa);

						if ($r == true) {
							echo json_encode(['status' => 3, 'pesan' => 'sukses']);
						} else {
							echo json_encode(['status' => '', 'pesan' => 'Data Tidak ada']);
						}
						
					} else {
						echo json_encode(['status' => 1, 'pesan' => 'Berhasil']);
					}
	               
				}
				else
				{
					echo json_encode(['status' => 2, 'pesan' => 'Password Salah']);
				}
			}
			else
			{
				echo json_encode(['status' => 0, 'pesan' => 'Username Tidak Ditemukan']);
			}
		} else {
			echo json_encode(['status' => '', 'pesan' => 'Data Tidak ada']);
		}
	}

	public function daftar($id_matkul, $id_siswa)
	{
        $this->db->trans_begin();

		$cari2 = $this->master->cari_data('tr_kuota_matkul', ['id_matkul' => $id_matkul, 'id_siswa' => $id_siswa])->num_rows();

		if ($cari2 > 0) {

			$this->session->set_flashdata('aksi', "<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>×</span> </button><strong>Gagal.. </strong> Matakuliah sudah terdaftar. </div>");

		} else {

			$data = ['id_siswa'     => $id_siswa,
					'id_matkul'    => $id_matkul,
					'add_by'       => $this->session->userdata('id_user')
					];

			$this->db->insert('tr_kuota_matkul', $data);

			// cari
			$cari = $this->master->cari_data('m_matkul', ['id_matkul' => $id_matkul])->row_array();

			$sisa = $cari['sisa_kuota'] - 1;

			$this->db->update('m_matkul', ['sisa_kuota' => $sisa], ['id_matkul' => $id_matkul]);

			$this->session->set_flashdata('aksi', "<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>×</span> </button><strong>Berhasil.. </strong> Matakuliah berhasil terdaftar. </div>");

		}

        if($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
    
            return false;
        }else{
            $this->db->trans_commit();
    
            return true;
        }
	}

	public function cek_regis()
	{
		$id_matkul		= $this->input->post('id_matkul');	
		$status			= $this->input->post('status');

		$nik			= $this->input->post('nik');		
		$nama			= $this->input->post('nama');		
		$jk				= $this->input->post('jk');		
		$alamat			= $this->input->post('alamat');		
		$id_provinsi	= $this->input->post('id_provinsi');		
		$id_kota_kab	= $this->input->post('id_kota_kab');		
		$email			= $this->input->post('email');		
		$no_wa			= $this->input->post('no_wa');		
		$username_regis	= $this->input->post('username_regis');		
		$password_regis	= $this->input->post('password_regis');		

		$this->db->trans_begin();

		// cari username
		$cari = $this->master->cari_data('user', ['username' => $username_regis])->num_rows();

		if ($cari > 0) {

			echo json_encode(['status' => 4, 'pesan' => 'Harap ganti.. Username sudah ada!']); 
			
		} else {

			$data = [	'nik'				=> $nik,
						'nama'				=> $nama,
						'jenis_kelamin'		=> $jk,
						'alamat'			=> $alamat,
						'id_provinsi'		=> ($id_provinsi != '') ? $id_provinsi : null,
						'id_kota_kab'		=> ($id_kota_kab != '') ? $id_kota_kab : null,
						'email'				=> $email,
						'no_wa'				=> $no_wa
				];
			
			$this->db->insert('m_siswa', $data);
			$id_siswa = $this->db->insert_id();
			
			$data_u = [	'username'	=> $username_regis,
						'password'	=> password_hash($password_regis, PASSWORD_DEFAULT),
						'id_level'	=> 2,
						'id_siswa'	=> $id_siswa
					  ];
			
			$this->db->insert('user', $data_u);
			$id_user = $this->db->insert_id();

			$this->db->update('user', ['add_by' => $id_user], ['id_user' => $id_user]);

			$array = array(
				'id_user'		=> $id_user,
				'username' 		=> $username_regis,
				'id_level'		=> 2,
				'level'			=> 'siswa',
				'id_siswa'		=> $id_siswa,
				'siswa'			=> $nama
			);
			
			$this->session->set_userdata( $array );

			if ($id_matkul != '') {

				$daf = $this->daftar($id_matkul, $id_siswa);

				if ($daf == true) {

					echo json_encode(['status' => 3, 'pesan' => 'sukses']);
				} else {
					echo json_encode(['status' => '', 'pesan' => "Data Tidak ada"]);
				}
				
			} else {

				echo json_encode(['status' => 1, 'pesan' => 'Berhasil']);
				
			}
		}


		if($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
    
            return false;
        }else{
            $this->db->trans_commit();
    
            return true;
        }
	}

	public function out()
	{
		$this->session->sess_destroy();
		redirect('');
	}

	public function sess_matkul()
	{
		$id_matkul 	= $this->input->post('id_matkul');
		$matkul 	= $this->input->post('matkul');
		
		
		$array = array(
			'id_matkul' 	=> $id_matkul,
			'matkul'		=> $matkul,
			'status_login'	=> 'daftar_diawal'
		);
		
		$this->session->set_userdata( $array );

		echo json_encode(['status'=> true]);
		
	}

	public function login()
	{
		$data = [
			'title'		=> 'Log In',
			'provinsi'	=> $this->master->get_data_order('m_provinsi', '','')->result_array()
		];
		$this->load->view('V_login', $data);
	}

	public function tampil_kota_kab()
	{
		$id_provinsi = $this->input->post('id_provinsi');
		
		$cari = $this->master->cari_data('m_kota_kab', ['id_provinsi' => $id_provinsi])->result_array();

		$option = "<option value=''>Pilih</option>";
		foreach ($cari as $c) {
			$option .= "<option value='".$c['id_kota_kab']."'>".$c['kota_kab']."</option>";
		}

		echo json_encode(['option' => $option]);
	}

	public function login_langsung()
	{
		$array = array(
			'id_matkul',
			'matkul',
			'status'
		);

		$this->session->unset_userdata($array);

		$this->session->set_userdata( ['status_login' => ''] );

		$data = [
			'title'	=> 'Log In',
			'provinsi'	=> $this->master->get_data_order('m_provinsi', '','')->result_array()
		];
		
		$this->load->view('V_login', $data);
	}

	public function tes()
	{
		//echo password_hash('admin', PASSWORD_DEFAULT);

		$hashed = '$2y$10$U7kEY3UqWueiQ/BkRkrxk.7N2OvoGyzSYK7a1f89vTU7z8pEoCeru';
 
		if (password_verify('admin', $hashed)) {
			echo 'Password is valid!';
		} else {
			echo 'Invalid password.';
		}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */