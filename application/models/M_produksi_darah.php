<?php
/**
* 
*/
class M_produksi_darah extends CI_Model
{


	public function grafikproduksi()
	{
		$query = $this->db->query("SELECT bulan, tahun, gol_a, gol_b, gol_o, gol_ab FROM produksi_darah");
		if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}

	function tampildatalaporan2()
	{
	 $data = $this->db->get('produksi_darah')->result();
		return $data;
	}

	function ShowDataProduksiDarah() //untuk menampilkan tabel di halaman awal
	{   		
		$data = $this->db->get('produksi_darah')->result();
		return $data;
	}

	function AddDataProduksiDarah() //untuk menambahkan data berdasarkan database
	{		
	  $data = array(
	  	            'bulan' => $this->input->post("bulan"),
		            'tahun' => $this->input->post("tahun"),
		            'gol_a'  => $this->input->post("gol_a"),
		            'gol_b'  => $this->input->post("gol_b"),
		            'gol_o'  => $this->input->post("gol_o"),
		            'gol_ab'  => $this->input->post("gol_ab")
		            );
	  $this->db->insert("produksi_darah",$data); //nama database
	}

	function EditDataProduksiDarah() //untuk menyunting data berdasarkan database
	{		
	  $data = array(
	  	            'bulan' => $this->input->post("bulan"),
		            'tahun' => $this->input->post("tahun"),
		            'gol_a'  => $this->input->post("gol_a"),
		            'gol_b'  => $this->input->post("gol_b"),
		            'gol_o'  => $this->input->post("gol_o"),
		            'gol_ab'  => $this->input->post("gol_ab")
		            );
	  $this->db->where("id_produksi",$this->input->post("id_produksi")); //id yang ada di database
	  $this->db->update("produksi_darah",$data); //untuk update data menjadi data baru di database 
	}

	function DeleteDataProduksiDarah($id_produksi) //hapus data berdasarkan id 
	{
		$this->db->where("id_produksi",$id_produksi);
		return $this->db->delete("produksi_darah");
	}

	function get_datalaporanproduksidarah_selected($id_produksi) //mengambil data dari database
	{ 
		$this->db->where("id_produksi",$id_produksi);
		return $this->db->get("produksi_darah");//nama database
	}
}
?>