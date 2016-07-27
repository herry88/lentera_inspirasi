<?php

class Laporan_m extends CI_Model {

	function ambil_data_semua($limit,$start) {
		$this->db->order_by('id','desc');
		$this->db->limit($limit,$start);
		$query = $this->db->get('finance_report');
		
		if ($query) {
			return $query->result();	
		}
		
	}
	
	function ambil_data_id($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('finance_report');
	
		if($query) {
			return $query->row();	
		}
		
	}

	function jumlah() {
        return $this->db->count_all("finance_report");
    }

    function tambah($data) {
    	$this->db->insert('finance_report', $data);

    }

	function ubah($id,$data) {
		$this->db->where('id',$id);	
		$this->db->update('finance_report',$data);	
	}

    function hapus($id) {
    	$this->db->where('id',$id);
		$this->db->delete('finance_report');
    }

}