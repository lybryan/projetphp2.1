<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_CreationEvenement extends CI_Controller {

	public function index(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('M_CreationEvenement');

		$this->form_validation->set_rules('type', 'Type', 'required');


		if ($this->form_validation->run() === FALSE){
			$this->load->view('V_CreationEvenement');
		}
		else{
			$type = $this->input->post('type');
			$debut = $this->input->post('debut');
			$fin = $this->input->post('fin');
			$periodicite = $this->input->post('periodicite');
			$lieu = $this->input->post('lieu');


			$data_evenement=array(
				'type'=>$type,
				'debut'=>$debut,
				'fin'=>$fin,
				'periodicite'=>$periodicite,
				'lieu'=>$lieu,			
				);

			if ( (preg_match("/^[0-9]{4}-[0-3][0-9]-[0-1][0-9]$/",$data_evenement['debut'])) && (preg_match("/^[0-9]{4}-[0-3][0-9]-[0-1][0-9]$/",$data_evenement['fin']))) {
				if	($this->M_CreationEvenement->create_event($data_evenement))
					$this->load->view('V_Home');
					
				else
					echo 'pb insertion bd';
			}

			else 
				echo 'une des deux date n\'a pas le bon format';
		}
	}

}







