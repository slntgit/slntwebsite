<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class GetIpAddress extends CI_Model {


	public function __construct() {
		parent::__construct(); 
	}

public function getVisIpAddr() { 
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
            return $_SERVER['HTTP_CLIENT_IP']; 
        } 
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
            return $_SERVER['HTTP_X_FORWARDED_FOR']; 
        } 
        else { 
            return $_SERVER['REMOTE_ADDR']; 
        } 
    }
    
public function search($array, $key, $value) { 
    $results = array(); 
    if (is_array($array)) { 
        if (isset($array[$key]) && $array[$key] == $value) { 
            $results[] = $array; 
        } 
        foreach ($array as $subarray) { 
            $results = array_merge($results,  
            search($subarray, $key, $value)); 
        } 
    } 
    return $results; 
} 

public function masterImg($array, $limt) { 
        $this->db->select('*');
        $this->db->from('tbl_review');
        $this->db->where($rowperpage, $rowno);  
        $query = $this->db->get();
        return $query->result_array();
}






}