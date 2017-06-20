<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Identification extends CI_Controller {

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
		$this->load->model('M_Connexion');


		$this->form_validation->set_rules('mail', 'Mail', 'valid_email');


		if ($this->form_validation->run() === FALSE){
			$this->load->view('V_Identification');
		}

		else{			
			$mail = $this->input->post('mail');
			$password = $this->input->post('password');
			$connexion=array(
				'mail'=>$mail,
				'password'=>$password
				);

			if	($iden=$this->M_Connexion->authentification($connexion)){
				$this->session->set_userdata($iden);
				redirect('C_Home');
			}
		}
	}
}






?>
