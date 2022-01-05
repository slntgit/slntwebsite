<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TermsAndCondition extends CI_Controller {
	public function index()
	{
		$this->load->model('Main_model');
		$data['title']="page title";
		$this->load->view('header',$data);
		$this->load->view('TermsAndCondition');
		$this->load->view('footer');
	}
}