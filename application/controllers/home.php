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

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */