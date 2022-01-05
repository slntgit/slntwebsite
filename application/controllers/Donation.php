<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation extends CI_Controller {
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
	 	$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->order_by('name','ASC');
	    $data['donate_category'] = $this->db->get()->result();

	   			 if (isset($_COOKIE["login_user"])) {
			    		$this->db->select('*');
						$this->db->from('slnt_member');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$data['userDetails']=$this->db->get()->row();

						$this->db->select('*');
						$this->db->from('slnt_user_membership');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"],'pay_status'=>1));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['user_membership'] = $this->db->get();

    				}
$donation_slab = $this->Main_model->getData('donation_slab','name','ASC',NULL,NULL,NULL);
$data['donation_slab']=$donation_slab->result();
		$this->load->view('header',$data);
	}
	
	public function index()
	{	
	    
	    
	    
	    
	        if(isset($_GET['do'])){
	           if($_GET['do']=='action'){
	               $donation_type = $this->input->post('donation_type');
	               $cer_evnt_type = $this->input->post('cer_evnt_type');
	               $amount = $this->input->post('amount');
	               $_SESSION['donation_type']=$donation_type;
	               $_SESSION['cer_evnt_type']=$cer_evnt_type;
	               $_SESSION['amount']=$amount;
	               redirect('Donation');
	           } 
	        }
			if ($this->uri->segment(2)=='PayNow') {
			

			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			 
	        $this->form_validation->set_rules(
	        'donat_transfer_type', 'Tranfer Type',
	        'required',
	        array('required'     => 'Enter Donation Amount Transfer Type '));

	        $this->form_validation->set_rules(
	        'amount', 'amount',
	        'required',
	        array('required'     => 'Enter amount'));


			$this->form_validation->set_rules(
	        'donation_type', 'amount',
	        'required',
	        array('required'     => 'Select donation  type'));
		        if ($this->form_validation->run() == FALSE) {
		            $donation_type = $this->input->post('donation_type');
	               $cer_evnt_type = $this->input->post('cer_evnt_type');
	               $amount = $this->input->post('amount');
	               $_SESSION['donation_type']=$donation_type;
	               $_SESSION['cer_evnt_type']=$cer_evnt_type;
	               $_SESSION['amount']=$amount; 
				} else {

								$last = $this->db->order_by('id',"desc")->limit(1)->get('slnt_donation')->row();
								@$c2=$last->id;
								$c=$c2+1;
								$otp=rand(9999,99);
								$ncount=strlen($c);

								if ($ncount<5) {
	                                $randpassword=sprintf('%05d', $c);
	                            } else {
	                                $randpassword=$c;
	                            }
	                           $donation_id = 'SLNTDONET'.date('Ymd').$randpassword;
							if(isset($_COOKIE["login_user"])){
		    					$datan = array(
									'user_id'=>$_COOKIE["login_user"],
									'donation_id'=>$donation_id,
							       	'filterdate'=>  date('Ymd'), 
							       	'membership_create_date'=>  date('d-m-Y'), 
							       	'membership_create_time'=>  date('H:i:s A'),
							       	'donat_transfer_type'=>  $this->input->post('donat_transfer_type'),
							       	'amount'=>  $this->input->post('amount'),
							       	'transection_ref'=>  $this->input->post('transection_ref'),
							       	'donation_type'=>  $this->input->post('donation_type')
								);
						
							} else {
		    					$datan = array(
									'donation_id'=>$donation_id,
							       	'membership_create_date'=>  date('d-m-Y'), 
							       	'membership_create_time'=>  date('H:i:s A'),
							       	'donat_transfer_type'=>  $this->input->post('donat_transfer_type'),
							       	'amount'=>  $this->input->post('amount'),
							       	'transection_ref'=>  $this->input->post('transection_ref'),
							       	'donation_type'=>  $this->input->post('donation_type')
								);
						
							}
							
		 
								$_SESSION['donation']=$donation_id;			
			                	$this->db->insert('slnt_donation',$datan);
		                	if ($this->input->post('donat_transfer_type')=='PayPal') {
		                		redirect('Donation/ConfirmToPayPal');
		                	} else {
		                		redirect('Donation/ConfirmToPayPal');
		                	}
						}
			}
		$this->load->view('donation'); 
		$this->load->view('footer');
	}
	public function ConfirmToPayPal()
	{		
						$this->db->select('*');
						$this->db->from('slnt_donation');
						$this->db->where(array('donation_id'=>$_SESSION['donation']));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$data['lastDonation']=$this->db->get()->row();

		$this->load->view('confirm-to-paypal',$data); 
		$this->load->view('footer');
	}

	public function Success()
	{	
						$this->db->select('*');
						$this->db->from('slnt_donation');
						$this->db->where(array('donation_id'=>$_SESSION['donation']));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$dat=$this->db->get()->row();
						$data['lastDonation']=$dat;

		 				$datan = array(
					       	'status'=>  1,
						);
    				$this->db->where(array('donation_id'=>$_SESSION['donation'],'id'=>$dat->id));
                	$this->db->update('slnt_donation',$datan);
		$this->load->view('donation-success',$data); 
		$this->load->view('footer');
	}
}