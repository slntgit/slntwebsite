<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ceremonies extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->helper('email');
		$this->load->helper('text');
    	$this->load->model('Main_model');
	}

	public function index()
	{ 
 
		if (!isset($_COOKIE["login_user"])) {
		 	$_SESSION['user']['last']='Ceremonies/ChoosEvents';
		 	redirect('Login');
		}
			$this->db->select('*');
			$this->db->from('slnt_membership');
			$data['data_membership']=$this->db->get();
			
			$this->db->select('*');
			$this->db->from('slnt_block_date');
			$this->db->order_by('id','DESC');
	        $data['all_block_date'] = $this->db->get();

			$this->db->select('*');
			$this->db->from('adminlogin');
		//	$this->db->where(array('rol'=>3,'status'=>1));
		$this->db->where('rol',2);
        $this->db->or_where('rol',3);
			$data['priest_list']=$this->db->get();
 
if(isset($_GET['action'])){
    if($_GET['action']=='skip'){
        $_SESSION['user']['last']='Ceremonies/ChoosEvents?action=skip';
    }
}
		if (isset($_COOKIE["login_user"])) {

			$this->db->select('*');
			$this->db->from('slnt_member');
			$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
			$data['userDetails']=$this->db->get()->row();
 
			$this->db->select('*');
			$this->db->from('slnt_user_membership');
			$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
			$this->db->where(array('pay_status'=>1));
			$this->db->order_by('id','DESC');
			$this->db->limit(1);
			$usermember= $this->db->get();
			$data['user_membership'] = $usermember;

		 
			if ($usermember->num_rows()>0) {
					$memrd=$usermember->row();
					$membership_expire=$memrd->membership_expire;
					$membership_buy=date('Ymd');
					$membership_days=$memrd->membership_days;   
					$membership_expire = date('Y-m-d',strtotime($membership_expire));
					$membership_buy = date('Y-m-d',strtotime($membership_buy));
					$date2 = date("Y-m-d",strtotime($membership_expire));
					$date1 = date("Y-m-d",strtotime($membership_buy));
					$diff = strtotime($date2) - strtotime($date1);
					$dateDiff  = round($diff / 86400);
					$data['dayepired']=$dateDiff;
					$data['membership_expire']=$membership_expire;
			} else{
			    if($_SESSION['user']['last']!='Ceremonies/ChoosEvents?action=skip'){
			        $_SESSION['user']['last']='Ceremonies/ChoosEvents';
			 	    redirect('applyMembership');
			    }
				
			}
		 
	}
    	if ($this->uri->segment(2)=='MemberShip') {

    	}

		if ($this->uri->segment(2)=='buyNowMembership') {
			$this->db->select('*');
			$this->db->from('slnt_user_membership');
			$this->db->where(array('user_id'=>$_COOKIE["login_user"]));
			$this->db->where(array('pay_status'=>1));
			$this->db->order_by('id','DESC');
			$this->db->limit(1);
			$usermember= $this->db->get()->row();
//print_r($usermember);
$this->db->select('*');
$this->db->from('slnt_membership');
$this->db->where('id',$usermember->sel_member_id);
$data_m=$this->db->get()->row();
$membership_days=$data_m->membership_days;
$title=$data_m->title;
$membership_amount=$data_m->membership_amount;
$description=$data_m->description;
$membership_expire = date("Ymd", strtotime("+".$membership_days." day"));
			$datan = array(
				'user_id'=>$_COOKIE["login_user"],
				'membership_id'=>$usermember->membership_id,
				'membership_days'=> $membership_days,
				'membership_title'=> $title,
				'membership_amount'=> $membership_amount, 
				'membership_description'=> $description, 
				'membership_expire'=> $membership_expire, 
				'membership_buy'=>  date('Ymd'),
				'membership_create_date'=>  date('d-m-Y'), 
				'membership_create_time'=>  date('H:i:s A'),
				'sel_member_id'=> $usermember->sel_member_id,
				'name_as_nric'=> $usermember->name_as_nric,
				'nric_passport'=> $usermember->nric_passport,
				'gende'=> $usermember->gende, 
				'name_title'=> $usermember->name_title,
				'days'=>  $usermember->days,
				'month'=> $usermember->month,
				'year'=>  $usermember->year,
				'nationality'=> $usermember->nationality,
				'nationality_other'=> $usermember->nationality_other,
				'address_1'=> $usermember->address_1,
				'address_2'=> $usermember->address_2,
				'postal_code'=> $usermember->postal_code,
				'home_tel_code'=> '+65',
				'home_tel'=> $usermember->home_tel,
				'mobile'=> $usermember->mobile,
				'email'=> $usermember->email,
				'marital_status'=> $usermember->marital_status,
				'mobile_code'=>  '+65'
				);
        	$this->db->insert('slnt_user_membership',$datan);
			$_SESSION['user']['last']='Ceremonies/ChoosEvents';
			redirect('Membership/MembershipStep2');
    	}


if ($this->uri->segment(2)=='') {
	redirect('Ceremonies/ChoosEvents');
}

    	if ($this->uri->segment(2)=='ChoosEvents') {
    		$this->db->select('*');
			$this->db->from('slnt_ceremonies');
			$data['list_ceremonies']=$this->db->get();
    	}

    	if ($this->uri->segment(2)=='ChoosCateringMenu') {
             
        }
		if ($this->uri->segment(2)=='ChoosPriest') {
             
        }
		if ($this->uri->segment(2)=='Payments') {
             
        }
		if ($this->uri->segment(2)=='Success') {
             
        }
			
		if ($this->uri->segment(2)=='Cancel') {
             
        }
 

        
		$this->load->view('header',$data);
		$this->load->view('ceremonies-booking');
		$this->load->view('footer');
	}
	
