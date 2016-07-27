<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_m extends CI_Model {

	function ambil_data_semua($limit,$start) {
		$this->db->order_by('id','desc');
		$this->db->limit($limit,$start);
		$query = $this->db->get('donation');
		
		if ($query) {
			return $query->result();	
		}
		
	}

	function jumlah() {
        return $this->db->count_all("donation");
    }
}

/* End of file dashboard_m.php */
/* Location: ./application/models/backend/dashboard_m.php */