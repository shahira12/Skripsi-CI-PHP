<?php
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_mamdani');
			
		}

		function input()
{

$bulan = $this->input->post('bulan');
$tahun = $this->input->post('tahun');
$gol_darah = $this->input->post('gol_darah');
$kegiatan = $this->input->post('kegiatan');
$pendonor = $this->input->post('pendonor');
$kebutuhan = $this->input->post('kebutuhan');

if(($kegiatan >=20) && ($kegiatan<24)){
    $index_keg="SEDIKIT";
  }
    
elseif(($kegiatan >=25) && ($kegiatan<29)){
    $index_keg="SEDANG";
   }

elseif(($kegiatan >=30) && ($kegiatan<100)){
    $index_keg="BANYAK";
}
 
if(($pendonor >=300) && ($pendonor <399))
{
	$index_pen ="SEDIKIT";
}	
elseif(($pendonor >=400) && ($pendonor <499))
{
	$index_pen = "SEDANG";
}

elseif(($pendonor >= 500) && ($pendonor <1000))
{
	$index_pen = "BANYAK";
}

if(($kebutuhan >= 1000) && ($kebutuhan <1499))
{
	$index_keb = "SEDIKIT";
}

elseif(($kebutuhan >= 1500) && ($kebutuhan < 1999))
{
	$index_keb = "SEDANG";
}

elseif(($kebutuhan >= 2000)  &&($kebutuhan <3000))

{
	$index_keb = "BANYAK";
}

$data = array(
	'bulan'=>$bulan,
	'tahun'=>$tahun,
	'gol_darah'=>$gol_darah,
	'kegiatan'=>$kegiatan,
	'pendonor'=>$pendonor,
	'kebutuhan'=>$kebutuhan
);

$sql = $this->M_mamdani>add_prediksi($data);

if($sql)
{


	redirect('admin/data_prediksi');
}

else{
	echo"gagal";
	}

}


