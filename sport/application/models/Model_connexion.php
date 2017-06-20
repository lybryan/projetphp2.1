<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Connexion_model extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function authentification($connexion){
		$query=$this->db->select('mail','password')
				->from('ptUser')
				->where('mail',$connexion['mail'])
				->where('password',$connexion['password'])
				->get()
				->row_array();
		if(count($query) == 1)
			return $query;
		else
			return false;		
	}
}