<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view('register');
		$this->load->view('footer');

	}

	public function create()
	{
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules(
        'mobile', 'Mobile Number',
        'required|regex_match[/^[0-9]{10}$/]|is_unique[tbl_members.mobile]',
        array('is_unique'     => 'This %s already exists',
        	'regex_match'     => 'Enter  correct mobile number',
        	'required'     => 'Ente mobile number'));

		$this->form_validation->set_rules('first_name', 'Full Name','trim|required',
        array('required'     => 'Enter full name'));

		$this->form_validation->set_rules('tnc_valid', 'Term & Conditions','trim|required',
        array('required'     => 'Please accept terms & conditions'));

		$this->form_validation->set_rules('password', 'Password','trim|required',
        array('required'     => 'Enter password'));

		$this->form_validation->set_rules(
        'confirm_password', 'Confirm Password',
        'required|matches[password]',
        array('matches'     => 'Mismatch password and confirm password',
        		'required'     => 'Ente confirm password'));
if ($this->form_validation->run() == FALSE) {

		} else {
		
			$data = array(  
			    'first_name'     => $this->input->post('first_name'),  
			    'tnc_valid'  => $this->input->post('tnc_valid'),  
			    'mobile' => $this->input->post('mobile'),
			    'password' => $this->input->post('password'),
			    'registip'=>$this->input->ip_address()
			); 
			$this->db->insert('tbl_members',$data);
			$this->session->set_flashdata("msg",'<div class="alert alert-success">Your account created successfully</div>');
			redirect('Register');
		}

 
		$data['title']="page title";
		$this->load->view('header',$data);
		$this->load->view('register');
		$this->load->view('footer');
	}
}