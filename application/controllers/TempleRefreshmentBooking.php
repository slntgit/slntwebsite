<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TempleRefreshmentBooking extends CI_Controller {
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

		$this->load->view('header',$data);
	}
	
	public function index()
	{	
	    	if (isset($_COOKIE["login_user"])) {
	    	    $this->db->select('*');
				$this->db->from('slnt_member');
				$w = array('user_id'=>$_COOKIE["login_user"]);
				$this->db->where($w);
				$data['dx']=$this->db->get()->row();
				$user_id=$_COOKIE["login_user"];
	    	} else {
	    	    $user_id='';
	    	}
	    if(isset($_GET['action'])){
	        if($_GET['action']=='save/apply'){
	            	$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
	        	$this->form_validation->set_rules('name_prefix', 'Name prefix','trim|required',
	        array('required'     => 'Name prefix required!'));
	        
	        	$this->form_validation->set_rules('first_name', 'First Name','trim|required',
	        array('required'     => 'First name required!'));
	        
	        	$this->form_validation->set_rules('last_name', 'Last Name','trim|required',
	        array('required'     => 'Last name required!'));
	        
	          
	         
	            	
			$this->form_validation->set_rules(
	        'mobile', 'mobile Number',
	        'required|regex_match[/^[0-9]{8}$/]',
	        array('regex_match'     => 'Enter 8 digit correct mobile number',
	        	'required'     => 'Ente mobile number'));
	        	
	        	 
	            	
			$this->form_validation->set_rules(
	        'office_no', 'Office number',
	        'required|regex_match[/^[0-9]{8}$/]',
	        array('regex_match'     => 'Enter 8 digit correct office number',
	        	'required'     => 'Ente office number'));
	        	
	        	
			$this->form_validation->set_rules(
	        	'email', 'Email',
	        	'trim|required|valid_email',
	        array(
	        	'valid_email'     => 'Enter  correct Email',
	        	'required'     => 'Enter Email '));


			$this->form_validation->set_rules('choose_type', 'choose type','trim|required',
	        array('required'     => 'Choose type required!'));
	 

	        $this->form_validation->set_rules('choose_floor[]', 'Choose Floor','trim|required',
	        array('required'     => 'Choose floor required!'));

	        
	        $this->form_validation->set_rules('purpose', 'purpose','trim|required',
	        array('required'     => 'Purpose required!'));
	        
	        
	        $this->form_validation->set_rules('choose_date', 'choose date','trim|required',
	        array('required'     => ' Choose date required '));

			$this->form_validation->set_rules('choose_start_time', 'choose start time','trim|required',
	        array('required'     => 'Choose start time required'));

	        $this->form_validation->set_rules('choose_end_time', 'choose start time','trim|required',
	        array('required'     => 'Choose end time required'));
	        
	        
	        
	        $this->form_validation->set_rules('no_of_guests', 'Number of guests','trim|required',
	        array('required'     => 'Number of guests required!'));
	        
	        
	        $this->form_validation->set_rules('catering', 'catering','trim|required',
	        array('required'     => 'catering required!'));
    	        if ($this->form_validation->run() == FALSE) {
    
    			} else {
    			     $choose_floor=json_encode($this->input->post('choose_floor'));
    			    $intData=array(
    			            'choose_type'=>$this->input->post('choose_type'),
    			            'choose_floor'=>$choose_floor,
    			            'user_id'=>$user_id,
    			            'purpose'=>$this->input->post('purpose'),
    			            'choose_date'=>$this->input->post('choose_date'),
    			            'choose_start_time'=>$this->input->post('choose_start_time'),
    			            'choose_end_time'=>$this->input->post('choose_end_time'),
    			            'no_of_guests'=>$this->input->post('no_of_guests'),
    			            'catering'=>$this->input->post('catering'),
    			            'name_prefix'=>$this->input->post('name_prefix'),
    			            'first_name'=>$this->input->post('first_name'),
    			            'last_name'=>$this->input->post('last_name'),
    			            'email'=>$this->input->post('email'),
    			            'mobile_code'=>$this->input->post('mobile_code'),
    			            'mobile'=>$this->input->post('mobile'),
    			            'office_code'=>$this->input->post('office_code'),
    			            'office_no'=>$this->input->post('office_no'),
    			            'booking_for'=>$this->input->post('booking_for'),
    			            'post_date'=>date('Y-m-d'),
    			            'post_time'=>date('H:i:s A')
    			        );
    			       $this->db->insert('temple_refreshment_booking',$intData);
    			                
            			       	$replyt=1;
					            $this->db->select('*');
					            $this->db->from('configuration_general');
					            $this->db->where('id', $replyt);
					            $set = $this->db->get();
					            $webconfig = $set->row();
        					        $sms_message="<h4>Dear ".$this->input->post('first_name')." ".$this->input->post('last_name').",</h4><p>We have already submitted your enquiry information to temple. Temple will contact you within 24 hours.</p><h4>Regards,</h4><h4>Temple</h4>";
        							$to_email = $this->input->post('email');
        					        $this->load->library('email');
    					            $email_setting  = array('mailtype'=>'html');
                                    $this->email->initialize($email_setting);
            					        $this->email->from($webconfig->organization_email, $webconfig->organization_name);
            					        $this->email->to($to_email);
            					        $this->email->subject('Your Temple booking enquiry has been submitted to Devotee');
            					        $this->email->message($sms_message);
            					        $this->email->send();

					        
        					                $sms_message="<h4>Dear Temple,</h4><p>You have one new temple booking please check.</p>";
                							$to_email = $webconfig->organization_email;
                					        $this->load->library('email');
            					            $email_setting  = array('mailtype'=>'html');
                                            $this->email->initialize($email_setting);
            					        $this->email->from($this->input->post('email'), $this->input->post('first_name'));
            					        $this->email->to($to_email);
            					        $this->email->subject('New Temple booking received from '.$this->input->post('first_name').' '.$this->input->post('last_name'));
            					        $this->email->message($sms_message);
            					        $this->email->send();
					        
    			       $this->session->set_flashdata("success","<span class='alert alert-success'>Temple Booking enquiry has been submitted to Devotee. Temple will contact you within 24 hours</span>");
    			      redirect('Temple-Refreshment-Booking/');
    			}
	        }
	    }
	    
	    $data['[title']='';
		$this->load->view('temple-refreshment-booking',$data); 
		$this->load->view('footer');
	}
}