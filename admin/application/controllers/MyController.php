<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MyController extends CI_Controller
{
	public function __construct(){
	 	parent::__construct();
	 	$this->load->model('SliderModel');
	 	
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('slider/add-slider');
		$this->load->view('templates/footer');
	}

	function Create(){


		$config['upload_path']          = './assets/images/slider/';
        $config['allowed_types']        = 'gif|jpg|png|MP4';
        $config['encrypt_name']        = true;

        $this->load->library('upload', $config);

			$data = $this->upload->data();
				if ($this->upload->do_upload('feature_image')) {
					$data = $this->upload->data();
				}
			$formArray['feature_image'] = $data['file_name'];
			$formArray['created_at'] = date('y-m-d H:i:s');
			$this->SliderModel->create($formArray);

			$this->session->set_flashdata('success',' Product Add Successfully');
			return redirect(base_url('slider/add-slider'));

		// $config['upload_path']          = './assets/images/slider/';
  //       $config['allowed_types']        = 'gif|jpg|png';
  //       $config['encrypt_name']        = true;

  //       $this->load->library('upload', $config);

		// if ($this->form_validation->run() == true) {
		// 	if(empty($_FILES['feature_image']['name']) OR $_FILES['feature_image']['name'] == ''){
		// 		$this->session->set_flashdata('img_error','Please select Product Image');
		// 		die();
		// 		return redirect(base_url('slider/add-slider'));
		// 	}else{

		// 		if ($this->upload->do_upload('feature_image')) {

		// 			$data = $this->upload->data();

		// 			$formArray['feature_image'] = $data['file_name'];

		// 			$formArray['created_at'] = date('y-m-d H:i:s');

		// 			print_r($formArray);
		// 			die();
		// 		 	$this->SliderModel->create($formArray);

		// 			$this->session->set_flashdata('success',' Product Add Successfully');
		// 			return redirect(base_url('slider/add-slider'));
		// 		}else{
		// 			$error = $this->upload->display_errors('<p>','</p>');
		// 			$data['errorImageUpload'] = $error;
		// 			$this->load->view('templates/header');
		// 			$this->load->view('templates/sidebar');
		// 			$this->load->view('slider/add-slider',$data);
		// 			$this->load->view('templates/footer');
		// 		}	
		// 	}
		// }else{
			
		// 	$this->load->view('templates/header');
		// 	$this->load->view('templates/sidebar');
		// 	$this->load->view('slider/add-slider');
		// 	$this->load->view('templates/footer');
		// }
	}

	function view(){
		$data = $this->SliderModel->all();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('slider/view-slider',['data'=> $data]);
		$this->load->view('templates/footer');
	}

	function delete($id){
		$this->load->model('SliderModel');
		$user = $this->SliderModel->getUser($id);
		if (empty($user)) {
			$this->session->set_flashdata('failure', 'Not Found In Database');
			return redirect(base_url('slider/view-slider'));
		}
			$this->SliderModel->deleteslider($id);
			$this->session->set_flashdata('success', 'Record Deleted Successfuly');
			return redirect(base_url('slider/view-slider'));
	}
	
}


?>