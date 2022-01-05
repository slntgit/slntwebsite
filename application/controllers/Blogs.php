<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {

    public function __construct() {
        parent:: __construct();

	        $this->load->helper('url');
	        $this->load->model('Blogs_model');
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
$data['blogsCategory'] = $this->Blogs_model->get_blogsCategory(0);
 
	        $data['title']='';
 	        $this->load->view('new', $data); 
    }

    public function index() {
        $cat = ($this->uri->segment(2)) ? $this->uri->segment(2) : 'All';
        $cat2x = ($this->uri->segment(2)) ? $this->uri->segment(2) : NULL;
        $config = array();
        $config["base_url"] = base_url() . "blogs"."/".$cat;
        $config["total_rows"] = $this->Blogs_model->get_count($cat);
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        if($cat=='All'){
			$cat2=NULL;
        } else {
        	  	$this->db->select('*');
	            $this->db->from('blogcategory');
	            $this->db->where('search_id', $cat);  
	            $query = $this->db->get();
	            $rtcatid =  $query->row();
	            $cat2=$rtcatid->id;
        }
        $data['page']=$page;
        $data["links"] = $this->pagination->create_links();
        $data['popularPosts'] = $this->Blogs_model->getPopularPosts($cat2x);
        $data['blogs'] = $this->Blogs_model->get_blogs($config["per_page"], $page, $cat2);

 
        $this->load->view('header', $data);
        $this->load->view('blogs/blogs');
        $this->load->view('footer');
    }

    public function blogsDetails()
    {
    	$cat2x = ($this->uri->segment(2)) ? $this->uri->segment(2) : NULL;
    	$singaleblog = $this->Blogs_model->singalBlog($cat2x);
    	if($singaleblog->num_rows()>0){
    		$srow = $singaleblog->row();

    			$this->db->select('*');
	            $this->db->from('blogcategory');
	            $this->db->where('id', $srow->category);  
	            $query = $this->db->get();
	            $rtcatid =  $query->row();
	            $cat2=$rtcatid->search_id;


    		$data['popularPosts'] = $this->Blogs_model->getPopularPosts($cat2);


    		$data['blog']=$srow;
    		$this->load->view('header', $data);
	        $this->load->view('blogs/blogsDetails');
	        $this->load->view('footer');
    	} else {
    		$data['title']=ucfirst('Some variable did not contain a value.');
	    	$this->load->view('header', $data);
			$this->load->view('pages/error404');
			$this->load->view('footer');

    	}
      	
    }



// public function blogtext()
// {
//     $this->load->view('header');
//   $this->load->view('blogs/blogdetails');
//   $this->load->view('footer');
// }

}