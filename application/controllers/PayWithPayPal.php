<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PayWithPayPal extends CI_Controller {
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
		$data['title']="page title";
	 

	}
	
	public function index()
	{	
		$this->load->view('pay-with-pay-pal'); 
	}
	 

	public function Success()
	{	 
						// $this->db->select('*');
						// $this->db->from('slnt_payment_summery');
						// $this->db->where(array('id'=>$this->uri->segment(3),'payment_id'=>$this->uri->segment(4)));
						// $this->db->order_by('id','DESC');
						// $this->db->limit(1);
						// $data['booking_details'] = $this->db->get()->row();

						// $datan = array(
						// 	       	'paystatus'=>  1,
						// 	       	'paywith'=>'PayPal'
						// );
    		// 	$this->db->where(array('id'=>$this->uri->segment(3),'payment_id'=>$this->uri->segment(4),'paystatus'=>0));
      //           $this->db->update('slnt_payment_summery',$datan);
				//$this->load->view('header',$data);
				$this->load->view('booking-success'); 
				//$this->load->view('footer');
	}

	public function SendEmailNotifications()
	{
	     $segem3 =  $this->uri->segment(3);
	    $segem4 =  $this->uri->segment(4);
	    
	    
                	        $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where(array('id'=>$this->uri->segment(3),'payment_id'=>$this->uri->segment(4)));
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $booking_details = $this->db->get()->row();
                            
                            $this->db->select('*');
                            $this->db->from('slnt_booking_slot');
                            $this->db->where('id',$booking_details->booking_id); 
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
                                
                               
                                if($count==0){
                                     $subject ='Pooja Booking Notification';
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
                                }
                                
                                if($pujabooking->catering==0){
                                   	$this->db->select('*');
                                    $this->db->from('adminlogin');
                                    $this->db->where('rol',4);
                                    $this->db->where('status',1);
                                    $pujaLisprtcook = $this->db->get();
                                    $prestlcook = $pujaLisprtcook->result();
                                    foreach($prestlcook as $sndml){
                                        $subject ='Pooja Booking Notification';
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
                			
	 redirect('poojaBooking/Thank-You/'.$this->uri->segment(3).'/'.$this->uri->segment(4));    
	}
	public function Cancel()
	{	
				$datan = array(
					       	'paystatus'=>  2,
					       	'paywith'=>'PayPal'
				);
    			$this->db->where(array('id'=>$this->uri->segment(3),'payment_id'=>$this->uri->segment(4),'paystatus'=>0));
                $this->db->update('slnt_payment_summery',$datan);

						$this->db->select('*');
						$this->db->from('slnt_payment_summery');
						$this->db->where(array('id'=>$this->uri->segment(3),'payment_id'=>$this->uri->segment(4)));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['booking_details'] = $this->db->get()->row();
						
		$this->load->view('header',$data);
        $this->load->view('booking-cancel'); 
		$this->load->view('footer');
	}
} 