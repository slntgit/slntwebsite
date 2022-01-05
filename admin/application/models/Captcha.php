<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Captcha extends CI_Model {
	public function __construct() {
		parent::__construct(); 
		$this->load->helper('captcha');
        $this->load->library('session');
	}

    public function captchaCode() { 
    
           $vals = array(
            'word'          => rand(1,999999),
            'img_path'      => './assets/captcha/images/',
            'img_url'       => base_url('assets').'/captcha/images/',
            'font_path'     => base_url('assets').'/captcha/fonts/XYZ.ttf',
            'img_width'     => '150',
            'img_height'    => 30,
            'word_length'   => 8,
            'colors'        => array(
                           'background'     => array(255, 255, 255),
                           'border'         => array(255, 255, 255),
                           'text'           => array(0, 0, 0),
                           'grid'           => array(255, 75, 100)
                        )
        );
        $captcha = create_captcha($vals);  
        $this->session->set_userdata('valuecaptchaCode', $captcha['word']);  
        return $captcha;
    }
}