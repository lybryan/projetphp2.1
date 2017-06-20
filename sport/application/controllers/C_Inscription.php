<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Inscription extends CI_Controller {

	public function index(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('M_Inscription');


		$this->form_validation->set_rules('mail', 'Mail', 'valid_email|is_unique[ptUser.mail]');


		if ($this->form_validation->run() === FALSE){
			$this->load->view('V_Inscription');
		}
		else{
			$mail = $this->input->post('mail');
			$nom = $this->input->post('nom');
			$prenom = $this->input->post('prenom');
			$password = $this->input->post('password');

			$data=array(
				'mail'=>$mail,
				'nom'=>$nom,
				'prenom'=>$prenom,
				'password'=>$password,
				);
			if	($this->Model_inscription->create_user($data)){
				$this->load->view('V_Identification');
			}
		}
	}

}








?>