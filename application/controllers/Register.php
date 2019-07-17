<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_register');
			
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function DaftarUser()
	{
		$this->M_register->TambahData();
		redirect(base_url('index.php/login'));
	}
}