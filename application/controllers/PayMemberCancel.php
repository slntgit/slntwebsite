<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PayMemberCancel extends CI_Controller {
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
	 	$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->order_by('id','DESC');
	    $data['donate_category'] = $this->db->get()->result();

		$this->load->view('header',$data);
	}
	
	public function index()
	{	
		$this->load->view('pay-member-cancel'); 
		$this->load->view('footer');
	}
}