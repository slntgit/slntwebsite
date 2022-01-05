<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
    	$this->load->model('Main_model');
    	$about=$this->Main_model->getData('news_n_press_media','id','DESC',NULL,'type','1');
		$data['datax']=$about->result();
		$data['title']="page title";


		$perm1 = $this->uri->segment(2);
		$perm2 = $this->uri->segment(3);
		if ($perm2!='') {
			   	$about=$this->Main_model->getData('news_n_press_media','id','DESC',10,'type','1');
			$data['datax2']=$about->result();


			$about=$this->Main_model->getData('news_n_press_media',NULL,NULL,NULL,'id',$perm1);
			$data['detailsnews']=$about->row();
			//print_r($datax);
		}
		$this->load->view('header',$data);
	}




	public function index() 
	{
		
		$this->load->view('news');
		$this->load->view('footer');
	}

	public function Details()
	{
		$this->load->view('news-details');
		$this->load->view('footer');
	}

	

}
