<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Tentang extends CI_Controller
	{
		public function __construct()
		{
		parent :: __construct();
		$this->load->model('backend/tentang_m');
		}

		function index() {
			$session_data = $this->session->userdata('logged_in');

			$this->form_validation->set_rules('isi', 'Isi', 'trim|required');

			if ($this->session->userdata('logged_in')) {
				if($this->form_validation->run() == FALSE) {
					$data['title'] = "Ubah Menu Tentang Kami";
					$data['username'] = $session_data['username'];
					$data['nama'] = $session_data['nama'];
					$data['level'] = $session_data['level'];
					$data['baris'] = $this->tentang_m->ambil_data();

					$this->load->view('backend/tentang/tentang_ubah',$data);
				} else {
					$isi = $this->input->post('isi');

					$data = array  ('content' => $isi);
					
					$this->tentang_m->ubah($data);
					redirect('backend/tentang'); 	
				}
			}
			else
			{
				redirect('login','refresh');				
			}
		}
	}