<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
		$this->load->library('email');
    	$this->load->model('Main_model');
	}
 
public function MemPaymentLink()
{
    
        $_SESSION['paymentMemLink']='Membership/MembershipPay/'.$this->uri->segment(3);
		$data['title']="page title";
		$this->load->view('header',$data);
		$this->load->view('buy-membership');
		$this->load->view('footer');
}

	public function index()
	{ 
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

							if ($this->uri->segment(4)!='') {
								 $this->uri->segment(4);
							$this->db->where(array('user_id'=>$_COOKIE["login_user"],'final_submit_status'=>1,'pay_status'=>1,'status'=>1)); 
							} else {
								$this->db->where(array('user_id'=>$_COOKIE["login_user"],'final_submit_status'=>1,'pay_status'=>1,'status'=>1));
							}
						


						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['user_membership'] = $this->db->get();

						$this->db->select('*');
						$this->db->from('slnt_user_membership');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"],'pay_status'=>1));
						$this->db->order_by('id','ASC');
						$this->db->limit(1);
						$data['user_memberfirst'] = $this->db->get();
    				}

if ($this->uri->segment(2)=='PayNow') {
 	$this->db->select('*');
	$this->db->from('slnt_user_membership');
	$this->db->where(array('user_id'=>$_COOKIE["login_user"],'id'=>$this->uri->segment(3)));
	$this->db->order_by('id','ASC');
	$this->db->limit(1);
	$data['pay_list_member'] = $this->db->get()->row();
}

if ($this->uri->segment(3)=='Cancel') {
	 redirect('Membership/MembershipPrintApplication/'.$this->uri->segment(4).'/Cancel');
}
if ($this->uri->segment(3)=='Success') {
	$this->db->select('*');
	$this->db->from('slnt_user_membership');
	$this->db->where(array('user_id'=>$_COOKIE["login_user"],'id'=>$this->uri->segment(4)));
	$this->db->order_by('id','DESC');
	$this->db->limit(1);
	$thisid = $this->db->get()->row();

 							$this->db->select('*');
							$this->db->from('slnt_membership');
							$this->db->where('id',$thisid->sel_member_id);
							$data_m=$this->db->get()->row();
 
							$membership_days=$data_m->membership_days;
							$title=$data_m->title;
							$membership_amount=$data_m->membership_amount;
							$description=$data_m->description;
							$membership_expire = date("Ymd", strtotime("+".$membership_days." day"));	
					$ncount=strlen($this->uri->segment(4));
					if ($ncount<=6) {
						 	$randpassword=sprintf('%06d', $this->uri->segment(4));
					} else {
					 	$randpassword=$this->uri->segment(4);
					}
				$membership_id='SPSLNT'.date('Ymd').$randpassword; 
							
	    					$datan = array(
					       	'membership_id'=> $membership_id,
					       	'membership_days'=> $membership_days,
					       	'membership_title'=> $title,
					       	'membership_amount'=> $membership_amount, 
					       	'membership_description'=> $description, 
					       	'membership_expire'=> $membership_expire,
					       	'transection_id'=> date('Ymd').time(),
					       	'pay_with'=> 'PayPal',
					       	'membership_buy'=>  date('Ymd'), 
					       	'pay_status'=> 1,
					       	'status'=> 1
						);
 
			$this->db->where(array('user_id'=>$_COOKIE["login_user"],'id'=>$this->uri->segment(4)));
			$this->db->update('slnt_user_membership',$datan);
			$this->db->select('*');
			$this->db->from('configuration_general');
			$this->db->where('id',1);
			$this->db->order_by('id','DESC');
	        $webconfig = $this->db->get()->row();
       		$fromemail=$webconfig->organization_email;
 				    $lastmember = $thisid;
				    $datassssss['lastmember'] = $thisid;
				   	$crnt =$lastmember;
				    $toemail = $crnt->email;
				    $subject ='Payment successful of '.$crnt->membership_title;
					$mesg = $this->load->view('mail/user-membershp-payment',$datassssss,true);
					$config=array(
						'charset'=>'utf-8',
						'wordwrap'=> TRUE,
						'mailtype' => 'html'
					);
					$this->email->initialize($config);
					$this->email->to($toemail);
					$this->email->from($fromemail, $webconfig->site_name);
					$this->email->subject($subject);
					$this->email->message($mesg);
					$mail = $this->email->send();
					redirect('Membership/MembershipPrintApplication/'.$this->uri->segment(4));
}
/*Check membership expire or not for ceremony*/
    				if ($this->uri->segment(2)=='ChkMembership') {
    					$this->db->select('*');
						$this->db->from('slnt_user_membership');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$ser_membership = $this->db->get();
						if ($ser_membership->num_rows()==0) {
							redirect('applyMembership');
						} else {
							$rdata=$ser_membership->row();
				// 			$membership_expire=$rdata->membership_expire;
				// 			$membership_buy=$rdata->membership_buy;
				// 			$membership_days=$rdata->membership_days;	
				// 			$membership_expire = date('Y-m-d',strtotime($membership_expire));
 			// 				$membership_buy = date('Y-m-d',strtotime($membership_buy));
 							
				// 		$date1 = date("Y-m-d",strtotime($membership_expire));
				// 		$date2 = date("Y-m-d",strtotime($membership_buy));

				// 		$diff = abs(strtotime($date2) - strtotime($date1));

				// 		 $years = floor($diff / (365*60*60*24));
				// 		 $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
				// 		 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
				// 		 if($months==0 && $days<=10){
				// 		 	redirect('Ceremonies/ExpireNotification');
				// 		 } else{
				// 			redirect('Ceremonies/ChoosEvents');
				// 		 }
						 
						    $memrd= $ser_membership->row();
                            $membership_expire=$memrd->membership_expire; 
                            $membership_buy=$memrd->membership_buy; 
                            $membership_days=$memrd->membership_days; 
                            $todaydate = date('Ymd');
                            $leftdays=$membership_expire-$todaydate;
                            $date1=date_create(date('Y-m-d'));
                            $date2=date_create(date('Y-m-d',strtotime($membership_expire)));
                            $diff=date_diff($date1,$date2);
                            $chk =$diff->format("%R%a"); 
                         
                              if($chk>30){
                                  redirect('Ceremonies/ChoosEvents');
                              }
                             if($chk>=0 && $chk<=30){
                                redirect('Ceremonies/ExpireNotification');
                            } else if($chk<0){
                                redirect('Ceremonies/ExpireNotification');
                            }
						 
						 
						 
						 
						 
						}
    				}
