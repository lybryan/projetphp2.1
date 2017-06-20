<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreationEquipe extends CI_Controller {

	public function index(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Model_creation_equipe');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('psw_inscription', 'Psw_inscription', 'required');


		if ($this->form_validation->run() === FALSE){
			$this->load->view('view_creation_equipe');
		}
		else{
			$name = $this->input->post('name');
			$city = $this->input->post('city');
			$psw_inscription = $this->input->post('psw_inscription');
			$sports = $this->input->post('sports');
			$description = $this->input->post('description');
			$mixite = $this->input->post('mixite');
			$logo = $this->input->post('logo');
			$photo = $this->input->post('photo');

			$data_equipe=array(
				'name'=>$name,
				'city'=>$city,
				'psw_inscription'=>$psw_inscription,
				'sports'=>$sports,
				'description'=>$description,
				'mixite'=>$mixite,
				'logo'=>$logo,
				'photo'=>$photo,
				);
			if	($this->Model_creation_equipe->create_team($data_equipe)){
				$this->load->view('view_home');
			}
		}
	}

}







