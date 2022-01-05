<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class erro404 extends CI_Controller {
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
		$webcon = $this->Main_model->getData('add_products','id','ASC',NULL,'category','Home');
		$data['home_services']=$webcon->result();
		$this->load->view('header',$data);
	}
	
	public function index()
	{	
		$this->load->view('erro404'); 
		$this->load->view('footer');
	}
}