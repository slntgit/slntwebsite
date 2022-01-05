
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {
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
	if (isset($_GET['action'])) {
 		if ($_GET['action']=='save/apply') {
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

			$this->form_validation->set_rules('first_name', 'First Name','trim|required',
	        array('required'     => 'Enter first name'));
	 

	        $this->form_validation->set_rules('date_of_birth', 'Date of Birth','trim|required',
	        array('required'     => 'Enter  Date Of Birth'));

	        $this->form_validation->set_rules('postal_code', 'Postal Code','trim|required',
	        array('required'     => 'Enter Postal Code'));

	        $this->form_validation->set_rules('city', 'city','trim|required',
	        array('required'     => 'Enter City Name'));
	        $this->form_validation->set_rules('state', 'State','trim|required',
	        array('required'     => 'Enter State Name'));

			$this->form_validation->set_rules('country', 'Country','trim|required',
	        array('required'     => 'Enter Country Name'));

	        $this->form_validation->set_rules('full_address', 'Address','trim|required',
	        array('required'     => 'Enter Address Name'));
	        $this->form_validation->set_rules('tnc', 'term and condition','trim|required',
	        array('required'     => 'Please Accept Term & Condition'));

	        if ($this->form_validation->run() == FALSE) {

			} else {


				$config['upload_path']          = './assets/career/';
                $config['allowed_types']        = 'pdf|PDF';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('resume'))
                {
                	$this->session->set_flashdata('image_error', '<span class="text-danger">Select image in PDF format</span>');	
                } else {
                		$x=$this->upload->data();
                		$resume = $x['file_name'];
                		$datan = array(
                			'resume'=>$resume,
							'first_name'=>  $this->input->post('first_name'),  
							'last_name'=>  $this->input->post('last_name'), 
							'date_of_birth'=>  $this->input->post('date_of_birth'),
							'email'=>  $this->input->post('email'),
							'contact_no'=>  $this->input->post('contact_no'),
							'postal_code'=>  $this->input->post('postal_code'), 
							'city'=>  $this->input->post('city'), 
							'country'=>  $this->input->post('country'), 
							'full_address'=>  $this->input->post('full_address'), 
							'tnc'=>  $this->input->post('tnc'), 
							'state'=>  $this->input->post('state'),
							'createdate'=>  date('d-m-Y'),
							'createtime'=>  date('H:i:s A')
						);
					 
						$this ->db->insert('career',$datan);
						$this->session->set_flashdata('success', '<div class="alert alert-success">Your application post successfully<meta http-equiv="refresh" content="1;url='.base_url().'career" /></div>');
				//redirect('career');  
				// echo '<script>window.location.href='.base_url().'/career;</script>';
                }

			}
 		}
 	}
        $this->load->view('vacancy');
        $this->load->view('footer');	
    }
} 