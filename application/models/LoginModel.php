<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function cekLoginAdmin($data1){
		$query1 = $this->db->get_where('login_admin',$data1);
		return $query1;
	}

	public function cekLoginDpa($data2){
		$query2 = $this->db->get_where('dpa',$data2);
		return $query2;
	}

}