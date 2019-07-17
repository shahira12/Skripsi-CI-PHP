<?php
/**
* 
*/
class M_mamdani extends CI_Model
{

//--------------------------BEGIN LAPORAN TRAFFIC-------------------------------------
	

	function tampildatalaporan5()
	{
	 $data = $this->db->get('mamdani')->result();
		return $data;
	}

	function ShowDataPrediksi() //untuk menampilkan tabel di halaman awal
	{   		
		$data = $this->db->get('mamdani')->result();
		return $data;
	}

	function AddDataPrediksi($data) //untuk menambahkan data berdasarkan database
	{		
	  // $data = array(
	  // 	            'bulan' => $this->input->post("bulan"),
		 //            'tahun' => $this->input->post("tahun"),
		 //            'gol_darah'  => $this->input->post("gol_darah"),
		 //            'kegiatan'  => $this->input->post("kegiatan"),
		 //            'pendonor'  => $this->input->post("pendonor"),
		 //            'kebutuhan'  => $this->input->post("kebutuhan")
		 //            );
	  // if($this->db->insert("mamdani",$data)){
	  // 	return true;
	  // } //nama database
		$sql = $this->db->insert('mamdani',$data);
		return$sql;

	}

	function DeletePrediksi($id_prediksi) //hapus data berdasarkan id 
	{
		$this->db->where("id_prediksi",$id_prediksi);
		return $this->db->delete("mamdani");
	}


	function pecah($id_prediksi)
	{
		$sql = $this->db->query("SELECT * FROM mamdani WHERE id_prediksi='$id_prediksi'");
		return $sql->result();
	}

	function update_hasil($data,$where)
	{
		$sql = $this->db->update('mamdani',$data,$where);
		return $sql;
	}

function get_datalaporanprediksi_selected($id_prediksi) //mengambil data dari database
	{ 
		$this->db->where("id_prediksi",$id_produksi);
		return $this->db->get("mamdani");//nama database
	}

//--------------------------END LAPORAN TRAFFIC-------------------------------------
}
?>