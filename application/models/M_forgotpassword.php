<?php
/**
* 
*/
class M_forgotpassword extends CI_Model
{

	function EditDataPassword()
	{		
	  $data = array(
	  				'email' => $this->input->post("email"),
	  	            'password' => $this->input->post("password")
		            );
	  $this->db->where("email",$this->input->post("email"));
	  $this->db->update("akun",$data);
	}

	function get_data_selected($id_user)
	{
		$this->db->where("id_user",$id_user);
		return $this->db->get("akun");
	}

}
?>