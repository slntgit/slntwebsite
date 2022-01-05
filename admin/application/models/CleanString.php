<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class CleanString extends CI_Model {

    protected $table = 'adminblogs';
	public function __construct() {
		parent::__construct(); 
	}

    public function slugify($text){
            // replace non letter or digits by -
            $text = preg_replace('~[^\pL\d]+~u', '-', $text);
            // transliterate
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
            // remove unwanted characters
            $text = preg_replace('~[^-\w]+~', '', $text);
            // trim
            $text = trim($text, '-');
            // remove duplicated - symbols
            $text = preg_replace('~-+~', '-', $text);
            // lowercase
            $text = strtolower($text);
            if (empty($text)) {
              return 'n-a';
            }
            return $text;
    }
}