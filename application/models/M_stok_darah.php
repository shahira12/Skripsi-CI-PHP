<?php
/**
* 
*/
class M_stok_darah extends CI_Model
{

//--------------------------BEGIN LAPORAN TRAFFIC-------------------------------------

	public function grafikstok()
	{
		$query = $this->db->query("SELECT bulan, tahun, gol_a, gol_b, gol_o, gol_ab FROM stok_darah");
		if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}

	function tampildatalaporan3()
	{
	 $data = $this->db->get('stok_darah')->result();
		return $data;
	}


	function ShowDataStokDarah() //untuk menampilkan tabel di halaman awal
	{   		
		$data = $this->db->get('stok_darah')->result();
		return $data;
	}

	function AddDataStokDarah() //untuk menambahkan data berdasarkan database
	{		
	  $data = array(
	  	            'bulan' => $this->input->post("bulan"),
		            'tahun' => $this->input->post("tahun"),
		            'gol_a'  => $this->input->post("gol_a"),
		            'gol_b'  => $this->input->post("gol_b"),
		            'gol_o'  => $this->input->post("gol_o"),
		            'gol_ab'  => $this->input->post("gol_ab")
		            );
	  $this->db->insert("stok_darah",$data); //nama database
	}

	function EditDataStokDarah() //untuk menyunting data berdasarkan database
	{		
	  $data = array(
	  	            'bulan' => $this->input->post("bulan"),
		            'tahun' => $this->input->post("tahun"),
		            'gol_a'  => $this->input->post("gol_a"),
		            'gol_b'  => $this->input->post("gol_b"),
		            'gol_o'  => $this->input->post("gol_o"),
		            'gol_ab'  => $this->input->post("gol_ab")
		            );
	  $this->db->where("id_stok",$this->input->post("id_stok")); //id yang ada di database
	  $this->db->update("stok_darah",$data); //untuk update data menjadi data baru di database 
	}

	function DeleteDataStokDarah($id_stok) //hapus data berdasarkan id 
	{
		$this->db->where("id_stok",$id_stok);
		return $this->db->delete("stok_darah");
	}

	function get_datalaporanstokdarah_selected($id_stok) //mengambil data dari database
	{ 
		$this->db->where("id_stok",$id_stok);
		return $this->db->get("stok_darah");//nama database
	}

//--------------------------END LAPORAN TRAFFIC-------------------------------------
}
?>