<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->helper('text');
    	$this->load->model('Main_model');
		 
	}
	public function getSlabDetails()
	{
	    $this->db->select('*');
		$this->db->from('donation_slab');
		$this->db->where('cat_it',$this->input->post('catidofdon'));
		$this->db->order_by('name','ASC');
		$dat_m=$this->db->get();
	    ?>
	            <h2 for="memberid" class="titleHead">Choose Donation Slab</h2>
                <?php $count=0; foreach($dat_m->result() as $donation){?>
                        <label for="donation<?=$count;?>" class="btn sel-item btn-info select-dona" data-value="<?=$donation->name;?>" onclick="setdonation('<?=$donation->name;?>');">
                            <input type="radio" value="<?=$donation->name;?>" name="cer_evnt_type" id="donation<?=$count;?>" required />
                            <?=$donation->name;?>
                        </label>
                <?php $count++;} ?> 
        <label for="donation_o" class="btn sel-item btn-info select-dona" data-value="0" onclick="setdonation('0');">
            <input type="radio" value="0" name="cer_evnt_type" id="donation_o" required />
            Other
        </label>
        
	<?php 
	}
	
	
	public function getSolemnisationDetails()
	{	
		$this->db->select('*');
		$this->db->from('slnt_arrangedecoration');
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
		$dat_m=$this->db->get();


$this->input->post('title');
		if ($this->input->post('title')=='yes') {
		    
		    
		    
		                $this->db->select('*');
						$this->db->from('slnt_user_membership');
						$this->db->where(array('user_id'=>$_COOKIE["login_user"],'pay_status'=>1,'status'=>1));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$user_membership = $this->db->get();
						$chk=0;
						if($user_membership->num_rows()>0){
						     $memrd= $user_membership->row();
                            $membership_expire=$memrd->membership_expire; 
                            $membership_buy=$memrd->membership_buy; 
                            $membership_days=$memrd->membership_days; 
                            $todaydate = date('Ymd');
                            $leftdays=$membership_expire-$todaydate;
                            $date1=date_create(date('Y-m-d'));
                            $date2=date_create(date('Y-m-d',strtotime($membership_expire)));
                            $diff=date_diff($date1,$date2);
                            $chk =$diff->format("%R%a"); 
                          
						}
		    
			?>
			<hr />
	<div class="row">
			<div class="col-sm-12">

<label>Upload solemnisation application copy of form(.pdf)</label>
<input type="file" name="solemnisation_copy" id="solemnisation_copy" class="form-control">
			</div>
		</div>
		<hr />
		<div class="row">
			<label for="arrange_solemnisation" class="col-sm-6 col-xs-12">
		      Arrange solemnisation
		    </label>
		    <label for="arrange_solemnisation" class="col-sm-3 col-xs-12">
		       <input type="radio" name="arrange_solemnisation" id="arrange_solemnisation" checked="" required="">
		            Yes
		    </label>
		    <label for="arrange_solemnisation2" class="col-sm-3 col-xs-12">
		       <input type="radio" name="arrange_solemnisation" id="arrange_solemnisation2" required="">
		            No
		    </label>
		</div>


		<hr />
		<div class="row">
			<label for="memberid" class="col-sm-6 col-xs-12">
		      Arrange the tables/Chairs/Decoration for the occasion(Paid)
		    </label>
		    <label for="arrange_table_chair" class="col-sm-3 col-xs-12 chk_chair_deco" value="yes">
		       <input type="radio" name="arrange_table_chair" id="arrange_table_chair" value="yes" checked=""  onclick="chnageTab('Yes');" required="">
		            Yes
		    </label>
		    <label for="arrange_table_chair2" class="col-sm-3 col-xs-12 chk_chair_deco" value="no" onclick="chnageTab('no');">
		       <input type="radio" name="arrange_table_chair" id="arrange_table_chair2" value="no" required="">
		            No
		    </label>
		</div>
		<hr />
		<div class="col-sm-12">
			<?php $count=0; foreach($dat_m->result() as $deco){ ?> 
<label for="memberid_<?=$count;?>" class="col-xs-12">
<input type="radio" name="decoration" id="memberid_<?=$count;?>" required="" value="<?=$deco->id;?>">
		        <?=$deco->title;?> - <?php if($chk>0 ){ ?>$<?=$deco->membership_amount;?> SGD <?php } else { ?>$<?=$deco->none_membership_amount;?> SGD <?php  } ?>
		    </label>
		    <?php $count++;} ?>
		</div><hr />
			<?php 
		} else if ($this->input->post('title')=='no') {
		?>
		<hr />
		<div class="row">
			<label for="memberid" class="col-sm-6 col-xs-12">
      			Room Certificate
		    </label>
		    <label for="room_certificate" class="col-sm-3 col-xs-12">
		       <input type="radio" name="room_certificate" id="room_certificate" required="" checked="" >
		            Yes
		    </label>
		    <label for="room_certificate2" class="col-sm-3 col-xs-12">
		       <input type="radio" name="room_certificate" id="room_certificate2" required="">
		            No
		    </label>
		</div>
		<hr />
			<div class="row">
			<div class="col-sm-12">
				<label for="solemnisation_copy">Upload solemnisation application copy of form</label>
				<input type="file" name="solemnisation_copy" id="solemnisation_copy" class="form-control">
			</div>
		</div>
		<?php 
		}
	}



	function ajax_upload()  
    {
        
        $this->db->select('*');
		$this->db->from('slnt_ceremonies');
		$this->db->where('id',$this->input->post('cer_evnt_type'));
		$dat_m=$this->db->get();
	    $xcs = $dat_m->row();
		
		if($xcs->solomnization==0){
		    $datan = array(
				'userid'=> $_COOKIE["login_user"],  
				'cer_evnt_type'=>  $this->input->post('cer_evnt_type'),  
				'datetimeids'=>  $this->input->post('datetimeids'),
				'create_date'=>  date('d-m-Y'),
				'create_time'=>  date('H:i:s A')
			);
			$this ->db->insert('slnt_crmn_booking',$datan);
			echo 0;
		} else {
		    
		        if(isset($_FILES["solemnisation_copy"]["name"]))  
    {  
    	$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');

    	$this->form_validation->set_rules(
	        'cer_evnt_type', 'Phone Number',
	        'required',
	        array('required'     => 'Choose Event Type'));

    	 	$this->form_validation->set_rules(
	        'do_solemnisation', 'Phone Number',
	        'required',
	        array('required'     => 'Are you going to do solemnisation in the temple'));
$this->form_validation->set_rules(
	        'datetimeids', 'Phone Number',
	        'required',
	        array('required'     => 'Choose Date and Time'));
$this->form_validation->set_rules(
	        'arrange_solemnisation', 'Phone Number',
	        'required',
	        array('required'     => 'Arrange Solemnisation'));

$this->form_validation->set_rules(
	        'arrange_table_chair', 'Phone Number',
	        'required',
	        array('required'     => ' Arrange the tables/Chairs/Decoration for the occasion'));

$this->form_validation->set_rules(
	        'arrange_table_chair', 'Phone Number',
	        'required',
	        array('required'     => ' Arrange the tables/Chairs/Decoration for the occasion'));


		$config['upload_path'] = './assets/pdf';  
		$config['allowed_types'] = 'pdf|PDF|jpg|jpeg|JPG|JPEG|png|PNG';  
		$config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = TRUE;
		 $this->load->library('upload', $config);  
		 if(!$this->upload->do_upload('solemnisation_copy'))  
		 {  
		 	//echo $this->upload->display_errors(); 
		 		if ($this->input->post('cer_evnt_type')!='') {
				@$cer_evnt_type= $this->input->post('cer_evnt_type');
			} else {
				$cer_evnt_type='';
			}

			if ($this->input->post('do_solemnisation')!='') {
				@$do_solemnisation= $this->input->post('do_solemnisation');
			} else {
				$do_solemnisation='';
			}

			if ($this->input->post('datetimeids')!='') {
				@$datetimeids= $this->input->post('datetimeids');
			} else {
				$datetimeids='';
			}

 			if ($this->input->post('arrange_solemnisation')!='') {
				@$arrange_solemnisation= $this->input->post('arrange_solemnisation');
			} else {
				$arrange_solemnisation='';
			}
 			if ($this->input->post('arrange_table_chair')!='') {
				@$arrange_table_chair= $this->input->post('arrange_table_chair');
			} else {
				$arrange_table_chair='';
			}
		 	if ($this->input->post('room_certificate')!='') {
				@$room_certificate= $this->input->post('room_certificate');
			} else {
				$room_certificate='';
			}
			if ($this->input->post('decoration')!='') {
				@$decoration= $this->input->post('decoration');
			} else {
				$decoration=$this->input->post('decoration');
			} 
 
		 
			@$solemnisation_copy= $data['upload_data']['file_name']; 
			$datan = array(
				'userid'=> $_COOKIE["login_user"],  
				'cer_evnt_type'=>  $cer_evnt_type,  
				'do_solemnisation'=>  $do_solemnisation, 
				'datetimeids'=>  date('d-m-Y h:i:s A',strtotime($datetimeids)),
				'arrange_solemnisation'=>  $arrange_solemnisation,
				'arrange_table_chair'=>  $arrange_table_chair,
				'room_certificate'=>  $room_certificate,
				'decoration'=>  $decoration, 
				'create_date'=>  date('d-m-Y'),
				'create_time'=>  date('H:i:s A')
			);
			$this ->db->insert('slnt_crmn_booking',$datan);
			echo 0;
		 }  
		 else  
		 {  
			$data = array('upload_data' => $this->upload->data());

			if ($this->input->post('cer_evnt_type')!='') {
				@$cer_evnt_type= $this->input->post('cer_evnt_type');
			} else {
				$cer_evnt_type='';
			}

			if ($this->input->post('do_solemnisation')!='') {
				@$do_solemnisation= $this->input->post('do_solemnisation');
			} else {
				$do_solemnisation='';
			}

			if ($this->input->post('datetimeids')!='') {
				@$datetimeids= $this->input->post('datetimeids');
			} else {
				$datetimeids='';
			}

 			if ($this->input->post('arrange_solemnisation')!='') {
				@$arrange_solemnisation= $this->input->post('arrange_solemnisation');
			} else {
				$arrange_solemnisation='';
			}
 			if ($this->input->post('arrange_table_chair')!='') {
				@$arrange_table_chair= $this->input->post('arrange_table_chair');
			} else {
				$arrange_table_chair='';
			}
		 	if ($this->input->post('room_certificate')!='') {
				@$room_certificate= $this->input->post('room_certificate');
			} else {
				$room_certificate='';
			}
					if ($this->input->post('decoration')!='') {
				@$decoration= $this->input->post('decoration');
			} else {
				$decoration='';
			} 
 
		 
			@$solemnisation_copy= $data['upload_data']['file_name']; 
			$datan = array(
				'userid'=> $_COOKIE["login_user"],  
				'cer_evnt_type'=>  $cer_evnt_type,  
				'do_solemnisation'=>  $do_solemnisation, 
				'datetimeids'=>  $datetimeids,
				'arrange_solemnisation'=>  $arrange_solemnisation,
				'arrange_table_chair'=>  $arrange_table_chair,
				'room_certificate'=>  $room_certificate,
				'decoration'=>  $decoration, 
				'solemnisation_copy'=>  $solemnisation_copy, 
				'create_date'=>  date('d-m-Y'),
				'create_time'=>  date('H:i:s A')
			);
			$this ->db->insert('slnt_crmn_booking',$datan);
			echo 0;
		 }  
    } else{
    	echo 'Please choose a file';
    } 

		    
		}
    }

    public function ChoosCateringMenu()
    {
    	$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');

    	$this->form_validation->set_rules(
	        'sel_priest', 'Phone Number',
	        'required',
	        array('required'     => 'Choose priest'));


$this->form_validation->set_rules(
	        'venue', 'Choose venue',
	        'required',
	        array('required'     => 'Choose venue'));

$this->form_validation->set_rules(
	        'puja_samagri', 'Choose puja samgri',
	        'required',
	        array('required'     => 'Choose puja samgri'));

$this->form_validation->set_rules(
	        'havan_samagri', '',
	        'required',
	        array('required'     => 'Choose havan samgri'));

$this->form_validation->set_rules(
	        'bhog_prasad', '',
	        'required',
	        array('required'     => 'Choose bhog prasad '));

$this->form_validation->set_rules(
	        'catering', '',
	        'required',
	        array('required'     => 'Choose catering '));
		if ($this->form_validation->run() == FALSE) {
			echo validation_errors();  
		}  
		else  
		{  


							$this->db->select('*');
                            $this->db->from('slnt_user_membership');
                            $this->db->where('user_id',$_COOKIE["login_user"]);
                            $this->db->where('pay_status',1);
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $membership = $this->db->get();
                            $getmembershipplan = $membership->row();
                            $mem_status =0;
                            		if($membership->num_rows()>0){
                                        $mem_status=1;
                                        if($pujabooking->offer_mem_price>0){
                                            $pujabooking->offer_mem_price;
                                            $totalamt=$totalamt+$pujabooking->offer_mem_price;
                                        } else {
                                            $actpujalist->member_price;
                                            $totalamt=$totalamt+$actpujalist->member_price;
                                        }
                                    } else {
                                        $mem_status=0;
                                        if($pujabooking->offer_non_mem_price>0){
                                            $pujabooking->offer_non_mem_price;
                                            $totalamt=$totalamt+$pujabooking->offer_non_mem_price;
                                        } else {
                                            $actpujalist->non_member_price;
                                            $totalamt=$totalamt+$actpujalist->non_member_price;
                                        }
                                    }
									$this->db->select('*');
                                    $this->db->from('slnt_catering_menus');
                                    $this->db->where('id',$this->input->post('menus'));
                                    $pujaL = $this->db->get();
                                    $actpr = $pujaL->row();
									$cate_description=$actpr->menu_items;
			$datan = array(
				'sel_priest'=>$this->input->post('sel_priest'),  
				'sel_priest_rs'=>25.00,  
				'venue'=> $this->input->post('venue'), 
				'home_address'=> $this->input->post('home_address'),
				'postal_code'=>$this->input->post('postal_code'),
				'picup'=> $this->input->post('picup'),
				'puja_samagri'=>$this->input->post('puja_samagri'),
				'pooja_samagri_amt'=> $this->input->post('pooja_samagri_amt'), 
				'havan_samagri'=> $this->input->post('havan_samagri'), 
				'havan_samagri_amt'=> $this->input->post('havan_samagri_amt'), 
				'bhog_prasad'=> $this->input->post('bhog_prasad'), 
				'bhog_prasad_amt'=> $this->input->post('bhog_prasad_amt'), 
				'catering'=> $this->input->post('catering'), 
				 'catering_items'=> json_encode(array(
							'menus' => $this->input->post('menus'), 
							'menus_title' => $this->input->post('menus_title'), 
							'pax_n_price' => $this->input->post('pax_n_price'), 
							'note_for_catering' => $this->input->post('note_for_catering'), 
							'items' => $this->input->post('items')
						)),
				'booking_for'=> $this->input->post('booking_for'),
				'membership_status' => $mem_status, 
				'cate_description' => $cate_description 
			);
			$this->db->where('id',$this->input->post('id'));
			$this ->db->update('slnt_crmn_booking',$datan);
			echo 0;
		}
    }


    public function paymentupdate()
    {
    		$datan = array(
				'last_pay_amt'=>$this->input->post('payble'),  
				'dueamt'=> $this->input->post('dueamts'),
			);
			$this->db->where('id',$this->input->post('id'));
			$this->db->where('userid',$_COOKIE["login_user"]);
			$this ->db->update('slnt_crmn_booking',$datan);
    }
}