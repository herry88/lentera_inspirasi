<?php

class Anggota_m extends CI_Model {

	function ambil_data_semua($limit,$start) {
		$this->db->order_by('id','desc');
		$this->db->limit($limit,$start);
		$query = $this->db->get('member');
		
		if ($query) {
			return $query->result();	
		}
		
	}
	
	function ambil_data_id($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('member');
	
		if($query) {
			return $query->row();	
		}
		
	}

	function jumlah() {
        return $this->db->count_all("member");
    }

    function tambah($data) {
    	$this->db->insert('member', $data);

    }

	function ubah($id,$data) {
		$this->db->where('id',$id);	
		$this->db->update('member',$data);	
	}

    function hapus($id) {
    	$this->db->where('id',$id);
		$this->db->delete('member');
    }

}