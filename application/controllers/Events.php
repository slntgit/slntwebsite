<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->helper('email');
		$this->load->helper('text');
    	$this->load->model('Main_model');
		$data['title']="page title";

		if (isset($_GET['fromdate'])) {
			$fromdate=$_GET['fromdate'];
			$todate=$_GET['todate'];

			$date1 = date("Ymd",strtotime($_GET['fromdate']));
            $date2 = date("Ymd",strtotime($_GET['todate']));
            $diff = abs(strtotime($date2) - strtotime($date1));
            $years = floor($diff / (365*60*60*24));
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
            $day = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

            $this->db->select('*');
			$this->db->from('add_products');
			$wr21 = array('filterdate>='=>$date1,'filterdate<='=>$date2);
			$this->db->where($wr21);
			$x21 =$this->db->get();
			$data['events']=$x21; 
		} else {
			$product = $this->Main_model->getData('add_products','filterdate','ASC',NULL,NULL,NULL);
			$data['events']=$product;
		}
		$this->load->view('header',$data);
	}
	public function index()
	{
		$this->load->view('events');
		$this->load->view('footer');
	}

	public function EventsDetails()

	{
		$perm2 = $this->uri->segment(2);
		$about=$this->Main_model->getData('add_products','id','DESC',NULL,'id',$perm2);
		$data['eventsDetails']=$about->row();


		$pujawhere = 'Yajman';
		$data['pujasql']=$this->Main_model->getData('slnt_puja','id','DESC',NULL,'puja_type',$pujawhere);
	 
		if (isset($_GET['action'])) {
			if ($_GET['action']=='save/apply') {
				$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
			$this->form_validation->set_rules('membertype', 'Membership Type','trim|required',
	        									array('required'     => 'Choose your membership status'));

			$this->form_validation->set_rules('first_name', 'First Name','trim|required',
	        array('required'     => 'Enter first name'));

  			$this->form_validation->set_rules('last_name', 'Last Name','trim|required',
	        array('required'     => 'Enter last name'));

  			$this->form_validation->set_rules(
	        	'email', 'Email',
	        	'trim|required|valid_email',
	        array(
	        	'valid_email'     => 'Enter  correct Email',
	        	'required'     => 'Enter Email '));


		$this->form_validation->set_rules(
	        'mobile', 'Mobile Number',
	        'required|regex_match[/^[0-9]{8}$/]',
	        array('regex_match'     => 'Enter 8 digit correct mobile number',
	        	'required'     => 'Ente mobile number'));
	
	      

	       // $this->form_validation->set_rules('yajman_type', 'Yajman Type','trim|required',
	       // array('required'     => 'Choose yajman type'));
 

			$this->form_validation->set_rules('paymentmod', 'Payment mode','trim|required',
	        array('required'     => 'Choose payment mode'));

	       
	        $this->form_validation->set_rules('termscondition', 'term and condition','trim|required',
	        array('required'     => 'Please Accept Term & Condition'));

		        if ($this->form_validation->run() == FALSE) {

				} else {


		$yajman_type = $this->input->post('yajman_type');
		if($yajman_type>0){
		  	$selectedpuja=$this->Main_model->getData('slnt_event_yajman','id','DESC',NULL,'id',$yajman_type);
		$listyajman  = $selectedpuja->row();
		 	if ($this->input->post('membertype')==1) {
		 		$puja_amount=$listyajman->member_price;
		 	} else 	if ($this->input->post('membertype')==2) {
		 		$puja_amount=$listyajman->non_member_price;
		 	}  
		} else {
		    $puja_amount=0.00;
		}
	
							$datan = array(
							'membertype'=>  $this->input->post('membertype'),  
							'memberid'=>  $this->input->post('memberid'), 
							'date_of_event'=>  $this->input->post('date_of_event'), 
							'time_of_event'=>  $this->input->post('time_of_event'), 
							'title'=>  $this->input->post('title'),
							'first_name'=>  $this->input->post('first_name'),
							'last_name'=>  $this->input->post('last_name'),
							'email'=>  $this->input->post('email'), 
							'mobile_code'=> '+65', 
							'mobile'=>  $this->input->post('mobile'), 
							'yajman_type'=>  $this->input->post('yajman_type'), 
							'paymentmod'=>  $this->input->post('paymentmod'), 
							'termscondition'=>  $this->input->post('termscondition'),
							'event_id'=>  $this->input->post('event_id'),
							'event_amount'=>  $this->input->post('event_amount'),
							'booking_for'=>  $this->input->post('booking_for'),
							'description_charge'=>  $listyajman->description_charge,
							'puja_amount'=> $puja_amount,
							'createdate'=>  date('d-m-Y'),
							'craetetime'=>  date('H:i:s A')
						);
						$this ->db->insert('slnt_event_booking',$datan);
						$this->db->trans_complete();
    					$lastid = $this->db->insert_id();
						redirect('EventsPaymentSummery/'.$lastid);
				}
			}
		}
		$this->load->view('eventsDetails',$data);
		$this->load->view('footer');
	}

	public function PaymentSummery()
	{
				$yajman_type = $this->uri->segment(2);
				$selectedpuja=$this->Main_model->getData('slnt_event_booking','id','DESC',NULL,'id',$yajman_type);
				$data['booking']  = $selectedpuja->row();
 
		$this->load->view('payment-summery',$data);
		$this->load->view('footer');
	}

	public function Cancel()
	{	
		$yajman_type = $this->uri->segment(3);
 
		$selectedpuja=$this->Main_model->getData('slnt_event_booking','id','DESC',NULL,'id',$yajman_type);
		$data['booking']  = $selectedpuja->row();
		$this->load->view('payment-cancel-summery',$data);
		$this->load->view('footer');
	}

	public function Success()
	{
		$yajman_type = $this->uri->segment(3);
		$evnt_bookin_id='SLNTEVNT'.date('Ymd').$this->uri->segment(3);
		$datan = array(
			'evnt_bookin_id'=>  $evnt_bookin_id,  
			'status'=>  1
		);
		$wr21 = array(
			'status>='=>0, 
			'id>='=>$this->uri->segment(3),
			'evnt_bookin_id'=>''
		);
		$this->db->where($wr21);
		$this ->db->update('slnt_event_booking',$datan);

		$selectedpuja=$this->Main_model->getData('slnt_event_booking','id','DESC',NULL,'id',$yajman_type);
		$booking = $selectedpuja->row();
		$data['booking']  = $selectedpuja->row();
 			

       		if (!isset($_SESSION['email']['pyemai_evnt'])) {
		       		$this->db->select('*');
					$this->db->from('configuration_general');
					$this->db->where('id',1);
					$this->db->order_by('id','DESC');
			        $webconfig = $this->db->get()->row();
		       		$fromemail=$webconfig->organization_email;
		       		$toemail=$booking->email;

       			 	$subject ='Success payment invice of  '.$booking->evnt_bookin_id;
				 	 $mesg = $this->load->view('mail/user-events-bookingInvoiceCreateNMail-payment',$data,true);
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
					$_SESSION['email']['pyemai_evnt']=$this->uri->segment(2);
       		}

		$this->load->view('payment-success-summery',$data);
		$this->load->view('footer');
	}


}