/*Check membership expire or not for ceremony*/
/*Check membership expire or not for ceremony*/
    				if ($this->uri->segment(2)=='ChkMembership2') {
    					if (!isset($_COOKIE["login_user"])) {
    						redirect('Login');
    					}
    					$this->db->select('*');
						$this->db->from('slnt_user_membership');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$ser_membership = $this->db->get();
						if ($ser_membership->num_rows()==0) {
							redirect('applyMembership');
						} else {
							$rdata=$ser_membership->row();
				// 			$membership_expire=$rdata->membership_expire;
				// 			$membership_buy=$rdata->membership_buy;
				// 			$membership_days=$rdata->membership_days;	
 							
 			// 				 $membership_expire = date('Y-m-d',strtotime($membership_expire));
 			// 				 $membership_buy = date('Y-m-d',strtotime($membership_buy));
 							
				// 		$date1 = date("Y-m-d",strtotime($membership_expire));
				// 		$date2 = date("Y-m-d",strtotime($membership_buy));

				// 		$diff = abs(strtotime($date2) - strtotime($date1));

				// 		 $years = floor($diff / (365*60*60*24));
				// 		 $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
				// 		 $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
				// 		 if($months==0 && $days<=10){
				// 		 	redirect('pujaBooking/ExpireNotification');
				// 		 } else{
				// 			redirect('poojaBooking/Services-Date-Time');
				// 		 }
						 
						    $memrd= $ser_membership->row();
                            $membership_expire=$memrd->membership_expire; 
                            $membership_buy=$memrd->membership_buy; 
                            $membership_days=$memrd->membership_days; 
                            $todaydate = date('Ymd');
                            $leftdays=$membership_expire-$todaydate;
                            $date1=date_create(date('Y-m-d'));
                            $date2=date_create(date('Y-m-d',strtotime($membership_expire)));
                            $diff=date_diff($date1,$date2);
                            $chk =$diff->format("%R%a"); 
                         
                              if($chk>30){
                                  redirect('poojaBooking/Services-Date-Time');
                              }
                             if($chk>=0 && $chk<=30){
                                redirect('poojaBooking/ExpireNotification');
                            } else if($chk<0){
                                redirect('poojaBooking/ExpireNotification');
                            }
						 
						}
    				}
