<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PoojaBooking extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		 date_default_timezone_set("Asia/Calcutta");
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
    	$this->load->model('Main_model');
	} 
	public function index() 
	{ 
    	    if(isset($_GET['type'])){
    	            $_SESSION['type']['pooja']=$_GET['type'];  
    	    } else {
    	       if(!isset($_SESSION['type']['pooja'])){
    	            redirect('poojaBooking/Membership?type=pooja');
    	       }
    	    }
			$this->db->select('*');
			$this->db->from('slnt_membership');
			$data['data_membership']=$this->db->get();

		if (isset($_COOKIE["login_user"])) {
    		$this->db->select('*');
			$this->db->from('slnt_member');
			$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
			$data['userDetails']=$this->db->get()->row();

						$this->db->select('*');
						$this->db->from('slnt_user_membership');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"],'pay_status'=>1,'status'=>1));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['user_membership'] = $this->db->get();
    	}

        if ($this->uri->segment(3)=='PayNow') {
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules(
	        'pay_percent', 'Name',
	        'required',
	        array('required'     => 'Select percentage '));
	        
	        $this->form_validation->set_rules(
	        'totalamt', 'Name',
	        'required',
	        array('required'     => 'Enter amount '));
	       if ($this->form_validation->run() == FALSE) {

			} else {
			    
			    	    $this->db->select('*');
						$this->db->from('slnt_booking_slot');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$booking_details = $this->db->get()->row();
						
						
						
        			    $amt_pay=$this->input->post('totalamt')*$this->input->post('pay_percent')/100;
        			    $due_amt=$this->input->post('totalamt')-$amt_pay;
			            $datan = array(
					       	'paydate'=>  date('d-m-Y'), 
					       	'paytime'=>  date('H:i:s A'),
					       	'total'=>  $this->input->post('totalamt'),
					       	'payment_id'=>  time(),
					       	'pay_percent'=>  $this->input->post('pay_percent'),
					       	'amt_pay'=>  $amt_pay, 
					       	'due_amt'=>  $due_amt,
					       	'booking_id'=>  $booking_details->id,
					       	'paywith'=>$this->input->post('payment')
					   );
                	$this->db->insert('slnt_payment_summery',$datan);
                	if($this->input->post('payment')=='Paypal'){
                	  redirect('PayWithPayPal/'.$booking_details->id);  
                	}
                    	
			}
        }
    	if ($this->uri->segment(4)=='buyNow') {
    		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules(
	        'name_as_nric', 'Name',
	        'required',
	        array('required'     => 'Enter Name (As Per NRIC)'));

	        $this->form_validation->set_rules(
	        'gende', 'Select gender',
	        'required',
	        array('required'     => 'Select gender'));


	        $this->form_validation->set_rules(
	        'days', 'Select day',
	        'required',
	        array('required'     => 'Select day'));
	        $this->form_validation->set_rules(
	        'month', 'Select month',
	        'required',
	        array('required'     => 'Select month'));
	        $this->form_validation->set_rules(
	        'year', 'Select year',
	        'required',
	        array('required'     => 'Select year'));

	        $this->form_validation->set_rules(
	        'postal_code', 'Select postal_code',
	        'required',
	        array('required'     => 'Select postal code'));

	        if ($this->input->post('nationality')=='Other') {
	        	$this->form_validation->set_rules(
		        'nationality_other', 'Enter other nationality',
		        'required',
		        array('required'     => 'Enter other nationality'));
	        }

	         $this->form_validation->set_rules(
	        'nric_passport', 'NRIC / PassPort Number',
	        'required',
	        array('required'     => 'Enter NRIC / PassPort Number'));

	           $this->form_validation->set_rules(
	        'nationality', 'Nationality',
	        'required',
	        array('required'     => 'Enter nationality'));

	            $this->form_validation->set_rules(
	        'address_1', 'Address',
	        'required',
	        array('required'     => 'Enter address 1'));

	             $this->form_validation->set_rules(
	        'address_2', 'Address 2',
	        'required',
	        array('required'     => 'Enter address 2'));

	        
			$this->form_validation->set_rules(
	        'mobile', 'Phone Number',
	        'required|regex_match[/^[0-9]{8}$/]',
	        array(
	        	'regex_match'     => 'Enter 8 digit correct mobile number',
	        	'required'     => 'Enter mobile number'));
 

		$this->form_validation->set_rules(
	        'email', 'Email',
	        'trim|required|valid_email',
	        array(
	        	'valid_email'     => 'Enter  correct Email',
	        	'required'     => 'Enter Email '));


	        $this->form_validation->set_rules(
	        'marital_status', 'Marital Status',
	        'required',
	        array('required'     => 'Select Marital Status'));
 	        if ($this->form_validation->run() == FALSE) {

			} else {
						$last = $this->db->order_by('id',"desc")->limit(1)->get('slnt_user_membership')->row();
						@$c2=$last->id;
						$c=$c2+1;
							$otp=rand(9999,99);
							$membership_id='SLNTMEM'.rand(9999,99).$c;
							$this->db->select('*');
							$this->db->from('slnt_membership');
							$this->db->where('id',$this->input->post('sel_mem'));
							$data_m=$this->db->get()->row();
						$membership_days=$data_m->membership_days;
						$title=$data_m->title;
						$membership_amount=$data_m->membership_amount;
						$description=$data_m->description;
						$membership_expire = date("Ymd", strtotime("+".$membership_days." day"));
						$datan = array(
							'user_id'=>$_COOKIE["login_user"],
							'membership_id'=>$membership_id,
					       	'membership_days'=> $membership_days,
					       	'membership_title'=> $title,
					       	'membership_amount'=> $membership_amount, 
					       	'membership_description'=> $description, 
					       	'membership_expire'=> $membership_expire, 
					       	'membership_buy'=>  date('Ymd'),
					       	'membership_create_date'=>  date('d-m-Y'), 
					       	'membership_create_time'=>  date('H:i:s A'),
					       	'sel_member_id'=>  $this->input->post('sel_mem'),
					       	'name_as_nric'=>  $this->input->post('name_as_nric'),
					       	'nric_passport'=>  $this->input->post('nric_passport'),
					       	'gende'=>  $this->input->post('gende'), 
					       	'name_title'=>  $this->input->post('name_title'),
					       	'days'=>  $this->input->post('days'),
					       	'month'=>  $this->input->post('month'),
					       	'year'=>  $this->input->post('year'),
					       	'nationality'=>  $this->input->post('nationality'),
					       	'nationality_other'=>  $this->input->post('nationality_other'),
					       	'address_1'=>  $this->input->post('address_1'),
					       	'address_2'=>  $this->input->post('address_2'),
					       	'postal_code'=>  $this->input->post('postal_code'),
					       	'home_tel_code'=> '+65',
					       	'home_tel'=>  $this->input->post('home_tel'),
					       	'mobile'=>  $this->input->post('mobile'),
					       	'email'=>  $this->input->post('email'),
					       	'marital_status'=>  $this->input->post('marital_status'),
					       	'mobile_code'=>  '+65'
						);
                	$this->db->insert('slnt_user_membership',$datan);
                   	redirect('poojaBooking/MembershipStep2');
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
		               		redirect('poojaBooking/');
				} else {
					$this->session->set_flashdata("success","<span class='text-danger'>Invalid email </span>");
					redirect('poojaBooking/recover');
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
					redirect("poojaBooking/otp/");
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
		                unset($_SESSION['login']['email']);
		                unset($_SESSION['login']['id']);

		                if (isset($_SESSION['user']['last'])) {
		                	redirect($_SESSION['user']['last']);
		                } else {

		                	redirect("poojaBooking/Services-Date-Time/");
		                }

						
				}
			}

		}
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
					redirect("poojaBooking");
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
							exit();
						}  else {
							redirect("poojaBooking/Membership");
						}
		        }
			}
		}
	}
