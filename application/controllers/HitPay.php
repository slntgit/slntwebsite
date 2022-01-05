<?php
defined('BASEPATH') OR exit('No direct script access allowed');
namespace HitPay;
class HitPay extends CI_Controller {
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->helper('cookie','url'); 
	// 	$this->load->library('form_validation');
	// 	$this->load->library('session');
	// 	$this->load->helper('email');
	// 	$this->load->helper('text');
	// 	$data['title']="page title";
	// }

	const version               = '1';
    protected $curl;
    protected $endpoint         = 'https://api.hit-pay.com/';
    protected $endpointSandbox  = 'https://api.staging.hit-pay.com/';
    protected $apiKey           = null;
    protected $authToken        = null;
    protected $isSandBox        = false;

	
	 
}