function proses($id_prediksi)
{
	//proses konversi dari semua kepada kriteria LULUS ATAU TIDAK
	$data['prediksi_mamdani'] = $this->M_mamdani->prediksi_mamdani($id_prediksi);

	foreach($data['prediksi_mamdani'] as $row)
	{
		$id_prediksi = $row->id_prediksi;
		$bulan = $row->bulan;
		$tahun = $row->tahun;
		$gol_darah = $row->gol_darah;
		$kegiatan = $row->kegiatan;
		$pendonor = $row->pendonor;
		$kebutuhan = $row->kebutuhan;
	}

	
	if($kegiatan == "BANYAK" && $pendonor == "BANYAK" && $kebutuhan == "BANYAK")
	{
		$hasil = "STOK DARAH DITAMBAH";
	}
	elseif($kegiatan == "BANYAK" && $pendonor == "BANYAK" && $kebutuhan== "SEDANG")
	{
		$hasil = "STOK DARAH TETAP";
	}

	elseif($kegiatan == "BANYAK" && $pendonor == "BANYAK" && $kebutuhan== "SEDIKIT")
	{
		$hasil = "STOK DARAH TETAP";
	}


	elseif($kegiatan == "BANYAK" && $pendonor == "SEDANG" && $kebutuhan== "BANYAK")
	{
		$hasil = "STOK DARAH DITAMBAH";
	}


	elseif($kegiatan == "BANYAK" && $pendonor == "SEDANG" && $kebutuhan== "SEDANG")
	{
		$hasil = "STOK DARAH TETAP";
	}
	

	elseif($kegiatan == "BANYAK" && $pendonor == "SEDANG" && $kebutuhan== "SEDIKIT")
	{
		$hasil = "STOK DARAH TETAP";
	}


	elseif($kegiatan == "BANYAK" && $pendonor == "SEDIKIT" && $kebutuhan== "BANYAK")
	{
		$hasil = "STOK DARAH DITAMBAH";
	}


	elseif($kegiatan == "BANYAK" && $pendonor == "SEDIKIT" && $kebutuhan== "SEDANG")
	{
		$hasil = "STOK DARAH TETAP";
	}


	elseif($kegiatan == "BANYAK" && $pendonor == "SEDIKIT" && $kebutuhan== "SEDIKIT")
	{
		$hasil = "STOK DARAH TETAP";
	}


	elseif($kegiatan == "SEDANG" && $pendonor == "BANYAK" && $kebutuhan== "BANYAK")
	{
		$hasil = "STOK DARAH TETAP";
	}


	elseif($kegiatan == "SEDANG" && $pendonor == "BANYAK" && $kebutuhan== "SEDANG")
	{
		$hasil = "STOK DARAH DITAMBAH";
	}

	elseif($kegiatan == "SEDANG" && $pendonor == "BANYAK" && $kebutuhan== "SEDIKIT")
	{
		$hasil = "STOK DARAH TETAP";
	}

	elseif($kegiatan == "SEDANG" && $pendonor == "SEDANG" && $kebutuhan== "BANYAK")
	{
		$hasil = "STOK DARAH DITAMBAH";
	}

	elseif($kegiatan == "SEDANG" && $pendonor == "SEDANG" && $kebutuhan== "SEDANG")
	{
		$hasil = "STOK DARAH TETAP";
	}

	elseif($kegiatan == "SEDANG" && $pendonor == "SEDANG" && $kebutuhan== "SEDIKIT")
	{
		$hasil = "STOK DARAH TETAP";
	}

	elseif($kegiatan == "SEDANG" && $pendonor == "SEDIKIT" && $kebutuhan== "BANYAK")
	{
		$hasil = "STOK DARAH DITAMBAH";
	}

	elseif($kegiatan == "SEDANG" && $pendonor == "SEDIKIT" && $kebutuhan== "SEDANG")
	{
		$hasil = "STOK DARAH DITAMBAH";
	}

	elseif($kegiatan == "SEDANG" && $pendonor == "SEDIKIT" && $kebutuhan== "SEDIKIT")
	{
		$hasil = "STOK DARAH TETAP";
	}

	elseif($kegiatan == "SEDIKIT" && $pendonor == "BANYAK" && $kebutuhan== "BANYAK")
	{
		$hasil = "STOK DARAH DITAMBAH";
	}

	elseif($kegiatan == "SEDIKIT" && $pendonor == "BANYAK" && $kebutuhan== "SEDANG")
	{
		$hasil = "STOK DARAH TETAP";
	}

	elseif($kegiatan == "SEDIKIT" && $pendonor == "BANYAK" && $kebutuhan== "SEDIKIT")
	{
		$hasil = "STOK DARAH TETAP";
	}

	elseif($kegiatan == "SEDIKIT" && $pendonor == "SEDANG" && $kebutuhan== "BANYAK")
	{
		$hasil = "STOK DARAH DITAMBAH";
	}

	elseif($kegiatan == "SEDIKIT" && $pendonor == "SEDANG" && $kebutuhan== "SEDANG")
	{
		$hasil = "STOK DARAH TETAP";
	}

	elseif($kegiatan == "SEDIKIT" && $pendonor == "SEDANG" && $kebutuhan== "SEDIKIT")
	{
		$hasil = "STOK DARAH TETAP";
	}

	elseif($kegiatan == "SEDIKIT" && $pendonor == "SEDIKIT" && $kebutuhan== "BANYAK")
	{
		$hasil = "STOK DARAH DITAMBAH";
	}

	elseif($kegiatan == "SEDIKIT" && $pendonor == "SEDIKIT" && $kebutuhan== "SEDANG")
	{
		$hasil = "STOK DARAH DITAMBAH";
	}

	elseif($kegiatan == "SEDIKIT" && $pendonor == "SEDIKIT" && $kebutuhan== "SEDIKIT")
	{
		$hasil = "STOK DARAH TETAP";
	}
	
	$where = array('id_prediksi'=>$id_prediksi);
	$data = array(
	'bulan'=>$bulan,
	'tahun'=>$tahun,
	'gol_darah'=>$gol_darah,
	'kegiatan'=>$kegiatan,
	'pendonor'=>$pendonor,
	'kebutuhan'=>$kebutuhan
	'keterangan'=>$keterangan
	
	);

	public function fuzzifikasi(){
		
		$this->session->set_flashdata('id_prediksi', $id);
		$this->session->set_flashdata('data_prediksi', $dataprediksi);

	$this->M_mamdani->update_hasil($data,$where);
	redirect('admin/data_prediksi');
	}

	}
}
