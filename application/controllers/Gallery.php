<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
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
		
	$this->db->select('*');
	 $this->db->from('slnt_gallery_categories');
	 //$this->db->order_by('name','ASC');
	 $setx = $this->db->get();
	 $gallery['gal_cat'] = $setx->result();

		if ($this->uri->segment(2)!='') {
			$webcon2 = $this->Main_model->getData('slnt_img_gallery','id','DESC',NULL,'type',$this->uri->segment(2));
		} else {
			$webcon2 = $this->Main_model->getData('slnt_img_gallery','id','DESC',NULL,NULL,NULL);
		}
		


		$gallery['galleryimg']=$webcon2->result();
		$this->load->view('gallery',$gallery); 
		$this->load->view('footer');
	}
}