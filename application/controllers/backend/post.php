<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Post extends CI_Controller
	{
		public function __construct()
		{
		parent :: __construct();
		$this->load->model('backend/post_m');
		date_default_timezone_set('Asia/Jakarta');
		}

		function index() {
			redirect('backend/post/beranda');
		}

		public function beranda()
		{
			if ($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$data['title'] = "Post";
				$data['username'] = $session_data['username'];
				$data['nama'] = $session_data['nama'];
				$data['level'] = $session_data['level'];

				$config = array();
				$config["base_url"] = base_url()."backend/post/beranda";
				$config["total_rows"] = $this->post_m->jumlah();
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
				 if ($data['level'] == 'Admin') {
				 $data['baris'] = $this->post_m->ambil_data_semua($config["per_page"], $start);
				 }
				 else {
				 $data['baris'] = $this->post_m->ambil_data_user($config["per_page"], $start,$data['username']);
				 }
				 
				$this->load->view('backend/post/post_view',$data);
			}	
			else
			{
				redirect('login','refresh');
			}
		}

		public function tambah()
		{
			$session_data = $this->session->userdata('logged_in');

			$this->form_validation->set_rules('judul', 'Judul', 'trim');
			

			$config['upload_path'] = './uploads/post/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);

			if ($this->session->userdata('logged_in')) {
				if($this->form_validation->run() == FALSE) {
					$data['title'] = "Tambah Post";
					$data['username'] = $session_data['username'];
					$data['nama'] = $session_data['nama'];
					$data['level'] = $session_data['level'];
					$this->load->helper('date');
					$this->load->view('backend/post/post_tambah',$data);
				} else {
					$judul = set_value('judul');
					$isi = $this->input->post('isi');
					$waktu = date('Y-m-d H:i:s');
					$gambar = $this->input->post('gambar');
					$button = $this->input->post('button');
				   if (!$this->upload->do_upload('gambar'))
					{
						$data = array  ('title' => $judul,
						   				'content' => $isi,
						   				'date' => $waktu,
						   				'user' => $session_data['username'],
						   				'pic' => 'no_image.jpg',
						   				'status' => $button
										);
					} else {
						$nama_gambar = $this->upload->data('file_name');

						$data = array  ('title' => $judul,
					   				'content' => $isi,
					   				'date' => $waktu,
					   				'pic' => $nama_gambar,
					   				'user' => $session_data['username'],
					   				'status' => $button
									);
					}
					$this->post_m->tambah($data);
					redirect('backend/post'); 	
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
				$baris = $this->post_m->ambil_data_id($id);
				if ($baris->pic <> 'no_image.jpg'){
					unlink('./uploads/post/'.$baris->pic);
				}
				$this->post_m->hapus($id);
				redirect('backend/post');
			} else {
				redirect('login', 'refresh');
			}
		}

		function ubah ($id) {
			$session_data = $this->session->userdata('logged_in');

			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');

			$config['upload_path'] = './uploads/post/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);

			if ($this->session->userdata('logged_in')) {
				if($this->form_validation->run() == FALSE) {
					$data['title'] = "Ubah Post";
					$data['username'] = $session_data['username'];
					$data['nama'] = $session_data['nama'];
					$data['level'] = $session_data['level'];
					$data['baris'] = $this->post_m->ambil_data_id($id);

					$this->load->view('backend/post/post_ubah',$data);
				} else {
					$judul = set_value('judul');
					$isi = $this->input->post('isi');
					$waktu = date('Y-m-d H:i:s');
					$gambar = $this->input->post('gambar');
					$button = $this->input->post('button');
				   if (!$this->upload->do_upload('gambar'))
					{
						$data = array  ('title' => $judul,
						   				'content' => $isi,
						   				'date' => $waktu,
						   				'status' => $button
										);
					} else {
						$baris = $this->post_m->ambil_data_id($id);
						if ($baris->pic <> 'no_image.jpg'){
						unlink('./uploads/post/'.$baris->pic);
						}
						$nama_gambar = $this->upload->data('file_name');

						$data = array  ('title' => $judul,
					   				'content' => $isi,
					   				'date' => $waktu,
					   				'pic' => $nama_gambar,
					   				'status' => $button
									);
					}

					
					$this->post_m->ubah($id,$data);
					redirect('backend/post'); 	
				}
			}
			else
			{
				redirect('login','refresh');				
			}
		}
	}