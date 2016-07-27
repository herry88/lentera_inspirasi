<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');
	}

	public function index()
	{	
		$data['title'] = "Home";
		$data['proyek'] = $this->home_m->ambil_proyek(3);
		$this->load->view('home/home',$data);
	}

	public function tentang()
	{
		$data['title'] = "Tentang Kami";
		$data['tentang'] = $this->home_m->ambil_tentang();
		$data['tujuan'] = $this->home_m->ambil_tujuan();
		$data['anggota'] = $this->home_m->ambil_anggota();
		$this->load->view('home/tentang',$data);
	}

	public function proyek($id = null)
	{
		$data['title'] = 'Proyek Sosial';
		if ($id == null) {
			$data['proyek'] = $this->home_m->ambil_proyek();

			$this->load->view('home/proyek', $data);
		} else {
			$data['proyek'] = $this->home_m->ambil_proyek_single($id);

			$this->load->view('home/proyek_single', $data);
		}
	}

	public function post($id = null)
	{
		$data['title'] = 'Post';
		if ($id == null) {
			$data['post'] = $this->home_m->ambil_post();

			$this->load->view('home/post', $data);
		} else {
			$data['post'] = $this->home_m->ambil_post_single($id);

			$this->load->view('home/post_single', $data);
		}
	}

	public function laporan()
	{
		$data['title'] = 'Laporan Keuangan';
		$data['laporan'] = $this->home_m->ambil_laporan();

		$this->load->view('home/laporan', $data);
	}

	public function galeri()
	{
		$data['title'] = 'Galeri';
		$data['galeri'] = $this->home_m->ambil_galeri();

		$this->load->view('home/galeri', $data);
	}

	public function donasi()
	{
		$this->form_validation->set_rules('name', 'Nama', 'trim|required');
		$data['title'] = 'Donasi';
		if($this->form_validation->run() == FALSE) {
			
		} else {
			$data = array(
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'amount' => $this->input->post('amount'),
					'remarks' => $this->input->post('remarks')
				);

			$this->home_m->save_donation($data);
		}
		$this->load->view('home/donasi', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */