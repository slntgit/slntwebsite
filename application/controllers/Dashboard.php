<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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

	}

	public function TempleRefreshmentEnquiry()
	{	
	                $this->db->select('*');
    		        $this->db->from('temple_refreshment_booking');
        		    $this->db->where('user_id',$_COOKIE["login_user"]);
        		    $this->db->order_by('id','DESC');
                    $data['temple_booking'] = $this->db->get();
        	 
        		$configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
		$data['webconfig']=$configwebsite->row();

		$data['my_membership']=$this->Main_model->getData('slnt_user_membership','id','DESC',1,'user_id',$_COOKIE["login_user"]);

		$data['my_profile']=$this->Main_model->getData('slnt_member','id','DESC',1,'user_id',$_COOKIE["login_user"]);

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
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['user_membership'] = $this->db->get();
    				}

$data['my_booking']=$this->Main_model->getData('slnt_booking_slot','id','DESC',NULL,'user_id',$_COOKIE["login_user"]);


		$this->load->view('dashboard/header',$data);		
		$this->load->view('dashboard/temple-refreshment-enquiry',$data); 
		$this->load->view('dashboard/footer');
	}
	
	public function MyAccountSetting(){
	    
	    $this->db->select('*');
		$this->db->from('slnt_member');
		$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
		$data['userDetails']=$this->db->get()->row();
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
	        	'required'     => 'Enter Email ',
	        	'is_unique'     => 'Email already registered '));

			$this->form_validation->set_rules('name_title', 'Full Name','trim|required',
	        array('required'     => 'Select name prefix'));

	        $this->form_validation->set_rules('first_name', 'first_name','trim|required',
	        array('required'     => 'Enter first name'));

	        $this->form_validation->set_rules('last_name', 'last_name','trim|required',
	        array('required'     => 'Enter  last name'));


	        $this->form_validation->set_rules('password', 'password','trim',
	        array('required'     => 'Enter  password'));

	        $this->form_validation->set_rules('confirm_password', 'confirm password','trim|matches[password]',
	        array('required'     => 'Enter  confirm password','matches'=> 'Password and confirm password must be same'));

 	        $this->form_validation->set_rules('address_1', 'address 1','trim|required',
	        array('required'     => 'Enter  address 1'));

	        $this->form_validation->set_rules('postal_code', 'postal code','trim|required',
	        array('required'     => 'Enter  postal code'));

	        if ($this->form_validation->run() == FALSE) {

			} else {
			    if($this->input->post('password')==''){
			       	    $datan = array(
					       	'name_title'=>  $this->input->post('name_title'),
					       	'first_name'=>  $this->input->post('first_name'),
					       	'last_name'=>  $this->input->post('last_name'), 
					       	'email'=>  $this->input->post('email'), 
					       	'mobile_code'=> '+65', 
					       	'mobile'=>  $this->input->post('mobile'), 
					       	'office_number'=>  $this->input->post('office_number'), 
					       	'address_1'=>  $this->input->post('address_1'),
					       	'address_2'=>  $this->input->post('address_2'), 
					       	'postal_code'=>  $this->input->post('postal_code')
						); 
			    } else {
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
					       	'postal_code'=>  $this->input->post('postal_code')
						);
			    }
			    $this->db->where(array('user_id'=>$_COOKIE["login_user"]));
			    $this->db->update('slnt_member',$datan);
			    $this->session->set_flashdata("success","<span class='text-success'>Account update successfully!</span>");
			    redirect('Dashboard/MyAccountSetting');
			}
		        
		    
	    $this->load->view('dashboard/header',$data);		
		$this->load->view('dashboard/my-account-setting',$data); 
		$this->load->view('dashboard/footer');
	}
	
	public function TempleRefreshmentEnquirydetails()
	{	
	                $this->db->select('*');
    		        $this->db->from('temple_refreshment_booking');
        		    $this->db->where('id',$this->uri->segment(3));
        		  $this->db->where('user_id',$_COOKIE["login_user"]);

        		    $this->db->order_by('id','DESC');
                    $data['dx'] = $this->db->get()->row();
        	 
        			$configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
		$data['webconfig']=$configwebsite->row();

		$data['my_membership']=$this->Main_model->getData('slnt_user_membership','id','DESC',1,'user_id',$_COOKIE["login_user"]);

		$data['my_profile']=$this->Main_model->getData('slnt_member','id','DESC',1,'user_id',$_COOKIE["login_user"]);

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
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['user_membership'] = $this->db->get();
    				}

$data['my_booking']=$this->Main_model->getData('slnt_booking_slot','id','DESC',NULL,'user_id',$_COOKIE["login_user"]);


		$this->load->view('dashboard/header',$data);	
		$this->load->view('dashboard/temple-refreshment-enquiry-details',$data); 
		$this->load->view('dashboard/footer');
	}
	
	
	
	
public function index()
	{			$configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
		$data['webconfig']=$configwebsite->row();

		$data['my_membership']=$this->Main_model->getData('slnt_user_membership','id','DESC',1,'user_id',$_COOKIE["login_user"]);

		$data['my_profile']=$this->Main_model->getData('slnt_member','id','DESC',1,'user_id',$_COOKIE["login_user"]);

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
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['user_membership'] = $this->db->get();
    				}

$data['my_booking']=$this->Main_model->getData('slnt_booking_slot','id','DESC',NULL,'user_id',$_COOKIE["login_user"]);


		$this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/dashboard'); 
		$this->load->view('dashboard/footer');
	}

	public function Notification($value='')
	{
	    		$configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
		$data['webconfig']=$configwebsite->row();

		$data['my_membership']=$this->Main_model->getData('slnt_user_membership','id','DESC',1,'user_id',$_COOKIE["login_user"]);

		$data['my_profile']=$this->Main_model->getData('slnt_member','id','DESC',1,'user_id',$_COOKIE["login_user"]);

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
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['user_membership'] = $this->db->get();
    				}

$data['my_booking']=$this->Main_model->getData('slnt_booking_slot','id','DESC',NULL,'user_id',$_COOKIE["login_user"]);


		$this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/notification-list'); 
		$this->load->view('dashboard/footer');
	}


	public function MyBooking()
	{
				$configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
		$data['webconfig']=$configwebsite->row();

		$data['my_membership']=$this->Main_model->getData('slnt_user_membership','id','DESC',1,'user_id',$_COOKIE["login_user"]);

		$data['my_profile']=$this->Main_model->getData('slnt_member','id','DESC',1,'user_id',$_COOKIE["login_user"]);

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
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['user_membership'] = $this->db->get();
    				}

$data['my_booking']=$this->Main_model->getData('slnt_booking_slot','id','DESC',NULL,'user_id',$_COOKIE["login_user"]);


		$this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/all-booking-list'); 
		$this->load->view('dashboard/footer');
	}

	public function MyMembership()
	{
			if ($this->uri->segment(3)=='renew') {
				if ($this->uri->segment(4)=='Pay') {
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
					// $last = $this->db->order_by('id',"desc")->limit(1)->get('slnt_user_membership')->row();
					// @$c2=$last->id;
					// $c=$c2+1;
					// 	$otp=rand(9999,99);
						$membership_id=$this->input->post('membership_id');
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
                   	redirect('Membership/MembershipStep2');
			}
				}
					$configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
		$data['webconfig']=$configwebsite->row();

		$data['my_membership']=$this->Main_model->getData('slnt_user_membership','id','DESC',1,'user_id',$_COOKIE["login_user"]);

		$data['my_profile']=$this->Main_model->getData('slnt_member','id','DESC',1,'user_id',$_COOKIE["login_user"]);

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
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['user_membership'] = $this->db->get();
    				}

$data['my_booking']=$this->Main_model->getData('slnt_booking_slot','id','DESC',NULL,'user_id',$_COOKIE["login_user"]);


		$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/membership-plans-renew'); 
				$this->load->view('dashboard/footer');
			} else {
			    	$configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
		$data['webconfig']=$configwebsite->row();

		$data['my_membership']=$this->Main_model->getData('slnt_user_membership','id','DESC',1,'user_id',$_COOKIE["login_user"]);

		$data['my_profile']=$this->Main_model->getData('slnt_member','id','DESC',1,'user_id',$_COOKIE["login_user"]);

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
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['user_membership'] = $this->db->get();
    				}

