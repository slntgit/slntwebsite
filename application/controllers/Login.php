<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
    	$this->load->model('Main_model');
    	if (isset($_COOKIE["login_user"])) {
    		redirect('applyMembership');
    	}
	}


	public function index()
	{
		 if ($this->uri->segment(2)=='login') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules(
	        'username', 'User Name',
	        'required',
	        array('required'     => 'Enter user name'));

			$this->form_validation->set_rules(
	        'password', 'password',
	        'trim|required',
	        array('required'     => 'Enter password '));

			if ($this->form_validation->run() == FALSE) {

			} else {
				$status=1;
				$this->db->select('*');
				$this->db->from('slnt_member');
				$w = array('email'=>$this->input->post('username'), 'password'=>$this->input->post('password'), 'status'=>$status);
				$this->db->where($w);
				$dx=$this->db->get();
				if ($dx->num_rows()==0) {
					$this->session->set_flashdata("success","<span class='text-danger'>Invalid valid login details</span>");
					redirect("pujaBooking");
				} else {
					if ($this->input->post('remember')=='on') {
							$username= array(
								'name'   => 'rem_user',
							    'value'  => $this->input->post('username'),
							    'expire' => '604800',
						   	);
							$this->input->set_cookie($username);
							$password= array(
								'name'   => 'rem_pass',
							    'value'  => $this->input->post('password'),
							    'expire' => '604800',
						   	);
							$this->input->set_cookie($password);
					} else { 
						delete_cookie('username');
						delete_cookie('password');  
					}
				 	$userlogin = $dx->row();
		        	$cookie= array(
						'name'   => 'login_user',
					    'value'  => $userlogin->user_id,
					    'expire' => '604800',
				   );
				   $this->input->set_cookie($cookie);
				   
				   if(isset($_SESSION['paymentMemLink'])){
				      redirect($_SESSION['paymentMemLink']);
				   } else {
				        
				        $this->db->select('*');
						$this->db->from('slnt_user_membership');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$lastmembership = $this->db->get();
						if ($lastmembership->num_rows()>0) {
						   	if (isset($_SESSION['user']['last'])) {
					
            		        	redirect($_SESSION['user']['last']);
            		        } else {
            		            redirect("poojaBooking/Membership");
            		        }
						} else {
						    redirect('applyMembership');
						}
			 
				if (isset($_SESSION['user']['last'])) {
					
		        	redirect($_SESSION['user']['last']);
		        } else {
			        	$this->db->select('*');
						$this->db->from('slnt_user_membership');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$lastmembership = $this->db->get();
						if ($lastmembership->num_rows()>0) {
							$rdata=$lastmembership->row();	
							$membership_expire=$rdata->membership_expire;
							$membership_buy=$rdata->membership_buy;
							$membership_days=$rdata->membership_days;
							$todays=date('Ymd');
					
						}  else {
							redirect("poojaBooking/Membership");
						}
		        }
		        
		        
		        
		        
				   }
				   
				  
		        
			}
		}
	}

