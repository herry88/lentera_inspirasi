<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pengguna extends CI_Controller
	{
		public function __construct()
		{
		parent :: __construct();
		$this->load->model('backend/pengguna_m');
		}

		public function index()
		{
			redirect('backend/pengguna/beranda/');
		}

		function beranda() 
		{
			if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				if ($session_data['level'] == 'Admin') {
					$data['title'] = "Pengguna";
					$data['username'] = $session_data['username'];
					$data['nama'] = $session_data['nama'];
					$data['level'] = $session_data['level'];

					$config = array();
					$config["base_url"] = base_url()."backend/pengguna/beranda";
					$config["total_rows"] = $this->pengguna_m->jumlah();
					$config["per_page"] = 10;
					$config["uri_segment"] = 4;
					$config['use_page_numbers'] = TRUE;
					
					$config['full_tag_open'] = "<ul class='pagination pull-right'>";
					$config['full_tag_close'] ="</ul>";
					$config['num_tag_open'] = '<li>';
					$config['num_tag_close'] = '</li>';
					$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
					$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
					$config['next_tag_open'] = "<li>";
					$config['next_tagl_close'] = "</li>";
					$config['prev_tag_open'] = "<li>";
					$config['prev_tagl_close'] = "</li>";
					$config['first_tag_open'] = "<li>";
					$config['first_tagl_close'] = "</li>";
					$config['last_tag_open'] = "<li>";
					$config['last_tagl_close'] = "</li>";
						 
		        	$this->pagination->initialize($config);
					$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
					$start = ($page-1) * $config["per_page"];
					$data['no'] = $start;

					$data["links"] = $this->pagination->create_links();
					$data['baris'] = $this->pengguna_m->ambil_data_semua($config["per_page"], $start);
					$this->load->view('backend/pengguna/pengguna_view',$data);
				} else {
					redirect('admin','refresh');
				}
			}	
			else
			{
				redirect('login','refresh');
			}
		}

		function tambah() {
			if ($this->session->userdata('logged_in')) {
				$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
				$this->form_validation->set_rules('username', 'Username', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'trim|required');
				$session_data = $this->session->userdata('logged_in');
				if ($session_data['level'] == 'Admin') {
					if($this->form_validation->run() == FALSE) {
						$data['title'] = "Pengguna";
						$data['username'] = $session_data['username'];
						$data['nama'] = $session_data['nama'];
						$data['level'] = $session_data['level'];

						$this->load->view('backend/pengguna/pengguna_tambah',$data);
					} else {
						$nama = set_value('nama');
						$email = set_value('email');
						$username = set_value('username');
						$password = set_value('password');
					   	$data = array('name' => $nama,
					   				'email' => $email,
									'username' => $username,
									'password' => sha1(md5($password.'_lenterainspirasi')),
									'level' => 'Operator'
									);

						$this->pengguna_m->tambah($data);
						redirect('backend/pengguna'); 
					}
				} else {
					redirect('admin','refresh');
				}
			}	
			else
			{
				redirect('login','refresh');
			}
		}

		function hapus($id) {
			$session_data = $this->session->userdata('logged_in');
			if ($this->session->userdata('logged_in')) {
				$this->pengguna_m->hapus($id);
				redirect('backend/pengguna','refresh');
			} else {
				redirect('login', 'refresh');
			}
		}

		function ubah($id) {
			if ($this->session->userdata('logged_in')) {
				$this->form_validation->set_rules('name', 'Nama', 'trim|required');
				$this->form_validation->set_rules('username', 'Username', 'trim');
				$session_data = $this->session->userdata('logged_in');

					if($this->form_validation->run() == FALSE) {
						$data['title'] = "Pengguna";
						$data['username'] = $session_data['username'];
						$data['nama'] = $session_data['nama'];
						$data['level'] = $session_data['level'];

						$data['baris'] = $this->pengguna_m->ambil_data_id($id);
						$this->load->view('backend/pengguna/pengguna_ubah',$data);
					} else {
						$nama = set_value('name');
						$username = set_value('username');
						$email = set_value('email');
						$password = $this->input->post('password');
						
						if (!$password == '') {
						   	$data = array('name' => $nama,
									'username' => $username,
									'email' => $email,
									'password' => sha1(md5($password.'_lenterainspirasi'))
									);
						} else {
						   	$data = array('name' => $nama,
										'username' => $username,
										'email' => $email
										);
						}
						$this->pengguna_m->ubah($id,$data);
						redirect('backend/pengguna'); 
					}
			}
		else {
				redirect('login','refresh');
		}
	}

	function ubah_profil() {
		if ($this->session->userdata('logged_in')) {
				$this->form_validation->set_rules('nama', 'Nama', 'trim|required|xss_clean');
				$this->form_validation->set_rules('username', 'Username', 'trim|xss_clean');
				$session_data = $this->session->userdata('logged_in');
				$username = $session_data['username'];

				if($this->form_validation->run() == FALSE) {
					$data['title'] = "Pengguna";
					$data['username'] = $session_data['username'];
					$data['nama'] = $session_data['nama'];
					$data['level'] = $session_data['level'];

					$data['baris'] = $this->pengguna_m->ambil_data_id($username);
					$this->load->view('backend/pengguna/ubah_profil',$data);
					} else {
						$nama = set_value('nama');
						$username = set_value('username');
						$password = $this->input->post('password');
						
						if (!$password == '') {
						   	$data = array('nama' => $nama,
									'username' => $username,
									'password' => md5($password)
									
									);
						} else {
						   	$data = array('nama' => $nama,
										'username' => $username
										);
						}
						$this->pengguna_m->ubah($username,$data);
						redirect('backend/pengguna'); 
					}
		}
		else {
				redirect('login','refresh');
		}
	}
}