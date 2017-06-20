<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
		public function __construct() {
					parent::__construct();
					$this->load->library('session');
					if(!$this->session->has_userdata('mail')) {
						redirect('identification');
					}
		}
	public function index()
	{
		$this->load->view('view_home');
	}
}