if ($this->uri->segment(3)=='GetNewPassword') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules(
	        'email', 'Email',
	        'trim|required|valid_email',
	        array(
	        	'valid_email'     => 'Enter  correct Email',
	        	'required'     => 'Enter Email '));

	        if ($this->form_validation->run() == FALSE) {

			} else {
				$this->db->select('*');
				$this->db->from('slnt_member');
				$w = array('email'=>$this->input->post('email'));
				$this->db->where($w);
				$dx=$this->db->get();
				if ($dx->num_rows()==1) {
								$replyt=1;
					            $this->db->select('*');
					            $this->db->from('configuration_general');
					            $this->db->where('id', $replyt);
					            $set = $this->db->get();
					            $webconfig = $set->row();
					            $userrecord=$dx->row();
					    $url = base_url().'CreatePassword/'.md5(session_id()).'/'.md5($userrecord->user_id).'/'.md5(time());
	            		$datan = array('password_reset_url'=> $url);
		                $where2 =array('email'=>$this->input->post('email'));
						$this->db->where($where2);
		                $this ->db->update('slnt_member',$datan);
 						$sms_message="Dear user, \r\n Click on the following link to reset your password\r\n\r\n".$url;
							$to_email = $this->input->post('email');
					        $this->load->library('email');
					        $this->email->from($webconfig->organization_email, $webconfig->organization_name);
					        $this->email->to($to_email);
					        $this->email->subject('Email verification code');
					        $this->email->message($sms_message);
					        $this->email->send();
					        $this->session->set_flashdata("success","<span class='text-danger'>Password reset link sent to your register email.</span>");
		               		redirect('Login/');
				} else {
					$this->session->set_flashdata("success","<span class='text-danger'>Invalid email </span>");
					redirect('Login/recover');
				}

			} 
}
   if ($this->uri->segment(3)=='verify') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules(
	        'otp', 'otp',
	        'required',
	        array('required'     => 'This field is required'));

	        if ($this->form_validation->run() == FALSE) {

			} else {
				$status=0;
				$this->db->select('*');
				$this->db->from('slnt_member');
				$w = array('email'=>$_SESSION['login']['email'], 'otp'=>$this->input->post('otp'), 'status'=>$status);
				$this->db->where($w);
				$dx=$this->db->get()->num_rows();
				if ($dx==0) {
					$this->session->set_flashdata("success","<span class='text-danger'>Invalid OTP</span>");
					redirect("Login/otp/");
				} else {
						$status2=1;
						$datan = array('status'=>  $status2);
		                $where2 =array('email'=>$_SESSION['login']['email'], 'otp'=>$this->input->post('otp'), 'status'=>$status);
						$this->db->where($where2);
		                $this ->db->update('slnt_member',$datan);
		                $cookie= array(
				          	'name'   => 'login_user',
				           	'value'  => $_SESSION['login']['id'],
				           	'expire' => '604800',
				       	);
				      	$this->input->set_cookie($cookie);


		                if (isset($_SESSION['user']['last'])) {
		                	redirect($_SESSION['user']['last']);
		                } else {

		                	redirect("poojaBooking/Services-Date-Time/");
		                }

						
				}
			}

		}

	if ($this->uri->segment(2)=='register') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules(
	        'mobile', 'Phone Number',
	        'required|regex_match[/^[0-9]{8}$/]',
	        array(
	        	'regex_match'     => 'Enter  correct Phone number',
	        	'required'     => 'Enter Phone number'));


			$this->form_validation->set_rules(
	        'office_number', 'Office Number',
	        'regex_match[/^[0-9]{8}$/]',
	        array(
	        	'regex_match'     => 'Enter  correct Phone number'));


		$this->form_validation->set_rules(
	        'email', 'Email',
	        'trim|required|valid_email|is_unique[slnt_member.email]',
	        array(
	        	'valid_email'     => 'Enter  correct Email',
	        	'required'     => 'Enter Email ',
	        	'is_unique'     => 'Email already registered '));

			$this->form_validation->set_rules('name_title', 'Full Name','trim|required',
	        array('required'     => 'Select name prefix'));

	        $this->form_validation->set_rules('first_name', 'first_name','trim|required',
	        array('required'     => 'Enter first name'));

	        $this->form_validation->set_rules('last_name', 'last_name','trim|required',
	        array('required'     => 'Enter  last name'));


	        $this->form_validation->set_rules('password', 'password','trim|required',
	        array('required'     => 'Enter  password'));

	        $this->form_validation->set_rules('confirm_password', 'confirm password','trim|required|matches[password]',
	        array('required'     => 'Enter  confirm password','matches'=> 'Password and confirm password must be same'));

 	        $this->form_validation->set_rules('address_1', 'address 1','trim|required',
	        array('required'     => 'Enter  address 1'));

	        $this->form_validation->set_rules('postal_code', 'postal code','trim|required',
	        array('required'     => 'Enter  postal code'));

	        if ($this->form_validation->run() == FALSE) {

			} else {
					
						$last = $this->db->order_by('id',"desc")->limit(1)->get('slnt_member')->row();
						$c2=$last->id;
						$c=$c2+1;
						$otp=rand(9999,99);
						$user_id='SLNT'.rand(9999,99).$c;
						$datan = array(
					       	'name_title'=>  $this->input->post('name_title'),
					       	'first_name'=>  $this->input->post('first_name'),
					       	'last_name'=>  $this->input->post('last_name'), 
					       	'email'=>  $this->input->post('email'), 
					       	'mobile_code'=> '+65', 
					       	'mobile'=>  $this->input->post('mobile'), 
					       	'password'=>  $this->input->post('password'), 
					       	'office_number'=>  $this->input->post('office_number'), 
					       	'address_1'=>  $this->input->post('address_1'),
					       	'address_2'=>  $this->input->post('address_2'), 
					       	'postal_code'=>  $this->input->post('postal_code'),
					       	'create_date'=>  $this->input->post('create_date'),
					       	'create_time'=>  $this->input->post('create_time'),
					       	'user_id'=>$user_id,
					       	'otp'=>$otp
						);
                		$this->db->insert('slnt_member',$datan);
                		
                				$replyt=1;
					            $this->db->select('*');
					            $this->db->from('configuration_general');
					            $this->db->where('id', $replyt);
					            $set = $this->db->get();
					            $webconfig = $set->row();
	                		$_SESSION['login']['email']=$this->input->post('email');
	                		$_SESSION['login']['id']=$user_id;
							$sms_message= $this->input->post('name_title')." ".$this->input->post('first_name').", Thanks for showing interest in us, Please verify your Email-ID with OTP :".$otp;
							$to_email = $this->input->post('email');
					        $this->load->library('email');
					        $this->email->from($webconfig->organization_email, $webconfig->organization_name);
					        $this->email->to($to_email);
					        $this->email->subject('Email verification code');
					        $this->email->message($sms_message);
					        $this->email->send();
		               		redirect('Login/otp/');
			}
		}

		$data['title']="page title";
		$this->load->view('header',$data);
		$this->load->view('login');
		$this->load->view('footer');
	} 

	public function submit()
	{
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules(
        'username', 'User name',
        'required',
        array('required'     => 'Ente user name'));
        $this->form_validation->set_rules(
        'password', 'Password',
        'required',
        array('required'     => 'Ente password'));
		if ($this->form_validation->run() == FALSE) {

		} else {

			$wheredata = array(  
				   'mobile' => $this->input->post('username'),
				   'password' => $this->input->post('password')
				); 
        	 $ftechdata = $this->Main_model->getMulWhereRecord('tbl_members',NULL,NULL,NULL,$wheredata);
        	 $countrow = $ftechdata->num_rows();
        	 if ($countrow==0) {
        	 	$this->session->set_flashdata("msg",'<div class="alert alert-danger">Invalid login credential</div>');
				redirect('Login');
        	 } else {
        	 	$getrow = $ftechdata->row();

        	 	$cookie1= array(
					'name'   => 'loginid',
					'value'  => $getrow->id,
					'expire' => '604800',
				);

		        $cookie2= array(
					'name'   => 'mobile',
					'value'  => $getrow->mobile,
					'expire' => '604800',
				);
				$this->input->set_cookie($cookie1);
				$this->input->set_cookie($cookie2); 
        	 	$this->session->set_flashdata("msg",'<div class="alert alert-success">Login successfully, please wait redirect to dashboard...... 
													<meta http-equiv="refresh" content="5;url='.base_url().'Dashboard" />
        	 		</div>');
				redirect('login');
        	 }

        }
        $data['title']="page title";
		$this->load->view('header',$data);
		$this->load->view('login');
		$this->load->view('footer');
	}
}