/*Check membership expire or not for ceremony*/

    	if ($this->uri->segment(4)=='buyNow') {
    	 
    		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules(
	        'name_as_nric', 'Name',
	        'required',
	        array('required'     => 'Enter Name (As Per NRIC)'));
    
    
    	$this->form_validation->set_rules(
	        'name_title', 'name_title',
	        'required',
	        array('required'     => 'Enter title of name'));
	        
	        
	        
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


$data['file_error']='';


						$this->db->select('*');
						$this->db->from('slnt_user_membership');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$getrecord= $this->db->get();

						// if ($getrecord->num_rows()==0) {
						// 	$last = $this->db->order_by('id',"desc")->limit(1)->get('slnt_user_membership')->row();
						// 	@$c2=$last->id;
						// 	$c=$c2+1;
						// 		$otp=rand(9999,99);
						// 		$membership_id='SLNTMEM'.rand(9999,99).$c;

						// } else {
						// 	$lnts = $getrecord->row();
						// 	$membership_id=$lnts->membership_id;
						// }
							$this->db->select('*');
							$this->db->from('slnt_membership');
							$this->db->where('id',$this->input->post('sel_mem'));
							$data_m=$this->db->get()->row();
							$membership_days=$data_m->membership_days;
							$title=$data_m->title;
							$membership_amount=$data_m->membership_amount;
							$description=$data_m->description;
							$membership_expire = date("Ymd", strtotime("+".$membership_days." day"));
                            $profilepic='';
						//'membership_id'=>$membership_id,
						 $this->load->library('upload');
if (!empty($_FILES['userfile']['name']))
{      						   
        $config['upload_path'] = './assets/profile/';
        $config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG';     
        $config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('userfile'))
        {
             $x=$this->upload->data();
            $profilepic = $x['file_name'];  
            $imgstate='ok';
        } else {
             $data['file_error'] = $this->upload->display_errors();
        }
} else {
     $profilepic='';
     	                $this->db->select('*');
                    	$this->db->from('slnt_user_membership');
                    	$this->db->where(array('user_id'=>$_COOKIE["login_user"],'final_submit_status'=>0,'pay_status'=>0,'status'=>0));
                    	$this->db->order_by('id','DESC');
                    	$this->db->limit(1);
                    	$lastrecord = $this->db->get();
                        if($lastrecord->num_rows()>0){
                          $lastre  = $lastrecord->row(); 
                           $profilepic =$lastre->userfile;
                        }
     $imgstate='ok';
}
						    
						    
                            if ($imgstate=='ok')
                            {
                       
                 
                        $datan = array(
							'user_id'=>$_COOKIE["login_user"],
					       	'membership_days'=> $membership_days,
					       	'membership_title'=> $title,
					       	'membership_amount'=> $membership_amount, 
					       	'membership_description'=> $description, 
					       	'userfile'=> $profilepic, 
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
						
						$this->db->select('*');
                    	$this->db->from('slnt_user_membership');
                    	$this->db->where(array('user_id'=>$_COOKIE["login_user"],'final_submit_status'=>0,'pay_status'=>0,'status'=>0));
                    	$this->db->order_by('id','DESC');
                    	$this->db->limit(1);
                    	$lastrecord = $this->db->get();
                        if($lastrecord->num_rows()>0){
                            $lastre  = $lastrecord->row();
                            $this->db->where('id',$lastre->id);
                            $this->db->update('slnt_user_membership',$datan);
                        } else {
                            $this->db->insert('slnt_user_membership',$datan);
                        }

                   	redirect('Membership/MembershipStep2');
                            }
                            
			}
    	}
			
    	

    	if ($this->uri->segment(3)=='saveStep2') {
    		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules(
	        'occupation', 'occupation',
	        'required',
	        array('required'     => 'Enter occupation'));

	        $this->form_validation->set_rules(
	        'name_of_firm', 'name_of_firm',
	        'required',
	        array('required'     => 'Entername of firm'));

	        $this->form_validation->set_rules(
	        'emp_address_1', 'Address',
	        'required',
	        array('required'     => 'Enter address '));
	        $this->form_validation->set_rules(
	        'emp_postalcode', 'emp_postalcode',
	        'required',
	        array('required'     => 'Enter postal code'));
	        $this->form_validation->set_rules(
	        'emp_tel', 'emp_tel',
	        'required',
	        array('required'     => 'Enter Tel. No.'));

	        $this->form_validation->set_rules(
	        'emp_email', 'Email',
	        'required',
	        array('required'     => 'Enter email address'));

	      
 	        if ($this->form_validation->run() == FALSE) {

			} else {
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
					       	'membership_buy'=>  date('Ymd'), 
					       	'occupation'=>  $this->input->post('occupation'),
					       	'name_of_firm'=>  $this->input->post('name_of_firm'),
					       	'emp_address_1'=>  $this->input->post('emp_address_1'),
					       	'emp_postalcode'=>  $this->input->post('emp_postalcode'), 
					       	'emp_tel'=>  $this->input->post('emp_tel'),
					       	'emp_email'=>  $this->input->post('emp_email')
						);
    				$this->db->where(array('user_id'=>$_COOKIE["login_user"],'final_submit_status'=>0,'pay_status'=>0,'status'=>0));
                	$this->db->update('slnt_user_membership',$datan);
                   	redirect('Membership/MembershipStep3');
            } 
    	}

