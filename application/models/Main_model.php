<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Main_model extends CI_Model {


	public function __construct() {
		parent::__construct(); 
	}

	// Fetch records
	public function getData($table,$orderBy,$order,$limit,$wherefield,$wherevalue) {
			
		$this->db->select('*');
		$this->db->from($table);
		if ($wherefield!=NULL) {
			$this->db->where($wherefield,$wherevalue);
		}
		if ($orderBy!=NULL) {
			$this->db->order_by($orderBy,$order);
		}
		if ($limit!=NULL) {
				$this->db->limit($limit); 
		}
		return $query = $this->db->get();
	}
 
	public function getMulWhereRecord($table,$orderBy,$order,$limit,$wherevalue) {
			
		$this->db->select('*');
		$this->db->from($table);
		if ($wherevalue!=NULL) {
			$this->db->where($wherevalue);
		}
		if ($orderBy!=NULL) {
			$this->db->order_by($orderBy,$order);
		}
		if ($limit!=NULL) {
				$this->db->limit($limit); 
		}
		return $query = $this->db->get();
	}


	public function updateRecord($table,$dataupdate,$wheredata){
		$this->db->where($wheredata);
    	$this->db->update($table,$dataupdate);
	}



public function sendSMS($mobil,$sms_message){
	$message1=urlencode ($sms_message);
	$url="http://amazesms.in/api/pushsms.php?usr=factory&key=010tL3Ox0A8VHsI9xu0f9WF94e8YA0&sndr=FTCOST&ph-qwewer=".$mobil."&text=".$message1."&rpt=1";
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_exec($ch);
	curl_close($ch); 
}



	


public function sendMail($from_email,$fromname,$to_email,$subject,$msgsdata){
        $this->load->library('email');
        $this->email->from($from_email,$fromname);
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($msgsdata);
 		return $this->email->send();
}




}