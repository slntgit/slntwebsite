<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EventsCalendarView extends CI_Controller {
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
			$data['events']=$x21->result(); 
		} else {
			$product = $this->Main_model->getData('add_products','filterdate','DESC',NULL,NULL,NULL);
			$data['events']=$product->result();
		}
		$this->load->view('header',$data);
	}
	public function index()
	{
		$this->load->view('EventsCalendarView');
		$this->load->view('footer');
	}

	public function EventsDetails()

	{
		$perm2 = $this->uri->segment(2);
			$about=$this->Main_model->getData('add_products','id','DESC',NULL,'id',$perm2);
			$data['eventsDetails']=$about->row();
		$this->load->view('eventsDetails',$data);
		$this->load->view('footer');
	}


}