if ($this->uri->segment(3)=='saveStep3') {
    		
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
					       	'membership_buy'=>  date('Ymd'), 
					       	'organization_name'=>  $this->input->post('organization_name'),
					       	'membership_position'=>  $this->input->post('membership_position'),
					       	'serves_as_volunterrs'=>  $this->input->post('serves_as_volunterrs'),
					       	'interest'=>  $this->input->post('interest'), 
					       	'interest_other'=>  $this->input->post('interest_other'),
					       	'porposer_name'=>  $this->input->post('porposer_name'),
					       	'secondery_name'=>  $this->input->post('secondery_name'),
					       	'terms_1'=>  $this->input->post('terms_1')
						);
    				$this->db->where(array('user_id'=>$_COOKIE["login_user"],'final_submit_status'=>0,'pay_status'=>0,'status'=>0));
                	$this->db->update('slnt_user_membership',$datan);
                   	redirect('Membership/MembershipApplicationPreview');
                   //	redirect('Membership/MembershipPrintApplication');
           
    	}
    	
    	if ($this->uri->segment(3)=='finalSubmit') {
        	    	    $datan = array(
    					  'final_submit_status'=>1
    					);
        				$this->db->where(array('user_id'=>$_COOKIE["login_user"],'final_submit_status'=>0,'pay_status'=>0,'status'=>0));
                    	$this->db->update('slnt_user_membership',$datan);
                       	redirect('Membership/MembershipPrintApplication');
    	    
    	}
    	

//     	if ($this->uri->segment(3)=='saveStep3') {
//     		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
// 			$this->form_validation->set_rules(
// 	        'organization_name', 'occupation',
// 	        'required',
// 	        array('required'     => 'Enter organization name'));

// 	        $this->form_validation->set_rules(
// 	        'membership_position', 'name_of_firm',
// 	        'required',
// 	        array('required'     => 'Enter membership position'));

// 	        $this->form_validation->set_rules(
// 	        'serves_as_volunterrs', 'Address',
// 	        'required',
// 	        array('required'     => 'Select serves as volunterrs '));
// 	        $this->form_validation->set_rules(
// 	        'interest', 'emp_postalcode',
// 	        'required',
// 	        array('required'     => 'Select interest'));
// 	        $this->form_validation->set_rules(
// 	        'porposer_name', 'emp_tel',
// 	        'required',
// 	        array('required'     => 'Enter porposer name'));

// 	        $this->form_validation->set_rules(
// 	        'secondery_name', 'Email',
// 	        'required',
// 	        array('required'     => 'Enter secondery name'));
// 	        $this->form_validation->set_rules(
// 	        'terms_1', 'Email',
// 	        'required',
// 	        array('required'     => 'Select terms & conditions'));

	      
//  	        if ($this->form_validation->run() == FALSE) {

// 			} else {
// 							$this->db->select('*');
// 							$this->db->from('slnt_membership');
// 							$this->db->where('id',$this->input->post('sel_mem'));
// 							$data_m=$this->db->get()->row();
// 							$membership_days=$data_m->membership_days;
// 							$title=$data_m->title;
// 							$membership_amount=$data_m->membership_amount;
// 							$description=$data_m->description;
// 							$membership_expire = date("Ymd", strtotime("+".$membership_days." day"));	
//     					$datan = array(
// 					       	'membership_days'=> $membership_days,
// 					       	'membership_amount'=> $membership_amount, 
// 					       	'membership_description'=> $description, 
// 					       	'membership_expire'=> $membership_expire,
// 					       	'membership_buy'=>  date('Ymd'), 
// 					       	'organization_name'=>  $this->input->post('organization_name'),
// 					       	'membership_position'=>  $this->input->post('membership_position'),
// 					       	'serves_as_volunterrs'=>  $this->input->post('serves_as_volunterrs'),
// 					       	'interest'=>  $this->input->post('interest'), 
// 					       	'interest_other'=>  $this->input->post('interest_other'),
// 					       	'porposer_name'=>  $this->input->post('porposer_name'),
// 					       	'secondery_name'=>  $this->input->post('secondery_name'),
// 					       	'terms_1'=>  $this->input->post('terms_1')
// 						);
//     				$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
//                 	$this->db->update('slnt_user_membership',$datan);
//                   	redirect('Membership/MembershipPrintApplication');
//             } 
//     	}

