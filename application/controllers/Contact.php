<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
    	$this->load->model('Main_model');
    	$webcon = $this->Main_model->getData('add_products','id','ASC',NULL,'category','Home');
				$data['home_services']=$webcon->result();
				$this->load->view('header',$data);
	}



	public function index()
	{
		$data['title']="page title";
		$configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
        $data['webconfig']=$configwebsite->row();
         $webconfig=$configwebsite->row();
        if (isset($_GET['action'])) {
        	if ($_GET['action']=='post/query') {
        		
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
		$this->form_validation->set_rules(
        'contact_no', 'Phone Number',
        'required|regex_match[/^[0-9]{8}$/]',
        array('regex_match'     => 'Enter 8 digit correct Phone number',
        	'required'     => 'Ente Phone number'));
		$this->form_validation->set_rules(
        	'email', 'Email',
        	'trim|required|valid_email',
        array(
        	'valid_email'     => 'Enter  correct Email',
        	'required'     => 'Enter Email '));

		$this->form_validation->set_rules('name', 'Full Name','trim|required',
        array('required'     => 'Enter full name'));
 

        $this->form_validation->set_rules('query', 'Message','trim|required',
        array('required'     => 'Enter  Message'));

        if ($this->form_validation->run() == FALSE) {

		} else {
			
			$message='Name :  '.$this->input->post('name').', Message : '.$this->input->post('query').', Mobile : +65 '.$this->input->post('contact_no').', Email : '.$this->input->post('email');
            $subject='Contact Us Query';
            $from_email=$webconfig->organization_email;
            $to_email=$webconfig->organization_email;
            $from_name=$webconfig->organization_name;
        $mails = $this->Main_model->sendMail($from_email,$from_name,$to_email,$subject,$message);
        	if ($mails) {
        		$this->session->set_flashdata("msg",'<div class="alert alert-success">Your query post successfully</div>');
        	} else {
        		$this->session->set_flashdata("msg",'<div class="alert alert-danger">Somthing went wrong try again after some time </div>');
        	}
			redirect('contact');
		}

        }  
    } 
		$this->load->view('contact',$data);
		$this->load->view('footer');
	}
}
 