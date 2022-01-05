<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Blogs_model extends CI_Model {

    protected $table = 'adminblogs';
	public function __construct() {
		parent::__construct(); 
	}

    public function get_count($category) {
        if ($category=='All') {
            return $this->db->count_all($this->table);
        } else {
            $this->db->select('*');
            $this->db->from('blogcategory');
            $this->db->where('search_id', $category);  
            $query = $this->db->get();
            $rowid = $query->row();

            $this->db->where('category',$rowid->id);
            return $this->db->get($this->table)->num_rows();
        }
    }


    public function get_blogs($limit, $start, $cat) {
        if ($cat!=NULL) {
            $this->db->where('category', $cat);  
        }
        $this->db->order_by('bid','DESC');
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function singalBlog($cat) {
        $this->db->where('blog_url', $cat); 
        $this->db->order_by('bid','DESC');
        $this->db->limit(1); 
        return $this->db->get($this->table);
    }

public function getBlogsFooter($limit, $order) {
        $this->db->order_by('bid',$order);
        $this->db->limit($limit);
        $query = $this->db->get($this->table);
        return $query->result();
}


    public function getPopularPosts($category) {
        if ($category!=NULL) {
            $this->db->select('*');
            $this->db->from('blogcategory');
            $this->db->where('search_id', $category);  
            $query = $this->db->get();
            $rowid = $query->row();
            $this->db->where('category',@$rowid->id);
        }
        $this->db->order_by('rand()');
        $this->db->limit(4);
        $query = $this->db->get($this->table);
        return $query->result();
    }




    public function get_blogsCategory($where) {
        if ($where==0) {
            # code... Fetch All data
            $this->db->select('*');
            $this->db->from('blogcategory');
            $query = $this->db->get();
            return $query->result();
        } else {
            # code... Fetch singal row
            $this->db->select('*');
            $this->db->from('blogcategory');
            $this->db->where('id', $where);  
            $query = $this->db->get();
            return $query->row();
        }
    }

}