// if ($this->uri->segment(2)=='buyNow') {
//      	$this->db->select('*');
//     	$this->db->from('slnt_user_membership');
//     	$this->db->where(array('user_id'=>$_COOKIE["login_user"],'id'=>$this->uri->segment(3)));
//     	$this->db->order_by('id','ASC');
//     	$this->db->limit(1);
//     	$data['pay_list_member'] = $this->db->get()->row();
// }


		$data['title']="page title";
		$this->load->view('header',$data);
		$this->load->view('buy-membership');
		$this->load->view('footer');

		
	}

 

	public function getServices()
	{
				 
					$this->db->select('*');
					$this->db->from('slnt_puja');  
					$this->db->like('description_charge', $this->input->post('id'), 'both'); 
					$this->db->order_by("description_charge","ASC");
					$query = $this->db->get();
					if ($query->num_rows()>0) {
						foreach ($query->result() as $value) {
					?>
<li><a href="javascript:void();" onclick="getSelService(<?=$value->id;?>,'<?=$value->description_charge;?>','<?=$value->member_price;?>','<?=$value->non_member_price;?>');"><?=$value->description_charge;?> / <strong>Member: <?=$value->member_price;?></strong> / <strong>Non-Member: <?=$value->non_member_price;?></strong></a></li>
					<?php 
						}
					} else {
						echo 'No record found';
					}
				 		
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
                                                    <?php echo date("l", strtotime($tomorrow)) ;?>
                                                    <br />
                                                    <?php echo date("jS F Y", strtotime($tomorrow)) ;?>
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
		        $this->db->from('slnt_booking_slot');
		        $this->db->where('sel_date',$sel_date);
		        $this->db->where('time_id',$time_id);
		        $this->db->where('puja_id',$puja_id);
		        $selprst = $this->db->get();	
		        $tselcountprst=$selprst->num_rows();
    ?>
			<li class="list-group-item <?php if($countPriest>$tselcountprst){ ?> <?php } else { echo 'disabled'; }?>">
			<label class="timer-slot">
				<?php if($countPriest>$tselcountprst){ ?>
					<input type="radio" name="time_slot_index" value="<?=$chkcount;?>" <?php if($chk2==0){ echo 'checked';} ?>>
				<?php  $chk2++; } else { ?>
					<input type="radio" name="" disabled="disabled">
				<?php  } ?>
			    <?=$rowsdata->from_time;?> - <?=$rowsdata->to_time;?>
				<input type="hidden" name="time_slot<?=$chkcount;?>" id="time_slot<?=$chkcount;?>" value="<?=$rowsdata->id;?>">
			    <input type="hidden" name="sel_date<?=$chkcount;?>" id="sel_date<?=$chkcount;?>" value="<?=date("Ymd", strtotime("+".$i2." day"))?>">
			</label>
			</li>
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
        $this->db->where('rol',3);
        $this->db->where('status',1);
        $priest = $this->db->get();
        foreach ($priest->result() as $priest) { ?>
        	<div class="col-md-3 text-center">
					<div class="img-thumbnail">
						<label  for="sel_priest<?=$priest->id;?>">
							<img src="<?=base_url();?>assets/profile/<?=$priest->profilepic;?>" class="img-responsive">
						</label>
					</div>
					<label class="text-danger" for="sel_priest<?=$priest->id;?>">
						<input type="radio" name="sel_priest" id="sel_priest<?=$priest->id;?>"   required="" value="<?=$priest->id;?>">
						<?=$priest->name;?> <?=$priest->last_name;?>
							
						</label>
			 
            </div>
        <?php }
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
				<div  style="max-height: 250px; overflow: scroll;">
				 <table class="table table-responsive">
				 		<thead>
				 			<tr>
				 				 
				 				<th>Pooja Samagri Title</th>
				 				<th>Pooja Samagri Price (SGD)</th>
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
				 				<td><?=$samagri->samagri_price;?></td>
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->samagri_price;
							$count++; } ?>

				 		</tbody>
				 		 
				 </table>
				</div>
				<div class="col-md-12 text-center">
				<h1><label style="font-size: 24px;">Total :  $  <?=$total;?> SGD</label>
