<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Reviews_model extends CI_Model {

    protected $table = 'tbl_review';
	public function __construct() {
		parent::__construct(); 
	}

    public function get_count() {
        return $this->db->count_all($this->table);
    }


    public function get_blogs($limit, $start) {
        $this->db->order_by('id','DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
        return $query->result();
    }

}