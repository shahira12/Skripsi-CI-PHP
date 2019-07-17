<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$login = $this->session->userdata("login"); //$_SESSION
		if ($login==""){
			redirect(base_url()."index.php/login");
		}
	}
    
    //-------------------------- SIDEBAR WAS HERE -------------------------------------

    public function sidebar()
	{
		$this->load->include('sidebar');
	}

	//-------------------------- SIDEBAR END -----------------------------------------

	//-------------------------- HEADER WAS HERE -------------------------------------

    public function header()
	{
		$this->load->include('header');
	}

	//-------------------------- HEADER END -----------------------------------------

	//-------------------------- SIDEBAR WAS HERE -------------------------------------

    public function footer()
	{
		$this->load->include('footer');
	}

	//-------------------------- SIDEBAR END -----------------------------------------

	public function index()
	{
		$this->load->view('admina');
	}

	//--------------------------BEGIN MANAGEMENT TRAFFIC-------------------------------------

	//BEGIN DATA DONOR DARAH

	//untuk menampilkan grafik

	public function grafikdonordarah()
	{
		$this->load->model('M_donor_darah');
		$data['donor_darah'] = $this->M_donor_darah->grafikdonor();
		$this->load->view('grafikdonordarah',$data);
	}

	//UNTUK PRINT LAPORAN
	public function print_datadonordarah()
	{
		$this->load->model('M_donor_darah');
		$data['donor_darah'] = $this->M_donor_darah->tampildatalaporan1();
		$this->load->view('print_datadonordarah', $data);
	}

	//untuk menampilkan tabel
	public function datadonordarah() 
	{
		$this->load->model('M_donor_darah');
		$data['donor_darah'] = $this->M_donor_darah->ShowDataDonorDarah();
		$this->load->view('data_donor_darah', $data); //namaview
	}

	public function FormAddDonorDarah() //untuk mengalihkan ke halaman tambah
	{
		$this->load->view('add_data_donor_darah');
	}

	public function AksiAddDonorDarah() //untuk tambah data >> ke model
	{
		$this->load->model('M_donor_darah');
		$this->M_donor_darah->AddDataDonorDarah();
		redirect(base_url('index.php/admin/datadonordarah')); //fungsi halaman awal
	}

	public function FormEditDonorDarah($id_donor) //mengalihkan ke halaman edit berdasarkan id
	{
		$this->load->model('M_donor_darah');
		$data['donor_darah']=$this->M_donor_darah->get_datalaporandonordarah_selected($id_donor)->result();
		$this->load->view("edit_donor_darah", $data);
	}

	public function AksiEditDonorDarah() //untuk edit data >> model
	{
		$this->load->model('M_donor_darah');
		$this->M_donor_darah->EditDataDonorDarah();
		redirect(base_url('index.php/admin/datadonordarah'));
	}

	public function AksiDeleteDonorDarah($id_donor) //hapus data
	{
		$this->load->model('M_donor_darah');
		$this->M_donor_darah->DeleteDataDonorDarah($id_donor);
		redirect(base_url('index.php/admin/datadonordarah'));
	}

	//END DATA DONOR DARAH

	public function grafikstokdarah()
	{
		$this->load->model('M_stok_darah');
		$data['stok_darah'] = $this->M_stok_darah->grafikstok();
		$this->load->view('grafikstokdarah',$data);
	}

	public function print_datastokdarah()
	{
		$this->load->model('M_stok_darah');
		$data['stok_darah'] = $this->M_stok_darah->tampildatalaporan3();
		$this->load->view('print_datastokdarah', $data);
	}


	public function datastokdarah() //untuk menampilkan tabel
	{
		$this->load->model('M_stok_darah');
		$data['stok_darah'] = $this->M_stok_darah->ShowDataStokDarah();
		$this->load->view('data_stok_darah', $data); //namaview
	}

	public function FormAddStokDarah() //untuk mengalihkan ke halaman tambah
	{
		$this->load->view('add_data_stok_darah');
	}

	public function AksiAddStokDarah() //untuk tambah data >> ke model
	{
		$this->load->model('M_stok_darah');
		$this->M_stok_darah->AddDataStokDarah();
		redirect(base_url('index.php/admin/datastokdarah')); //fungsi halaman awal
	}

	public function FormEditStokDarah($id_stok) //mengalihkan ke halaman edit berdasarkan id
	{
		$this->load->model('M_stok_darah');
		$data['stok_darah']=$this->M_stok_darah->get_datalaporanstokdarah_selected($id_stok)->result();
		$this->load->view("edit_stok_darah", $data);
	}

	public function AksiEditStokDarah() //untuk edit data >> model
	{
		$this->load->model('M_stok_darah');
		$this->M_stok_darah->EditDataStokDarah();
		redirect(base_url('index.php/admin/datastokdarah'));
	}

	public function AksiDeleteStokDarah($id_stok) //hapus data
	{
		$this->load->model('M_stok_darah');
		$this->M_stok_darah->DeleteDataStokDarah($id_stok);
		redirect(base_url('index.php/admin/datastokdarah'));
	}


	public function grafikproduksidarah()
	{
		$this->load->model('M_produksi_darah');
		$data['produksi_darah'] = $this->M_produksi_darah->grafikproduksi();
		$this->load->view('grafikproduksidarah',$data);
	}


		public function print_dataproduksidarah()
	{
		$this->load->model('M_produksi_darah');
		$data['produksi_darah'] = $this->M_produksi_darah->tampildatalaporan2();
		$this->load->view('print_dataproduksidarah', $data);
	}


	public function dataproduksidarah() //untuk menampilkan tabel
	{
		$this->load->model('M_produksi_darah');
		$data['produksi_darah'] = $this->M_produksi_darah->ShowDataProduksiDarah();
		$this->load->view('data_produksi_darah', $data); //namaview
	}

	public function FormAddProduksiDarah() //untuk mengalihkan ke halaman tambah
	{
		$this->load->view('add_data_produksi_darah');
	}

	public function AksiAddProduksiDarah() //untuk tambah data >> ke model
	{
		$this->load->model('M_produksi_darah');
		$this->M_produksi_darah->AddDataProduksiDarah();
		redirect(base_url('index.php/admin/dataproduksidarah')); //fungsi halaman awal
	}

	public function FormEditProduksiDarah($id_produksi) //mengalihkan ke halaman edit berdasarkan id
	{
		$this->load->model('M_produksi_darah');
		$data['produksi_darah']=$this->M_produksi_darah->get_datalaporanproduksidarah_selected($id_produksi)->result();
		$this->load->view("edit_produksi_darah", $data);
	}

	public function AksiEditProduksiDarah() //untuk edit data >> model
	{
		$this->load->model('M_produksi_darah');
		$this->M_produksi_darah->EditDataProduksiDarah();
		redirect(base_url('index.php/admin/dataproduksidarah'));
	}

	public function AksiDeleteProduksiDarah($id_produksi) //hapus data
	{
		$this->load->model('M_produksi_darah');
		$this->M_produksi_darah->DeleteDataProduksiDarah($id_produksi);
		redirect(base_url('index.php/admin/dataproduksidarah'));
	}

	

	public function datapermintaandarah() //untuk menampilkan tabel
	{
		$this->load->model('M_permintaan_darah');
		$data['permintaan_darah'] = $this->M_permintaan_darah->ShowDataPermintaanDarah();
		$this->load->view('data_permintaan_darah', $data); //namaview
	}

	public function print_datapermintaandarah()
	{
		$this->load->model('M_permintaan_darah');
		$data['permintaan_darah'] = $this->M_permintaan_darah->tampildatalaporan4();
		$this->load->view('print_datapermintaandarah', $data);
	}

	public function FormAddPermintaanDarah() //untuk mengalihkan ke halaman tambah
	{
		$this->load->view('add_data_permintaan_darah');
	}

	public function AksiAddPermintaanDarah() //untuk tambah data >> ke model
	{
		$this->load->model('M_permintaan_darah');
		$this->M_permintaan_darah->AddDataPermintaanDarah();
		redirect(base_url('index.php/admin/datapermintaandarah')); //fungsi halaman awal
	}

	public function FormEditPermintaanDarah($id_permintaan) //mengalihkan ke halaman edit berdasarkan id
	{
		$this->load->model('M_permintaan_darah');
		$data['permintaan_darah']=$this->M_permintaan_darah->get_datalaporanpermintaandarah_selected($id_permintaan)->result();
		$this->load->view("edit_permintaan_darah", $data);
	}

	public function AksiEditPermintaanDarah() //untuk edit data >> model
	{
		$this->load->model('M_permintaan_darah');
		$this->M_permintaan_darah->EditDataPermintaanDarah();
		redirect(base_url('index.php/admin/datapermintaandarah'));
	}

	public function AksiDeletePermintaanDarah($id_permintaan) //hapus data
	{
		$this->load->model('M_permintaan_darah');
		$this->M_permintaan_darah->DeleteDataPermintaanDarah($id_permintaan);
		redirect(base_url('index.php/admin/datapermintaandarah'));
	}


	public function dataprediksi() //untuk menampilkan tabel
	{
		$this->load->model('M_mamdani');
		$data['mamdani'] = $this->M_mamdani->ShowDataPrediksi();
		$this->load->view('data_prediksi', $data); //namaview
	}

	public function print_dataprediksi()
	{
		$this->load->model('M_mamdani');
		$data['mamdani'] = $this->M_mamdani->tampildatalaporan5();
		$this->load->view('print_dataprediksi', $data);
	}


	public function FormAddPrediksi() //untuk mengalihkan ke halaman tambah
	{
		$this->load->view('add_prediksi');
	}

	public function AksiAddPrediksi() //untuk tambah data >> ke model
	{
		$this->load->model('M_mamdani');
		$this->M_mamdani->AddDataPrediksi();
		redirect(base_url('index.php/admin/dataprediksi')); //fungsi halaman awal
	}

	public function AksiDeletePrediksi($id_prediksi) //hapus data
	{
		$this->load->model('M_mamdani');
		$this->M_mamdani->DeletePrediksi($id_prediksi);
		redirect(base_url('index.php/admin/dataprediksi'));
	}


}