if(isset($_GET['action'])){
   if($_GET['action']=='do-save/data'){
      
        $sel_date=$_GET['day'].', '.$_GET['d'].'-'.$_GET['m'].'-'.$_GET['y'];
        
        $this->db->select('*');
		$this->db->from('slnt_puja');
		$w = array('id'=>$_GET['poojaId']);
		$this->db->where($w);
		$dx=$this->db->get()->row();
		$venue_amount=$dx->venue_price;
 
   	$member_price=$dx->member_price;
	$non_member_price=$dx->non_member_price;
	if(date('Ymd')>=$dx->fill_from_date && date('Ymd')<=$dx->fill_to_date){
	    $fill_from_date=$dx->fill_from_date;
    	$fill_to_date=$dx->fill_to_date;
        $offer_mem_price=$dx->offer_mem_price;
    	$offer_non_mem_price=$dx->offer_non_mem_price; 
	} else {
	    $fill_from_date=0.00;
    	$fill_to_date=0.00;
        $offer_mem_price=0.00;
    	$offer_non_mem_price=0.00;  
	}
	              if($this->input->post('catering')!=''){
				    $catering = $this->input->post('catering');
				} else {
				    $catering=1;
				}
				 if($this->input->post('lunch')!=''){
				    $lunch = $this->input->post('lunch');
				    if($lunch==0){
				       $lunch_member= $this->input->post('lunch_member');
				       $tot_lunch= $this->input->post('tot_lunch');
				    } else {
				      $lunch_member= 0.00;
				      $tot_lunch= 0.00;  
				    }
				} else {
				    $lunch=1;
				    $lunch_member= 0.00;
				    $tot_lunch= 0.00; 
				}
				
				if($this->input->post('dinner')!=''){
				    $dinner = $this->input->post('dinner');
				     if($dinner==0){
				       $dinner_member= $this->input->post('dinner_member');
				       $tot_dinner= $this->input->post('tot_dinner');
				    } else {
				      $dinner_member= 0.00;
				      $tot_dinner= 0.00;  
				    }
				} else {
				    $dinner=1;
				    $dinner_member= 0.00;
				    $tot_dinner= 0.00;  
				}
				if($this->input->post('refreshment')!=''){
				    $refreshment = $this->input->post('refreshment');
				    if($refreshment==0){
				       $refreshment_member= $this->input->post('refreshment_member');
				       $tot_refreshment= $this->input->post('tot_refreshment');
				    } else {
				      $refreshment_member= 0.00;
				      $tot_refreshment= 0.00;  
				    }
				} else {
				    $refreshment=1;
				    $refreshment_member= 0.00;
				    $tot_refreshment= 0.00;  
				}
				 
				 
				 	if($this->input->post('time_range_to')!=''){
				    $time_range_to= $this->input->post('time_range_to');
				} else {
				    $time_range_to='';
				}
				
				if($this->input->post('time_range_from')!=''){
				    $time_range_from = $this->input->post('time_range_from');
				} else {
				    $time_range_from='';
				}
				
				if($this->input->post('home_address')!=''){
				    $home_address = $this->input->post('home_address');
				} else {
				    $home_address='';
				}
				
				
				if($this->input->post('postal_code')!=''){
				    $postal_code = $this->input->post('postal_code');
				} else {
				    $postal_code='';
				}
				
				if($this->input->post('picup')!=''){
				    $picup= $this->input->post('picup');
				} else {
				    $picup='';
				}
				 
		    $this->db->select('*');
    		$this->db->from('slnt_puja_time');
            $this->db->where('id',$_GET['poojaTime']);
            $seltime = $this->db->get()->row();
        $pooja_time_from=$seltime->from_time;
		$pooja_time_to=$seltime->to_time;
    $datan = array(
        'puja_type'=> $_SESSION['type']['pooja'],
		'pre_priest'=>  $this->input->post('pre_priest'),
		'sel_priest'=>  $this->input->post('sel_priest'),
		'sel_priest_rs'=>  25.00,
		'venue'=>  $this->input->post('venue'), 
		'venue_amount'=>  $venue_amount, 
		'home_address'=>  $home_address, 
		'postal_code'=>  $postal_code, 
		'picup'=>  $picup, 
		'puja_samagri'=>  $this->input->post('puja_samagri'),
		'pooja_samagri_amt'=>  $this->input->post('pooja_samagri_amt'), 
		'havan_samagri'=>  $this->input->post('havan_samagri'),
		'havan_samagri_amt'=>  $this->input->post('havan_samagri_amt'),
		'bhog_prasad'=>  $this->input->post('bhog_prasad'),
		'bhog_prasad_amt'=>  $this->input->post('bhog_prasad_amt'),
		'catering'=>  $catering,
		'catering_items'=> json_encode(array(
							'menus' => $this->input->post('menus'), 
							'menus_title' => $this->input->post('menus_title'), 
							'pax_n_price' => $this->input->post('pax_n_price'), 
							'note_for_catering' => $this->input->post('note_for_catering'), 
							'items' => $this->input->post('items')
						)),
		'time_range_to'=>  $time_range_to,
		'time_range_from'=>  $time_range_from,
		'note_for_temple'=>  $this->input->post('note_for_temple'),
		'booking_for'=>  $this->input->post('booking_for'),
		'user_id'=>  $_COOKIE["login_user"], 
		'status'=>  0, 
		'puja_id'=>  $_GET['poojaId'],
		'time_id'=>  $_GET['poojaTime'],
		'm'=>  $_GET['m'],
		'y'=>  $_GET['y'],
		'd'=>  $_GET['d'],
		'day'=>  $_GET['day'],
		'sel_date'=>  $sel_date,
		'member_price'=>  $member_price,
		'non_member_price'=>  $non_member_price,
		'fill_from_date'=>  $fill_from_date,
		'fill_to_date'=>  $fill_to_date,
		'offer_mem_price'=>  $offer_mem_price,
		'offer_non_mem_price'=>  $offer_non_mem_price,
		'create_date'=>  date('d-m-Y'), 
		'create_time'=>  date('H:i:s A'),
		'pooja_time_from'=>  date('H:i:s A',strtotime($pooja_time_from)),
		'pooja_time_to'=>  date('H:i:s A',strtotime($pooja_time_to))
	);
    $this ->db->insert('slnt_booking_slot',$datan); 
	redirect('poojaBooking/Preview-and-Payment?poojaId'.$_GET['poojaId'].'&poojaTime='.$_GET['poojaTime'].'&m='.$_GET['m'].'&d='.$_GET['d'].'&y='.$_GET['y'].'&day='.$_GET['day']);
   } 
}
// 	if ($this->uri->segment(3)=='save-booking-info') {
//  						$datan = array(
//  						'puja_type'=> 'puja',
// 					       	'pre_priest'=>  $this->input->post('pre_priest'),
// 					       	'sel_priest'=>  $this->input->post('sel_priest'),
// 					       	'venue'=>  $this->input->post('venue'), 
// 					       	'venue_amount'=>  $this->input->post('venue_amount'), 
// 					       	'home_address'=>  $this->input->post('home_address'), 
// 					       	'postal_code'=>  $this->input->post('postal_code'), 
// 					       	'picup'=>  $this->input->post('picup'), 
// 					       	'puja_samagri'=>  $this->input->post('puja_samagri'),
// 					       	'pooja_samagri_amt'=>  $this->input->post('pooja_samagri_amt'), 
// 					       	'havan_samagri'=>  $this->input->post('havan_samagri'),
// 					       	'havan_samagri_amt'=>  $this->input->post('havan_samagri_amt'),
// 					       	'bhog_prasad'=>  $this->input->post('bhog_prasad'),
// 					       	'bhog_prasad_amt'=>  $this->input->post('bhog_prasad_amt'),
// 					       	'catering'=>  $this->input->post('catering'),
// 					       	'lunch'=>  $this->input->post('lunch'),
// 					       	'dinner'=>  $this->input->post('dinner'),
// 					       	'refeshments'=>  $this->input->post('refreshment')
// 						);
//  						$this->db->where('puja_id',$this->input->post('pujaid'));
//                 		$this->db->update('slnt_booking_slot',$datan);
//                 redirect('poojaBooking/Preview-and-Payment');
// 	} 
	

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
	        'trim|required|valid_email',
	        array(
	        	'valid_email'     => 'Enter  correct Email',
	        	'required'     => 'Enter Email '));

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
							$sms_message= $this->input->post('name_title')." ".$this->input->post('first_name').", Thanks for showing interest in us, Please verify your Email-ID with OTP :".$otps;
							$to_email = $this->input->post('email');
					        $this->load->library('email');
					        $this->email->from($webconfig->organization_email, $webconfig->organization_name);
					        $this->email->to($to_email);
					        $this->email->subject('Email verification code');
					        $this->email->message($sms_message);
					        $this->email->send();
		               		redirect('poojaBooking/otp/');
			}
		}

					if ($this->uri->segment(3)=='save') {
						$time_slot_index=$this->input->post('time_slot_index');
						$datan = array(
					       	'puja_type'=> 'puja',
					       	'puja_id'=>  $this->input->post('puja_id'),
					       	'time_id'=>  $this->input->post('time_slot'.$time_slot_index),
					       	'user_id'=>  $_COOKIE["login_user"], 
					       	'sel_date'=>  $this->input->post('sel_date'.$time_slot_index), 
					       	'status'=>  0, 
					       	'create_date'=>  date('d-m-Y'), 
					       	'create_time'=>  date('H:i:s A')
						);
 
	               		$this ->db->insert('slnt_booking_slot',$datan); 
                 	redirect('poojaBooking/Booking-Information');
					}

				 
					if ($this->uri->segment(3)=='Update_services') {
						$time_slot_index=$this->input->post('time_slot_index');
						$datan = array(
							'puja_type'=> 'puja',
					       	'puja_id'=>  $this->input->post('puja_id'),
					       	'time_id'=>  $this->input->post('time_slot'.$time_slot_index),
					       	'user_id'=>  $_COOKIE["login_user"], 
					       	'sel_date'=>  $this->input->post('sel_date'.$time_slot_index), 
					       	'status'=>  0, 
					       	'create_date'=>  date('d-m-Y'), 
					       	'create_time'=>  date('H:i:s A')
						);
                		$this ->db->insert('slnt_booking_slot',$datan); 
                		redirect('poojaBooking/Booking-Information');
					}

				 



					if ($this->uri->segment(2)=='Preview-and-Payment') {

							$_COOKIE["login_user"];
						    $this->db->select('*');
					        $this->db->from('slnt_booking_slot');
					        $this->db->where('user_id',$_COOKIE["login_user"]);
					        $this->db->where('status',0);
					        $this->db->order_by('id','DESC');
					        $this->db->limit(1);
					        $mybooing = $this->db->get();
					        if ($mybooing->num_rows()==0) {
							    redirect('poojaBooking');
							}
							$data['pujabooking']=$mybooing->row();
					}


