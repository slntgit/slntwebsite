<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Pages extends CI_Model
    {
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
        
        public function search_value($key){
            $this->db->like('description_charge', $key);
            $query= $this->db->get('slnt_puja');
            return $query->result();
        }

    }
?>