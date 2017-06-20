<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Rejoindre extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		if(!$this->session->has_userdata('mail')) {
			redirect('C_Identification');
		}
	}

	public function index(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('M_Rejoindre');


		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('psw', 'Psw', 'trim|required');


		if ($this->form_validation->run() === FALSE){
			$data['liste']=$this->M_Rejoindre->getlisteam();
			$this->load->view('V_Rejoindre',$data);
		}

		else{			
			$name = $this->input->post('name');
			$psw = $this->input->post('psw');
			$membre=array(
				'name'=>$name,
				'psw'=>$psw
				);
			if	($this->M_Rejoindre->join_team($membre,$this->session->userdata('mail'))) {
				redirect('C_Home');
			}

		}
	}
}