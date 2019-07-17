 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fuzzy extends CI_Controller {

	/**
	 * Program Skripsi Panji Kusuma Prasetyo
	 * Metode Fuzzy Mamadani
	 * 04 Januari 2017
	 *
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	 
	function __construct() {
		parent::__construct();
		$this->load->model('modelQuery');
	}
	
	public function inisialisasi()
	{
		$nilai = array(
			'id_pegawai' => $this->uri->segment(4), //ID_PEGAWAI
			
			//Kemampuan
			'nilai_kemampuan' => array(
				$this->uri->segment(5), //Job Knowledgen 1
				$this->uri->segment(6), //Creative Idea 5
				$this->uri->segment(7), //Depedability 2
				$this->uri->segment(8), //Performance Under Presure 3
				$this->uri->segment(10) //Interpersonal Relationship 4
			),
			
			//Penyelesaian Pekerjaan
			'nilai_pekerjaan' => array(
				$this->uri->segment(9), //Attendance
				$this->uri->segment(11), //Accuracy
				$this->uri->segment(12), //House Keeping
				$this->uri->segment(13), //Quantity Of Work
				$this->uri->segment(14) //Courtesy
			)
		);
	
		return $nilai;
	}
	
	public function nilaiRataRata()
	{
		$nilai = $this->inisialisasi();
		$rataRata = array(
			$rataRata_Kemampuan = (array_sum($nilai['nilai_kemampuan'])/sizeof($nilai['nilai_kemampuan'])),
			$rataRata_Pekerjaan = (array_sum($nilai['nilai_pekerjaan'])/sizeof($nilai['nilai_pekerjaan']))
		);
		
		return $rataRata;
	}
	
	public function HitungDerajatKeanggotaan()
	{
		$nilaiRataRata = $this->nilaiRataRata();
		for($x = 0; $x < sizeof($nilaiRataRata); $x++){
			
			/*
				Menghitung derajat keanggotaan menggunakan dengan kurva bahu
				dengan interval 20
			*/
			$i = 4;
			for($y = 20; $y < 100; $y += 20){
				if($nilaiRataRata[$x] > $y && $nilaiRataRata[$x] < $y + 20){
					//kurva turun 
					$derajatKeanggotaan[$x][$i-1] = ($nilaiRataRata[$x] - $y)/20;
					//kurva naik 
					$derajatKeanggotaan[$x][$i] = (($y+20) - $nilaiRataRata[$x])/20;
				}
				$i--;
			}
			// Jika Nilai rata-rata dibawah angka bulat
			
			$i = 4;
			for($y = 20; $y <= 100; $y += 20){
				if($nilaiRataRata[$x] == $y){
					$derajatKeanggotaan[$x][$i] = 1;
				}
				$i--;
			}
		} // Jika Nilai rata-rata bulat
		
		//Angka iterasi Variabel $y sampai 5 adalah jumlah domain
		for($x = 0; $x < sizeof($nilaiRataRata); $x++){
			for($y = 0; $y < 5; $y++){
				if(!empty($derajatKeanggotaan[$x][$y])){
					$derajatKeanggotaan[$x][$y] = $derajatKeanggotaan[$x][$y];
				}else{
					$derajatKeanggotaan[$x][$y] = 0;
				}
			}
		} // Jika Nilai 0
				
		return $derajatKeanggotaan;
	}
	
	public function implikasi(){
		$nilaiDerajatKeanggotaan = $this->HitungDerajatKeanggotaan();
		
		$arrayAturan = array(
			array(100 , 100 , 80 , 60 , 60),
			array(100 , 80 , 80 , 60 , 40),
			array(80 , 80 , 60 , 40 , 40),
			array(80 , 60 , 60 , 40 , 20),
			array(60 , 60 , 40 , 20 , 20)
		);

		for($x = 0; $x < 5; $x++){
			if($nilaiDerajatKeanggotaan[0][$x] != 0){
				$arrayTabelImplikasiPekerjaan[$x] = array($nilaiDerajatKeanggotaan[0][$x],$nilaiDerajatKeanggotaan[0][$x],$nilaiDerajatKeanggotaan[0][$x],$nilaiDerajatKeanggotaan[0][$x],$nilaiDerajatKeanggotaan[0][$x]);	
			}else{
				$arrayTabelImplikasiPekerjaan[$x] = array(0 , 0 , 0 , 0 , 0);	
			}
		} // Nilai ke samping
		
		for($x = 0; $x < 5; $x++){
			$arrayTabelImplikasiKamapuan[$x] = $nilaiDerajatKeanggotaan[1];
		}
				
		for($x = 0; $x < sizeof($arrayTabelImplikasiKamapuan); $x++){
			for($y = 0; $y < 5; $y++){
				$arrayTabelImplikasi[$x][$y] = min($arrayTabelImplikasiKamapuan[$x][$y] , $arrayTabelImplikasiPekerjaan[$x][$y]);
			}
		} // Nilai ke bawah
		
		$i =  0;
		for($x = 0; $x < sizeof($arrayTabelImplikasiKamapuan); $x++){
			for($y = 0; $y < 5; $y++){
				if($arrayTabelImplikasi[$x][$y] != 0){
					$tempImplikasi[$i] = $arrayTabelImplikasi[$x][$y];
					$tempAturan[$i] = $arrayAturan[$x][$y];
					$i++;
				}
			}
		}
		
		$i = 0;
		$tempHasil = array_unique($tempAturan);
		for($x = 0; $x < sizeof($tempAturan); $x++){
			if(!empty($tempHasil[$x])){
				$tempHasil[$i] = $tempHasil[$x];
				$i++;
			}
		}
		
		$i = 0;
		for($x = 0; $x < sizeof($tempHasil); $x++){
			for($y = 0; $y < sizeof($tempAturan); $y++){
				if(!empty($tempHasil[$x]) && $tempHasil[$x] == $tempAturan[$y]){
					$hasilJadiImplikasi[$x][$i] = $tempImplikasi[$y];
					$i++;
				}
			}
			$i = 0;
		} // Pencocokan aturan
		
		for($x = 0; $x < sizeof($hasilJadiImplikasi); $x++){
			$hasilJadiImplikasi[$x] = max($hasilJadiImplikasi[$x]);
		}
		
		for($x = 0; $x < sizeof($hasilJadiImplikasi); $x++){
			$tempHasilAkhir[$x] = $hasilJadiImplikasi[$x] * $tempHasil[$x];
		}
		
		return array_sum($tempHasilAkhir)/array_sum($hasilJadiImplikasi);
	} // Defuzzifikasi
	
	public function fuzzifikasi(){
		$id = $this->uri->segment(4);
		$nilaiFuzzi = $this->implikasi();
		
		$this->session->set_flashdata('id', $id);
		$this->session->set_flashdata('nilai', $nilaiFuzzi);
		
		redirect('controller_promosi/tampil_hasil', 'refresh');
	} 
	
}