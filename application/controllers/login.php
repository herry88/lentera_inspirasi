<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends CI_Controller
	{
		public function __construct()
		{
		parent :: __construct();
		$this->load->model('login_m','',TRUE);
		}

		public function index()
		{
			if ($this->session->userdata('logged_in')) {
				redirect('admin','refresh');
			}
			else {
				$data['title'] = "Login";
				$this->load->view('backend/login',$data);
			}
		}

		public function proses()
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if ($this->form_validation->run() == FALSE)
			{
				$data['title'] = "Login";
				$this->load->view('backend/login',$data);
			}
			else
			{
				$username = $this->input->post('username');
			 	$password = $this->input->post('password');
			   	$result = $this->login_m->login($username, $password);
			
			   	if($result)
			   	{


				 		$sess_array = array(
					 	'username' => $result->username,
					 	'nama' => $result->nama,
					 	'level' => $result->level,
				   		);
					   		$this->session->set_userdata('logged_in', $sess_array);

				 	
				 	redirect('admin');
			   	}
			   	else
			   	{
				 	$this->form_validation->set_message('Username atau Password Salah!');
				 	redirect('login');
			   	}
			}
		}
	}