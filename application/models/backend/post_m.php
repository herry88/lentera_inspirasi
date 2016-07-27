<?php

class Post_m extends CI_Model {

	function ambil_data_semua($limit,$start) {
		$this->db->order_by('id','desc');
		$this->db->limit($limit,$start);
		$query = $this->db->get('post');
		
		if ($query) {
			return $query->result();	
		}
		
	}

	function ambil_data_user($limit,$start,$penulis) {
		$this->db->where('user', $penulis);
		$this->db->order_by('id','asc');
		$this->db->limit($limit,$start);
		$query = $this->db->get('post');
		
		if ($query) {
			return $query->result();	
		}
	}

	function ambil_data_id($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('post');
	
		if($query) {
			return $query->row();	
		}
		
	}

	function jumlah() {
        return $this->db->count_all("post");
    }

    function tambah($data) {
    	$this->db->insert('post', $data);

    }

	function ubah($id,$data) {
		$this->db->where('id',$id);	
		$this->db->update('post',$data);	
	}

    function hapus($id) {
    	$this->db->where('id',$id);
		$this->db->delete('post');
    }

}