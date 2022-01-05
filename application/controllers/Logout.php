<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
    	$this->load->model('Main_model');
	}


	public function index()
	{
		delete_cookie('login_user'); 
		unset($_SESSION['login']['email']);
		unset($_SESSION['login']['id']);
		redirect('Login');
	}

}