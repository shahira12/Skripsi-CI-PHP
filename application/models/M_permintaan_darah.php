<?php
/**
* 
*/
class M_permintaan_darah extends CI_Model
{

//--------------------------BEGIN LAPORAN TRAFFIC-------------------------------------
	function tampildatalaporan4()
	{
	 $data = $this->db->get('permintaan_darah')->result();
		return $data;
	}


	function ShowDataPermintaanDarah() //untuk menampilkan tabel di halaman awal
	{   		
		$data = $this->db->get('permintaan_darah')->result();
		return $data;
	}

	function AddDataPermintaanDarah() //untuk menambahkan data berdasarkan database
	{		
	  $data = array(
	  	            'bulan' => $this->input->post("bulan"),
		            'tahun' => $this->input->post("tahun"),
		            'gol_a'  => $this->input->post("gol_a"),
		            'gol_b'  => $this->input->post("gol_b"),
		            'gol_o'  => $this->input->post("gol_o"),
		            'gol_ab'  => $this->input->post("gol_ab")
		            );
	  $this->db->insert("permintaan_darah",$data); //nama database
	}

	function EditDataPermintaanDarah() //untuk menyunting data berdasarkan database
	{		
	  $data = array(
	  	            'bulan' => $this->input->post("bulan"),
		            'tahun' => $this->input->post("tahun"),
		            'gol_a'  => $this->input->post("gol_a"),
		            'gol_b'  => $this->input->post("gol_b"),
		            'gol_o'  => $this->input->post("gol_o"),
		            'gol_ab'  => $this->input->post("gol_ab")
		            );
	  $this->db->where("id_permintaan",$this->input->post("id_permintaan")); //id yang ada di database
	  $this->db->update("permintaan_darah",$data); //untuk update data menjadi data baru di database 
	}

	function DeleteDataPermintaanDarah($id_permintaan) //hapus data berdasarkan id 
	{
		$this->db->where("id_permintaan",$id_permintaan);
		return $this->db->delete("permintaan_darah");
	}

	function get_datalaporanpermintaandarah_selected($id_permintaan) //mengambil data dari database
	{ 
		$this->db->where("id_permintaan",$id_permintaan);
		return $this->db->get("permintaan_darah");//nama database
	}

//--------------------------END LAPORAN TRAFFIC-------------------------------------
}
?>