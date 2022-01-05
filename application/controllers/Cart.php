
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function saveFamily()
    {
    	 	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules(
	        'family_name', 'This field is required',
	        'required',
	        array('required'     => 'This field is required'));

	        $this->form_validation->set_rules(
	        'relation', 'This field is required',
	        'required',
	        array('required'     => 'This field is required'));

	       

	        $this->form_validation->set_rules(
	        'mobile', 'This field is required',
	        'required',
	        array('required'     => 'This field is required'));

	        $this->form_validation->set_rules(
	        'email', 'This field is required',
	        'required',
	        array('required'     => 'This field is required'));

	        $this->form_validation->set_rules(
	        'slnt_member', 'This field is required',
	        'required',
	        array('required'     => 'This field is required'));
	        if ($this->form_validation->run() == FALSE) {
	        	echo 0;
			} else {
						$datan = array(
					       	'family_name'=>  $this->input->post('family_name'),
					       	'user_id'=>  $_COOKIE["login_user"],
					       	'relation'=>  $this->input->post('relation'),
					       	'occupation'=>  $this->input->post('occupation'),
					       	'mobile'=>  $this->input->post('mobile'), 
					       	'email'=>  $this->input->post('email'),
					       	'slnt_member'=>  $this->input->post('slnt_member')
						);
					 $this->db->insert('family_list',$datan);    

					 	$this->db->select('*');
						$this->db->from('family_list');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$familyList = $this->db->get();

						foreach ($familyList->result() as $familyListUser) {
						  	 echo ' <tr>
                                                        <td><lable class="tmobile">Name </lable>'.$familyListUser->family_name.'</td>
                                                        <td><lable class="tmobile">Relation </lable>'.$familyListUser->relation.'</td>
                                                        <td><lable class="tmobile">Occupation </lable>'.$familyListUser->occupation.'</td>
                                                        <td><lable class="tmobile">Mobile </lable>'.$familyListUser->mobile.'</td>
                                                        <td><lable class="tmobile">Email </lable>'.$familyListUser->email.'</td>
                                                        <td><lable class="tmobile">SLNT Member </lable>'.$familyListUser->slnt_member.'
<a href="javascript:void();" onclick="deleteMem('.$familyListUser->id.')" class="text-danger removeItem"><i class="fa fa-remove"></i></a>
                                                        </td>
                                                        
                                                    </tr>';
						 }  	
			}
    }

    public function Remove()
    {
    	$this->db->where(array('id'=>$this->uri->segment(3)));
    	$this->db->delete('family_list');  
     	$this->db->select('*');
						$this->db->from('family_list');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
						$this->db->order_by('id','DESC');
						$familyList = $this->db->get();

						foreach ($familyList->result() as $familyListUser) {
						  	 echo ' <tr>
                                                        <td><lable class="tmobile">Name </lable>'.$familyListUser->family_name.'</td>
                                                        <td><lable class="tmobile">Relation </lable>'.$familyListUser->relation.'</td>
                                                        <td><lable class="tmobile">Occupation </lable>'.$familyListUser->occupation.'</td>
                                                        <td><lable class="tmobile">Mobile </lable>'.$familyListUser->mobile.'</td>
                                                        <td><lable class="tmobile">Email </lable>'.$familyListUser->email.'</td>
                                                        <td><lable class="tmobile">SLNT Member </lable>'.$familyListUser->slnt_member.'
<a href="javascript:void();" onclick="deleteMem('.$familyListUser->id.')" class="text-danger removeItem"><i class="fa fa-remove"></i></a>
                                                        </td>
                                                        
                                                    </tr>';
						 } 
    }
}