public function PaymentNowLink()
{
		$this->load->view('header',$data);
		$this->load->view('ceremonies/payments-link');
		$this->load->view('footer');
}

public function PaymentSucessFinal()
{
		
	if (!isset($_SESSION['email']['pyemai'])) {
	
			$this->db->select('*');
			$this->db->from('configuration_general');
			$this->db->where('id',1);
			$this->db->order_by('id','DESC');
	        $webconfig = $this->db->get()->row();
       		$fromemail=$webconfig->organization_email;

       					$this->db->select('*');
				        $this->db->from('slnt_crmn_booking');
				        $this->db->where('id',$this->uri->segment(2));
				        $this->db->order_by('id','DESC');
				        $this->db->limit(1);
				        $mybooing = $this->db->get()->row();
  						$this->db->select('*');
				        $this->db->from('slnt_member');
				        $this->db->where('user_id',$mybooing->userid);
				        $userDetails = $this->db->get()->row();
						$toemail=$userDetails->email;

	 						$this->db->select('*');
                            $this->db->from('slnt_ceremonies');
                            $this->db->where('id',$mybooing->cer_evnt_type);
                            $ceremony = $this->db->get();
                            $ceremonydata = $ceremony->row();
                         $subject ='Payment of '.$ceremonydata->description_charge;
				 	 $mesg = $this->load->view('mail/user-CeremoniesBookingInvoiceCreateNMail-payment','',true);
					$config=array(
						'charset'=>'utf-8',
						'wordwrap'=> TRUE,
						'mailtype' => 'html'
					);
					$this->email->initialize($config);
					$this->email->to($toemail);
					$this->email->from($fromemail, $webconfig->site_name);
					$this->email->subject($subject);
					$this->email->message($mesg);
					$mail = $this->email->send();
					$_SESSION['email']['pyemai']=$this->uri->segment(3);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Transaction details are sended to your registered mail</div>');
				}
		$this->load->view('header',$data);
		$this->load->view('ceremonies/payment-sucess-final');
		$this->load->view('footer');
}
	public function getPujaSamagri()
	{
			 	$pujaid = $this->input->post('pujaid');
			 	$status = $this->input->post('status');
			 	$type = 'Puja Samagri';
		 		$this->db->select('*');
				$this->db->from('slnt_ceremonies_samagri');
		        $this->db->where('puja_id',$pujaid);
		        $this->db->where('samagri_type',$type);
		        $priest = $this->db->get();
				if ($status==0) {
				?>
				<div  class="table-responsive" >
				<div class="pujaSamagriList">
				 <table class="table table-responsive tableList">
				 		<thead>
				 			<tr>
				 				 
				 				<th>Pooja Samagri Title</th>
				 				<th>Quantity</th>
				 			</tr>
				 		</thead>
				 		<tbody>
							<?php 
								$count = 1;
								$total=0.00;
							foreach ($priest->result() as $samagri) {
							 ?>				 			
				 			<tr>
				 				 
				 				<td><?=$samagri->samagri_title;?></td>
				 				<td><?=$samagri->measurement;?> <?=$samagri->unit_of_measurement;?></td>
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->samagri_price;
							$count++; } ?>

				 		</tbody>
				 		 
				 </table>
				</div>
				<div class="priceValue text-left">
				<h3 class="priceTitle"><label>Total :  $  <?=$total;?> SGD</label>
<input type="hidden" name="pooja_samagri_amt" value="<?=$total;?>"   required="">
				</h3>
				</div>
			</div>
		<?php	        	
				} else if ($status==1) {
		?>
		<div  class="table-responsive" >
			<h2 class="text-danger">
				I will prepere myself
			</h2>
			<div class="pujaSamagriList">
				 <table class="table table-responsive tableList">
				 		<thead>
				 			<tr>
				 				 
				 				<th>Pooja Samagri Title</th>
				 					<th>Quantity</th>
				 			</tr>
				 		</thead>
				 		<tbody>
							<?php 
								$count = 1;
								$total=0.00;
							foreach ($priest->result() as $samagri) {
							 ?>				 			
				 			<tr>
				 				 
				 				<td><?=$samagri->samagri_title;?></td>
				 				<td><?=$samagri->measurement;?> <?=$samagri->unit_of_measurement;?></td>
				 		
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->samagri_price;
							$count++; } ?>

				 		</tbody>
				 	
				 </table>
				 <input type="hidden" name="pooja_samagri_amt" value="0.00" >
				 </div>
	</div>
		<?php
				}	        
			}



			public function getHavanSamagri()
	{
			 	$pujaid = $this->input->post('pujaid');
			 	$status = $this->input->post('status');
			 	$type = 'Havan Samagri';
	 		$this->db->select('*');
			$this->db->from('slnt_ceremonies_samagri');
	        $this->db->where('puja_id',$pujaid);
	        $this->db->where('samagri_type',$type);
	        $priest = $this->db->get();
				if ($status==0) {
				?>
				<div  class="table-responsive" >
				<div  class="havanSamagriList">
				 <table class="table table-responsive tableList">
				 		<thead>
				 			<tr>
				 			 
				 				<th>Havan Samagri Title</th>
				 				<th>Quantity</th>
				 			</tr>
				 		</thead>
				 		<tbody>
							<?php 
								$count = 1;
								$total=0.00;
							foreach ($priest->result() as $samagri) {
							 ?>				 			
				 			<tr>
				 				 
				 				<td><?=$samagri->samagri_title;?></td>
				 				<td><?=$samagri->measurement;?> <?=$samagri->unit_of_measurement;?></td>
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->samagri_price;
							$count++; } ?>

				 		</tbody>
				 	 
				 </table>
				</div>
				<div class="priceValue text-left">
				<h3><label class="priceTitle">Total :  $  <?=$total;?> SGD</label></h3>
				<input type="hidden" name="havan_samagri_amt" value="<?=$total;?>"   required="">
				</div>
			</div>
		<?php	        	
				} else if ($status==1) {
		?>
		<div  class="table-responsive" >
			<h2 class="text-danger">
				I will prepere myself
			</h2>
			<div  class="havanSamagriList">
				 <table class="table table-responsive tableList">
				 		<thead>
				 		<tr>
				 			 
				 				<th>Havan Samagri Title</th>
				 				<th>Quantity</th>
				 			</tr>
				 		</thead>
				 		<tbody>
							<?php 
								$count = 1;
								$total=0.00;
							foreach ($priest->result() as $samagri) {
							 ?>				 			
				 			<tr>
				 				 
				 				<td><?=$samagri->samagri_title;?></td>
				 				<td><?=$samagri->measurement;?> <?=$samagri->unit_of_measurement;?></td>
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->samagri_price;
							$count++; } ?>

				 		</tbody>
				 	
				 </table>
				 </div>
				 <input type="hidden" name="havan_samagri_amt" value="0.00">
	</div>
		<?php
				}	        
			}


		public function getBhogPrasad()
	{
			 	$pujaid = $this->input->post('pujaid');
			 	$status = $this->input->post('status');
			 	$type = 'Havan Samagri';
	 		$this->db->select('*');
			$this->db->from('slnt_ceremonies_bhog_prasad');
	        $this->db->where('puja_id',$pujaid);
	        $priest = $this->db->get();
				if ($status==0) {
				?>
				<div  class="table-responsive" >
				<div class="BhogPrasadList">
				 <table class="table table-responsive tableList">
				 		<thead>
				 			<tr>
				 				<th>Bhog / Prasad Title</th>
				 				<th>Bhog / Prasad  Price (SGD)</th>
				 			</tr>
				 		</thead>
				 		<tbody>
							<?php 
								$count = 1;
								$total=0.00;
							foreach ($priest->result() as $samagri) {
							 ?>				 			
				 			<tr>
				 			 
				 				<td><?=$samagri->bhog_prasad_title;?></td>
				 				<td><?=$samagri->bhog_prasad_price;?></td>
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->bhog_prasad_price;
							$count++; } ?>

				 		</tbody>
				 	 
				 </table>
				</div>
				<div class="priceValue text-left">
				<h3><label class="priceTitle">Total :  $  <?=$total;?> SGD</label></h3>
				<input type="hidden" name="bhog_prasad_amt" value="<?=$total;?>"   required="">
				</div>
			</div>
		<?php	        	
			} else if ($status==1) {
		?>
		<div  class="table-responsive" >
			<h2 class="text-danger">
				I will prepere myself
			</h2>
			<div   class="BhogPrasadList">
				 <table class="table table-responsive tableList">
				 		<thead>
				 			<tr>
				 				<th>#</th>
				 				<th>Bhog / Prasad Title</th>
				 			
				 			</tr>
				 		</thead>
				 		<tbody>
							<?php 
								$count = 1;
								$total=0.00;
							foreach ($priest->result() as $samagri) {
							 ?>				 			
				 			<tr>
				 				<td><?=$samagri->bhog_prasad_title;?></td>
				 			 
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->bhog_prasad_price;
							$count++; } ?>

				 		</tbody>
				 	
				 </table>
				 </div>
				 <input type="hidden" name="bhog_prasad_amt" value="0.00"   required="">
	</div>
		<?php
				}	        
			}

			public function getCatering()
			{
				  if ($this->input->post('status')==0) {
				 	echo '<div class="col-sm-12">';
							$this->db->select('*');
					        $this->db->from('slnt_catering_menus');
					        $menus=$this->db->get();
					        $count=0;	
					        foreach($menus->result() as $mnp){
					        	if (in_array($this->input->post('day'), json_decode($mnp->days))) {
		?> 
			<label for="menus_<?=$mnp->id?>" class=""> 
				<input type="radio"  name="menus" onchange="getChangeRadio(this.value)" id="menus_<?=$mnp->id?>" value="<?=$mnp->id?>"> <?=$mnp->menu_name;?>
			</label>
		<?php
		$count++;
					        	}
					        }
			echo '</div>';	
		   			
				 } else {
					
				 }
				 echo '<div class="col-sm-12" id="menu_details"></div>';
 

			}

 
}

