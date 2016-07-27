<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Tujuan extends CI_Controller
	{
		public function __construct()
		{
		parent :: __construct();
		$this->load->model('backend/tujuan_m');
		}

		function index() {
			$session_data = $this->session->userdata('logged_in');

			$this->form_validation->set_rules('isi', 'Isi', 'trim|required');

			if ($this->session->userdata('logged_in')) {
				if($this->form_validation->run() == FALSE) {
					$data['title'] = "Ubah Menu Tujuan";
					$data['username'] = $session_data['username'];
					$data['nama'] = $session_data['nama'];
					$data['level'] = $session_data['level'];
					$data['baris'] = $this->tujuan_m->ambil_data();

					$this->load->view('backend/tujuan/tujuan_ubah',$data);
				} else {
					$isi = $this->input->post('isi');

					$data = array  ('content' => $isi);
					
					$this->tujuan_m->ubah($data);
					redirect('backend/tujuan'); 	
				}
			}
			else
			{
				redirect('login','refresh');				
			}
		}
	}