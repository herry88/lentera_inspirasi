<?php

class Tentang_m extends CI_Model {

	function ambil_data() {
		$this->db->where('jenis_menu','tentang_kami');
		$query = $this->db->get('menu', 1);
	
		if($query) {
			return $query->row();	
		}
		
	}

	function ubah($data) {
		$this->db->where('jenis_menu', 'tentang_kami');	
		$this->db->update('menu',$data);	
	}
}