$data['my_booking']=$this->Main_model->getData('slnt_booking_slot','id','DESC',NULL,'user_id',$_COOKIE["login_user"]);


				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/membership-plans'); 
				$this->load->view('dashboard/footer');
			}
	}
	public function MyCeremoniesBooking()
	{
		$this->load->view('dashboard/header',$data);
		$this->load->view('dashboard/ceremonies-booking'); 
		$this->load->view('dashboard/footer');
	}
	public function Donate()
	{
		$this->load->view('dashboard/donation'); 
		$this->load->view('dashboard/footer');
	}
	public function MyPujaBooking()
	{
	    
	    $this->load->helper('email');
	    $this->load->library('email');
	   	        $this->db->select('*');
				$this->db->from('slnt_booking_slot');
				$this->db->where('user_id',$_COOKIE["login_user"]);
				if(isset($_GET['bookingType'])){
					$this->db->where('puja_type',$_GET['bookingType']); 
					$fromdate = date('Ymd',strtotime($_GET['fromdate']));
					$todate = date('Ymd',strtotime($_GET['todate']));
						$this->db->where('sel_date>=',$fromdate); 
						$this->db->where('sel_date<=',$todate); 
				}
			    $this->db->order_by('id','DESC');
			    $data['bookinglist'] = $this->db->get();
			    
			    if(isset($_GET['action'])){
			        if($_GET['action']=='doCancel'){
			                $dataAction=array(
			                    'cancledattime'=>date('Y/m/d H:i:s A'),
			                    'status'=>3
			                );
			                $this->db->where('user_id',$_COOKIE["login_user"]);
			                $this->db->where('id',$_GET["actId"]);
                            $this->db->update('slnt_booking_slot',$dataAction);
                            
                            
                            
                            $booking_id=$_GET["actId"];
                            
                            $this->db->select('*');
                            $this->db->from('slnt_booking_slot');
                            $this->db->where('id',$booking_id); 
                            $this->db->order_by('id','DESC');
                            $pujabo = $this->db->get();
                            $pujabooking = $pujabo->row();
			        
			                 $totalamt = 0.00;
                            $this->db->select('*');
                            $this->db->from('slnt_puja_time');
                            $this->db->where('id',$pujabooking->time_id);
                            $this->db->where('pooja_time',$pujabooking->puja_id);
                            $bookingTime = $this->db->get();
                            $actbooktime = $bookingTime->row();
                            
                            $this->db->select('*');
                            $this->db->from('slnt_puja');
                            $this->db->where('id',$pujabooking->puja_id);
                            $pujaList = $this->db->get();
                            $actpujalist = $pujaList->row();
                                
                            $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where('booking_id',$pujabooking->id);
                            $this->db->where('paystatus',1);
                            $this->db->order_by('id','ASC');
                            $paymentdetails = $this->db->get();
                                   
                             
                            $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where('booking_id',$pujabooking->id);
                            $this->db->where('paystatus',1);
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $paymentd = $this->db->get()->row();
                            
                                    $data['bookingid']=$pujabooking->id; // Pooja booking Slots table
                                    $data['poojaBookingSlots']=$pujabooking; // Pooja booking Slots table
                                    $data['poojaTime']=$actbooktime;   // poojaTiming Pooja 
                                    $data['seletedPooja']=$actpujalist;   // poojaTiming Pooja 
                                    $data['poojaSummeryAsc']=$paymentdetails;   //  Pooja Summery ASC
                                    $data['poojaSummerydesc']=$paymentd;   // poojaTiming Pooja 
	    
                                    	$this->db->select('*');
                            			$this->db->from('configuration_general');
                            			$this->db->where('id',1);
                            			$this->db->order_by('id','DESC');
                            	        $webconfig = $this->db->get()->row();
                                   		$fromemail=$webconfig->organization_email;
                            
                                $this->db->select('*');
                    			$this->db->from('slnt_member');
                    			$this->db->where(array('user_id'=>$pujabooking->user_id));
                    			$userDetails=$this->db->get()->row();
                    			$toemail = $userDetails->email;
                			
                			    $this->db->select('*');
                                $this->db->from('adminlogin');
                                $this->db->where('id',$pujabooking->sel_priest);
                                $pujaLisprt = $this->db->get();
                                $prestl = $pujaLisprt->row();
                                $count=0;
                         
                                     $subject ='Pooja Booking Cancel Request Notification';
            					     $mesg = $this->load->view('mail/userpoojabooking',$data,true);
                					$config=array(
                						'charset'=>'utf-8',
                						'wordwrap'=> TRUE,
                						'mailtype' => 'html'
                					);
                                	$this->email->initialize($config);
                					$this->email->to($toemail);
                					$this->email->cc($fromemail);
                					$this->email->bcc($prestl->email);
                					$this->email->from($fromemail, $webconfig->site_name);
                					$this->email->subject($subject);
                					$this->email->message($mesg);
                					$mail = $this->email->send(); 
                                    $count++;
                               
                                
                                if($pujabooking->catering==0){
                                   	$this->db->select('*');
                                    $this->db->from('adminlogin');
                                    $this->db->where('rol',4);
                                    $this->db->where('status',1);
                                    $pujaLisprtcook = $this->db->get();
                                    $prestlcook = $pujaLisprtcook->result();
                                    foreach($prestlcook as $sndml){
                                         $subject ='Pooja Booking Cancel Request Notification';
                					     $mesg = $this->load->view('mail/userpoojabookingcookingdetails',$data,true);
                    					$config=array(
                    						'charset'=>'utf-8',
                    						'wordwrap'=> TRUE,
                    						'mailtype' => 'html'
                    					);
                                    	$this->email->initialize($config);
                    					$this->email->to($sndml->email);
                    					$this->email->from($fromemail, $webconfig->site_name);
                    					$this->email->subject($subject);
                    					$this->email->message($mesg);
                    					$mail = $this->email->send(); 
                                    } 
                                }
                            redirect('Dashboard/MyPujaBooking/');
			        }
			    }
			    
				$configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
		$data['webconfig']=$configwebsite->row();

		$data['my_membership']=$this->Main_model->getData('slnt_user_membership','id','DESC',1,'user_id',$_COOKIE["login_user"]);

		$data['my_profile']=$this->Main_model->getData('slnt_member','id','DESC',1,'user_id',$_COOKIE["login_user"]);

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
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['user_membership'] = $this->db->get();
    				}

