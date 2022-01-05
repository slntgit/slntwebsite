<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pooja extends CI_Controller {

    public function __construct() {
        parent:: __construct();

	        $this->load->helper('url');
	        $this->load->model('Pooja_model');
	        $this->load->helper('cookie','url'); 
        	$this->load->library('form_validation');
        	$this->load->library('session');
        	$this->load->helper('email');
            $this->load->helper('text');



        	$this->load->model('GetIpAddress');
	        $this->load->model('WebData');
	        $this->load->library("pagination");
 
	        $this->load->model('Main_model');
	        $data['webconfig'] = $this->WebData->webSetting(1);
	        $data['title']='';
 	        $this->load->view('new', $data); 
    }

    public function index() {
         $cat = ($this->uri->segment(2)) ? $this->uri->segment(2) : 'All';
        $config = array();
        $config["base_url"] = base_url() . "Pooja";
        $config["total_rows"] = $this->Pooja_model->get_count($cat);
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data['page']=$page;
        $data["links"] = $this->pagination->create_links();
        $data['pooja'] = $this->Pooja_model->get_Pooja($config["per_page"], $page);

 
        $this->load->view('header', $data);
        $this->load->view('Pooja/pooja');
        $this->load->view('footer');
    }

    public function PoojaDetails()
    {
    	$cat2x = ($this->uri->segment(3)) ? $this->uri->segment(3) : NULL;
    	$singaleblog = $this->Pooja_model->singalPooja($cat2x);
        // $data["links"] = $this->pagination->create_links();
    		$srow = $singaleblog->row();
    		$data['pooja']=$srow;
    		$this->load->view('header', $data);
	        $this->load->view('Pooja/poojaDetails');
	        $this->load->view('footer');
     
      	
    }
    public function booking(){
        $_SESSION['pooja']['id']=$this->uri->segment(3);
        $_SESSION['pooja']['title']=$this->uri->segment(4);
        redirect('poojaBooking/Services-Date-Time');
    }
    
}