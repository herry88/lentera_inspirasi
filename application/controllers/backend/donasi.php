<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Donasi extends CI_Controller
	{
		public function __construct()
		{
		parent :: __construct();
		$this->load->model('backend/donasi_m');
		}

		public function index()
		{
			redirect('backend/donasi/beranda/');
		}

		function beranda() 
		{
				$session_data = $this->session->userdata('logged_in');
				if ($this->session->userdata('logged_in')) {
					$data['title'] = "Donasi";
					$data['username'] = $session_data['username'];
					$data['nama'] = $session_data['nama'];
					$data['level'] = $session_data['level'];

					$config = array();
					$config["base_url"] = base_url()."backend/pengguna/beranda";
					$config["total_rows"] = $this->donasi_m->jumlah();
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
					$data['baris'] = $this->donasi_m->ambil_data_semua($config["per_page"], $start);
					$this->load->view('backend/donasi/donasi_view',$data);
			}	
			else
			{
				redirect('login','refresh');
			}
		}

		function hapus($id) {
			$session_data = $this->session->userdata('logged_in');
			if ($this->session->userdata('logged_in')) {
				$this->donasi_m->hapus($id);
				redirect('backend/donasi','refresh');
			} else {
				redirect('login', 'refresh');
			}
		}

		function konfirmasi($id) {
			if ($this->session->userdata('logged_in')) {
					$data = array('status' => '1',
									);
						$this->donasi_m->konfirmasi($id,$data);
						redirect('backend/donasi'); 
			}
		else {
				redirect('login','refresh');
		}
	}
}