<?php

class pengguna_m extends CI_Model {

	function ambil_data_semua($limit,$start) {
		
		$this->db->order_by('username','asc');
		$this->db->limit($limit,$start);
		$this->db->where('level != "Admin"');
		$query = $this->db->get('user');
		
		if ($query) {
			return $query->result();	
		}
		
	}

	function ambil_data_operator ($limit,$start) {
		$this->db->where('level', 'Operator');
		$this->db->order_by('username','asc');
		$this->db->limit($limit,$start);
		$query = $this->db->get('user');
		
		if ($query) {
			return $query->result();	
		}
		
	}

	function ambil_data_id($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('user');
	
		if($query) {
			return $query->row();	
		}
		
	}

	function jumlah() {
        return $this->db->count_all("user");
    }

    function tambah($data) {
    	$this->db->insert('user', $data);

    }

	function ubah($id,$data) {
		$this->db->where('id',$id);	
		$this->db->update('user',$data);	
	}

    function hapus($id) {
    	$this->db->where('id',$id);
		$this->db->delete('user');
    }

}