<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	function ambil_proyek($limit = null)
		{
			if ($limit) {
				$this->db->limit($limit);
			}
			$query = $this->db->get('proyek');
			return $query->result();
		}	
	function ambil_proyek_single($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('proyek',1);
		return $query->row();
	}

	function ambil_post()
		{
			$query = $this->db->get('post');
			return $query->result();
		}	
	function ambil_post_single($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('post',1);
		return $query->row();
	}

	function ambil_tentang()
	{
		$this->db->where('jenis_menu', 'tentang_kami');
		$query = $this->db->get('menu', 1);
		return $query->row();
	}

	function ambil_tujuan()
	{
		$this->db->where('jenis_menu', 'tujuan');
		$query = $this->db->get('menu', 1);
		return $query->row();
	}

	function ambil_anggota()
	{
		$query = $this->db->get('member');
		return $query->result();
	}

	function ambil_laporan()
	{
		$query = $this->db->get('finance_report');
		return $query->result();
	}

	function ambil_galeri()
	{
		$query = $this->db->get('gallery');
		return $query->result();
	}

}

/* End of file home_m.php */
/* Location: ./application/models/home_m.php */