<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplyMembership extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
    	$this->load->model('Main_model');
		$data['title']="page title";
		//$_SESSION['user']['last']='pujaBooking/Membership/'.$this->uri->segment(3);
		

		$webcon = $this->Main_model->getData('slnt_membership','id','ASC',NULL,'status',1);
		$data['membership_list']=$webcon->result();
		$this->load->view('header',$data);
	}
	
	public function index()
	{	
		$this->load->view('applyMembership'); 
		$this->load->view('footer');
	}
}