if ($this->uri->segment(2)=='Thank-You') {

	 
						// if (isset($_GET['bkid'])) {
						// 	if ($_GET['bkid']!='') {
						// 		$_COOKIE["login_user"];
						// 	    $this->db->select('*');
						//         $this->db->from('slnt_booking_slot');
						//         $this->db->where('user_id',$_COOKIE["login_user"]);
						//         $this->db->where('id',$_GET["bkid"]);
						//         $this->db->where('status',0);
						//         $this->db->order_by('id','DESC');
						//         $this->db->limit(1);
						//         $mybooing = $this->db->get();
						//         if ($mybooing->num_rows()==0) {
						// 		    redirect('pujaBooking');
						// 		}
						// 		$data['pujabooking']=$mybooing->row();
						// 	} else {
						// 		//redirect('pujaBooking/Preview-and-Payment');
						// 	}
						// } else {
						// 		//redirect('pujaBooking/Preview-and-Payment');
						// }
							
					}

		$data['title']="page title";
		$webcon = $this->Main_model->getData('add_products','id','ASC',NULL,'category','Home');
		$data['home_services']=$webcon->result();
	 
		$this->load->view('header',$data);
		$this->load->view('puja-booking');
		$this->load->view('footer');

		
	}

	// public function recover()
	// {
		 	
	// 	$data['title']="page title";
	// 	$webcon = $this->Main_model->getData('add_products','id','ASC',NULL,'category','Home');
	// 	$data['home_services']=$webcon->result();
	 
	// 	$this->load->view('header',$data);
	// 	$this->load->view('recover-password');
	// 	$this->load->view('footer'); 
	// }

