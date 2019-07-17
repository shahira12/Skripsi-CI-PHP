<?php
/**
* 
*/
class m_login extends CI_Model
{
	//mengecek jumlah username dan password yang sesuai
	function cek_login($username, $password)
	{		
	 $this->db->where('username', $username);
	 $this->db->where('password', $password);
	 $query = $this->db->get('akun');
	 return $query->num_rows();
	}

	//untuk mengambil data hasil login
	function data_login($username, $password)
	{
	 $this->db->where('username', $username);
	 $this->db->where('password', $password);
	 return $this->db->get('akun');
	}

}
?>