$data['my_booking']=$this->Main_model->getData('slnt_booking_slot','id','DESC',NULL,'user_id',$_COOKIE["login_user"]);


		$this->load->view('dashboard/header',$data);	    
		$this->load->view('dashboard/puja-booking',$data); 
		$this->load->view('dashboard/footer');
	}
	public function getTimeSlot(){
	    
            	    $booking_id=$this->input->post('booking_id');
            	    $date=$this->input->post('date');
	            $this->db->select('*');
				$this->db->from('slnt_booking_slot');
				$this->db->where('id',$booking_id);
			    $bookingdata = $this->db->get()->row();
			    $poojaid = $bookingdata->puja_id;
			    
			    $selday = date('D',strtotime($this->input->post('date')));
                $selmonth = date('m',strtotime($this->input->post('date')));
                $selyear = date('Y',strtotime($this->input->post('date')));
                $selpooja = $bookingdata->puja_id;
                $selnoday = date('d',strtotime($this->input->post('date')));
                $seldateoffill = date('Ymd',strtotime($this->input->post('date')));
                
                	    $this->db->select('*');
                		$this->db->from('adminlogin');  
                		$this->db->where('rol', 3); 
                		$this->db->where('status',1); 
                		$qpriest = $this->db->get()->num_rows();
                    $this->db->select('*');
            		$this->db->from('slnt_puja_time');  
            		$this->db->where('pooja_time', $selpooja); 
            		$this->db->where('pooja_date', $selday); 
            		$this->db->order_by("id","ASC");
            		$query = $this->db->get();
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
                            		    
                            		} else {
                            		    echo "<option value='$slotdata->id'>$slotdata->from_time - $slotdata->to_time</option>";
                            		}
                		    }
                		}
	}
	
	public function ResetTimeSlotMyBooking(){
	     $this->load->helper('email');
	    $this->load->library('email');
	    
	    
	    $booking_id=$this->input->post('booking_id');
	    $sel_date=$this->input->post('sel_date');
	    $sel_time=$this->input->post('sel_time');
	    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules(
	        'booking_id', 'Name',
	        'required',
	        array('required'     => 'booking id'));
	        
	        $this->form_validation->set_rules(
	        'sel_date', 'Name',
	        'required',
	        array('required'     => 'booking id'));
	        
	        $this->form_validation->set_rules(
	        'sel_time', 'Name',
	        'required',
	        array('required'     => 'booking id'));
 
 	        if ($this->form_validation->run() == FALSE) {
                echo 'All fields are mandatory';
			} else {
			        $datas=array(
			            'req_date'=>$sel_date,
			            'req_time'=>$sel_time,
			            'req_status'=>0
			        );
			        $this->db->where('id',$booking_id);
			        $this->db->update('slnt_booking_slot',$datas);
			        
			        
			                $this->db->select('*');
                            $this->db->from('slnt_booking_slot');
                            $this->db->where('id',$booking_id); 
                            $this->db->order_by('id','DESC');
                            $pujabo = $this->db->get();
                            $pujabooking = $pujabo->row();
		 
			                 $totalamt = 0.00;
                            $this->db->select('*');
                            $this->db->from('slnt_puja_time');
                            $this->db->where('id',$pujabooking->time_id);
                            $this->db->where('pooja_time',$pujabooking->puja_id);
                            $bookingTime = $this->db->get();
                            $actbooktime = $bookingTime->row();
                            
                            $this->db->select('*');
                            $this->db->from('slnt_puja');
                            $this->db->where('id',$pujabooking->puja_id);
                            $pujaList = $this->db->get();
                            $actpujalist = $pujaList->row();
                                
                            $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where('booking_id',$pujabooking->id);
                            $this->db->where('paystatus',1);
                            $this->db->order_by('id','ASC');
                            $paymentdetails = $this->db->get();
                                   
                             
                            $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where('booking_id',$pujabooking->id);
                            $this->db->where('paystatus',1);
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $paymentd = $this->db->get()->row();
                            
                                    $data['bookingid']=$pujabooking->id; // Pooja booking Slots table
                                    $data['poojaBookingSlots']=$pujabooking; // Pooja booking Slots table
                                    $data['poojaTime']=$actbooktime;   // poojaTiming Pooja 
                                    $data['seletedPooja']=$actpujalist;   // poojaTiming Pooja 
                                    $data['poojaSummeryAsc']=$paymentdetails;   //  Pooja Summery ASC
                                    $data['poojaSummerydesc']=$paymentd;   // poojaTiming Pooja 
	    
                                    	$this->db->select('*');
                            			$this->db->from('configuration_general');
                            			$this->db->where('id',1);
                            			$this->db->order_by('id','DESC');
                            	        $webconfig = $this->db->get()->row();
                                   		$fromemail=$webconfig->organization_email;
                            
                                $this->db->select('*');
                    			$this->db->from('slnt_member');
                    			$this->db->where(array('user_id'=>$pujabooking->user_id));
                    			$userDetails=$this->db->get()->row();
                    			$toemail = $userDetails->email;
                			
                			    $this->db->select('*');
                                $this->db->from('adminlogin');
                                $this->db->where('id',$pujabooking->sel_priest);
                                $pujaLisprt = $this->db->get();
                                $prestl = $pujaLisprt->row();
                                $count=0;
                             
                                     $subject ='Pooja Booking Postpone Request Notification';
            					     $mesg = $this->load->view('mail/userpoojabooking',$data,true);
                					$config=array(
                						'charset'=>'utf-8',
                						'wordwrap'=> TRUE,
                						'mailtype' => 'html'
                					);
                                	$this->email->initialize($config);
                					$this->email->to($toemail);
                					$this->email->cc($fromemail);
                					$this->email->bcc($prestl->email);
                					$this->email->from($fromemail, $webconfig->site_name);
                					$this->email->subject($subject);
                					$this->email->message($mesg);
                					$mail = $this->email->send(); 
                                    $count++;
                                
                                if($pujabooking->catering==0){
                                   	$this->db->select('*');
                                    $this->db->from('adminlogin');
                                    $this->db->where('rol',4);
                                    $this->db->where('status',1);
                                    $pujaLisprtcook = $this->db->get();
                                    $prestlcook = $pujaLisprtcook->result();
                                    foreach($prestlcook as $sndml){
                                         $subject ='Pooja Booking Postpone Request Notification';
                					   echo  $mesg = $this->load->view('mail/userpoojabookingcookingdetails',$data,true);
                    					$config=array(
                    						'charset'=>'utf-8',
                    						'wordwrap'=> TRUE,
                    						'mailtype' => 'html'
                    					);
                                    	$this->email->initialize($config);
                    					$this->email->to($sndml->email);
                    					$this->email->from($fromemail, $webconfig->site_name);
                    					$this->email->subject($subject);
                    					$this->email->message($mesg);
                    					$mail = $this->email->send(); 
                                    } 
                                }
                                
                                
                                
			        echo "<span class='text-success'>Request Posted successfully!</span>";
			        echo '<meta http-equiv = "refresh" content = "2; url = " />';
			}
	}

	public function ActiviesOfTemple()
	{
		

				$this->load->view('dashboard/header',$data);
				$this->load->view('dashboard/activies-of-temple'); 
				$this->load->view('dashboard/footer');
	}
	
}