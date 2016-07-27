<?php

class Tujuan_m extends CI_Model {

	function ambil_data() {
		$this->db->where('jenis_menu','tujuan');
		$query = $this->db->get('menu', 1);
	
		if($query) {
			return $query->row();	
		}
		
	}

	function ubah($data) {
		$this->db->where('jenis_menu', 'tujuan');	
		$this->db->update('menu',$data);	
	}
}