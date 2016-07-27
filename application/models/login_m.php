<?php
class Login_m extends CI_Model
{
 function login($username, $password)
 {
   $this->db->where('username', $username);
   $this->db->where('password', SHA1(MD5($password.'_lenterainspirasi')));
   $this->db->limit(1);

   $query = $this->db->get('user');

   if($query->num_rows() == 1)
   {
     return $query->row();
   }
   else
   {
     return false;
   }
 }
}