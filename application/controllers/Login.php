<?php
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_login');
			
		}

		
		public function index()
		{
			$this->load->view("login");
		}

		public function AksiLogin()
		{
			$login = $this->m_login->cek_login($this->input->post('username'),
											   $this->input->post('password'));
			if ($login == 1) {
				//ambil detail data
				$row = $this->m_login->data_login($this->input->post('username'),
												  $this->input->post('password'));
				//daftarkan session
				$data_session = array('login' => 1,
									  'username' => $login);
				$this->session->set_userdata($data_session);
				redirect (base_url());
			}
			else {
				$this->load->view('fail');
			}
		}

		public function logout()
		{
			$this->session->unset_userdata("login");
			$this->session->unset_userdata("username");
			redirect (base_url()."index.php/login");
		}

		public function register()
		{
			$this->load->view('register');
		}
		
	}
?>