<input type="hidden" name="pooja_samagri_amt" value="<?=$total;?>"   required="">
				</h1>
				</div>
			</div>
		<?php	        	
				} else if ($status==1) {
		?>
		<div  class="table-responsive" >
			<h2 class="text-danger">
				I will prepere myself
			</h2>
			<div  style="max-height: 250px; overflow: scroll;">
				 <table class="table table-responsive">
				 		<thead>
				 			<tr>
				 				 
				 				<th>Puja Samagri Title</th>
				 			
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
				<div  style="max-height: 250px; overflow: scroll;">
				 <table class="table table-responsive">
				 		<thead>
				 			<tr>
				 			 
				 				<th>Havan Samagri Title</th>
				 				<th>Havan Samagri Price (SGD)</th>
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
				 				<td><?=$samagri->samagri_price;?></td>
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->samagri_price;
							$count++; } ?>

				 		</tbody>
				 	 
				 </table>
				</div>
				<div class="col-md-12 text-center">
				<h1><label style="font-size: 24px;">Total :  $  <?=$total;?> SGD</label></h1>
				<input type="hidden" name="havan_samagri_amt" value="<?=$total;?>"   required="">
				</div>
			</div>
		<?php	        	
				} else if ($status==1) {
		?>
		<div  class="table-responsive" >
			<h2 class="text-danger">
				I will prepere myself
			</h2>
			<div  style="max-height: 250px; overflow: scroll;">
				 <table class="table table-responsive">
				 		<thead>
				 			<tr>
				 			  
				 				<th>Havan Samagri Title</th>
				 			
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
				<div  style="max-height: 250px; overflow: scroll;">
				 <table class="table table-responsive">
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
				<div class="col-md-12 text-center">
				<h1><label style="font-size: 24px;">Total :  $  <?=$total;?> SGD</label></h1>
				<input type="hidden" name="bhog_prasad_amt" value="<?=$total;?>"   required="">
				</div>
			</div>
		<?php	        	
			} else if ($status==1) {
		?>
		<div  class="table-responsive" >
			<h2 class="text-danger">
				I will prepere myself
			</h2>
			<div  style="max-height: 250px; overflow: scroll;">
				 <table class="table table-responsive">
				 		<thead>
				 			<tr>
				 				<th>#</th>
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
				$pujaid = $this->input->post('pujaid');
			 	$status = $this->input->post('status');


if ($status==1) {
?>
<input type="hidden" name="dinner" value="0">
<input type="hidden" name="lunch" value="0">
<input type="hidden" name="refreshment" value="0">


<?php
} else {

			 	$this->db->select('*');
				$this->db->from('slnt_bhog_catering');
		        $this->db->where('puja_id',$pujaid);
		        $this->db->group_by('catering_type');
		        $priest = $this->db->get()->result();
		    echo "<div class='col-sm-12'><div class='row'>";

		        foreach ($priest as $value) {
		    ?>
		     

	<div class="col-md-4 col-xs-12">
          <div class="pricing-divider2 text-center">
              <h1 class="text-light text-center"><?=$value->catering_type;?></h1>

              <label class="text-white"> <input type="radio" name="<?=strtolower($value->catering_type);?>" value="1"   required=""> Yes</label>
              <label class="text-white"> <input type="radio" name="<?=strtolower($value->catering_type);?>" value="0"   required=""> No</label>
 
          </div>
          <div class="card-body bg-white mt-0 shadow">
           	   <?php 
           	   		$this->db->select('*');
					$this->db->from('slnt_bhog_catering');
			        $this->db->where('puja_id',$pujaid);
			        $this->db->where('catering_type',$value->catering_type);
			        $priest2 = $this->db->get()->result();
			        $total=0.00;
			         foreach ($priest2 as $value) {
			         $total=$total+$value->catering_price;?>
			         	<h2><?=$value->catering_title?></h2>
			      <?php   }
           	   ?>     

           	   <h1>Total : $ <?=$total;?> SGD</h1>    
          </div>
        </div>
		    <?php 
		        }
		       echo "</div></div>";
			}

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

		 
	}

