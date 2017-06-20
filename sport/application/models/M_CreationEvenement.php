<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class M_CreationEvenement extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function create_event($data_evenement){
		
		return	$this->db->insert('ptEvent', $data_evenement);

	}
}