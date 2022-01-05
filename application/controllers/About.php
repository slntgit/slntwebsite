<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
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
	 

		$webcon2 = $this->Main_model->getData('tbl_web_images','id','ACS',1,'type',4);
		$data['homeaboutimg']=$webcon2;

		$homeabout = $this->Main_model->getData('tbl_pages','id','DESC',NULL,'pagid',1);
        $data['home_intro']=$homeabout->row();
		$this->load->view('header',$data);
	}
	
	public function index()
	{	
		$this->load->view('about'); 
		$this->load->view('footer');
	}

	// public function temple_rules(){
 //        $this->load->view('templerules');
 //        $this->load->view('footer');
 //    }
}