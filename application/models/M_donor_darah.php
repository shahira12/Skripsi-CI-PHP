<?php
/**
* 
*/
class M_donor_darah extends CI_Model
{

//--------------------------BEGIN LAPORAN TRAFFIC-------------------------------------

	public function grafikdonor()
	{
		$query = $this->db->query("SELECT bulan, jumlah_donor, gagal_donor, berhasil_donor FROM donor_darah");
		if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}

	function tampildatalaporan1()
	{
	 $data = $this->db->get('donor_darah')->result();
		return $data;
	}

	function ShowDataDonorDarah() //untuk menampilkan tabel di halaman awal
	{   		
		$data = $this->db->get('donor_darah')->result();
		return $data;
	}

	function AddDataDonorDarah() //untuk menambahkan data berdasarkan database
	{		
	  $data = array(
	  	            'bulan' => $this->input->post("bulan"),
		            'tahun' => $this->input->post("tahun"),
		            'jumlah_donor'  => $this->input->post("jumlah_donor"),
		            'gagal_donor'  => $this->input->post("gagal_donor"),
		            'berhasil_donor'  => $this->input->post("berhasil_donor"),
		            );
	  $this->db->insert("donor_darah",$data); //nama database
	}

	function EditDataDonorDarah() //untuk menyunting data berdasarkan database
	{		
	  $data = array(
	  	            'bulan' => $this->input->post("bulan"),
		            'tahun' => $this->input->post("tahun"),
		            'jumlah_donor'  => $this->input->post("jumlah_donor"),
		            'gagal_donor'  => $this->input->post("gagal_donor"),
		            'berhasil_donor'  => $this->input->post("berhasil_donor"),
		            );
	  $this->db->where("id_donor",$this->input->post("id_donor")); //id yang ada di database
	  $this->db->update("donor_darah",$data); //untuk update data menjadi data baru di database 
	}

	function DeleteDataDonorDarah($id_donor) //hapus data berdasarkan id 
	{
		$this->db->where("id_donor",$id_donor);
		return $this->db->delete("donor_darah");
	}

	function get_datalaporandonordarah_selected($id_donor) //mengambil data dari database
	{ 
		$this->db->where("id_donor",$id_donor);
		return $this->db->get("donor_darah");//nama database
	}

//--------------------------END LAPORAN TRAFFIC-------------------------------------
}
?>