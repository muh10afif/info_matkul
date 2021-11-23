<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function cek_user($username)
	{
		$this->db->select('u.id_user, u.username, u.password, l.*, w.*');
		$this->db->from('user as u');
		$this->db->join('m_level as l', 'id_level', 'inner');
		$this->db->join('m_siswa as w', 'id_siswa', 'left');
		$this->db->where('u.username', $username);

		$query = $this->db->get();
		return $query->row();
	}

	public function get_user()
	{
		return $this->db->get('user');
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */