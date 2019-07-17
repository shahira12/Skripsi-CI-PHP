<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPassword extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_forgotpassword');		 
	}

	public function FormEditPassword()
	{
		
		$this->load->view("forgotpassword");
	}

	public function AksiEditPassword()
	{
		$this->M_forgotpassword->EditDataPassword();
		redirect(base_url('index.php/login'));
	}
}
