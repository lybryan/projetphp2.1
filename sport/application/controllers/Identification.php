<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Identification extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		if($this->session->has_userdata('mail')) {
			redirect('home');
		}
	}
	public function index(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Model_connexion');


		$this->form_validation->set_rules('mail', 'Mail', 'valid_email');


		if ($this->form_validation->run() === FALSE){
			$this->load->view('view_iden');
		}

		else{			
			$mail = $this->input->post('mail');
			$password = $this->input->post('password');
			$connexion=array(
				'mail'=>$mail,
				'password'=>$password
				);

			if	($iden=$this->Connexion_model->authentification($connexion)){
				$this->session->set_userdata($iden);
				redirect('home');
			}
		}
	}
}






?>
