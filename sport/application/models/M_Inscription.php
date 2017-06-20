<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class M_Inscription extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function create_user($data){
		return	$this->db->insert('ptUser', $data);	

	}
}