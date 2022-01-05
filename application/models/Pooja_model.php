<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Pooja_model extends CI_Model {

    protected $table = 'slnt_puja';
	public function __construct() {
		parent::__construct(); 
	}

    public function get_count() {
            return $this->db->count_all($this->table);
    }


    public function get_Pooja($limit, $start) {
        $this->db->order_by('id','DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function singalPooja($cat) {
        $this->db->where('id', $cat); 
        $this->db->order_by('id','DESC');
        $this->db->limit(1); 
        return $this->db->get($this->table);
    }

 

}