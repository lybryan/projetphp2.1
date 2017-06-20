<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rejoindre extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		if(!$this->session->has_userdata('mail')) {
			redirect('identification');
		}
	}

	public function index(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Model_rejoindre');


		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('psw', 'Psw', 'trim|required');


		if ($this->form_validation->run() === FALSE){
			$data['liste']=$this->Model_rejoindre->getlisteam();
			$this->load->view('view_rejoindre',$data);
		}

		else{			
			$name = $this->input->post('name');
			$psw = $this->input->post('psw');
			$membre=array(
				'name'=>$name,
				'psw'=>$psw
				);
			if	($this->Model_rejoindre->join_team($membre,$this->session->userdata('mail'))) {
				redirect('home');
			}

		}
	}
}