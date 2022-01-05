
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreatePassword extends CI_Controller {
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
		if($this->uri->segment(2)!='' && $this->uri->segment(3)!='' && $this->uri->segment(4)!=''){
			$password_reset_url = base_url().'CreatePassword/'.$this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4);
			$this->db->select('*');
			$this->db->from('slnt_member');
			$this->db->where(array('password_reset_url'=>$password_reset_url));
			$da = $this->db->get();
			if ($da->num_rows()==0) {
				redirect('CreatePassword');
			}
		}

		if ($this->uri->segment(5)=='save') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules('password', 'password','trim|required',
	        array('required'     => 'Enter  password'));

	        $this->form_validation->set_rules('confirm_password', 'confirm password','trim|required|matches[password]',
	        array('required'     => 'Enter  confirm password','matches'=> 'Password and confirm password must be same'));
	        if ($this->form_validation->run() == FALSE) {

			} else {
				$datan = array('password'=> $this->input->post('password'),'password_reset_url'=>'','status'=>1);
		        $where2 =array('password_reset_url'=>$password_reset_url);
				$this->db->where($where2);
		        $this ->db->update('slnt_member',$datan);
		        $this->session->set_flashdata("success","<span class='text-success'>Password change successfully.</span>");
		        redirect('pujaBooking');
			}
		}
 	$this->load->view('create-password');
    $this->load->view('footer');	
}
} 