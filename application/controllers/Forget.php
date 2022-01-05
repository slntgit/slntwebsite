<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forget extends CI_Controller {
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
	 
		$data['title']="page title";
		$this->load->view('header',$data);
		$this->load->view('forgot');
		$this->load->view('footer');
	}
	public function getNewPassword()
	{
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules(
        'mobile', 'Mobile Number',
        'required|regex_match[/^[0-9]{10}$/]',
        array('regex_match'     => 'Enter  correct mobile number',
        	'required'     => 'Ente mobile number'));
		if ($this->form_validation->run() == FALSE) {

		} else {
        	 $ftechdata = $this->Main_model->getData('tbl_members',NULL,NULL,1,'mobile',$this->input->post('mobile'));
        	 $countrow = $ftechdata->num_rows();
        	 if ($countrow==0) {
        	 	$this->session->set_flashdata("msg",'<div class="alert alert-danger">Mobile number not register with '.base_url().'</div>');
				redirect('Forget');
        	 } else {
        	 	$newpassword=rand(9999999,99);
        	 	$postdata = array(  
				    'password' => $newpassword
				); 
				$wheredata = array(  
				   'mobile' => $this->input->post('mobile')
				); 
				$sms_message="Dear User..., new computer generated password is ".$newpassword;

        	 	$this->Main_model->updateRecord('tbl_members',$postdata,$wheredata);
        	 	$this->Main_model->sendSMS($this->input->post('mobile'),$sms_message);
        	 	$this->session->set_flashdata("msg",'<div class="alert alert-success">Check your mobile to get new computer generated password <a href="'.base_url().'Login" class="btn btn-xs btn-warning">Go To Login'.$newpassword.'</a></div>');
				redirect('Forget');
        	 }

        }
        $data['title']="page title";
		$this->load->view('header',$data);
		$this->load->view('forgot');
		$this->load->view('footer');
	}

}