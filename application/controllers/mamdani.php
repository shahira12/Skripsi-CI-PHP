<?php 


class mamdani extends ci_controller
{
	

function AksiAddPrediksi()
{

// Fungsi Inisialisasi 

$bulan = $this->input->post('bulan');
$tahun = $this->input->post('tahun');
$gol_darah = $this->input->post('gol_darah');
$kegiatan = $this->input->post('kegiatan');
$pendonor = $this->input->post('pendonor');
$kebutuhan = $this->input->post('kebutuhan');

//proses konversi nilai ke nilai alfabet

if(($kegiatan >= 1) && ($kegiatan <= 10)){
    $index_keg="SEDIKIT";
}
    
elseif(($kegiatan >=11) && ($kegiatan <= 20)){
    $index_keg="SEDANG";
}

elseif(($kegiatan >= 21) && ($kegiatan <= 31)){
    $index_keg="BANYAK";
}

if ($gol_darah == "A"){
	if(($pendonor >=1) && ($pendonor <= 300)){
		$index_pen ="SEDIKIT";
	}	

	elseif(($pendonor >= 301) && ($pendonor <= 400))
	{
		$index_pen = "SEDANG";
	}
	elseif(($pendonor >= 401 ) && ($pendonor <= 500))
	{
		$index_pen = "BANYAK";
	}
}

if ($gol_darah == "B"){
	if(($pendonor >=1) && ($pendonor <= 300)){
		$index_pen ="SEDIKIT";
	}	

	elseif(($pendonor >= 301) && ($pendonor <= 400))
	{
		$index_pen = "SEDANG";
	}
	elseif(($pendonor >= 401 ) && ($pendonor <= 500))
	{
		$index_pen = "BANYAK";
	}
}

if ($gol_darah == "O"){
	if(($pendonor >=1) && ($pendonor <= 600)){
		$index_pen ="SEDIKIT";
	}	

	elseif(($pendonor >= 601) && ($pendonor <= 1000))
	{
		$index_pen = "SEDANG";
	}
	elseif(($pendonor >= 1001 ) && ($pendonor <= 1500))
	{
		$index_pen = "BANYAK";
	}
}

if ($gol_darah == "AB"){
	if(($pendonor >=1) && ($pendonor <= 150)){
		$index_pen ="SEDIKIT";
	}	

	elseif(($pendonor >= 151) && ($pendonor <= 200))
	{
		$index_pen = "SEDANG";
	}
	elseif(($pendonor >= 201 ) && ($pendonor <= 250))
	{
		$index_pen = "BANYAK";
	}
}
if(($kebutuhan >= 1) && ($kebutuhan <= 1000))
{
	$index_keb = "SEDIKIT";
}

elseif(($kebutuhan >= 1001) && ($kebutuhan <= 2000))
{
	$index_keb = "SEDANG";
}

elseif(($kebutuhan >= 2001)  &&($kebutuhan <= 2500))

{
	$index_keb = "BANYAK";
}

$data = array(
	'bulan'=>$bulan,
	'tahun'=>$tahun,
	'gol_darah'=>$gol_darah,
	'kegiatan'=>$index_keg,
	'pendonor'=>$index_pen,
	'kebutuhan'=>$index_keb
);

// var_dump($data);
// die();

$this->load->model('M_mamdani');
$sql = $this->M_mamdani->AddDataPrediksi($data);


if($sql)
{
	redirect('admin/dataprediksi');
}

else{
	echo"gagal";
	}

}


function proses($id_prediksi)
{
	
	//proses konversi dari semua kepada kriteria STOK TETAP ATAU DITAMBAH
	$this->load->model('M_mamdani');

	$data['pecah'] = $this->M_mamdani->pecah($id_prediksi);
	// var_dump($data);
	// die();

	foreach($data['pecah'] as $row)
	{
		$id_prediksi = $row->id_prediksi;
		$bulan = $row->bulan;
		$tahun = $row->tahun;
		$gol_darah = $row->gol_darah;
		$kegiatan = $row->kegiatan;
		$pendonor = $row->pendonor;
		$kebutuhan = $row->kebutuhan;
	}

	
	// Fungsi implikasi

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
	
	// Defuzzyfikasi

	$where = array('id_prediksi'=>$id_prediksi);
	$data = array(
	'bulan'=>$bulan,
	'tahun'=>$tahun,
	'gol_darah'=>$gol_darah,
	'kegiatan'=>$kegiatan,
	'pendonor'=>$pendonor,
	'kebutuhan'=>$kebutuhan,
	'keterangan'=>$hasil
	);

	// var_dump($data);
	// die();

	$this->M_mamdani->update_hasil($data,$where);
	redirect('admin/dataprediksi');
	}

}
