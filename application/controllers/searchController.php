<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class searchController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
    	$this->load->model('Main_model');
    	$this->load->model('Pages');
		$data['title']="page title";
		$webcon = $this->Main_model->getData('add_products','id','ASC',6,NULL,NULL);
		$data['events']=$webcon->result();
 
		 $product = $this->Main_model->getData('add_products','id','DESC',6,NULL,NULL);
		$data['products']=$product->result();


$donation_slab = $this->Main_model->getData('donation_slab','name','ASC',NULL,NULL,NULL);
$data['donation_slab']=$donation_slab->result();
		
		
		$this->db->select('*');
		$this->db->from('slnt_puja');
		$this->db->where('status',1);
		//$this->db->order_by('id','DESC');
		$this->db->order_by('description_charge','ASC');
        $data['puja_list'] = $this->db->get()->result();
		
		$this->load->view('header',$data);
	}
	
	public function index(){
	    $webcon2 = $this->Main_model->getData('tbl_web_images','id','ACS',1,'type',20);
		$banner['homeaboutimg']=$webcon2;

		$homeabout = $this->Main_model->getData('tbl_pages','id','DESC',NULL,'pagid',8);
        $banner['home_intro']=$homeabout->row();
		 	$this->db->select('*');
			$this->db->from('slnt_gallery_categories');
			$this->db->limit(5);
			$setx = $this->db->get();
			$banner['gal_cat'] = $setx->result();

			if ($this->uri->segment(2)!='') {
				$webcon2 = $this->Main_model->getData('slnt_img_gallery','id','DESC',8,NULL,'type',$this->uri->segment(2));
			} else {
				$webcon2 = $this->Main_model->getData('slnt_img_gallery','id','DESC',8,NULL,NULL,NULL);
			}
			$banner['galleryimg']=$webcon2->result();


		$blog = $this->Main_model->getData('adminblogs','bid','DESC',6,NULL,NULL);
		$banner['newblogs']=$blog->result();
	    
	    $key = $this ->input->post('description_charge');
	    $data['puja_list'] = $this->Pages->search_value($key);
	    $this->load->view('search',$data,$banner);
		$this->load->view('footer');
	}


	 // public function temple_rules(){
  //       $this->load->view('templerules');
  //       $this->load->view('footer');
  //   }




}
