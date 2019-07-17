<?php
/**
* 
*/
class M_mamdani extends CI_Model
{



	function ShowDataPrediksi() //untuk menampilkan tabel di halaman awal
	{   		
		$data = $this->db->get('prediksi_mamdani')->result();
		return $data;
	}



	function darah($id_prediksi)
	{
		$sql = $this->db->query("SELECT * FROM prediksi_mamdani WHERE id_prediksi='$id_prediksi'");
		return $sql->result();
	}

	function input() //untuk menambahkan data berdasarkan database
	{		
	  $data = array(
	  	            'bulan' => $this->input->post("bulan"),
		            'tahun' => $this->input->post("tahun"),
		            'gol_darah'  => $this->input->post("gol_darah"),
		            'kegiatan'  => $this->input->post("kegiatan"),
		            'pendonor'  => $this->input->post("pendonor"),
		            'kebutuhan'  => $this->input->post("kebutuhan")
		            );
	  $this->db->insert("prediksi_mamdani",$data); //nama database
	}

	function DeleteDataPrediksi($id_prediksi) //hapus data berdasarkan id 
	{
		$this->db->where("id_prediksi",$id_prediksi);
		return $this->db->delete("prediksi_mamdani");
	}

	function get_datalaporanstokdarah_selected($id_prediksi) //mengambil data dari database
	{ 
		$this->db->where("id_prediksi",$id_prediksi);
		return $this->db->get("prediksi_mamdani");//nama database
	}


}
?>