public function red()
	{
	   redirect('poojaBooking/ExpireNotification'); 
}
	public function getServices()
	{
				 
					$this->db->select('*');
					$this->db->from('slnt_puja');  
					    if($_SESSION['type']['pooja']=='pooja'){  
                            $this->db->where('puja_type','Puja');
                        } else if($_SESSION['type']['pooja']=='yajman'){  
                           $this->db->where('puja_type','Yajman');
                        } 
					$this->db->like('description_charge', $this->input->post('id'), 'both'); 
					$this->db->order_by("description_charge","ASC");
					$query = $this->db->get();
					if ($query->num_rows()>0) {
						foreach ($query->result() as $value) {
						    
						    
                       $fill_from_date =  $value->fill_from_date;
                       $fill_to_date =  $value->fill_to_date;
                        
                   if(date('Ymd')>=$fill_from_date && date('Ymd')<=$fill_to_date){ ?>
                        <li class="itmesssss" data-href="<?=base_url();?>poojaBooking/Services-Date-Time?poojaId=<?=$value->id;?>#calendar" >
                    <a href="<?=base_url();?>poojaBooking/Services-Date-Time?type=<?=$_SESSION['type']['pooja'];?>&poojaId=<?=$value->id;?>#calendar">
<?=$value->description_charge;?> / <strong>Member:<del style="color:red;"> <?=$value->member_price;?></del> <?=$value->offer_mem_price;?></strong> 
/ <strong>Non-Member: <del style="color:red;"><?=$value->non_member_price;?></del>  <?=$value->offer_non_mem_price;?></strong>   &nbsp;&nbsp;&nbsp;&nbsp; [Offer ends on <strong>“<?=date('d-m-Y',strtotime($value->fill_to_date));?>”</strong>]
                    </a>
                     
                </li>
                   <?php }    else { ?>
                <li class="itmesssss" data-href="<?=base_url();?>poojaBooking/Services-Date-Time?poojaId=<?=$value->id;?>#calendar" >
                    <a href="<?=base_url();?>poojaBooking/Services-Date-Time?type=<?=$_SESSION['type']['pooja'];?>&poojaId=<?=$value->id;?>#calendar">
                        <?=$value->description_charge;?> / <strong>Member: <?=$value->member_price;?></strong> / <strong>Non-Member: <?=$value->non_member_price;?></strong>
                    </a>
                     
                </li>
                 <?php  }  
					?>
					<?php 
						}
					} else {
						echo 'No record found';
					
					}
					?>
						
						<script>
    jQuery('.itmesssss').on('click',function(){
        var  reddd = jQuery(this).attr('data-href');
        window.location.href=reddd;
    });
</script>
<?php
				 		
	}

	public function getTimeSlot()
	{
									$pooja_time =  $this->input->post('id');
									$date = date('Y-m-d');?>
                                    <table class="table table-responsive table-bordered">
                                            <?php 
                                                $maxdays=6;
                                            ?>
                                        <thead>
                                            <tr>
                                                <?php 
                                                    $i=0;
                                                    while ($i <= $maxdays) { 
                                                ?>
 <th class="text-center">
 <?php  $tomorrow = date("Y-m-d", strtotime("+".$i." day"));?>
 <?php echo date("D", strtotime($tomorrow)) ;?>
                                                    <br />
 <?php echo date("M Y", strtotime($tomorrow)) ;?>
                                                </th>


                                                <?php 
                                                  $i++;  }
                                                ?>
 

                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                <?php 
                                                    $i2=0;
                                                    $chkcount = 0;
                                                    $chk2=0;
                                                    $todaydate=date('Ymd');
                                                    $nowtime=date('H:i a');
                                                    while ($i2 <= $maxdays) { 
                                                ?>
                                                <?php  $tomorrow = date("Y-m-d", strtotime("+".$i2." day"));?>
                                                <td class="text-center">
                                                    <ul class="list-group">
	<?php 
    	$this->db->select('*');
        $this->db->from('slnt_puja_time');
        $this->db->where('pooja_time',$pooja_time);
        $this->db->order_by('id','ASC');
        $listtime = $this->db->get()->result();
        foreach ($listtime as $rowsdata) {
        	$this->db->select('*');
	        $this->db->from('adminlogin');
	        $this->db->where('rol',3);
	        $this->db->where('status',1);
	        $priest = $this->db->get();	
	        $countPriest=$priest->num_rows();

			 	$sel_date=date("Ymd", strtotime($tomorrow));
				$time_id=$rowsdata->id;
				$puja_id=$pooja_time;


$this->db->select('*');
$this->db->from('booking_slot_block');
$this->db->where('block_date',$sel_date);
$this->db->where('time_slot',$time_id);
$this->db->where('dataPuja',$puja_id);
$this->db->where('sel_priest!=0');
$this->db->order_by('id','DESC');
$bl = $this->db->get();    
$blk=$bl->num_rows();
$totalavailpristnow=$countPriest-$blk;


	        	$this->db->select('*');
		        $this->db->from('slnt_booking_slot');
		        $this->db->where('sel_date',$sel_date);
		        $this->db->where('time_id',$time_id);
		        $this->db->where('puja_id',$puja_id);
		        $selprst = $this->db->get();	
		        $tselcountprst=$selprst->num_rows();
		         $ts=$selprst->row();
$this->db->select('*');
$this->db->from('booking_slot_block');
$this->db->where('block_date',$sel_date);
$this->db->where('time_slot',$time_id);
$this->db->where('dataPuja',$puja_id);
$this->db->order_by('id','DESC');
$block_pujatime = $this->db->get();    
$blk_count=$block_pujatime->num_rows();
 if ($blk_count==0) {
    ?>
	 <li class="list-group-item <?php if($totalavailpristnow>$tselcountprst){ ?> <?php } else { echo 'disabled'; }?>">
            <label class="timer-slot">
                <?php if($totalavailpristnow>$tselcountprst){ ?>
                    <input type="radio" name="time_slot_index" value="<?=$chkcount;?>" <?php if($chk2==0){ echo 'checked';} ?>>
                <?php  $chk2++; } else { ?>
                    <input type="radio" name="" disabled="disabled">
                <?php  } ?>
                <?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
                <input type="hidden" name="time_slot<?=$chkcount;?>" id="time_slot<?=$chkcount;?>" value="<?=$rowsdata->id;?>">
                <input type="hidden" name="sel_date<?=$chkcount;?>" id="sel_date<?=$chkcount;?>" value="<?=date("Ymd", strtotime("+".$i2." day"))?>">
            </label>
            </li>
 <?php
} else {
    $sel_items=$block_pujatime->row();
     if ($sel_items->sel_priest==0) {
 ?>
        <li class="list-group-item disabled   <?php if($totalavailpristnow>$tselcountprst){ ?> <?php } else { echo 'disabled'; }?>">
            <label class="timer-slot">
                <?php if($totalavailpristnow>$tselcountprst){ ?>
                    <input type="radio" name="time_slot_index" value="<?=$chkcount;?>" <?php if($chk2==0){ echo 'checked';} ?>>
                <?php  $chk2++; } else { ?>
                    <input type="radio" name="" disabled="disabled">
                <?php  } ?>
                <?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
                <input type="hidden" name="time_slot<?=$chkcount;?>" id="time_slot<?=$chkcount;?>" value="<?=$rowsdata->id;?>">
                <input type="hidden" name="sel_date<?=$chkcount;?>" id="sel_date<?=$chkcount;?>" value="<?=date("Ymd", strtotime("+".$i2." day"))?>">
            </label>
            </li>
<?php }    else {
    ?>
    <li class="list-group-item <?php if($totalavailpristnow>$tselcountprst){ ?> <?php } else { echo 'disabled'; }?>">
            <label class="timer-slot">
                <?php if($totalavailpristnow>$tselcountprst){ ?>
                    <input type="radio" name="time_slot_index" value="<?=$chkcount;?>" <?php if($chk2==0){ echo 'checked';} ?>>
                <?php  $chk2++; } else { ?>
                    <input type="radio" name="" disabled="disabled">
                <?php  } ?>
                <?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
                <input type="hidden" name="time_slot<?=$chkcount;?>" id="time_slot<?=$chkcount;?>" value="<?=$rowsdata->id;?>">
                <input type="hidden" name="sel_date<?=$chkcount;?>" id="sel_date<?=$chkcount;?>" value="<?=date("Ymd", strtotime("+".$i2." day"))?>">
            </label>
            </li>
    <?php
}  

}      ?>
		<?php $chkcount++;} ?>
	</ul>
	</td>
    <?php 
    	$i2++;  }
    ?>
 </tr>
 </tbody>
 <tfoot>
 	<tr>
 		<td colspan="7" align="center">




 			
 			 <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                            <span class="mat-button-wrapper">Save & Proceed</span>
                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                            <div class="mat-button-focus-overlay"></div>
                        </button>
 		</td>
 	</tr>
 </tfoot>
 </table>
<?php
	}

	public function getPriestList()
	{
		echo ' <div class="row">';
		$this->db->select('*');
		$this->db->from('adminlogin');
		$this->db->where('status',1);
        $this->db->where('rol',2);
        $this->db->or_where('rol',3)->order_by('position','ASC');
        // $this->db->or_where('rol',4);
        $priestx = $this->db->get();
        $totalpriest =$priestx->num_rows();
        
       //var_dump($totalpriest);
      //  die();
       if($totalpriest>0){ 
        
            $d = $this->input->post('d');
            $m = $this->input->post('m');
            $y = $this->input->post('y');
            $poojaTime = $this->input->post('poojaTime');
            $block_d =$y.'-'.$m.'-'.$d;
            $block_date_filt=date('Ymd',strtotime($block_d));
            $this->db->select('*');
    		$this->db->from('slnt_puja_time');
            $this->db->where('id',$poojaTime);
            $seltime = $this->db->get()->row();


             $from_time=$seltime->from_time;
             $to_time=$seltime->to_time;
             
         $countssss=0;    
             
        foreach ($priestx->result() as $priest) { 
          $this->db->select('*');
    		$this->db->from('slnt_block_all_pooja_date_staff');
            $this->db->where('staff_id',$priest->id);
            $this->db->where('block_date_filt',$block_date_filt);
            // $this->db->where('fromtime >= ',$from_time);
            // $this->db->or_where('totime <= ',$to_time);
            $prst = $this->db->get();
if($prst->num_rows()==0){ 
$countssss--;
            $this->db->select('*');
    		$this->db->from('slnt_booking_slot');
            $this->db->where('sel_priest',$priest->id);
            $this->db->where('d',$d);
            $this->db->where('m',$m);
            $this->db->where('y',$y);
            $this->db->where('pooja_time_from>=',date('H:i:s A',strtotime($from_time)));
            $this->db->where('pooja_time_to<=',date('H:i:s A',strtotime($to_time)));
            $prst3 = $this->db->get();
            if($prst3->num_rows()==0){
                $countssss--;
?>

				<div class="col-md-3 text-center">
					<div class="bookingPrist">
						<label  for="sel_priest<?=$priest->id;?>">
					<?php if($priest->profilepic!=''){ ?>
						    
							<img src="<?=base_url();?>assets/profile/<?=$priest->profilepic;?>" class="img-responsive">
					<?php } else { ?>		
						<img src="<?=base_url();?>assets/pandit.png" class="img-responsive">		
							<?php } ?>
						</label>
							<label class="text-danger" for="sel_priest<?=$priest->id;?>">
						<input type="radio" name="sel_priest" id="sel_priest<?=$priest->id;?>"   required="" value="<?=$priest->id;?>">
						<?=$priest->name;?> <?=$priest->last_name;?>
							
						</label>
					</div>
				
			 
            </div>
				<?php
			} else {
			     
			} } else {
			    $countssss++;
			}
			
			
        	?>
        	
        <?php } } else {
            echo "<h2 class='text-danger'>Priest not available  on this time</h2>";
        }
        if($countssss>0){
            echo "<h2 class='text-danger'>Priest not available  on this time</h2>";
        }
        
        echo '</div>';
	}
	

	public function getPujaSamagri()
	{
			 	$pujaid = $this->input->post('pujaid');
			 	$status = $this->input->post('status');
			 	$type = 'Puja Samagri';
	 		$this->db->select('*');
			$this->db->from('slnt_samagri');
	        $this->db->where('puja_id',$pujaid);
	        $this->db->where('samagri_type',$type);
	        $priest = $this->db->get();
				if ($status==0) {
				?>
				<div  class="table-responsive" >
				<div class="pujaSamagriList">
				<table class="table table-responsive tableList">
				 	<thead>
				 		<tr>
				 			 
				 			<th>Pooja Samagri Title</th>
				 			<th>Quantity</th>
				 		</tr>
				 	</thead>
				 	<tbody>
						<?php 
							$count = 1;
							$total=0.00;
						foreach ($priest->result() as $samagri) {
						 ?>				 			
				 		<tr>
				 			 
				 			<td>
				 			    
				 			    <?=$samagri->samagri_title;?> 
				 			    
				 			
				 			</td>
				 			<td><?=$samagri->measurement;?>
				 			    <?=$samagri->unit_of_measurement;?></td>
				 		</tr>
				 		<?php 	
				 		$total=$total+$samagri->samagri_price;
						$count++; } ?>
				 	</tbody>
				 		 
				 </table>
				</div>
				<div class="priceValue text-left">
				<h3 class="priceTitle"><label>Total :  <span>$  <?=$total;?> SGD</span></label>
				<input type="hidden" name="pooja_samagri_amt" value="<?=$total;?>"   required="">
				</h3>
				</div>
			</div>
		<?php	        	
				} else if ($status==1) {
		?>
		<div  class="table-responsive" >
			<h2 class="text-danger">
				I will prepare myself
			</h2>
			<div class="pujaSamagriList">
				<table class="table table-responsive tableList">
				 	<thead>
				 		<tr>
				 			 
				 			<th>Pooja Samagri Title</th>
				 		    <th>Quantity</th>
				 		</tr>
				 	</thead>
				 	<tbody>
						<?php 
							$count = 1;
							$total=0.00;
						foreach ($priest->result() as $samagri) {
						 ?>				 			
				 		<tr>
				 			 
				 			<td><?=$samagri->samagri_title;?></td>
				 	        	<td><?=$samagri->measurement;?>
				 			    <?=$samagri->unit_of_measurement;?></td>
				 		</tr>
				 		<?php 	
				 		$total=$total+$samagri->samagri_price;
						$count++; } ?>
				 	</tbody>
				</table>
				 <input type="hidden" name="pooja_samagri_amt" value="0.00" >
				 </div>
	</div>
		<?php
				}	        
			}



			public function getHavanSamagri()
	{
			 	$pujaid = $this->input->post('pujaid');
			 	$status = $this->input->post('status');
			 	$type = 'Havan Samagri';
	 		$this->db->select('*');
			$this->db->from('slnt_samagri');
	        $this->db->where('puja_id',$pujaid);
	        $this->db->where('samagri_type',$type);
	        $priest = $this->db->get();
				if ($status==0) {
				?>
				<div  class="table-responsive" >
				<div  class="havanSamagriList">
				 <table class="table table-responsive tableList">
				 		<thead>
				 			<tr>
				 			 
				 				<th>Havan Samagri Title</th>
				 				<th>Quantity</th>
				 			</tr>
				 		</thead>
				 		<tbody>
							<?php 
								$count = 1;
								$total=0.00;
							foreach ($priest->result() as $samagri) {
							 ?>				 			
				 			<tr>
				 				 
				 				<td><?=$samagri->samagri_title;?>   
				 			    </td>
				 				<td><?=$samagri->measurement;?>
				 			    <?=$samagri->unit_of_measurement;?></td>
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->samagri_price;
							$count++; } ?>

				 		</tbody>
				 	 
				 </table>
				</div>
				<div class="priceValue text-left">
				<h3><label class="priceTitle">Total :  <span>$  <?=$total;?> SGD</span></label></h3>
				<input type="hidden" name="havan_samagri_amt" value="<?=$total;?>"   required="">
				</div>
			</div>
		<?php	        	
				} else if ($status==1) {
		?>
		<div  class="table-responsive" >
			<h2 class="text-danger">
				I will prepare myself
			</h2>
			<div  class="havanSamagriList">
				 <table class="table table-responsive tableList">
				 		<thead>
				 			<tr>
				 			  
				 				<th>Havan Samagri Title</th>
				 			<th>Quantity</th>
				 			</tr>
				 		</thead>
				 		<tbody>
							<?php 
								$count = 1;
								$total=0.00;
							foreach ($priest->result() as $samagri) {
							 ?>				 			
				 			<tr>
				 				 
				 				<td><?=$samagri->samagri_title;?> </td>
				 				<td><?=$samagri->measurement;?>
				 			    <?=$samagri->unit_of_measurement;?></td>
				 		
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->samagri_price;
							$count++; } ?>

				 		</tbody>
				 	
				 </table>
				 </div>
				 <input type="hidden" name="havan_samagri_amt" value="0.00">
	</div>
		<?php
				}	        
			}


		public function getBhogPrasad()
	{
			 	$pujaid = $this->input->post('pujaid');
			 	$status = $this->input->post('status');
			 	$type = 'Havan Samagri';
	 		$this->db->select('*');
			$this->db->from('slnt_bhog_prasad');
	        $this->db->where('puja_id',$pujaid);
	        $priest = $this->db->get();
				if ($status==0) {
				?>
				<div  class="table-responsive" >
				<div class="BhogPrasadList">
				 <table class="table table-responsive tableList">
				 		<thead>
				 			<tr>
				 				 	<th>Bhog / Prasad Title</th>
				 				<th>Bhog / Prasad  Price (SGD)</th>
				 			</tr>
				 		</thead>
				 		<tbody>
							<?php 
								$count = 1;
								$total=0.00;
							foreach ($priest->result() as $samagri) {
							 ?>				 			
				 			<tr>
				 			 
				 				<td><?=$samagri->bhog_prasad_title;?></td>
				 				<td><?=$samagri->bhog_prasad_price;?></td>
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->bhog_prasad_price;
							$count++; } ?>

				 		</tbody>
				 	 
				 </table>
				</div>
				<div class="priceValue text-left">
				<h3><label class="priceTitle">Total :  <span>$  <?=$total;?> SGD</span></label></h3>
				<input type="hidden" name="bhog_prasad_amt" value="<?=$total;?>"   required="">
				</div>
			</div>
		<?php	        	
			} else if ($status==1) {
		?>
		<div  class="table-responsive" >
			<h2 class="text-danger">
				I will prepare myself
			</h2>
			<div   class="BhogPrasadList">
				<table class="table table-responsive tableList">
				 	<thead>
				 		<tr>
				 			<th>Bhog / Prasad Title</th>
				 		
				 		</tr>
				 	</thead>
				 	<tbody>
						<?php 
							$count = 1;
							$total=0.00;
						foreach ($priest->result() as $samagri) {
						 ?>				 			
				 		<tr>
				 			<td><?=$samagri->bhog_prasad_title;?></td>
				 		 
				 		</tr>
				 		<?php 	
				 		$total=$total+$samagri->bhog_prasad_price;
						$count++; } ?>
				 	</tbody>
				 	
				</table>
				 </div>
				 <input type="hidden" name="bhog_prasad_amt" value="0.00"   required="">
	</div>
		<?php
				}	        
			}

			public function getCatering()
			{
				 if ($this->input->post('status')==0) {
				 	echo '<div class="col-sm-12">';
							$this->db->select('*');
					        $this->db->from('slnt_catering_menus');
					        $menus=$this->db->get();
					        $count=0;	
					        foreach($menus->result() as $mnp){
					        	if (in_array($this->input->post('day'), json_decode($mnp->days))) {
		?> 
			<label for="menus_<?=$mnp->id?>" class=""> 
				<input required="" type="radio"  name="menus" onchange="getChangeRadio(this.value)" id="menus_<?=$mnp->id?>" value="<?=$mnp->id?>"> <?=$mnp->menu_name;?>
			</label>
		<?php
		$count++;
					        	}
					        }
			echo '</div>';	
		   			
				 } else {
					
				 }
				 echo '<div class="col-sm-12" id="menu_details"></div>';


			}

		public function getCateringDetails()
		{
			//echo $this->input->post('menus');
				$this->db->select('*');
		        $this->db->from('slnt_catering_menus');
		        $this->db->where('id',$this->input->post('menus'));
		        $menus=$this->db->get()->row();

					        ?>
					        <div class="row">
					      
									<div class="col-sm-3 col-xs-12">
                                        <label class="control-label required">
                                        	Menu Item </label>
                                   </div>
                                    <div class="col-sm-9 col-xs-12">
                                    	<input type="hidden" name="menus_title" value="<?php echo $menus->menu_name; ?>">
                                        <?php echo $menus->menu_items; ?>
                                    </div>
                               


                                	<div class="col-sm-3 col-xs-12">
                                        <label class="control-label required">
                                        	Choose Pax. & Price *</label>
                                   </div>
                                    <div class="col-sm-9 col-xs-12">
                                         <table class="table table-responsive">
                                         	<thead>
                                         		<tr>
                                         			<th><label>No. of Pax *</label></th>
                                         			<th><label>Member Price *</label></th>
                                         			<th><label>Non-Member Price *</label></th>
                                         		</tr>
                                         	</thead>
                                            <tbody id="price">

<?php $countp=0; foreach(json_decode($menus->price) as $prices){ ?>

                                               <tr <?php if($countp==0){ } else { ?>id="size_<?=$countp;?>"<?php } ?>>
                                                <td>
                                                    <label for="pax_n_price<?=$countp;?>">
<input type="radio" name="pax_n_price" id="pax_n_price<?=$countp;?>"  value="<?=$prices->no_of_pax;?>|<?=$prices->mem_price;?>|<?=$prices->none_mem_price;?>" <?php if($countp==0){ echo 'checked'; } else { ?><?php } ?>>
                                                    	<?=$prices->no_of_pax;?></label> 
                                                </td>
                                                <td>
                                                   <label for="pax_n_price<?=$countp;?>"><?=$prices->mem_price;?></label>
                                                </td>
                                                <td>
                                                    
                                                   <label for="pax_n_price<?=$countp;?>"><?=$prices->none_mem_price;?> </label>
                                                </td>
                                               
                                            </tr>


<?php $countp++; } ?>


                                            </tbody>
                                        </table>
                                    </div>
                              

                                	<div class="col-sm-3 col-xs-12">
                                        <label class="control-label required" for="note_for_catering">
                                        	Note for Catering *</label>
                                    </div>
                                    <div class="col-sm-9 col-xs-12">
                                         <textarea name="note_for_catering" id="note_for_catering" rows="6" class="form-control" placeholder="Note for Catering"></textarea>
                                    </div>
                              

                                	<div class="col-sm-3 col-xs-12">
                                        <label class="control-label required">
                                        	Additional Items *</label>
                                    </div>
                                    <div class="col-sm-9 col-xs-12">
                                         <table class="table table-responsive">
                                         		<thead>
                                         		<tr>
                                         			<th><label>Name *</label></th>
                                         			<th> <label>Price *</label></th>
                                         		</tr>
                                         	</thead>
                                            <tbody id="items">
                                               

<?php $countad=0; foreach(json_decode($menus->additional) as $add){ 
 
    ?>


                                                <tr  <?php if($countad==0){ } else { ?>id="sizex_<?=$countad;?>"<?php } ?>>
                                                <td>
                                                    
                                                  <label for="items<?=$countad;?>"> 
<input type="checkbox" name="items[]" id="items<?=$countad;?>" value="<?=$add->item_name;?>|<?=$add->item_price;?>">
                                                  	<?=$add->item_name;?></label>
                                                </td>
                                                <td>
                                                   
                                                  <label for="items<?=$countad;?>">  <?=$add->item_price;?></label>
                                                </td>
                                            </tr>

<?php $countad++; } ?>


                                            </tbody>
                                        </table>
                                    </div>
                               
  	
					        </div>


		        <?php

		}
			
		public function LoginUser()
		{
			
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
				echo '<span class="text-danger">All field are mendetory</span> <br />';
			} else {
				$status=1;
				$this->db->select('*');
				$this->db->from('slnt_member');
				$w = array('email'=>$this->input->post('username'), 'password'=>$this->input->post('password'), 'status'=>$status);
				$this->db->where($w);
				$dx=$this->db->get();
				if ($dx->num_rows()==0) {
					echo '<span class="text-danger">Invalid login details</span> <br />';
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
			 	echo '<span class="text-success">Login successfully!, Please wait we are redirect you....</span>
			 	<meta http-equiv="refresh" content="2;url=" /> <br />';

			}
		}
		}

		public function getMemberShipDetails()
		{
			 	$this->db->select('*');
				$this->db->from('slnt_membership');
		        $this->db->where('id',$this->input->post('membershipindex'));
		        $member = $this->db->get()->row();
		        echo '<div class="row">
		        		<div class="col-md-12">
		        			
		        			<div>'.$member->description.'</div>
		        		</div>
		        </div>';
		}


		public function PayNowUpdate()
		{
						$pay_percent=$this->input->post('pay_percent');
						$totalamt=$this->input->post('totalamt');
						$payid=$this->input->post('payid');
						$payment_id=$this->input->post('payment_id');
						$amt_pay=$totalamt*$pay_percent/100;
						$due_amt=$totalamt-$amt_pay;
						$total=$totalamt;
						$datan = array(
					       	'total'=>  $total,
					       	'due_amt'=>  $due_amt,
					       	'amt_pay'=>  $amt_pay, 
					       	'pay_percent'=>  $pay_percent
						);
						$this->db->where('id',$payid);
						$this->db->where('payment_id',$payment_id);
                		$this->db->update('slnt_payment_summery',$datan);

		}
		
        public function getTimeSlotOfPoojaBack()
        {
               

       $selday = $this->input->post('selday');
       $selmonth = $this->input->post('selmonth');
       $selyear = $this->input->post('selyear');
       $selpooja = $this->input->post('selpooja');
       $selnoday = $this->input->post('selnoday');
         $seldateoffill = $selyear.$selmonth.date('d',strtotime($this->input->post('selyear')-$this->input->post('selmonth')-$this->input->post('selnoday')));
        
        $this->db->select('*');
		$this->db->from('slnt_puja_time');  
		$this->db->where('pooja_time', $selpooja); 
		$this->db->where('pooja_date', $selday); 
		$this->db->order_by("id","ASC");
		$query = $this->db->get();
		
		$this->db->select('*');
		$this->db->from('adminlogin');  
		$this->db->where('rol', 3); 
		$this->db->where('status',1); 
		$qpriest = $this->db->get()->num_rows();
		
		
		$countofblock=0;
		$cblk=0;
		$cblk2=0;
		$notice=0;
		$totalcount=0;
		if($query->num_rows()>0){
		    
		    foreach($query->result() as  $slotdata){
		        $this->db->select('*');
        		$this->db->from('pooja_block');  
        		$this->db->where('puja_id', $selpooja); 
        		$this->db->where('block_time', $slotdata->id); 
        		$this->db->where('sel_fill_date', $seldateoffill); 
        		$querycx = $this->db->get(); 
    if($querycx->num_rows()>0){
        $countofblock++;
        echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
    } else {

                $this->db->select('*');
        		$this->db->from('slnt_booking_slot');  
        		$this->db->where('puja_id', $selpooja); 
        		$this->db->where('time_id', $slotdata->id);
        		$this->db->where('m', $selmonth);
        		$this->db->where('y', $selyear);
        		$this->db->where('d', $selnoday);
        		$this->db->where('status', 1); 
        		$querycx2 = $this->db->get(); 
        		
        		$this->db->select('*');
        		$this->db->from('slnt_booking_slot_offline');  
        		$this->db->where('puja_id', $selpooja); 
        		$this->db->where('time_id', $slotdata->id); 
        		$this->db->where('con_status',1); 
        		$this->db->where('m', $selmonth);
        		$this->db->where('y', $selyear);
        		$this->db->where('d', $selnoday);
        		$querycx2xc = $this->db->get(); 
        		
        		
        		
        		$totalfbooking = $querycx2->num_rows();
        		$totalbbooking = $querycx2xc->num_rows();
        	 	$tttt=$totalfbooking+$totalbbooking;
        		  $ftst = $qpriest-$tttt;
        	 
        		if($ftst>0){
        		 $cblk2--;
    if($querycx2->num_rows()>0){
        $notice++;
        $totalcount++;
         //echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";

    }   else {
        
                $this->db->select('*');
        		$this->db->from('slnt_booking_slot_offline');  
        		$this->db->where('puja_id', $selpooja); 
        		$this->db->where('time_id', $slotdata->id); 
        		$this->db->where('con_status',1); 
        		$this->db->where('m', $selmonth);
        		$this->db->where('y', $selyear);
        		$this->db->where('d', $selnoday);
        		$querycx2x = $this->db->get(); 
            if($querycx2x->num_rows()>0){
                $notice++;
                $totalcount++;
echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";

            }   else {
                $todaydate=date('Ymd');
                 if($seldateoffill<$todaydate){
                     $cblk2++;
                     $totalcount++;
                    echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";

                 } else {
                    //  if($seldateoffill==$todaydate && date('H:i:s A',strtotime($slotdata->from_time))<=date('H:i:s A')){
                    //      $cblk2++;
                    //      $totalcount++;
                    //      echo $slotdata->from_time."<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                    //   } else {
                          
                $this->db->select('*');
        		$this->db->from('slnt_block_all_pooja_date');  
        		$this->db->where('block_date_filt', $seldateoffill); 
        		$sdfghjq = $this->db->get();  
                     if($sdfghjq->num_rows()>0){
                         $cblk++;
                         if($cblk==1){
                              $lasrow = $sdfghjq->row();
                         echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >$lasrow->leave_purpose</p>";
                         }
                        
                     }    else {  
                         $notice--;
                         $cblk2--;
                         $totalcount--;
                        echo "<a class='btn btn-info btn-sm'style='width: 100%; opacity: 1; color:#fff ' href='".base_url()."poojaBooking/Booking-Information?poojaId=".$selpooja."&m=".$selmonth."&y=".$selyear."&poojaTime=".$slotdata->id."&d=".$selnoday."&day=".$selday."'>$slotdata->from_time - To - $slotdata->to_time</a>";
                     }
                  //  }
                 }
            }
    } 
    
        		} else {
        		    $totalcount++;
        		    echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                     
        		    $cblk2++;
        		     
        		}
        }	    
}
		    
		} else {
		    echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >
            Slots are not available. <br />
           Please contact office for more details
           </p>";
		}
       if($totalcount>0){
           echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >
            Slots are not available. <br />
           Please contact office for more details
           </p>";
           
       }if($cblk2>0){
           echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >
            Slots are not available. <br />
           Please contact office for more details
           </p>";
           
       }
       
    //      if($notice>0){
    //       echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >
    //         Slots are not available. <br />
    //       Please contact office for more details
    //       </p>";
           
    //   }
       
       
     echo "<style>
     .loginmodal-container .btn{
         margin:5px auto !important;
     }
     </style>
     ";
    }

    
    public function getTimeSlotOfPooja()
    {
       $selday = $this->input->post('selday');
       $selmonth = $this->input->post('selmonth');
       $selyear = $this->input->post('selyear');
       $selpooja = $this->input->post('selpooja');
        $selnoday = $this->input->post('selnoday');
       $daysssss=$this->input->post('selyear').'-'.$this->input->post('selmonth').'-'.$this->input->post('selnoday');
       $seldateoffill = $selyear.$selmonth.date('d',strtotime($daysssss));            
        $this->db->select('*');
		$this->db->from('slnt_puja_time');  
		$this->db->where('pooja_time', $selpooja); 
		$this->db->where('pooja_date', $selday); 
		$this->db->order_by("id","ASC");
		$query = $this->db->get();
		
		$this->db->select('*');
		$this->db->from('adminlogin');  
		
		$this->db->where('status',1); 
		$this->db->where('rol', 2); 
		$this->db->or_where('rol', 3); 
	//	$this->db->or_where('rol', 4); 
    	$qpriest = $this->db->get()->num_rows();
		
		if($qpriest>0){
		    	$countofblock=0;
        		$cblk=0;
        		$cblk2=0;
        		$cblkx=0;
        		$notice=0;
        		$totalcount=0;
		    if($query->num_rows()>0){
		         foreach($query->result() as  $slotdata){
		                $this->db->select('*');
                		$this->db->from('pooja_block');  
                		$this->db->where('puja_id', $selpooja); 
                		$this->db->where('block_time', $slotdata->id); 
                		$this->db->where('sel_fill_date', $seldateoffill); 
                		$querycx = $this->db->get(); 
                		if($querycx->num_rows()>0){
                            //$countofblock++;
                           // echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                        
                		     $cblkx++;
                            if($cblkx==1){
                                    $lasrowx = $querycx->row();
                                    echo "<br /><br /><br /><p style='width: 100%; text-transform: capitalize; font-size:18px; opacity: 0.8; color:red; background:; ' >$lasrowx->leave_purpose</p>";
                            }
                		    
                		    
                		} else {
                            $this->db->select('*');
                    		$this->db->from('slnt_booking_slot');  
                    		$this->db->where('puja_id', $selpooja); 
                    		$this->db->where('time_id', $slotdata->id);
                    		$this->db->where('m', $selmonth);
                    		$this->db->where('y', $selyear);
                    		$this->db->where('d', $selnoday);
                    		$this->db->where('status', 1); 
                    		$querycx2 = $this->db->get(); 
                    		
                    		$this->db->select('*');
                    		$this->db->from('slnt_booking_slot_offline');  
                    		$this->db->where('puja_id', $selpooja); 
                    		$this->db->where('time_id', $slotdata->id); 
                    		$this->db->where('con_status',1); 
                    		$this->db->where('m', $selmonth);
                    		$this->db->where('y', $selyear);
                    		$this->db->where('d', $selnoday);
                    		$querycx2xc = $this->db->get(); 
                    		$totalfbooking = $querycx2->num_rows();
                    		$totalbbooking = $querycx2xc->num_rows();
                    	 	$tttt=$totalfbooking+$totalbbooking;
                    		$ftst = $qpriest-$tttt;
                    		if($ftst>0){
                    		     $cblk2--;
                				    if($querycx2->num_rows()>0){
                				         $countofblock++;
                				         //echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                
                				    }   else {
                				        $this->db->select('*');
                                		$this->db->from('slnt_booking_slot_offline');  
                                		$this->db->where('puja_id', $selpooja); 
                                		$this->db->where('time_id', $slotdata->id); 
                                		$this->db->where('con_status',1); 
                                		$this->db->where('m', $selmonth);
                                		$this->db->where('y', $selyear);
                                		$this->db->where('d', $selnoday);
                                		$querycx2x = $this->db->get(); 
                                        if($querycx2x->num_rows()>0){
                                             $countofblock++;
                                            echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                        
                                        }   else {
                                            $todaydate=date('Ymd');
                                            if($seldateoffill<$todaydate){
                                                 $countofblock++;
                                                echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                            
                                             } else {
                                                $this->db->select('*');
                                        		$this->db->from('slnt_block_all_pooja_date');  
                                        		$this->db->where('block_date_filt', $seldateoffill); 
                                        		$sdfghjq = $this->db->get();  
                                                     if($sdfghjq->num_rows()>0){
                                                          $countofblock++;
                                                          $cblk++;
                                                         if($cblk==1){
                                                              $lasrow = $sdfghjq->row();
                                                         echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >$lasrow->leave_purpose</p>";
                                                         }
                                                        
                                                     } else {  
                                                         
                                                            $fftime =  date('H:i',strtotime($slotdata->from_time));  
                                                            $fttime =  date('H:i',strtotime($slotdata->to_time)); 
                                                            $seldate = $selyear.$selmonth.$selnoday;
                                                            if($seldate==date('Ymd')){
                                                                if($fftime>date('H:i')){
                                                                     $countofblock--;
echo "<a class='btn btn-info btn-sm'style='width: 100%; opacity: 1; color:#fff ' href='".base_url()."poojaBooking/Booking-Information?type=".$_SESSION['type']['pooja']."&poojaId=".$selpooja."&m=".$selmonth."&y=".$selyear."&poojaTime=".$slotdata->id."&d=".$selnoday."&day=".$selday."'>$slotdata->from_time - To - $slotdata->to_time</a>";
                                                                } else {
                                                                     $countofblock++;
                                                                       echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                                                                }
                                                                
                                                            }else {
                                                                 $countofblock--;
                                                               echo "<a class='btn btn-info btn-sm'style='width: 100%; opacity: 1; color:#fff ' href='".base_url()."poojaBooking/Booking-Information?type=".$_SESSION['type']['pooja']."&poojaId=".$selpooja."&m=".$selmonth."&y=".$selyear."&poojaTime=".$slotdata->id."&d=".$selnoday."&day=".$selday."'>$slotdata->from_time - To - $slotdata->to_time</a>";
                                                             
                                                            }
                                                     } 
                                             }
                                        }
                				        
                				    }
                    		} else {
                    		    $countofblock++;
                    		   echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>"; 
                    		}
                        }
		         }
		    } else {
		            echo "<br />
        		   <br />";
        		   echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >
                    Slots are not available. <br />
                   Please contact office for more details
                   </p>";
		    }
		} else {
		   echo "<br />
		   <br />";
		   echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >
            Slots are not available. <br />
           Please contact office for more details
           </p>";
		}
       if($countofblock>0){
           echo "<br />
		   <br />";
		   echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >
            Slots are not available. <br />
           Please contact office for more details
           </p>"; 
       }
       
    }
}