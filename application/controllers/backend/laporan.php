<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Laporan extends CI_Controller
	{
		public function __construct()
		{
		parent :: __construct();
		$this->load->model('backend/laporan_m');
		date_default_timezone_set('Asia/Jakarta');
		}

		function index() {
			redirect('backend/laporan/beranda');
		}

		public function beranda()
		{
			if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$data['title'] = "Data Laporan Keuangan";
				$data['username'] = $session_data['username'];
				$data['nama'] = $session_data['nama'];
				$data['level'] = $session_data['level'];

				$config = array();
				$config["base_url"] = base_url()."backend/laporan/beranda";
				$config["total_rows"] = $this->laporan_m->jumlah();
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

				 $data['baris'] = $this->laporan_m->ambil_data_semua($config["per_page"], $start);
				 
				$this->load->view('backend/laporan/laporan_view',$data);
			}	
			else
			{
				redirect('login','refresh');
			}
		}

		public function tambah()
		{
			$session_data = $this->session->userdata('logged_in');

			$this->form_validation->set_rules('bulan', 'Bulan', 'required|trim');

			$config['upload_path'] = './uploads/laporan/';
			$config['allowed_types'] = 'xls|xlsx';
			$this->load->library('upload', $config);

			if ($this->session->userdata('logged_in')) {
				if($this->form_validation->run() == FALSE) {
					$data['title'] = "Tambah Laporan";
					$data['username'] = $session_data['username'];
					$data['nama'] = $session_data['nama'];
					$data['level'] = $session_data['level'];
					$this->load->helper('date');
					$this->load->view('backend/laporan/laporan_tambah',$data);
				} else {
					$link = $this->input->post('link');
				   if (!$this->upload->do_upload('link'))
					{
						redirect('backend/laporan','refresh');
					} else {
						$link = $this->upload->data('file_name');

						$data = array  ('date' => $this->input->post('bulan'),
					   				'remarks' => $this->input->post('deskripsi'),
					   				'link' => $link,
									);
					}
					$this->laporan_m->tambah($data);
					redirect('backend/laporan'); 	
				}
			}
			else
			{
				redirect('login','refresh');				
			}
		}

		function hapus($id)
		{
			if ($this->session->userdata('logged_in')) {
				$baris = $this->laporan_m->ambil_data_id($id);
					unlink('./uploads/laporan/'.$baris->pic);
				$this->laporan_m->hapus($id);
				redirect('backend/laporan');
			} else {
				redirect('login', 'refresh');
			}
		}

		function ubah ($id) {
			$session_data = $this->session->userdata('logged_in');

			$this->form_validation->set_rules('bulan', 'Bulan', 'trim|required');

			$config['upload_path'] = './uploads/laporan/';
			$config['allowed_types'] = 'xls|xlsx';
			$this->load->library('upload', $config);

			if ($this->session->userdata('logged_in')) {
				if($this->form_validation->run() == FALSE) {
					$data['title'] = "Ubah Laporan";
					$data['username'] = $session_data['username'];
					$data['nama'] = $session_data['nama'];
					$data['level'] = $session_data['level'];
					$data['baris'] = $this->laporan_m->ambil_data_id($id);

					$this->load->view('backend/laporan/laporan_ubah',$data);
				} else {
					$link = $this->input->post('link');
				   if (!$this->upload->do_upload('link'))
					{
						redirect('backend/laporan','refresh');
					} else {
						$baris = $this->laporan_m->ambil_data_id($id);
						unlink('./uploads/laporan/'.$baris->link);
						$link = $this->upload->data('file_name');

						$data = array  ('date' => $this->input->post('bulan'),
					   				'remarks' => $this->input->post('deskripsi'),
					   				'link' => $link,
									);
					}

					
					$this->laporan_m->ubah($id,$data);
					redirect('backend/laporan'); 	
				}
			}
			else
			{
				redirect('login','refresh');				
			}
		}
	}