<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class M_CreationEquipe extends CI_Model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function create_team($data_equipe){
		return	$this->db->insert('ptTeam', $data_equipe);	

	}
}