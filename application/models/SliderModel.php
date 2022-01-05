<?php

class SliderModel extends CI_Model
{
	function create($formArray){
	 	$this->db->insert('slider',$formArray); //select into add_category (name,image) value(?,?)
	}
	function all(){
		return $users = $this->db->get('slider')->result_array(); //select * from user
	}
	function getUser($id){
		$this->db->where('id',$id);
		return $user = $this->db->get('slider')->row_array(); //select * from user where user_id = $userid	
	}
	function deleteslider($id){
		$this->db->where('id',$id);
		$this->db->delete('slider'); //delete * from users where user_id = $userid ?
	}
	
}

?>