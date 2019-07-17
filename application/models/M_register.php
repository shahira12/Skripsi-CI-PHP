<?php
/**
* 
*/


class M_register extends CI_Model
{


	function TambahData()
	{		
	  $data = array(
	  	            'name' => $this->input->post("name"),
		            'username' => $this->input->post("username"),
		            'email'  => $this->input->post("email"),
		            'phone' => $this->input->post("phone"),
		            'password' => $this->input->post("password")
		            );
	  $this->db->insert("akun",$data);
	}

}
?>