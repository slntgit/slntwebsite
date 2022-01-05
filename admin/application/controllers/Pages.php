<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
    	 date_default_timezone_set("Asia/Calcutta");
    	 	$this->load->helper('cookie','url'); 
    		$this->load->library('form_validation');
    		$this->load->library('session');
    		$this->load->helper('email');
    		$this->load->library('email');
    		$this->load->model('CleanString');
	}
public function refresh()
 {   
        $this->load->model('Captcha');
        $captcha=$this->Captcha->captchaCode();
        $this->session->unset_userdata('valuecaptchaCode');
        $this->session->set_userdata('valuecaptchaCode', $captcha['word']);
        echo $captcha['image'];
}




public function ResetTimeSlotMyBooking()
{
    
                    $datas=array(
			            'req_status'=>$this->input->post('status_req')
			        );
			        $this->db->where('id',$this->input->post('booking_id'));
			        $this->db->update('slnt_booking_slot',$datas);
			        echo "<span class='text-success'>Status update successfully!</span>";
			        echo '<meta http-equiv = "refresh" content = "2; url = " />';
}


public function TempleBookingEnquiry()
{
	    if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		
		      if(isset($_GET['action'])){
	        if($_GET['action']=='save/update'){
	            	$this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
	        
			$this->form_validation->set_rules('choose_type', 'choose type','trim|required',
	        array('required'     => 'Choose type required!'));
	 

	        $this->form_validation->set_rules('choose_floor[]', 'Choose Floor','trim|required',
	        array('required'     => 'Choose floor required!'));

	        
	        $this->form_validation->set_rules('purpose', 'purpose','trim|required',
	        array('required'     => 'Purpose required!'));
	        
	        
	        $this->form_validation->set_rules('choose_date', 'choose date','trim|required',
	        array('required'     => ' Choose date required '));

			$this->form_validation->set_rules('choose_start_time', 'choose start time','trim|required',
	        array('required'     => 'Choose start time required'));

	        $this->form_validation->set_rules('choose_end_time', 'choose start time','trim|required',
	        array('required'     => 'Choose end time required'));
	        
	        
	        
	        $this->form_validation->set_rules('no_of_guests', 'Number of guests','trim|required',
	        array('required'     => 'Number of guests required!'));
	        
	        
	        $this->form_validation->set_rules('catering', 'catering','trim|required',
	        array('required'     => 'catering required!'));
    	        if ($this->form_validation->run() == FALSE) {
    
    			} else {
    			     $choose_floor=json_encode($this->input->post('choose_floor'));
    			    $intData=array(
    			            'choose_type'=>$this->input->post('choose_type'),
    			            'choose_floor'=>$choose_floor,
    			            'purpose'=>$this->input->post('purpose'),
    			            'choose_date'=>$this->input->post('choose_date'),
    			            'choose_start_time'=>$this->input->post('choose_start_time'),
    			            'choose_end_time'=>$this->input->post('choose_end_time'),
    			            'no_of_guests'=>$this->input->post('no_of_guests'),
    			            'catering'=>$this->input->post('catering'),
    			            'status'=>$this->input->post('status'),
    			            'temple_notes'=>$this->input->post('temple_notes'),
    			            'admin_post_date'=>date('Y-m-d'),
    			            'admin_post_time'=>date('H:i:s A')
    			        );
    			       $this->db->where('id',$this->uri->segment(4));
    			       $this->db->update('temple_refreshment_booking',$intData);
    			       $this->session->set_flashdata("success","<span class='alert alert-success'>Record update successfully!</span>");
    			      redirect('Pages/TempleBookingEnquiry/details/'.$this->uri->segment(4));
    			}
	        }
	    }
		
            $this->db->select('*');
    		$this->db->from('temple_refreshment_booking');
    			if($this->uri->segment(3)=='' && $this->uri->segment(4)==''){
        		   $this->db->order_by('id','DESC');
                    $data['temple_booking'] = $this->db->get()->result(); 
        		}else {
        		    $this->db->where('id',$this->uri->segment(4));
        		    $this->db->order_by('id','DESC');
                    $data['dx'] = $this->db->get()->row();
        		}
        		
    		
        
        
        $data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		
		if($this->uri->segment(3)=='' && $this->uri->segment(4)==''){
		    $this->load->view('pages/temple-booking-enquiry');
		}else {
		    $this->load->view('pages/temple-booking-enquiry-details');
		}
		
		
		
		
		$this->load->view('templates/footer');
		
		
		
}

public function Add_Event_Yajman()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(3)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'description_charge', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
 
			
			
			$this->form_validation->set_rules(
				'member_price', '%s',
	        	'required|numeric',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'non_member_price', '%s',
	        	'required|numeric',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);
			if ($this->form_validation->run() == FALSE) {
			
			} else {
			    
			      
                    $datan = array(
							'description_charge'=>  $this->input->post('description_charge'), 
						'puja_type'=>  $this->input->post('puja_type'), 
						'member_price'=>  $this->input->post('member_price'), 
						'non_member_price'=>  $this->input->post('non_member_price'),
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A")
					);
					$this ->db->insert('slnt_event_yajman',$datan);
					$last =$this->db->insert_id();
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/Add_Event_Yajman/");  
			    
					  
			}
		}

        if ($this->uri->segment(5)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'description_charge', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
 
			$this->form_validation->set_rules(
				'member_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'non_member_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);
			if ($this->form_validation->run() == FALSE) {
			
			} else {
			    
			       

					$datan = array(
						'description_charge'=>  $this->input->post('description_charge'), 
						'puja_type'=>  $this->input->post('puja_type'), 
						'member_price'=>  $this->input->post('member_price'), 
						'non_member_price'=>  $this->input->post('non_member_price'),
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A")
					);
					$this->db->where('id',$this->uri->segment(4));
					$this ->db->update('slnt_event_yajman',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Add_Event_Yajman/edit/".$this->uri->segment(4));  
			}
		}	

        if ($this->uri->segment(3)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_event_yajman');
			$this->db->where('id',$this->uri->segment(4));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }



		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/add-event-yajman');
		$this->load->view('templates/footer');		
}


public function View_Event_Yajman()
{
	 	date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(3)=='delete') {
			$this->db->where('id',$this->uri->segment(4));
			$this->db->delete('slnt_event_yajman');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/View_Event_Yajman");  
		}


		$this->db->select('*');
		$this->db->from('slnt_event_yajman');
		$this->db->order_by('id','DESC');
        $data['puja_list'] = $this->db->get()->result();

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/view-event-yajman');
		$this->load->view('templates/footer');		
}



public function getPriestListOfBooking()
{   
echo ' <div class="row">';
		$this->db->select('*');
		$this->db->from('adminlogin');
        $this->db->where('status',1);
        $this->db->where('rol',2);
        $this->db->or_where('rol',3);
       // $this->db->or_where('rol',4);
        $priestx = $this->db->get();
        $totalpriest =$priestx->num_rows();
       if($totalpriest>0){ 
        
            $d = $this->input->post('d');
            $m = $this->input->post('m');
            $y = $this->input->post('y');
            $poojaTime = $this->input->post('poojaTime');
            $block_d =$y.'-'.$m.'-'.$d;
            $block_date_filt=date('Ymd',strtotime($block_d));
            $this->db->select('*');
    		$this->db->from('slnt_puja_time');
            $this->db->where('id',$poojaTime);
            $seltime = $this->db->get()->row();


             $from_time=$seltime->from_time;
             $to_time=$seltime->to_time;
             
         $countssss=0;    
             
        foreach ($priestx->result() as $priest) { 
          $this->db->select('*');
    		$this->db->from('slnt_block_all_pooja_date_staff');
            $this->db->where('staff_id',$priest->id);
            $this->db->where('block_date_filt',$block_date_filt);
            // $this->db->where('fromtime >= ',$from_time);
            // $this->db->or_where('totime <= ',$to_time);
            $prst = $this->db->get();
if($prst->num_rows()==0){ 
$countssss--;
            $this->db->select('*');
    		$this->db->from('slnt_booking_slot');
            $this->db->where('sel_priest',$priest->id);
            $this->db->where('d',$d);
            $this->db->where('m',$m);
            $this->db->where('y',$y);
            $this->db->where('pooja_time_from>=',date('H:i:s A',strtotime($from_time)));
            $this->db->where('pooja_time_to<=',date('H:i:s A',strtotime($to_time)));
            $prst3 = $this->db->get();
            if($prst3->num_rows()==0){
                $countssss--;
?>

				<div class="col-md-3 text-center">
					<div class="bookingPrist" style="max-width:180px; max-height:250px; min-height:250px; overflowe:hidden">
						<label  for="sel_priest<?=$priest->id;?>">
					<?php if($priest->profilepic!=''){ ?>
						    
							<img src="<?=base_url();?>../assets/profile/<?=$priest->profilepic;?>" class="img-responsive" style="max-width:140px;">
					<?php } else { ?>		
						<img src="<?=base_url();?>../assets/pandit.png" class="img-responsive" style="max-width:160px;">		
							<?php } ?>
						</label>
							<label class="text-danger" for="sel_priest<?=$priest->id;?>">
						<input type="radio" name="sel_priest" id="sel_priest<?=$priest->id;?>"   required="" value="<?=$priest->id;?>">
						<?=$priest->name;?> <?=$priest->last_name;?>
							
						</label>
					</div>
				
			 
            </div>
				<?php
			} else {
			     
			} } else {
			    $countssss++;
			}
			
			
        	?>
        	
        <?php } } else {
            echo "<h2 class='text-danger'>Priest not available  on this time</h2>";
        }
        if($countssss>0){
            echo "<h2 class='text-danger'>Priest not available  on this time</h2>";
        }
        
        echo '</div>';
}





	    public function getPujaSamagri()
	{
			 	$pujaid = $this->input->post('pujaid');
			 	$status = $this->input->post('status');
			 	$type = 'Puja Samagri';
	 		$this->db->select('*');
			$this->db->from('slnt_samagri');
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
				 			<th>Pooja Samagri Price (SGD)</th>
				 		</tr>
				 	</thead>
				 	<tbody>
						<?php 
							$count = 1;
							$total=0.00;
						foreach ($priest->result() as $samagri) {
						 ?>				 			
				 		<tr>
				 			 
				 			<td><?=$samagri->samagri_title;?>,  
				 			    <?=$samagri->measurement;?>
				 			    <?=$samagri->unit_of_measurement;?></td>
				 			<td><?=$samagri->samagri_price;?></td>
				 		</tr>
				 		<?php 	
				 		$total=$total+$samagri->samagri_price;
						$count++; } ?>
				 	</tbody>
				 		 
				 </table>
				</div>
				<div class="priceValue text-left">
				<h3 class="priceTitle"><label>Total :  <span>$  <?=$total;?> SGD</span></label>
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
				 		
				 		</tr>
				 	</thead>
				 	<tbody>
						<?php 
							$count = 1;
							$total=0.00;
						foreach ($priest->result() as $samagri) {
						 ?>				 			
				 		<tr>
				 			 
				 			<td><?=$samagri->samagri_title;?>,  
				 			    <?=$samagri->measurement;?>
				 			    <?=$samagri->unit_of_measurement;?></td>
				 	
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
			$this->db->from('slnt_samagri');
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
				 				<th>Havan Samagri Price (SGD)</th>
				 			</tr>
				 		</thead>
				 		<tbody>
							<?php 
								$count = 1;
								$total=0.00;
							foreach ($priest->result() as $samagri) {
							 ?>				 			
				 			<tr>
				 				 
				 				<td><?=$samagri->samagri_title;?>,  
				 			    <?=$samagri->measurement;?>
				 			    <?=$samagri->unit_of_measurement;?></td>
				 				<td><?=$samagri->samagri_price;?></td>
				 			</tr>
				 			<?php 	
				 			$total=$total+$samagri->samagri_price;
							$count++; } ?>

				 		</tbody>
				 	 
				 </table>
				</div>
				<div class="priceValue text-left">
				<h3><label class="priceTitle">Total :  <span>$  <?=$total;?> SGD</span></label></h3>
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
				 			
				 			</tr>
				 		</thead>
				 		<tbody>
							<?php 
								$count = 1;
								$total=0.00;
							foreach ($priest->result() as $samagri) {
							 ?>				 			
				 			<tr>
				 				 
				 				<td><?=$samagri->samagri_title;?>,  
				 			    <?=$samagri->measurement;?>
				 			    <?=$samagri->unit_of_measurement;?></td>
				 		
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
			$this->db->from('slnt_bhog_prasad');
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
				<h3><label class="priceTitle">Total :  <span>$  <?=$total;?> SGD</span></label></h3>
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
				$pujaid = $this->input->post('pujaid');
			 	$status = $this->input->post('status');
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
				<input required="" type="radio"  name="menus" onchange="getChangeRadio(this.value)" id="menus_<?=$mnp->id?>" value="<?=$mnp->id?>"> <?=$mnp->menu_name;?>
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




public function getCateringDetails()
		{
			//echo $this->input->post('menus');
				$this->db->select('*');
		        $this->db->from('slnt_catering_menus');
		        $this->db->where('id',$this->input->post('menus'));
		        $menus=$this->db->get()->row();

					        ?>
					        <div class="row">
					      
									<div class="col-sm-3 col-xs-12">
                                        <label class="control-label required">
                                        	Menu Item </label>
                                   </div>
                                    <div class="col-sm-9 col-xs-12">
                                    	<input type="hidden" name="menus_title" value="<?php echo $menus->menu_name; ?>">
                                        <?php echo $menus->menu_items; ?>
                                    </div>
                               


                                	<div class="col-sm-3 col-xs-12">
                                        <label class="control-label required">
                                        	Choose Pax. & Price *</label>
                                   </div>
                                    <div class="col-sm-9 col-xs-12">
                                         <table class="table table-responsive">
                                         	<thead>
                                         		<tr>
                                         			<th><label>No. of Pax *</label></th>
                                         			<th><label>Member Price *</label></th>
                                         			<th><label>Non-Member Price *</label></th>
                                         		</tr>
                                         	</thead>
                                            <tbody id="price">

<?php $countp=0; foreach(json_decode($menus->price) as $prices){ ?>

                                               <tr <?php if($countp==0){ } else { ?>id="size_<?=$countp;?>"<?php } ?>>
                                                <td>
                                                    <label for="pax_n_price<?=$countp;?>">
<input type="radio" name="pax_n_price" id="pax_n_price<?=$countp;?>"  value="<?=$prices->no_of_pax;?>|<?=$prices->mem_price;?>|<?=$prices->none_mem_price;?>" <?php if($countp==0){ echo 'checked'; } else { ?><?php } ?>>
                                                    	<?=$prices->no_of_pax;?></label> 
                                                </td>
                                                <td>
                                                   <label for="pax_n_price<?=$countp;?>"><?=$prices->mem_price;?></label>
                                                </td>
                                                <td>
                                                    
                                                   <label for="pax_n_price<?=$countp;?>"><?=$prices->none_mem_price;?> </label>
                                                </td>
                                               
                                            </tr>


<?php $countp++; } ?>


                                            </tbody>
                                        </table>
                                    </div>
                              

                                	<div class="col-sm-3 col-xs-12">
                                        <label class="control-label required" for="note_for_catering">
                                        	Note for Catering *</label>
                                    </div>
                                    <div class="col-sm-9 col-xs-12">
                                         <textarea name="note_for_catering" id="note_for_catering" rows="6" class="form-control" placeholder="Note for Catering"></textarea>
                                    </div>
                              

                                	<div class="col-sm-3 col-xs-12">
                                        <label class="control-label required">
                                        	Additional Items *</label>
                                    </div>
                                    <div class="col-sm-9 col-xs-12">
                                         <table class="table table-responsive">
                                         		<thead>
                                         		<tr>
                                         			<th><label>Name *</label></th>
                                         			<th> <label>Price *</label></th>
                                         		</tr>
                                         	</thead>
                                            <tbody id="items">
                                               

<?php $countad=0; foreach(json_decode($menus->additional) as $add){ 
 
    ?>


                                                <tr  <?php if($countad==0){ } else { ?>id="sizex_<?=$countad;?>"<?php } ?>>
                                                <td>
                                                    
                                                  <label for="items<?=$countad;?>"> 
<input type="checkbox" name="items[]" id="items<?=$countad;?>" value="<?=$add->item_name;?>|<?=$add->item_price;?>">
                                                  	<?=$add->item_name;?></label>
                                                </td>
                                                <td>
                                                   
                                                  <label for="items<?=$countad;?>">  <?=$add->item_price;?></label>
                                                </td>
                                            </tr>

<?php $countad++; } ?>


                                            </tbody>
                                        </table>
                                    </div>
                               
  	
					        </div>


		        <?php

		}
			


 public function getTimeSlotOfPooja()
    {
       $type = $this->input->post('type');
       $selday = $this->input->post('selday');
       $selmonth = $this->input->post('selmonth');
       $selyear = $this->input->post('selyear');
       $selpooja = $this->input->post('selpooja');
        $selnoday = $this->input->post('selnoday');
       $daysssss=$this->input->post('selyear').'-'.$this->input->post('selmonth').'-'.$this->input->post('selnoday');
       $seldateoffill = $selyear.$selmonth.date('d',strtotime($daysssss));            
        $this->db->select('*');
		$this->db->from('slnt_puja_time');  
		$this->db->where('pooja_time', $selpooja); 
		$this->db->where('pooja_date', $selday); 
		$this->db->order_by("id","ASC");
		$query = $this->db->get();
		
		$this->db->select('*');
		$this->db->from('adminlogin');  
		
		$this->db->where('status',1); 
		$this->db->where('rol', 2); 
		$this->db->or_where('rol', 3); 
	//	$this->db->or_where('rol', 4); 
    	$qpriest = $this->db->get()->num_rows();
		
		if($qpriest>0){
		    	$countofblock=0;
        		$cblk=0;
        		$cblk2=0;
        		$cblkx=0;
        		$notice=0;
        		$totalcount=0;
		    if($query->num_rows()>0){
		         foreach($query->result() as  $slotdata){
		                $this->db->select('*');
                		$this->db->from('pooja_block');  
                		$this->db->where('puja_id', $selpooja); 
                		$this->db->where('block_time', $slotdata->id); 
                		$this->db->where('sel_fill_date', $seldateoffill); 
                		$querycx = $this->db->get(); 
                		if($querycx->num_rows()>0){
                            //$countofblock++;
                           // echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                        
                		     $cblkx++;
                            if($cblkx==1){
                                    $lasrowx = $querycx->row();
                                    echo "<br /><br /><br /><p style='width: 100%; text-transform: capitalize; font-size:18px; opacity: 0.8; color:red; background:; ' >$lasrowx->leave_purpose</p>";
                            }
                		    
                		    
                		} else {
                            $this->db->select('*');
                    		$this->db->from('slnt_booking_slot');  
                    		$this->db->where('puja_id', $selpooja); 
                    		$this->db->where('time_id', $slotdata->id);
                    		$this->db->where('m', $selmonth);
                    		$this->db->where('y', $selyear);
                    		$this->db->where('d', $selnoday);
                    		$this->db->where('status', 1); 
                    		$querycx2 = $this->db->get(); 
                    		
                    		$this->db->select('*');
                    		$this->db->from('slnt_booking_slot_offline');  
                    		$this->db->where('puja_id', $selpooja); 
                    		$this->db->where('time_id', $slotdata->id); 
                    		$this->db->where('con_status',1); 
                    		$this->db->where('m', $selmonth);
                    		$this->db->where('y', $selyear);
                    		$this->db->where('d', $selnoday);
                    		$querycx2xc = $this->db->get(); 
                    		$totalfbooking = $querycx2->num_rows();
                    		$totalbbooking = $querycx2xc->num_rows();
                    	 	$tttt=$totalfbooking+$totalbbooking;
                    		$ftst = $qpriest-$tttt;
                    		if($ftst>0){
                    		     $cblk2--;
                				    if($querycx2->num_rows()>0){
                				         $countofblock++;
                				         //echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                
                				    }   else {
                				        $this->db->select('*');
                                		$this->db->from('slnt_booking_slot_offline');  
                                		$this->db->where('puja_id', $selpooja); 
                                		$this->db->where('time_id', $slotdata->id); 
                                		$this->db->where('con_status',1); 
                                		$this->db->where('m', $selmonth);
                                		$this->db->where('y', $selyear);
                                		$this->db->where('d', $selnoday);
                                		$querycx2x = $this->db->get(); 
                                        if($querycx2x->num_rows()>0){
                                             $countofblock++;
                                            echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                        
                                        }   else {
                                            $todaydate=date('Ymd');
                                            if($seldateoffill<$todaydate){
                                                 $countofblock++;
                                                echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                            
                                             } else {
                                                $this->db->select('*');
                                        		$this->db->from('slnt_block_all_pooja_date');  
                                        		$this->db->where('block_date_filt', $seldateoffill); 
                                        		$sdfghjq = $this->db->get();  
                                                     if($sdfghjq->num_rows()>0){
                                                          $countofblock++;
                                                          $cblk++;
                                                         if($cblk==1){
                                                              $lasrow = $sdfghjq->row();
                                                         echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >$lasrow->leave_purpose</p>";
                                                         }
                                                        
                                                     } else {  
                                                         
                                                            $fftime =  date('H:i',strtotime($slotdata->from_time));  
                                                            $fttime =  date('H:i',strtotime($slotdata->to_time)); 
                                                            $seldate = $selyear.$selmonth.$selnoday;
                                                            if($seldate==date('Ymd')){
                                                                if($fftime>date('H:i')){
                                                                     $countofblock--;
echo "<a class='btn btn-info btn-sm'style='width: 100%; opacity: 1; color:#fff ' href='".base_url()."pages/CreatPoojaBooking?type=".$type."&poojaId=".$selpooja."&m=".$selmonth."&y=".$selyear."&poojaTime=".$slotdata->id."&d=".$selnoday."&day=".$selday."'>$slotdata->from_time - To - $slotdata->to_time</a>";
                                                                } else {
                                                                     $countofblock++;
                                                                       echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>";
                                                                }
                                                                
                                                            }else {
                                                                 $countofblock--;
echo "<a class='btn btn-info btn-sm'style='width: 100%; opacity: 1; color:#fff ' href='".base_url()."pages/CreatPoojaBooking?type=".$type."&poojaId=".$selpooja."&m=".$selmonth."&y=".$selyear."&poojaTime=".$slotdata->id."&d=".$selnoday."&day=".$selday."'>$slotdata->from_time - To - $slotdata->to_time</a>";
                                                             
                                                            }
                                                     } 
                                             }
                                        }
                				        
                				    }
                    		} else {
                    		    $countofblock++;
                    		   echo "<a class='btn  btn-sm disabled'style='width: 100%; opacity:1; color:#fff; background:gray; ' href='javascript:void(0);'>$slotdata->from_time - To - $slotdata->to_time</a>"; 
                    		}
                        }
		         }
		    } else {
		            echo "<br />
        		   <br />";
        		   echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >
                    Slots are not available. <br />
                   Please contact office for more details
                   </p>";
		    }
		} else {
		   echo "<br />
		   <br />";
		   echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >
            Slots are not available. <br />
           Please contact office for more details
           </p>";
		}
       if($countofblock>0){
           echo "<br />
		   <br />";
		   echo "<p style='width: 100%; font-size:18px; opacity: 0.8; color:red; background:; ' >
            Slots are not available. <br />
           Please contact office for more details
           </p>"; 
       }
       
    }

public function CreatPoojaBooking()
{   
    if(isset($_GET['action'])){
        if($_GET['action']=='save'){
            
            	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'name', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'mobleno', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				if($this->input->post('lunch')!=''){
				    $lunch = $this->input->post('lunch');
				} else {
				    $lunch=1;
				}
				
				if($this->input->post('dinner')!=''){
				    $dinner = $this->input->post('dinner');
				} else {
				    $dinner=1;
				}
				if($this->input->post('refreshment')!=''){
				    $refreshment = $this->input->post('refreshment');
				} else {
				    $refreshment=1;
				}
				
				if($this->input->post('time_range_to')!=''){
				    $time_range_to= $this->input->post('time_range_to');
				} else {
				    $time_range_to='';
				}
				
				if($this->input->post('time_range_from')!=''){
				    $time_range_from = $this->input->post('time_range_from');
				} else {
				    $time_range_from='';
				}
				
				if($this->input->post('home_address')!=''){
				    $home_address = $this->input->post('home_address');
				} else {
				    $home_address='';
				}
				
				
				if($this->input->post('postal_code')!=''){
				    $postal_code = $this->input->post('postal_code');
				} else {
				    $postal_code='';
				}
				
				if($this->input->post('picup')!=''){
				    $picup= $this->input->post('picup');
				} else {
				    $picup='';
				}
				
				 $mem_status= $this->input->post('mem_status');
				 $this->db->select('*');
                                    $this->db->from('slnt_catering_menus');
                                    $this->db->where('id',$this->input->post('menus'));
                                    $pujaL = $this->db->get();
                                    $actpr = $pujaL->row();
									$cate_description=$actpr->menu_items;
			     $datan = array(
 							'puja_type'=> 'puja',
					       	'member_price'=>  $this->input->post('member_price'),
					       	'non_member'=>  $this->input->post('non_member'),
					       	'pooja_amount'=>  $this->input->post('pooja_amount'),
					       	'title'=>  $this->input->post('title'),
					       	'name_title'=>  $this->input->post('name_title'),
					       	'name'=>  $this->input->post('name'),
					       	'last_name'=>  $this->input->post('last_name'),
					       	'mobleno'=>  $this->input->post('mobleno'),
					       	'email'=>  $this->input->post('email'),
					       	'u_city'=>  $this->input->post('u_city'),
					       	'u_postalcode'=>  $this->input->post('u_postalcode'),
					       	'u_address'=>  $this->input->post('u_address'),
					       	'time_range_to'=>  $time_range_to,
                    		'time_range_from'=>  $time_range_from,
                    		'note_for_temple'=>  $this->input->post('note_for_temple'),
					       	'puja_id'=>  $_GET['poojaId'],
					       	'time_id'=>  $_GET['poojaTime'],
					       	'm'=>  $_GET['m'],
					       	'y'=>  $_GET['y'],
					       	'd'=>  $_GET['d'],
					       	'day'=>  $_GET['day'],
					       	'pre_priest'=>  $this->input->post('pre_priest'),
					       	'sel_priest'=>  $this->input->post('sel_priest'),
					       	'sel_priest_rs'=>  25.00,
					       	'venue'=>  $this->input->post('venue'), 
					       	'home_address'=>  $home_address, 
					       	'postal_code'=>  $postal_code, 
					       	'picup'=>  $picup, 
					       	'puja_samagri'=>  $this->input->post('puja_samagri'),
					       	'pooja_samagri_amt'=>  $this->input->post('pooja_samagri_amt'), 
					       	'havan_samagri'=>  $this->input->post('havan_samagri'),
					       	'havan_samagri_amt'=>  $this->input->post('havan_samagri_amt'),
					       	'bhog_prasad'=>  $this->input->post('bhog_prasad'),
					       	'bhog_prasad_amt'=>  $this->input->post('bhog_prasad_amt'),
					       	'catering'=>  $this->input->post('catering'),
					       	'catering_items'=> json_encode(array(
								'menus' => $this->input->post('menus'), 
								'menus_title' => $this->input->post('menus_title'), 
								'pax_n_price' => $this->input->post('pax_n_price'), 
								'note_for_catering' => $this->input->post('note_for_catering'), 
								'items' => $this->input->post('items')
							)),
					       	'membership_status'=>  $mem_status,
					       	'cate_description'=>  $cate_description,
					       	'booking_for'=>  $this->input->post('booking_for'),
					       	'booking_created_by'=>  $_COOKIE["login_by_sohan"]
						);
					 	$this->db->insert('slnt_booking_slot_offline',$datan);
					    redirect('pages/SavePooja/'.$this->input->post('mobleno').'/'.$_GET['poojaId'].'/'.$_GET['poojaTime'].'/'.$_GET['d'].'/'.$_GET['m'].'/'.$_GET['y']);
			    
			}
                   
        }
    }
   	    $data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/creat-pooja-booking'); 
		$this->load->view('templates/footer');      
}
 

public function SavePooja()
 {   
         $mobleno = $this->uri->segment(3);
         $poojaId =  $this->uri->segment(4);
         $poojaTime =  $this->uri->segment(5);
         $d =  $this->uri->segment(6);
         $m =  $this->uri->segment(7);
         $y =  $this->uri->segment(8);
                        $this->db->select('*');
                		$this->db->from('slnt_booking_slot_offline');  
                	    $this->db->where('mobleno',$mobleno); 
                	    $this->db->where('puja_id',$poojaId); 
                	    $this->db->where('time_id',$poojaTime); 
                	    $this->db->where('d',$d); 
                	    $this->db->where('m',$m); 
                	    $this->db->where('y',$y); 
                        $this->db->order_by('id','DESC');
                        $this->db->limit(1);
                		$que = $this->db->get()->row(); 
				$insert_id = $que->id;
				redirect('pages/CreatPoojaBookingSummery/'.$insert_id);
 }
     
     
     
     public function editProfile()
 {   
        $this->db->select('*');
		$this->db->from('slnt_member');  
		$this->db->where('id', $this->uri->segment(3)); 
		$data['all_packages'] = $this->db->get()->row();
        if($this->uri->segment(4)=='update'){
            	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'name_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'first_name', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
			
			
			$this->form_validation->set_rules(
				'mobile', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
			
				$this->form_validation->set_rules(
				'email', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
			
			$this->form_validation->set_rules(
				'office_number', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
			
			
				$this->form_validation->set_rules(
				'address_1', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
			
			
				$this->form_validation->set_rules(
				'address_2', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
			
				$this->form_validation->set_rules(
				'postal_code', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
			
			
			
			
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				$datan = array(
						'postal_code'=>  $this->input->post('postal_code'),
						'address_2'=>  $this->input->post('address_2'), 
						'address_1'=>  $this->input->post('address_1'), 
						'office_number'=>  $this->input->post('office_number'), 
						'email'=>  $this->input->post('email'), 
						'mobile'=>  $this->input->post('mobile'), 
						'last_name'=>  $this->input->post('last_name'), 
						'first_name'=>  $this->input->post('first_name'), 
						'name_title'=>  $this->input->post('name_title'), 
						'admin_up_date'=>date("d M, Y"),
						'admin_up_time'=>date("h:i:s A"),
						'admin_update_by'=>$_COOKIE["login_by_sohan"]
					);
					$this->db->where('id',$this->uri->segment(3));
					$this ->db->update('slnt_member',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/editProfile/".$this->uri->segment(3));  
			}
        }
        $data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/user-edit-profile');
		$this->load->view('templates/footer');  
}








public function CreatPoojaBookingSummery()
{   
    
        if($this->uri->segment(4)=='confirm'){
                        $booking_id = 'SLNTEMPLE'.$this->uri->segment(3);
                        $datan = array(
					       	'amounttobepay'=>  $this->input->post('amounttobepay'),
					       	'booking_id'=> $booking_id,
					       	'create_date'=> date('d-m-Y'),
					       	'create_time'=> date('H:i:s A'),
					       	'con_status'=>  1,
					       	'booking_created_by'=>$_COOKIE["login_by_sohan"]
						);
						$this->db->where('id',$this->uri->segment(3));
					 	$this->db->update('slnt_booking_slot_offline',$datan);
					 	redirect('pages/CreatPoojaBookingPrint/'.$this->uri->segment(3));
        }
   	    $data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/creat-pooja-booking-summery');
		$this->load->view('templates/footer'); 
   	    
}


public function CreatPoojaBookingPrint()
{   
   	    $data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/creat-pooja-booking-print');
		$this->load->view('templates/footer');
}


public function OfflinePoojaBookings()
{
	    
	                        $this->db->select('*');
                            $this->db->from('slnt_booking_slot_offline');
                            $this->db->order_by('id','DESC');
                            $pujabo = $this->db->get();
                            $data['pujabooking'] = $pujabo->result();
                            
                            
                            
	    $data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/offline-pooja-booking');
		$this->load->view('templates/footer');
}


public function CreatcalenderBooking()
{   
   	echo 'some data';
   	    
}



public function getpooja()
{   
    $searchkey = $this->input->post('searchkey');
   	                $this->db->select('*');
					$this->db->from('slnt_puja'); 
						if($this->input->post('type')=='pooja'){  
                            $this->db->where('puja_type','Puja');
                        } else if($this->input->post('type')=='yajman'){  
                           $this->db->where('puja_type','Yajman');
                        } 

					$this->db->like('description_charge', $searchkey, 'both'); 
					$this->db->order_by("description_charge","ASC");
					$query = $this->db->get();
					if ($query->num_rows()>0) {
						foreach ($query->result() as $value) {
					?>
<h5 class="itmesssss searchdata" onclick="getSelService(<?=$value->id;?>,'<?=$value->description_charge;?>','<?=$value->member_price;?>','<?=$value->non_member_price;?>','<?=$this->input->post('type');?>');">
    <a href="javascript:void();" class="text-white"><?=$value->description_charge;?> / <strong>Member: <?=$value->member_price;?></strong> / <strong>Non-Member: <?=$value->non_member_price;?>
    </strong></a></h5>
					<?php 
						}
					} else {
						echo 'No record found';
					}
}






public function CreditDonation()
{
			$this->db->select('*');
			$this->db->from('slnt_donation');
			if (isset($_GET['fromdate'])) {
					$fromdate = date('Ymd', strtotime($_GET['fromdate']));
					$todate = date('Ymd', strtotime($_GET['todate']));
				 
					$this->db->where('filterdate>=',$fromdate); 
					$this->db->where('filterdate<=',$todate); 
			}

			$this->db->order_by('id','DESC');
		    $data['donation_list'] = $this->db->get();

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/credit-donation');
		$this->load->view('templates/footer');	
}




public function UserMembershpList()
{
	date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
	 	if (!isset($_SESSION['wssinfotech']['sohan'])){
			redirect('pages/logout');						
		}
    if($this->uri->segment(5)=='sendLink'){
  			$this->db->select('*');
			$this->db->from('configuration_general');
			$this->db->where('id',1);
			$this->db->order_by('id','DESC');
	        $webconfig = $this->db->get()->row();
       		$fromemail=$webconfig->organization_email;


					$this->db->select('*');
					$this->db->from('slnt_user_membership');
					$this->db->where('id',$this->uri->segment(4));
					$this->db->order_by('id','DESC');
				    $lastmember = $this->db->get();
				    $data['lastmember'] = $lastmember->row();
				   	$crnt =$lastmember->row();
				    $toemail = $crnt->email;
				    $subject ='Make payment of '.$crnt->membership_title;
					$mesg = $this->load->view('pages/mail/user-membershp-payment',$data,true);
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
 
$this->session->set_flashdata('success', '<div class="alert alert-success">Payment link & invoice send  successfully</div>');
redirect("pages/UserMembershpList/".$this->uri->segment(3)); 
 
    }

				// if ($this->uri->segment(3)!='') {
				// 	$datan = array( 
				// 		'status'=>  $this->uri->segment(4)
				// 	);
				// 	$this->db->where('id',$this->uri->segment(3));
				// 	$this ->db->update('slnt_member',$datan);
				// 	$this->session->set_flashdata('success', '<div class="alert alert-success">User status update successfully</div>');
				// 	redirect("pages/View_Register_User");
				// }

		$this->db->select('*');
		$this->db->from('slnt_member');
		$this->db->where('id',$this->uri->segment(3));
	    $mberDeta = $this->db->get();
	    $data['memberDetails'] =$mberDeta->row();
	    $userprofile =$mberDeta->row();


		$this->db->select('*');
		$this->db->from('slnt_user_membership');
		$this->db->where('user_id',$userprofile->user_id);
		$this->db->order_by('id','DESC');
	    $data['memberlist'] = $this->db->get();


		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/user-membershp-list');
		$this->load->view('templates/footer');
}
public function MembershipEdit()
{	
    	date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
	 	if (!isset($_SESSION['wssinfotech']['sohan'])){
			redirect('pages/logout');						
		}
        
        if($this->uri->segment(5)=='insert'){
            $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
			$this->form_validation->set_rules(
	        'name_as_nric', 'Name',
	        'required',
	        array('required'     => 'Enter Name (As Per NRIC)'));
    
    
    	$this->form_validation->set_rules(
	        'name_title', 'name_title',
	        'required',
	        array('required'     => 'Enter title of name'));
	        
	        
	        
	        $this->form_validation->set_rules(
	        'gende', 'Select gender',
	        'required',
	        array('required'     => 'Select gender'));

	        $this->form_validation->set_rules(
	        'days', 'Select day',
	        'required',
	        array('required'     => 'Select day'));
	        $this->form_validation->set_rules(
	        'month', 'Select month',
	        'required',
	        array('required'     => 'Select month'));
	        $this->form_validation->set_rules(
	        'year', 'Select year',
	        'required',
	        array('required'     => 'Select year'));

	        $this->form_validation->set_rules(
	        'postal_code', 'Select postal_code',
	        'required',
	        array('required'     => 'Select postal code'));

	        if ($this->input->post('nationality')=='Other') {
	        	$this->form_validation->set_rules(
		        'nationality_other', 'Enter other nationality',
		        'required',
		        array('required'     => 'Enter other nationality'));
	        }

	         $this->form_validation->set_rules(
	        'nric_passport', 'NRIC / PassPort Number',
	        'required',
	        array('required'     => 'Enter NRIC / PassPort Number'));

	           $this->form_validation->set_rules(
	        'nationality', 'Nationality',
	        'required',
	        array('required'     => 'Enter nationality'));

	            $this->form_validation->set_rules(
	        'address_1', 'Address',
	        'required',
	        array('required'     => 'Enter address 1'));

	             $this->form_validation->set_rules(
	        'address_2', 'Address 2',
	        'required',
	        array('required'     => 'Enter address 2'));

	        
			$this->form_validation->set_rules(
	        'mobile', 'Phone Number',
	        'required|regex_match[/^[0-9]{8}$/]',
	        array(
	        	'regex_match'     => 'Enter 8 digit correct mobile number',
	        	'required'     => 'Enter mobile number'));
 			$this->form_validation->set_rules(
	        'email', 'Email',
	        'trim|required|valid_email',
	        array(
	        	'valid_email'     => 'Enter  correct Email',
	        	'required'     => 'Enter Email '));

	        
	        
 	        if ($this->form_validation->run() == FALSE) {
 
			} else {
			  
			$data['file_error']='';
			$this->load->library('upload');
            if (!empty($_FILES['userfile']['name']))
            {      						   
                    $config['upload_path'] = './../assets/profile/';
                    $config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG';     
                    $config['max_size'] = 1024 * 8;
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('userfile'))
                    {
                        $x=$this->upload->data();
                        $profilepic = $x['file_name'];  
                        $imgstate='ok';
                    } else {
                         $data['file_error'] = $this->upload->display_errors();
                    }
            } else {
                 $profilepic='';
                 $imgstate='ok';
            }
			    
			            $user_id=$this->input->post('user_id');   
			 	        $this->db->select('*');
						$this->db->from('slnt_user_membership');
						$this->db->where(array('user_id'=>$user_id,'id'=>$this->uri->segment(3)));
						$this->db->order_by('id','DESC');
						$this->db->limit(1);
						$getrecord= $this->db->get();   
			    
			        	    $this->db->select('*');
							$this->db->from('slnt_membership');
							$this->db->where('id',$this->input->post('sel_member_id'));
							$data_m=$this->db->get()->row();
							$membership_days=$data_m->membership_days;
							$title=$data_m->title;
							$membership_amount=$data_m->membership_amount;
							$description=$data_m->description;
							$membership_expire = date("Ymd", strtotime("+".$membership_days." day"));
							
                if ($imgstate=='ok')
                {
                        $datan = array(
							'user_id'=>$user_id,
					       	'membership_days'=> $membership_days,
					       	'membership_title'=> $title,
					       	'membership_amount'=> $membership_amount, 
					       	'membership_description'=> $description, 
					       	'userfile'=> $profilepic, 
					       	'member_profile_status'=> $this->input->post('member_profile_status'),
					       	'member_id_old'=> $this->input->post('member_id_old'),
					       	'membership_expire'=> date('Ymd',strtotime($this->input->post('membership_expire'))), 
					       	'membership_buy'=>  date('Ymd',strtotime($this->input->post('membership_buy'))),
					       	'membership_create_date'=>  date('d-m-Y'), 
					       	'membership_create_time'=>  date('H:i:s A'),
					       	'sel_member_id'=>  $this->input->post('sel_member_id'),
					       	'name_as_nric'=>  $this->input->post('name_as_nric'),
					       	'nric_passport'=>  $this->input->post('nric_passport'),
					       	'gende'=>  $this->input->post('gende'), 
					       	'name_title'=>  $this->input->post('name_title'),
					       	'days'=>  $this->input->post('days'),
					       	'month'=>  $this->input->post('month'),
					       	'year'=>  $this->input->post('year'),
					       	'nationality'=>  $this->input->post('nationality'),
					       	'nationality_other'=>  $this->input->post('nationality_other'),
					       	'address_1'=>  $this->input->post('address_1'),
					       	'address_2'=>  $this->input->post('address_2'),
					       	'postal_code'=>  $this->input->post('postal_code'),
					       	'home_tel_code'=> '+65',
					       	'home_tel'=>  $this->input->post('home_tel'),
					       	'mobile'=>  $this->input->post('mobile'),
					       	'email'=>  $this->input->post('email'),
					       	'marital_status'=>  $this->input->post('marital_status'),
					       	'mobile_code'=>  '+65',
					       	'occupation'=>  $this->input->post('occupation'),
					       	'name_of_firm'=>  $this->input->post('name_of_firm'),
					       	'emp_address_1'=>  $this->input->post('emp_address_1'),
					       	'emp_postalcode'=>  $this->input->post('emp_postalcode'), 
					       	'emp_tel'=>  $this->input->post('emp_tel'),
					       	'emp_email'=>  $this->input->post('emp_email'),
					       	'organization_name'=>  $this->input->post('organization_name'),
					       	'membership_position'=>  $this->input->post('membership_position'),
					       	'serves_as_volunterrs'=>  $this->input->post('serves_as_volunterrs'),
					       	'interest'=>  $this->input->post('interest'), 
					       	'interest_other'=>  $this->input->post('interest_other'),
					       	'porposer_name'=>  $this->input->post('porposer_name'),
					       	'secondery_name'=>  $this->input->post('secondery_name')
						);
						$this->db->where(array('user_id'=>$user_id,'id'=>$this->uri->segment(3)));
                	    $this->db->update('slnt_user_membership',$datan);
				        redirect('Pages/MembershipPayment/'.$this->uri->segment(3).'?#payment-part');
                }
							
			    
			}
                
                
                
               
        }

		$this->db->select('*');
		$this->db->from('slnt_member');
		$this->db->where('id',$this->uri->segment(4));
	    $mberDeta = $this->db->get();
	    $data['memberDetails'] =$mberDeta->row();
	    $userprofile =$mberDeta->row();
        $data['mem']=$userprofile;
        
        $this->db->select('*');
		$this->db->from('slnt_membership');
		$this->db->where('status',1);
		$this->db->order_by('id','DESC');
	    $data['membership_list'] = $this->db->get()->result();
	    
	    
	    
		$this->db->select('*');
		$this->db->from('slnt_user_membership');
		$this->db->where('user_id',$userprofile->user_id);
		$this->db->where('id',$this->uri->segment(3));
		$this->db->order_by('id','DESC');
	    $data['user_membership'] = $this->db->get();


		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/user-membershp-edit');
		$this->load->view('templates/footer');
}




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
					       	'user_id'=>  $this->input->post('login_user'),
					       	'relation'=>  $this->input->post('relation'),
					       	'occupation'=>  $this->input->post('occupation'),
					       	'mobile'=>  $this->input->post('mobile'), 
					       	'email'=>  $this->input->post('email'),
					       	'slnt_member'=>  $this->input->post('slnt_member')
						);
					 $this->db->insert('family_list',$datan);    

					 	$this->db->select('*');
						$this->db->from('family_list');
						$this->db->where(array('user_id'=>$this->input->post('login_user')));
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
                                                    echo "<style>  .tmobile { display:none;} </style>";
						 }  	
			}
    }

    public function Remove()
    {
    	$this->db->where(array('id'=>$this->uri->segment(3)));
    	$this->db->delete('family_list');  
     	$this->db->select('*');
						$this->db->from('family_list');
						$this->db->where(array('user_id'=>$this->uri->segment(4)));
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
    
    
    
    
public function CeremoniesBooking()
{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
	 	if (!isset($_SESSION['wssinfotech']['sohan'])){
			redirect('pages/logout');						
		}
		$this->db->select('*');
		$this->db->from('slnt_crmn_booking');
		$this->db->where("booking_id!=''");
		$this->db->order_by('id','DESC');
	    $data['bookign_list'] = $this->db->get();


		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/ceremonies-booking');
		$this->load->view('templates/footer');	
}
public function CeremoniesInvoice()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
	 	if (!isset($_SESSION['wssinfotech']['sohan'])){
			redirect('pages/logout');						
		}
 		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/invoice-ceremonies');
		$this->load->view('templates/footer');	
}
 
public function CeremoniesBookingInvoiceCreateNMail()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
	 	if (!isset($_SESSION['wssinfotech']['sohan'])){
			redirect('pages/logout');						
		}
 
 
 			$this->db->select('*');
			$this->db->from('configuration_general');
			$this->db->where('id',1);
			$this->db->order_by('id','DESC');
	        $webconfig = $this->db->get()->row();
       		$fromemail=$webconfig->organization_email;

						$this->db->select('*');
				        $this->db->from('slnt_crmn_booking');
				        $this->db->where('id',$this->uri->segment(3));
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

				$subject ='Please make payment of '.$ceremonydata->description_charge;
				 $mesg = $this->load->view('pages/mail/user-CeremoniesBookingInvoiceCreateNMail-payment',$data,true);
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
					$this->session->set_flashdata('success', '<div class="alert alert-success">Payment link & invoice send  successfully</div>');
					redirect("pages/CeremoniesBooking");
}

public function EventsBooking()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
	 	if (!isset($_SESSION['wssinfotech']['sohan'])){
			redirect('pages/logout');						
		}
  		
		$this->db->select('*');
		$this->db->from('slnt_event_booking');
		$this->db->where("evnt_bookin_id!=''");
		$this->db->order_by('id','DESC');
	    $data['bookign_list'] = $this->db->get();


		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/events-booking');
		$this->load->view('templates/footer');
}

public function EventInvoice()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
	 	if (!isset($_SESSION['wssinfotech']['sohan'])){
			redirect('pages/logout');						
		}
  		
		$this->db->select('*');
		$this->db->from('slnt_event_booking');
		$this->db->where("id",$this->uri->segment(3));
		$this->db->order_by('id','DESC');
	    $data['booking'] = $this->db->get()->row();


		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/events-booking-print');
		$this->load->view('templates/footer');

}
public function MembershipPayment()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
	 	if (!isset($_SESSION['wssinfotech']['sohan'])){
			redirect('pages/logout');						
		}
 
 
		$this->db->select('*');
		$this->db->from('slnt_user_membership');
		$this->db->where('id',$this->uri->segment(3));
		$this->db->order_by('id','DESC');
	    $data['lastmember'] = $this->db->get()->row();

if ($this->uri->segment(4)=='onlinepayment') {
 			$this->db->select('*');
			$this->db->from('configuration_general');
			$this->db->where('id',1);
			$this->db->order_by('id','DESC');
	        $webconfig = $this->db->get()->row();
       		$fromemail=$webconfig->organization_email;


					$this->db->select('*');
					$this->db->from('slnt_user_membership');
					$this->db->where('id',$this->uri->segment(3));
					$this->db->order_by('id','DESC');
				    $lastmember = $this->db->get();
				    $data['lastmember'] = $lastmember->row();
				   	$crnt =$lastmember->row();
				    $toemail = $crnt->email;
				    $subject ='Make payment of '.$crnt->membership_title;
				 	$mesg = $this->load->view('pages/mail/user-membershp-payment',$data,true);
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
 
$this->session->set_flashdata('success', '<div class="alert alert-success">Payment link & invoice send  successfully</div>');
redirect("pages/MembershipPayment/".$this->uri->segment(3)); 
}

	if ($this->uri->segment(4)=='collect') {
	    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'transection_id', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
 
	 		if ($this->form_validation->run() == FALSE) {
			
			} else {

					$config['upload_path'] = './../assets/membership/';
                    $config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG|PDF|pdf';     
                    $config['max_size'] = 1024 * 8;
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('transection_slip'))
                    {
                        $x=$this->upload->data();
                        $transection_slip = $x['file_name'];  
            					$ncount=strlen($this->uri->segment(3));
            					if ($ncount<=6) {
            						 	$randpassword=sprintf('%06d', $this->uri->segment(3));
            					} else {
            					 	$randpassword=$this->uri->segment(3);
            					}
            					
            					
            					$this->db->select('*');
                            	$this->db->from('slnt_user_membership');
                            	$this->db->where(array('id'=>$this->uri->segment(3)));
                            	$this->db->order_by('id','DESC');
                            	$this->db->limit(1);
                            	$thisid = $this->db->get()->row();

                                	if($thisid->member_id_old!=NULL){
                    				    $membership_id=$thisid->member_id_old; 
                    				} else {
                    				  $membership_id='SPSLNT'.date('Ymd').$randpassword;   
                    				}
				
            					$datan = array( 
            						'membership_id'=>  $membership_id, 
            						'transection_id'=>  $this->input->post('transection_id'), 
            						'transection_slip'=>  $transection_slip, 
            						'pay_with'=>  'Offline Payment',
            						'pay_status'=>  1,
            						'status'=>  1
            					);
            					$this->db->where('id',$this->uri->segment(3));
            					$this ->db->update('slnt_user_membership',$datan);
                        			$this->db->select('*');
                        			$this->db->from('configuration_general');
                        			$this->db->where('id',1);
                        			$this->db->order_by('id','DESC');
                        	        $webconfig = $this->db->get()->row();
                               		$fromemail=$webconfig->organization_email;
            					$this->db->select('*');
            					$this->db->from('slnt_user_membership');
            					$this->db->where('id',$this->uri->segment(3));
            					$this->db->order_by('id','DESC');
            				    $lastmember = $this->db->get();
            				    $data['lastmember'] = $lastmember->row();
            				   	$crnt =$lastmember->row();
            				    $toemail = $crnt->email;
            				    $subject ='Payment successful of '.$crnt->membership_title;
            					$mesg = $this->load->view('pages/mail/user-membershp-payment',$data,true);
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
            					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
            					redirect("pages/MembershipPayment/".$this->uri->segment(3)); 
                    } else {
                         $data['file_error'] = $this->upload->display_errors();
                    }
                   
			}
	}

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/user-membershp-payment');
		$this->load->view('templates/footer');
}

public function MemberPrint()
{
    	date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
	 	if (!isset($_SESSION['wssinfotech']['sohan'])){
			redirect('pages/logout');						
		}
 
 
		$this->db->select('*');
		$this->db->from('slnt_user_membership');
		$this->db->where('id',$this->uri->segment(3));
		$this->db->order_by('id','DESC');
	    $data['lastmember'] = $this->db->get()->row();


		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/print-mem');
		$this->load->view('templates/footer');
}


public function View_Register_User()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
	 	if (!isset($_SESSION['wssinfotech']['sohan'])){
			redirect('pages/logout');						
		}


				if ($this->uri->segment(3)!='') {
					$datan = array( 
						'status'=>  $this->uri->segment(4)
					);
					$this->db->where('id',$this->uri->segment(3));
					$this ->db->update('slnt_member',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">User status update successfully</div>');
					redirect("pages/View_Register_User");
				}



		$this->db->select('*');
		$this->db->from('slnt_member');
		$this->db->order_by('id','DESC');
	    $data['memberlist'] = $this->db->get();


		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/view-register-user');
		$this->load->view('templates/footer');	
}

public function Events_time_slot()
{
	date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(3)=='delete') {
			$this->db->where('id',$this->uri->segment(4));
			$this->db->delete('slnt_events_time');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/Events_time_slot/");  
		}

			$this->db->select('*');
			$this->db->from('slnt_events_time');
			$this->db->order_by('id','DESC');
	        $data['puja_list'] = $this->db->get()->result();

          if ($this->uri->segment(3)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_events_time');
			$this->db->where('id',$this->uri->segment(4));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }
		if ($this->uri->segment(3)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'from_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'to_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('success', '<div class="alert alert-danger">All field are mendetory!</div>');
				redirect("pages/Events_time_slot/".$this->input->post('pooja_time')); 
			} else {
					$datan = array(
						'from_time'=>  $this->input->post('from_time'), 
						'to_time'=>  $this->input->post('to_time'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this ->db->insert('slnt_events_time',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/Events_time_slot/");  
			}
	 	}





			if ($this->uri->segment(5)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'from_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'to_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('success', '<div class="alert alert-danger">All field are mendetory!</div>');
				redirect("pages/Events_time_slot/edit/".$this->uri->segment(4)); 
			} else {
					$datan = array( 
						'from_time'=>  $this->input->post('from_time'), 
						'to_time'=>  $this->input->post('to_time'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this->db->where('id',$this->uri->segment(4));
					$this ->db->update('slnt_events_time',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Events_time_slot/edit/".$this->uri->segment(4));  
			}
	 	}

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/events-time');
		$this->load->view('templates/footer');
}

public function DonationCategory()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
			
 	if (!isset($_SESSION['wssinfotech']['sohan'])){
		redirect('pages/logout');						
	}
	$this->db->select('*');
	$this->db->from('tbl_category');
	$this->db->order_by('id','DESC');
    $data['all_category'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		$where = array('id' => $this->uri->segment(4));
		$this->db->where($where);
		$this->db->delete('tbl_category');
		$this->session->set_flashdata('success', '<div class="alert alert-danger errorHandler no-display">Record Delete Successfully.</div>');
		redirect('pages/DonationCategory');
	}	
	if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('tbl_category');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
	}
	if($this->uri->segment(3)=='insert'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
			} else {
				if ($this->input->post('cat_it')==0) {
					$level=0;
				} else {
					$level=1;
				}
			$datan = array(
               	'name'=>  $this->input->post('name'),
               	'status'=>  $this->input->post('status'),
               	'level'=>  $level,
               	'cat_it'=>  $this->input->post('cat_it')
            );

			                    $this ->db->insert('tbl_category',$datan);
								$this->session->set_flashdata('success', '<div class="alert alert-success errorHandler no-display">Record Save Successfully.</div>');
								redirect('pages/DonationCategory');
					}
	
}


if($this->uri->segment(5)=='update'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
									
		} else {

		if ($this->input->post('cat_it')==0) {
			$level=0;
		} else {
			$level=1;
		}
		$datan = array(
			'name'=>  $this->input->post('name'),
			'status'=>  $this->input->post('status'),
			'level'=>  $level,
			'cat_it'=>  $this->input->post('cat_it')
		);
		$where2 = array('id' => $this->uri->segment(4));
		$this->db->where($where2);
									
		$this ->db->update('tbl_category',$datan);
		$this->session->set_flashdata('success', '<div class="alert alert-success errorHandler no-display">Record Update Successfully.</div>');
		redirect('pages/DonationCategory/edit/'.$this->uri->segment(4).'/update');
	}
	
}			
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('add-category');
		$this->load->view('templates/footer');	
}	


public function DonationSlab()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
			$this->db->select('*');
        	$this->db->from('tbl_category');
        	$this->db->order_by('id','DESC');
            $data['donation_category'] = $this->db->get()->result();
    
    

 	if (!isset($_SESSION['wssinfotech']['sohan'])){
		redirect('pages/logout');						
	}
	$this->db->select('*');
	$this->db->from('donation_slab');
	$this->db->order_by('id','DESC');
    $data['all_category'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		$where = array('id' => $this->uri->segment(4));
		$this->db->where($where);
		$this->db->delete('donation_slab');
		$this->session->set_flashdata('success', '<div class="alert alert-danger errorHandler no-display">Record Delete Successfully.</div>');
		redirect('pages/DonationSlab');
	}	
	if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('donation_slab');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
	}
	if($this->uri->segment(3)=='insert'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
			} else {
				if ($this->input->post('cat_it')==0) {
					$level=0;
				} else {
					$level=1;
				}
			$datan = array(
               	'name'=>  $this->input->post('name'),
               	'status'=>  $this->input->post('status'),
               	'level'=>  $level,
               	'cat_it'=>  $this->input->post('cat_it')
            );

			                    $this ->db->insert('donation_slab',$datan);
								$this->session->set_flashdata('success', '<div class="alert alert-success errorHandler no-display">Record Save Successfully.</div>');
								redirect('pages/DonationSlab');
					}
	
}


if($this->uri->segment(5)=='update'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
									
		} else {

		if ($this->input->post('cat_it')==0) {
			$level=0;
		} else {
			$level=1;
		}
		$datan = array(
			'name'=>  $this->input->post('name'),
			'status'=>  $this->input->post('status'),
			'level'=>  $level,
			'cat_it'=>  $this->input->post('cat_it')
		);
		$where2 = array('id' => $this->uri->segment(4));
		$this->db->where($where2);
									
		$this ->db->update('donation_slab',$datan);
		$this->session->set_flashdata('success', '<div class="alert alert-success errorHandler no-display">Record Update Successfully.</div>');
		redirect('pages/DonationSlab/edit/'.$this->uri->segment(4).'/update');
	}
	
}			
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('donation-slab');
		$this->load->view('templates/footer');	
}	



public function TypeInterest()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
			
 	if (!isset($_SESSION['wssinfotech']['sohan'])){
		redirect('pages/logout');						
	}
	$this->db->select('*');
	$this->db->from('slnt_type_interest');
	$this->db->order_by('id','DESC');
    $data['all_category'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		$where = array('id' => $this->uri->segment(4));
		$this->db->where($where);
		$this->db->delete('slnt_type_interest');
		$this->session->set_flashdata('success', 'Record Delete Successfully.');
		redirect('pages/TypeInterest');
	}	
	if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('slnt_type_interest');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
	}
	if($this->uri->segment(3)=='insert'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
			} else {
				if ($this->input->post('cat_it')==0) {
					$level=0;
				} else {
					$level=1;
				}
			$datan = array(
               	'name'=>  $this->input->post('name'),
               	'status'=>  $this->input->post('status'),
               	'level'=>  $level,
               	'cat_it'=>  $this->input->post('cat_it')
            );

			                    $this ->db->insert('slnt_type_interest',$datan);
								$this->session->set_flashdata('success', 'Record Save Successfully.');
								redirect('pages/TypeInterest');
					}
	
}


if($this->uri->segment(5)=='update'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
									
		} else {

		if ($this->input->post('cat_it')==0) {
			$level=0;
		} else {
			$level=1;
		}
		$datan = array(
			'name'=>  $this->input->post('name'),
			'status'=>  $this->input->post('status'),
			'level'=>  $level,
			'cat_it'=>  $this->input->post('cat_it')
		);
		$where2 = array('id' => $this->uri->segment(4));
		$this->db->where($where2);
		$this ->db->update('slnt_type_interest',$datan);
		$this->session->set_flashdata('success', 'Record Update Successfully.');
		redirect('pages/TypeInterest/edit/'.$this->uri->segment(4).'/update');
	}
}			
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('type-interest');
		$this->load->view('templates/footer');	
}	



	

public function Career()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		$this->db->select('*');
		$this->db->from('career');
		$this->db->order_by('id','DESC');
		$set = $this->db->get();
		$data['website_image'] = $set->result();
		 
		if ($this->uri->segment(3)=='delete') {
			$this->db->select('*');
			$this->db->from('career');
			$this->db->where('id',$this->uri->segment(4));
			$set = $this->db->get();
			$datadd= $set->row();
			$this->db->where('id',$this->uri->segment(4));
			$this->db->delete('career');
			$this->session->set_flashdata('success', 'Record deleted successfully.');
			redirect('pages/Career');

		}
 
		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/Career');
		$this->load->view('templates/footer');
}




public function Membership_list()
 {
 	date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

			$this->db->select('*');
			$this->db->from('slnt_membership');
        	$data['all_products'] = $this->db->get()->result();



if($this->uri->segment(3)=='delete'){ 
     	$where = array('id' => $this->uri->segment(4));
		$this->db->where($where);
		$this->db->delete('slnt_membership');
		$this->session->set_flashdata('success', 'Record Delete Successfully.');
		redirect('pages/Membership_list');
}


 
		$data['title']=ucfirst('Admin : Manage Products');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/membership_list');
		$this->load->view('templates/footer');	
 }



 public function Membership()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
	 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}


if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('slnt_membership');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();	
}

if($this->uri->segment(3)=='insert'){
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	$this->form_validation->set_rules('title', 'Title ', 'trim|required');
	$this->form_validation->set_rules('membership_days', 'Days ', 'trim|required');
	$this->form_validation->set_rules('membership_amount', 'Amount', 'trim|required');
	$this->form_validation->set_rules('description', 'Description', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
		} else {
                		$datan = array(
					       	'title'=>  $this->input->post('title'),
					       	'membership_days'=>  $this->input->post('membership_days'),
					       	'membership_amount'=>  $this->input->post('membership_amount'), 
					       	'description'=>  $this->input->post('description'), 
					       	'status'=>  $this->input->post('status'), 
					       	'create_date'=>  date('d-m-Y'), 
						);
                		$this ->db->insert('slnt_membership',$datan);
					$this->session->set_flashdata('success', 'Record Save Successfully.');
					redirect('pages/Membership');
		}
}


if($this->uri->segment(3)=='update'){
	 $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	$this->form_validation->set_rules('title', 'Title ', 'trim|required');
	$this->form_validation->set_rules('membership_days', 'Days ', 'trim|required');
	$this->form_validation->set_rules('membership_amount', 'Amount', 'trim|required');
	$this->form_validation->set_rules('description', 'Description', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
		} else {
                		$datan = array(
					       	'title'=>  $this->input->post('title'),
					       	'membership_days'=>  $this->input->post('membership_days'),
					       	'membership_amount'=>  $this->input->post('membership_amount'), 
					       	'description'=>  $this->input->post('description'), 
					       	'status'=>  $this->input->post('status'), 
					       	'create_date'=>  date('d-m-Y'), 
						);
					    	$where2 = array('id'=> $this->uri->segment(4));
							$this->db->where($where2);
							$this ->db->update('slnt_membership',$datan);
				$this->session->set_flashdata('success', 'Record Update Successfully.');
				redirect('pages/Membership/edit/'.$this->uri->segment(4));
		}	
	}			
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/membership');
		$this->load->view('templates/footer');	
}	

  









	public function cleanDataString($value)
	{
		echo $this->CleanString->slugify($_POST['string']);
	}
 	public function error404()
 	{ 
 		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
 	
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
			
		if (!isset($_SESSION['uniew']['useragent'])) {
			$_SESSION['uniew']['useragent']=session_id();
		}  

		 $_SESSION['wssinfotech']['sohan']=$_SESSION['wssinfotech']['sohan'];
 		$this->load->helper('cookie','url'); 
		$this->load->library('encrypt');
		log_message('error', 'Webpage not found');
		$data['title']=ucfirst('Welcome ::  Webpage not found');
		$this->load->view('error404', $data);
	 
 	}
 
	public function home()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		$this->load->model('Captcha');
		if (isset($_COOKIE["login_by_sohan"])){
				redirect('pages/dashboard');						
		}
 
			if ($this->uri->segment(3)=='login') {

 				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('loginid', 'Email', 'trim|required');
				$this->form_validation->set_rules('loginpassword', 'Password', 'required');
				$this->form_validation->set_rules('captcha', 'Captcha Code', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					if($this->input->post('xcap')==$this->input->post('captcha')){
					$this->db->select('*');
					$this->db->from('adminlogin');
					$where = array('adminusername' => $this->input->post('loginid'), 'adminpassword' => md5($this->input->post('loginpassword')));
					$this->db->where($where);
        			$query = $this->db->get();
        			$asd = $query->row();
        			if ($query->num_rows()>0) {
								$data = array(  
						            'login_ip'     => $this->input->user_agent(),  
						            'login_date'  => date('d/m/Y'),  
						            'login_time'   => date("h:i:s A")
						        );  
					$this->db->insert('admin_login_history',$data);
					$_SESSION['wssinfotech']['sohan']=$asd->id;					
					$cookie= array(
							   'name'   => 'login_by_sohan',
							   'value'  => $this->input->post('loginid'),
							   'expire' => '7200',
					);
					$cookie_rol= array(
							   'name'   => 'login_rol',
							   'value'  => $asd->rol,
							   'expire' => '7200',
						);
 
					$this->input->set_cookie($cookie);
					$this->input->set_cookie($cookie_rol);	  
				 
				 	redirect("pages/dashboard/");
        			} else {
        				$data = array(  
						            'login_ip'     => $this->input->user_agent(),  
						            'login_attempt'  => 1,  
						            'login_attempt_time'   => date("h:i:s A")
						);  
						$this->db->insert('admin_login_history',$data);
						$this->session->set_flashdata('failiur', 'Invalid login details.');
				    }  	 
					} else {
					    $this->session->set_flashdata('failiur', 'Invalid captcha code.');
					}
				}
 				

	 		} 
		
		$data['title']=ucfirst('Welcome :: Admin');
		$this->load->view('home', $data);
		 
	}	

public function Pooja_Time()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}
	        $this->db->select('*');
			$this->db->from('slnt_puja');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_data'] = $this->db->get()->row();

		if ($this->uri->segment(4)=='delete') {
			$this->db->where('id',$this->uri->segment(5));
			$this->db->delete('slnt_puja_time');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/Pooja_Time/".$this->uri->segment(3));  
		}

			$this->db->select('*');
			$this->db->from('slnt_puja_time');
			$this->db->where('pooja_time',$this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_list'] = $this->db->get()->result();

          if ($this->uri->segment(4)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_puja_time');
			$this->db->where('id',$this->uri->segment(5));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }
		if ($this->uri->segment(3)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'from_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'to_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('success', '<div class="alert alert-danger">All field are mendetory!</div>');
				redirect("pages/Pooja_Time/".$this->input->post('pooja_time')); 
			} else {
					$datan = array(
						'pooja_date'=>  $this->input->post('pooja_date'),
						'pooja_time'=>  $this->input->post('pooja_time'),
						'from_time'=>  $this->input->post('from_time'), 
						'to_time'=>  $this->input->post('to_time'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this ->db->insert('slnt_puja_time',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/Pooja_Time/".$this->input->post('pooja_time'));  
			}
	 	}





			if ($this->uri->segment(6)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'from_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'to_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('success', '<div class="alert alert-danger">All field are mendetory!</div>');
				redirect("pages/Pooja_Time/".$this->uri->segment(3)."/edit/".$this->uri->segment(5)); 
			} else {
					$datan = array(
					    'pooja_date'=>  $this->input->post('pooja_date'),
						'pooja_time'=>  $this->input->post('pooja_time'), 
						'from_time'=>  $this->input->post('from_time'), 
						'to_time'=>  $this->input->post('to_time'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this->db->where('id',$this->uri->segment(5));
					$this ->db->update('slnt_puja_time',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Pooja_Time/".$this->uri->segment(3)."/edit/".$this->uri->segment(5));  
			}
	 	}

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/Puja-Time');
		$this->load->view('templates/footer');	
}

public function BhogPrasad()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}
		$this->db->select('*');
			$this->db->from('slnt_puja');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_data'] = $this->db->get()->row();


		if ($this->uri->segment(4)=='delete') {
			$this->db->where('id',$this->uri->segment(5));
			$this->db->delete('slnt_bhog_prasad');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/BhogPrasad/".$this->uri->segment(3)); 
		}

			$this->db->select('*');
			$this->db->from('slnt_bhog_prasad');
			$this->db->where('puja_id',$this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_list'] = $this->db->get()->result();

          if ($this->uri->segment(4)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_bhog_prasad');
			$this->db->where('id',$this->uri->segment(5));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }
		if ($this->uri->segment(4)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'bhog_prasad_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'bhog_prasad_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'bhog_prasad_title'=>  $this->input->post('bhog_prasad_title'), 
						'bhog_prasad_price'=>  $this->input->post('bhog_prasad_price'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this ->db->insert('slnt_bhog_prasad',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
						redirect("pages/BhogPrasad/".$this->uri->segment(3)); 
			}
	 	}
			if ($this->uri->segment(6)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'bhog_prasad_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'bhog_prasad_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'bhog_prasad_title'=>  $this->input->post('bhog_prasad_title'), 
						'bhog_prasad_price'=>  $this->input->post('bhog_prasad_price'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this->db->where('id',$this->uri->segment(5));
					$this ->db->update('slnt_bhog_prasad',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/BhogPrasad/".$this->uri->segment(3));  
			}
	 	}

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/bhogPrasad');
		$this->load->view('templates/footer');	
}


public function Catering()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(4)=='delete') {
			$this->db->where('id',$this->uri->segment(5));
			$this->db->delete('slnt_bhog_catering');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/Catering/".$this->uri->segment(3)); 
		}

			$this->db->select('*');
			$this->db->from('slnt_puja');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_data'] = $this->db->get()->row();



			$this->db->select('*');
			$this->db->from('slnt_bhog_catering');
			$this->db->where('puja_id',$this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_list'] = $this->db->get()->result();

          if ($this->uri->segment(4)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_bhog_catering');
			$this->db->where('id',$this->uri->segment(5));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }
		if ($this->uri->segment(4)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'catering_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'catering_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'catering_type'=>  $this->input->post('catering_type'), 
						'catering_title'=>  $this->input->post('catering_title'), 
						'catering_price'=>  $this->input->post('catering_price'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A")
					);
					$this ->db->insert('slnt_bhog_catering',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
						redirect("pages/Catering/".$this->uri->segment(3)); 
			}
	 	}





			if ($this->uri->segment(6)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'catering_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'catering_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'catering_type'=>  $this->input->post('catering_type'), 
						'catering_title'=>  $this->input->post('catering_title'), 
						'catering_price'=>  $this->input->post('catering_price'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A")
					);
					$this->db->where('id',$this->uri->segment(5));
					$this ->db->update('slnt_bhog_catering',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Catering/".$this->uri->segment(3));  
			}
	 	}

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/catering');
		$this->load->view('templates/footer');	
}





public function Samagri()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(4)=='delete') {
			$this->db->where('id',$this->uri->segment(5));
			$this->db->delete('slnt_samagri');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/Samagri/".$this->uri->segment(3)); 
		}

			$this->db->select('*');
			$this->db->from('slnt_puja');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_data'] = $this->db->get()->row();


			$this->db->select('*');
			$this->db->from('slnt_samagri');
			$this->db->where('puja_id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_list'] = $this->db->get()->result();

          if ($this->uri->segment(4)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_samagri');
			$this->db->where('id',$this->uri->segment(5));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }
		if ($this->uri->segment(4)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'samagri_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'samagri_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
			$this->form_validation->set_rules(
				'measurement', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				
			} else {
					$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'samagri_type'=>  $this->input->post('samagri_type'),
						'samagri_title'=>  $this->input->post('samagri_title'), 
						'samagri_price'=>  $this->input->post('samagri_price'), 
						'unit_of_measurement'=>  $this->input->post('unit_of_measurement'), 
						'measurement'=>  $this->input->post('measurement'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this ->db->insert('slnt_samagri',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
						redirect("pages/Samagri/".$this->uri->segment(3)); 
			}
	 	}





			if ($this->uri->segment(6)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'samagri_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'samagri_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
			
			$this->form_validation->set_rules(
				'measurement', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'samagri_type'=>  $this->input->post('samagri_type'),
						'samagri_title'=>  $this->input->post('samagri_title'), 
						'samagri_price'=>  $this->input->post('samagri_price'), 
						'unit_of_measurement'=>  $this->input->post('unit_of_measurement'), 
						'measurement'=>  $this->input->post('measurement'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this->db->where('id',$this->uri->segment(5));
					$this ->db->update('slnt_samagri',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Samagri/".$this->uri->segment(3));  
			}
	 	}

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/samagri');
		$this->load->view('templates/footer');	
}
   

public function ManagePoojaDetails()
{		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}	

			$this->db->select('*');
			$this->db->from('slnt_puja');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_data'] = $this->db->get()->row();

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/managePujaDetails');
		$this->load->view('templates/footer');	
}

public function Assign_Priest()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}	

			$this->db->select('*');
			$this->db->from('adminlogin');
			$this->db->order_by('id','DESC');
	        $data['puja_list'] = $this->db->get()->result();

	        $this->db->select('*');
			$this->db->from('slnt_puja');
			$this->db->where('id',$this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();



		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/assign-Priest');
		$this->load->view('templates/footer');	
}




public function Add_Pooja()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(3)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'description_charge', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'puja_type', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
                
//                 $this->form_validation->set_rules(
// 				'venue_price', '%s',
// 	        	'required|numeric',
// 	        	array(
// 		        	'required'     => 'This field is  required.'
// 		        )
// 			);
			
			
			
			$this->form_validation->set_rules(
				'member_price', '%s',
	        	'required|numeric',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'non_member_price', '%s',
	        	'required|numeric',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);
			if ($this->form_validation->run() == FALSE) {
			
			} else {
			     	$fileinfo = @getimagesize($_FILES["puja_image"]["tmp_name"]);
				    $width = $fileinfo[0];
				    $height = $fileinfo[1];
				    
				    $allowed_image_extension = array(
				        "png",
				        "jpg",
				        "jpeg"
				    );
				    $file_extension = pathinfo($_FILES["puja_image"]["name"], PATHINFO_EXTENSION);
				    if (! file_exists($_FILES["puja_image"]["tmp_name"])) {
				    	$puja_image='default.png';
				         $datan = array(
						'description_charge'=>  $this->input->post('description_charge'), 
						'description'=>  $this->input->post('description'), 
						'puja_type'=>  $this->input->post('puja_type'), 
						'venue_price'=>  $this->input->post('venue_price'), 
						'member_price'=>  $this->input->post('member_price'), 
						'non_member_price'=>  $this->input->post('non_member_price'),
						'status'=>  $this->input->post('status'),
						'havan_samagri'=>  $this->input->post('havan_samagri'),
						'pooja_samgri'=>  $this->input->post('pooja_samgri'), 
						'catering_menu'=>  $this->input->post('catering_menu'), 
						'yajmans'=>  $this->input->post('yajmans'), 
						'refreshment'=>  $this->input->post('refreshment'), 
						'temple_charges'=>  $this->input->post('temple_charges'), 
						'from_date'=>  $this->input->post('from_date'), 
						'to_date'=>  $this->input->post('to_date'), 
						'fill_from_date'=>  date('Ymd',strtotime($this->input->post('from_date'))), 
						'fill_to_date'=>  date('Ymd',strtotime($this->input->post('to_date'))), 
						'offer_mem_price'=>  $this->input->post('offer_mem_price'), 
						'offer_non_mem_price'=>  $this->input->post('offer_non_mem_price'), 
						'blog_prasads'=>  $this->input->post('blog_prasads'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
						'puja_image'=>$puja_image
					);
				    $this ->db->insert('slnt_puja',$datan);
					$last =$this->db->insert_id();
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/Samagri/".$last); 
					
				    }  else if (! in_array($file_extension, $allowed_image_extension)) {
					     $data['profile_pic']='Upload valiid images. Only PNG, JPG and JPEG are allowed.';
					     //return FALSE;
					} else { 
			        	$data['profile_pic']=''; 
						$config['upload_path']   = '../assets/temple/'; 
					    $config['allowed_types'] = 'gif|jpeg|jpg|png|GIF|JPEG|JPG|PNG'; 
					    $config['max_size']      = 4096;
					    $config['encrypt_name'] = FALSE; 
				        $new_name = date('ymdhis');
						$config['file_name'] = $new_name;
						$this->load->library('upload', $config);

					    if (!$this->upload->do_upload('puja_image')) {
					        //$data['profile_pic'] = $this->upload->display_errors();
					        $puja_image='default.png';
					    }else {
					        $x=$this->upload->data();
					      	$puja_image=$x['file_name'];
                   
					     }
					        $datan = array(
						'description_charge'=>  $this->input->post('description_charge'), 
						'description'=>  $this->input->post('description'), 
						'puja_type'=>  $this->input->post('puja_type'), 
						'venue_price'=>  $this->input->post('venue_price'), 
						'member_price'=>  $this->input->post('member_price'), 
						'non_member_price'=>  $this->input->post('non_member_price'),
						'status'=>  $this->input->post('status'),
						'havan_samagri'=>  $this->input->post('havan_samagri'),
						'pooja_samgri'=>  $this->input->post('pooja_samgri'), 
						'catering_menu'=>  $this->input->post('catering_menu'), 
						'yajmans'=>  $this->input->post('yajmans'), 
						'refreshment'=>  $this->input->post('refreshment'), 
						'temple_charges'=>  $this->input->post('temple_charges'), 
						'from_date'=>  $this->input->post('from_date'), 
						'to_date'=>  $this->input->post('to_date'), 
						'fill_from_date'=>  date('Ymd',strtotime($this->input->post('from_date'))), 
						'fill_to_date'=>  date('Ymd',strtotime($this->input->post('to_date'))), 
						'offer_mem_price'=>  $this->input->post('offer_mem_price'), 
						'offer_non_mem_price'=>  $this->input->post('offer_non_mem_price'), 
						'blog_prasads'=>  $this->input->post('blog_prasads'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
						'puja_image'=>$puja_image
					);

                   $this ->db->insert('slnt_puja',$datan);
					$last =$this->db->insert_id();
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/Samagri/".$last);  
			    
					        
					        
					        
					    }
			}
		}

        if ($this->uri->segment(5)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'description_charge', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'puja_type', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
              $this->form_validation->set_rules(
				'venue_price', '%s',
	        	'required|numeric',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);
			
			$this->form_validation->set_rules(
				'member_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'non_member_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);
			if ($this->form_validation->run() == FALSE) {
			
			} else {
			    
			            $config['upload_path']   = '../assets/temple/'; 
					    $config['allowed_types'] = 'gif|jpeg|jpg|png|GIF|JPEG|JPG|PNG'; 
					    $config['max_size']      = 4096;
					    $config['encrypt_name'] = FALSE;
				        $new_name = date('ymdhis');
						$config['file_name'] = $new_name;

					      $this->load->library('upload', $config);
					       if (!$this->upload->do_upload('puja_image')) {
					         	 $puja_image=$this->input->post('old_puja_image');
					      }else {
					      	unlink('../assets/temple/'.$this->input->post('old_puja_image'));
					      		$x=$this->upload->data();
					      		 $puja_image=$x['file_name'];
					      }



					$datan = array(
						'description_charge'=>  $this->input->post('description_charge'), 
						'description'=>  $this->input->post('description'), 
						'puja_type'=>  $this->input->post('puja_type'), 
						'venue_price'=>  $this->input->post('venue_price'), 
						'member_price'=>  $this->input->post('member_price'), 
						'non_member_price'=>  $this->input->post('non_member_price'),
						'status'=>  $this->input->post('status'),
					    'havan_samagri'=>  $this->input->post('havan_samagri'),
						'pooja_samgri'=>  $this->input->post('pooja_samgri'),  
						'catering_menu'=>  $this->input->post('catering_menu'), 
						'yajmans'=>  $this->input->post('yajmans'), 
						'refreshment'=>  $this->input->post('refreshment'), 
						'temple_charges'=>  $this->input->post('temple_charges'), 
						'from_date'=>  $this->input->post('from_date'), 
						'to_date'=>  $this->input->post('to_date'), 
						'fill_from_date'=>  date('Ymd',strtotime($this->input->post('from_date'))), 
						'fill_to_date'=>  date('Ymd',strtotime($this->input->post('to_date'))), 
						'offer_mem_price'=>  $this->input->post('offer_mem_price'), 
						'offer_non_mem_price'=>  $this->input->post('offer_non_mem_price'), 
						'blog_prasads'=>  $this->input->post('blog_prasads'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
						'puja_image'=>$puja_image
					);
					$this->db->where('id',$this->uri->segment(4));
					$this ->db->update('slnt_puja',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Add_Pooja/edit/".$this->uri->segment(4));  
			}
		}	

        if ($this->uri->segment(3)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_puja');
			$this->db->where('id',$this->uri->segment(4));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }



		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/add-puja');
		$this->load->view('templates/footer');		
}


public function View_Pooja()
{
	 	date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(3)=='delete') {
			$this->db->where('id',$this->uri->segment(4));
			$this->db->delete('slnt_puja');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/View_Pooja");  
		}


		$this->db->select('*');
		$this->db->from('slnt_puja');
		$this->db->order_by('description_charge','ASC');
        $data['puja_list'] = $this->db->get()->result();



		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/view-puja');
		$this->load->view('templates/footer');		
}

/**********************************/



public function BlockAllPoojaDate()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}


		if ($this->uri->segment(3)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'block_date', 'date',
	        	'required'
			);
			
// 			$this->form_validation->set_rules(
// 				'fromtime', 'From time',
// 	        	'required'
// 			);
			
// 			$this->form_validation->set_rules(
// 				'totime', 'To time',
// 	        	'required'
// 			);
 
			if ($this->form_validation->run() == FALSE) {
			
			} else {
					$datan = array(
				// 		'fromtime'=>  $this->input->post('fromtime'),					
				// 		'totime'=>  $this->input->post('totime'),					
						'block_date_filt'=>  date('Ymd',strtotime($this->input->post('block_date'))),					
						'block_date'=>  $this->input->post('block_date'),					
						'leave_purpose'=>  $this->input->post('leave_purpose')					
					);
					$this ->db->insert('slnt_block_all_pooja_date',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/BlockAllPoojaDate/");  
			}
		}

//         if ($this->uri->segment(5)=='update') {
// 			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
// 	 		$this->form_validation->set_rules(
// 				'title', '%s',
// 	        	'required',
// 	        	array(
// 		        	'required'     => 'This field is required.'
// 		        )
// 			);
 
// 			if ($this->form_validation->run() == FALSE) {
			
// 			} else {
// 					$datan = array(
// 						'title'=>  $this->input->post('title')
// 					);
// 					$this->db->where('id',$this->uri->segment(4));
// 					$this ->db->update('slnt_block_all_pooja_date',$datan);
// 					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
// 					redirect("pages/BlockDate/edit/".$this->uri->segment(4));  
// 			}
// 		}	

//         if ($this->uri->segment(3)=='edit') {
// 	        $this->db->select('*');
// 			$this->db->from('slnt_block_all_pooja_date');
// 			$this->db->where('id',$this->uri->segment(4));
// 			$this->db->order_by('id','DESC');
// 	        $data['all_packages'] = $this->db->get()->row();
//         }

        	$this->db->select('*');
			$this->db->from('slnt_block_all_pooja_date');
			$this->db->order_by('id','DESC');
	        $data['all_block_date'] = $this->db->get();

	   if ($this->uri->segment(3)=='delete') {
			$this->db->where('id',$this->uri->segment(4));
			$this->db->delete('slnt_block_all_pooja_date');
			$this->session->set_flashdata('success', '<div class="alert alert-danger">Record deleted successfully</div>');
			redirect("pages/BlockAllPoojaDate/"); 
		}



		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/block-all-pooja-date');
		$this->load->view('templates/footer');	
}


public function BlockDate()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}


		if ($this->uri->segment(3)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
 
			if ($this->form_validation->run() == FALSE) {
			
			} else {
					$datan = array(
						'title'=>  $this->input->post('title')					
					);
					$this ->db->insert('slnt_block_date',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/BlockDate/");  
			}
		}

        if ($this->uri->segment(5)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
 
			if ($this->form_validation->run() == FALSE) {
			
			} else {
					$datan = array(
						'title'=>  $this->input->post('title')
					);
					$this->db->where('id',$this->uri->segment(4));
					$this ->db->update('slnt_block_date',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/BlockDate/edit/".$this->uri->segment(4));  
			}
		}	

        if ($this->uri->segment(3)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_block_date');
			$this->db->where('id',$this->uri->segment(4));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }

        	$this->db->select('*');
			$this->db->from('slnt_block_date');
			$this->db->order_by('id','DESC');
	        $data['all_block_date'] = $this->db->get();

	        if ($this->uri->segment(3)=='delete') {
			$this->db->where('id',$this->uri->segment(4));
			$this->db->delete('slnt_block_date');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/BlockDate/"); 
		}



		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/add-block-date');
		$this->load->view('templates/footer');	
}


public function Add_Ceremonies()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(3)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'description_charge', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'puja_type', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
            	$this->form_validation->set_rules(
    				'venue_price', '%s',
    	        	'required',
    	        	array(
    		        	'required'     => 'This field is  required.'
    		        )
    			);
    			
			
			$this->form_validation->set_rules(
				'member_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'non_member_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);
			if ($this->form_validation->run() == FALSE) {
			
			} else {
					$datan = array(
						'description_charge'=>  $this->input->post('description_charge'), 
						'puja_type'=>  $this->input->post('puja_type'), 
						'venue_price'=>  $this->input->post('venue_price'), 
						'member_price'=>  $this->input->post('member_price'), 
						'non_member_price'=>  $this->input->post('non_member_price'),
						'status'=>  $this->input->post('status'),
						'kalash_sthapna'=>  $this->input->post('kalash_sthapna'),
						'gotra_sankalp'=>  $this->input->post('gotra_sankalp'), 
						'preeti_bhoge'=>  $this->input->post('preeti_bhoge'), 
						'light_meal'=>  $this->input->post('light_meal'), 
						'catering_menu'=>  $this->input->post('catering_menu'), 
						'yajmans'=>  $this->input->post('yajmans'), 
						'refreshment'=>  $this->input->post('refreshment'), 
						'temple_charges'=>  $this->input->post('temple_charges'), 
						'solomnization'=>  $this->input->post('solomnization'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this ->db->insert('slnt_ceremonies',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/Add_Ceremonies/");  
			}
		}

        if ($this->uri->segment(5)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'description_charge', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'puja_type', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
            $this->form_validation->set_rules(
    				'venue_price', '%s',
    	        	'required',
    	        	array(
    		        	'required'     => 'This field is  required.'
    		        )
    			);
			$this->form_validation->set_rules(
				'member_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'non_member_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);
			if ($this->form_validation->run() == FALSE) {
			
			} else {
					$datan = array(
						'description_charge'=>  $this->input->post('description_charge'), 
						'puja_type'=>  $this->input->post('puja_type'), 
						'venue_price'=>  $this->input->post('venue_price'), 
						'member_price'=>  $this->input->post('member_price'), 
						'non_member_price'=>  $this->input->post('non_member_price'),
						'status'=>  $this->input->post('status'),
						'kalash_sthapna'=>  $this->input->post('kalash_sthapna'),
						'gotra_sankalp'=>  $this->input->post('gotra_sankalp'), 
						'preeti_bhoge'=>  $this->input->post('preeti_bhoge'), 
						'light_meal'=>  $this->input->post('light_meal'), 
						'catering_menu'=>  $this->input->post('catering_menu'), 
						'yajmans'=>  $this->input->post('yajmans'), 
						'refreshment'=>  $this->input->post('refreshment'), 
						'temple_charges'=>  $this->input->post('temple_charges'), 
						'solomnization'=>  $this->input->post('solomnization'),
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this->db->where('id',$this->uri->segment(4));
					$this ->db->update('slnt_ceremonies',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Add_Ceremonies/edit/".$this->uri->segment(4));  
			}
		}	

        if ($this->uri->segment(3)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_ceremonies');
			$this->db->where('id',$this->uri->segment(4));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }



		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/add-ceremonies');
		$this->load->view('templates/footer');		
}


public function View_Ceremonies()
{
	 	date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(3)=='delete') {
			$this->db->where('id',$this->uri->segment(4));
			$this->db->delete('slnt_ceremonies');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/View_Pooja");  
		}


		$this->db->select('*');
		$this->db->from('slnt_ceremonies');
		$this->db->order_by('id','DESC');
        $data['puja_list'] = $this->db->get()->result();



		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/view-ceremonies');
		$this->load->view('templates/footer');		
}


public function Ceremonies_Time()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(4)=='delete') {
			$this->db->where('id',$this->uri->segment(5));
			$this->db->delete('slnt_ceremonies_time');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/Ceremonies_Time/".$this->uri->segment(3));  
		}

			$this->db->select('*');
			$this->db->from('slnt_ceremonies_time');
			$this->db->where('pooja_time',$this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_list'] = $this->db->get()->result();

          if ($this->uri->segment(4)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_ceremonies_time');
			$this->db->where('id',$this->uri->segment(5));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }
		if ($this->uri->segment(3)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'from_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'to_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('success', '<div class="alert alert-danger">All field are mendetory!</div>');
				redirect("pages/Ceremonies_Time/".$this->input->post('pooja_time')); 
			} else {
					$datan = array(
						'pooja_time'=>  $this->input->post('pooja_time'),
						'from_time'=>  $this->input->post('from_time'), 
						'to_time'=>  $this->input->post('to_time'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this ->db->insert('slnt_ceremonies_time',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/Ceremonies_Time/".$this->input->post('pooja_time'));  
			}
	 	}





			if ($this->uri->segment(6)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'from_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'to_time', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('success', '<div class="alert alert-danger">All field are mendetory!</div>');
				redirect("pages/Ceremonies_Time/".$this->uri->segment(3)."/edit/".$this->uri->segment(5)); 
			} else {
					$datan = array(
						'pooja_time'=>  $this->input->post('pooja_time'), 
						'from_time'=>  $this->input->post('from_time'), 
						'to_time'=>  $this->input->post('to_time'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this->db->where('id',$this->uri->segment(5));
					$this ->db->update('slnt_ceremonies_time',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Ceremonies_Time/".$this->uri->segment(3)."/edit/".$this->uri->segment(5));  
			}
	 	}

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/ceremonies-time');
		$this->load->view('templates/footer');	
}




public function ManageCeremoniesDetails()
{		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}	

			$this->db->select('*');
			$this->db->from('slnt_ceremonies');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_data'] = $this->db->get()->row();

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/manageCeremoniesDetails');
		$this->load->view('templates/footer');	
}







public function Ceremonies_BhogPrasad()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}
			$this->db->select('*');
			$this->db->from('slnt_ceremonies');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_data'] = $this->db->get()->row();


		if ($this->uri->segment(4)=='delete') {
			$this->db->where('id',$this->uri->segment(5));
			$this->db->delete('slnt_ceremonies_bhog_prasad');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/Ceremonies_BhogPrasad/".$this->uri->segment(3)); 
		}

			$this->db->select('*');
			$this->db->from('slnt_ceremonies_bhog_prasad');
			$this->db->where('puja_id',$this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_list'] = $this->db->get()->result();

          if ($this->uri->segment(4)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_ceremonies_bhog_prasad');
			$this->db->where('id',$this->uri->segment(5));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }
		if ($this->uri->segment(4)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'bhog_prasad_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'bhog_prasad_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'bhog_prasad_title'=>  $this->input->post('bhog_prasad_title'), 
						'bhog_prasad_price'=>  $this->input->post('bhog_prasad_price'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this ->db->insert('slnt_ceremonies_bhog_prasad',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
						redirect("pages/Ceremonies_BhogPrasad/".$this->uri->segment(3)); 
			}
	 	}
			if ($this->uri->segment(6)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'bhog_prasad_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'bhog_prasad_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'bhog_prasad_title'=>  $this->input->post('bhog_prasad_title'), 
						'bhog_prasad_price'=>  $this->input->post('bhog_prasad_price'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this->db->where('id',$this->uri->segment(5));
					$this ->db->update('slnt_ceremonies_bhog_prasad',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Ceremonies_BhogPrasad/".$this->uri->segment(3));  
			}
	 	}

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/ceremonies_bhogPrasad');
		$this->load->view('templates/footer');	
}


public function Ceremonies_Catering()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(4)=='delete') {
			$this->db->where('id',$this->uri->segment(5));
			$this->db->delete('slnt_ceremonies_catering');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/Ceremonies_Catering/".$this->uri->segment(3)); 
		}

			$this->db->select('*');
			$this->db->from('slnt_ceremonies');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_data'] = $this->db->get()->row();


			$this->db->select('*');
			$this->db->from('slnt_ceremonies_catering');
			$this->db->where('puja_id',$this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_list'] = $this->db->get()->result();

          if ($this->uri->segment(4)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_ceremonies_catering');
			$this->db->where('id',$this->uri->segment(5));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }
		if ($this->uri->segment(4)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'catering_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'catering_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'catering_type'=>  $this->input->post('catering_type'), 
						'catering_title'=>  $this->input->post('catering_title'), 
						'catering_price'=>  $this->input->post('catering_price'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A")
					);
					$this ->db->insert('slnt_ceremonies_catering',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
						redirect("pages/Ceremonies_Catering/".$this->uri->segment(3)); 
			}
	 	}





			if ($this->uri->segment(6)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'catering_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'catering_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'catering_type'=>  $this->input->post('catering_type'), 
						'catering_title'=>  $this->input->post('catering_title'), 
						'catering_price'=>  $this->input->post('catering_price'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A")
					);
					$this->db->where('id',$this->uri->segment(5));
					$this ->db->update('slnt_ceremonies_catering',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Ceremonies_Catering/".$this->uri->segment(3));  
			}
	 	}

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/ceremonies_catering');
		$this->load->view('templates/footer');	
}





public function Ceremonies_Samagri()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(4)=='delete') {
			$this->db->where('id',$this->uri->segment(5));
			$this->db->delete('slnt_ceremonies_samagri');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/Ceremonies_Samagri/".$this->uri->segment(3)); 
		}

			$this->db->select('*');
			$this->db->from('slnt_ceremonies');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_data'] = $this->db->get()->row();


			$this->db->select('*');
			$this->db->from('slnt_ceremonies_samagri');
			$this->db->where('puja_id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_list'] = $this->db->get()->result();

          if ($this->uri->segment(4)=='edit') {
	        $this->db->select('*');
			$this->db->from('slnt_ceremonies_samagri');
			$this->db->where('id',$this->uri->segment(5));
			$this->db->order_by('id','DESC');
	        $data['all_packages'] = $this->db->get()->row();
        }
		if ($this->uri->segment(4)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'samagri_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'samagri_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				
			} else {
					$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'samagri_type'=>  $this->input->post('samagri_type'),
						'samagri_title'=>  $this->input->post('samagri_title'), 
						'samagri_price'=>  $this->input->post('samagri_price'), 
						'measurement'=>  $this->input->post('measurement'), 
						'unit_of_measurement'=>  $this->input->post('unit_of_measurement'), 
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this ->db->insert('slnt_ceremonies_samagri',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
						redirect("pages/Ceremonies_Samagri/".$this->uri->segment(3)); 
			}
	 	}





			if ($this->uri->segment(6)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'samagri_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'samagri_price', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
	 		if ($this->form_validation->run() == FALSE) {
				 
			} else {
				$datan = array(
						'puja_id'=>  $this->uri->segment(3),
						'samagri_type'=>  $this->input->post('samagri_type'),
						'samagri_title'=>  $this->input->post('samagri_title'), 
						'samagri_price'=>  $this->input->post('samagri_price'), 
						'measurement'=>  $this->input->post('measurement'), 
						'unit_of_measurement'=>  $this->input->post('unit_of_measurement'),
						'create_date'=>date("d M, Y"),
						'create_time'=>date("h:i:s A"),
					);
					$this->db->where('id',$this->uri->segment(5));
					$this ->db->update('slnt_ceremonies_samagri',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Ceremonies_Samagri/".$this->uri->segment(3));  
			}
	 	}

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/ceremonies_samagri');
		$this->load->view('templates/footer');	
}


public function Arrange_Decoration()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
	 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}
			$this->db->select('*');
			$this->db->from('slnt_arrangedecoration');
        	$data['all_products'] = $this->db->get()->result();



if($this->uri->segment(3)=='delete'){ 
     	$where = array('id' => $this->uri->segment(4));
		$this->db->where($where);
		$this->db->delete('slnt_arrangedecoration');
		$this->session->set_flashdata('success', 'Record Delete Successfully.');
		redirect('pages/Arrange_Decoration');
}


		if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('slnt_arrangedecoration');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();	
		}

if($this->uri->segment(3)=='insert'){
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	$this->form_validation->set_rules('title', 'Title ', 'trim|required');
 	$this->form_validation->set_rules('membership_amount', 'Amount', 'trim|required');
 	$this->form_validation->set_rules('none_membership_amount', 'none membership amount', 'trim|required');
 		if ($this->form_validation->run() == FALSE) {
		} else {
                		$datan = array(
					       	'title'=>  $this->input->post('title'),
					       	'membership_days'=>  $this->input->post('membership_days'),
					       	'membership_amount'=>  $this->input->post('membership_amount'), 
					       	'none_membership_amount'=>  $this->input->post('none_membership_amount'), 
					       	'description'=>  $this->input->post('description'), 
					       	'status'=>  $this->input->post('status'), 
					       	'create_date'=>  date('d-m-Y'), 
						);
                		$this ->db->insert('slnt_arrangedecoration',$datan);
					$this->session->set_flashdata('success', 'Record Save Successfully.');
					redirect('pages/Arrange_Decoration');
		}
}


if($this->uri->segment(3)=='update'){
	 $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	$this->form_validation->set_rules('title', 'Title ', 'trim|required');
 
	$this->form_validation->set_rules('membership_amount', 'membership amount', 'trim|required');
	$this->form_validation->set_rules('none_membership_amount', 'none membership amount', 'trim|required');
 
		if ($this->form_validation->run() == FALSE) {
		} else {
                		$datan = array(
					       	'title'=>  $this->input->post('title'),
					       	'membership_days'=>  $this->input->post('membership_days'),
					       	'membership_amount'=>  $this->input->post('membership_amount'), 
					       	'none_membership_amount'=>  $this->input->post('none_membership_amount'), 
					       	'description'=>  $this->input->post('description'), 
					       	'status'=>  $this->input->post('status'), 
					       	'create_date'=>  date('d-m-Y'), 
						);
					    	$where2 = array('id'=> $this->uri->segment(4));
							$this->db->where($where2);
							$this ->db->update('slnt_arrangedecoration',$datan);
				$this->session->set_flashdata('success', 'Record Update Successfully.');
				redirect('pages/Arrange_Decoration/edit/'.$this->uri->segment(4));
		}	
	}			
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/arrange-decoration');
		$this->load->view('templates/footer');	
}	

/**********************************/
public function Add_User()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}
		if ($this->uri->segment(3)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'email', '%s',
	        	'is_unique[adminlogin.email]',
	        	array(
	        		'is_unique'     => 'This %s  Already Registered.'
		        )
			);

			$this->form_validation->set_rules(
				'adminpassword', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

			$this->form_validation->set_rules(
				'name_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'name', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);


			$this->form_validation->set_rules(
				'last_name', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'mobleno', '%s',
	        	'required|is_unique[adminlogin.mobleno]',
	        	array(
	        		'is_unique'     => 'This Field  Already Registered.',
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'adminusername', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);


			$this->form_validation->set_rules(
				'rol', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'status', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);


			if ($this->form_validation->run() == FALSE) {
			
			} else {

				$config['upload_path']          = './../assets/profile/';
                $config['allowed_types']        = 'gif|jpg|png|JPEG|jpeg|PNG|JPG|GIF';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('profilepic'))
                {
                	$this->session->set_flashdata('image_error', 'Select image in jpg, png format');	
                	$profilepic='';

                } else {
                		$x=$this->upload->data();
                		$profilepic = $x['file_name'];
                		$datan = array(
                			'profilepic'=>$profilepic,
							'adminusername'=>  $this->input->post('adminusername'), 
							'adminpassword'=>  md5($this->input->post('adminpassword')), 
							'name_title'=>  $this->input->post('name_title'), 
							'name'=>  $this->input->post('name'),
							'last_name'=>  $this->input->post('last_name'),
							'mobleno'=>  $this->input->post('mobleno'),
							'email'=>  $this->input->post('email'), 
							'rol'=>  $this->input->post('rol'), 
							'status'=>  $this->input->post('status')
						);
						$this ->db->insert('adminlogin',$datan);
						$this->session->set_flashdata('success', '<div class="alert alert-success">Record add successfully</div>');
						redirect("pages/Add_User/");  
                }
			}	 
		}



		 if ($this->uri->segment(5)=='update') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 	
			$this->form_validation->set_rules(
				'name_title', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'name', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);


			$this->form_validation->set_rules(
				'last_name', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'mobleno', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			

			$this->form_validation->set_rules(
				'rol', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);

			$this->form_validation->set_rules(
				'status', '%s',
	        	'required',
	        	array(
		        	'required'     => 'This field is  required.'
		        )
			);


			if ($this->form_validation->run() == FALSE) {
			
			} else {

				$config['upload_path']          = './../assets/profile/';
                $config['allowed_types']        = 'gif|jpg|png|JPEG|jpeg|PNG|JPG|GIF';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('profilepic'))
                {
                	$profilepic=$this->input->post('profilepic_old');

                } else {
                		unlink('./../assets/profile/'.$this->input->post('profilepic_old'));
                		$x=$this->upload->data();
                		$profilepic = $x['file_name'];


               }
				if ($this->input->post('adminusername')!='' && $this->input->post('adminpassword')!='') {
					$datan = array(
						'profilepic'=>$profilepic,
						'adminusername'=>  $this->input->post('adminusername'), 
						'adminpassword'=>  md5($this->input->post('adminpassword')), 
						'name_title'=>  $this->input->post('name_title'), 
						'name'=>  $this->input->post('name'),
						'last_name'=>  $this->input->post('last_name'),
						'mobleno'=>  $this->input->post('mobleno'),
						'email'=>  $this->input->post('email'), 
						'rol'=>  $this->input->post('rol'), 
						'status'=>  $this->input->post('status')
					);
				} else if ($this->input->post('adminusername')=='' && $this->input->post('adminpassword')!='') {
					$datan = array(
						'profilepic'=>$profilepic,
						'adminpassword'=>  md5($this->input->post('adminpassword')), 
						'name_title'=>  $this->input->post('name_title'), 
						'name'=>  $this->input->post('name'),
						'last_name'=>  $this->input->post('last_name'),
						'mobleno'=>  $this->input->post('mobleno'),
						'email'=>  $this->input->post('email'), 
						'rol'=>  $this->input->post('rol'), 
						'status'=>  $this->input->post('status')
					);
				} else if ($this->input->post('adminusername')!='' && $this->input->post('adminpassword')=='') {
					$datan = array(
						'profilepic'=>$profilepic,
						'adminusername'=> $this->input->post('adminusername'), 
						'name_title'=>  $this->input->post('name_title'), 
						'name'=>  $this->input->post('name'),
						'last_name'=>  $this->input->post('last_name'),
						'mobleno'=>  $this->input->post('mobleno'),
						'email'=>  $this->input->post('email'), 
						'rol'=>  $this->input->post('rol'), 
						'status'=>  $this->input->post('status')
					);
				}   else {
					$datan = array(
						'profilepic'=>$profilepic,
						'name_title'=>  $this->input->post('name_title'), 
						'name'=>  $this->input->post('name'),
						'last_name'=>  $this->input->post('last_name'),
						'mobleno'=>  $this->input->post('mobleno'),
						'email'=>  $this->input->post('email'), 
						'rol'=>  $this->input->post('rol'), 
						'status'=>  $this->input->post('status')
					);
				}

					$this->db->where('id',$this->uri->segment(4));
					$this ->db->update('adminlogin',$datan);
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record update successfully</div>');
					redirect("pages/Add_User/edit/".$this->uri->segment(4));  
			}
		}	


        if ($this->uri->segment(3)=='edit') {

	        $this->db->select('*');
			$this->db->from('adminlogin');
			$this->db->where('id',$this->uri->segment(4));
	        $data['all_packages'] = $this->db->get()->row();
        }




		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/Add_User');
		$this->load->view('templates/footer');	
}


public function View_User()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(3)=='delete') {
			$this->db->where('id',$this->uri->segment(4));
			$this->db->delete('adminlogin');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/View_User");  
		}


		$this->db->select('*');
		$this->db->from('adminlogin');
		if (isset($_GET['type'])) {
			$type=$_GET['type'];
			$this->db->where('rol',$_GET['type']);
		}
		$this->db->order_by('id','DESC');
        $data['puja_list'] = $this->db->get()->result();



		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/view-User');
		$this->load->view('templates/footer');
}





public function blogCategory()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}
	$this->db->select('*');
	$this->db->from('blogCategory');
	$this->db->order_by('id','DESC');
    $data['all_category'] = $this->db->get()->result();
		
	if($this->uri->segment(3)=='delete'){
		$where = array('id' => $this->uri->segment(4));
		$this->db->where($where);
		$this->db->delete('blogCategory');
		$this->session->set_flashdata('success', 'Record Delete Successfully.');
		redirect('pages/blogCategory');
	}	
	if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('blogCategory');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
	}
	if($this->uri->segment(3)=='insert'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required');
			if ($this->form_validation->run() == FALSE) {
			} else {
				if ($this->input->post('cat_it')==0) {
					$level=0;
				} else {
					$level=1;
				}
			$datan = array(
               	'name'=>  $this->input->post('name'),
               	'status'=>  $this->input->post('status'),
               	'level'=>  $level,
               	'cat_it'=>  $this->input->post('cat_it'),
               	'search_id'=>  $this->input->post('search_id')
            );

			                    $this ->db->insert('blogCategory',$datan);
								$this->session->set_flashdata('success', 'Record Save Successfully.');
								redirect('pages/blogCategory');
					}
	
}


if($this->uri->segment(5)=='update'){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('name', 'Category Name ', 'trim|required|is_unique[blogcategory.name]');
		$this->form_validation->set_rules('search_id', '  ', 'trim|required|is_unique[blogcategory.search_id]');
		if ($this->form_validation->run() == FALSE) {
									
		} else {

		if ($this->input->post('cat_it')==0) {
			$level=0;
		} else {
			$level=1;
		}
		$datan = array(
			'name'=>  $this->input->post('name'),
			'status'=>  $this->input->post('status'),
			'level'=>  $level,
			'cat_it'=>  $this->input->post('cat_it'),
            'search_id'=>  $this->input->post('search_id')
		);
		$where2 = array('id' => $this->uri->segment(4));
		$this->db->where($where2);
									
		$this ->db->update('blogCategory',$datan);
		$this->session->set_flashdata('success', 'Record Update Successfully.');
		redirect('pages/blogCategory/edit/'.$this->uri->segment(4).'/update');
	}
	
}			
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('blogCategory');
		$this->load->view('templates/footer');	
}




public function ViewBooking()
{	
		$action =  $this->uri->segment(3);
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		 
		 if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}


				$this->db->select('*');
				$this->db->from('slnt_booking_slot');
				if ($this->uri->segment(3)!='') {
					echo $this->uri->segment(3);
					$this->db->where('sel_priest',$this->uri->segment(3)); 
				}
				if(isset($_GET['bookingType'])){
					$this->db->where('puja_type',$_GET['bookingType']); 
					$fromdate = date('Ymd',strtotime($_GET['fromdate']));
					$todate = date('Ymd',strtotime($_GET['todate']));
						$this->db->where('sel_date>=',$fromdate); 
						$this->db->where('sel_date<=',$todate); 
				}
			$this->db->order_by('id','DESC');
			$data['bookinglist'] = $this->db->get();

		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/view-booking-as-user');
		$this->load->view('templates/footer');
}

public function ViewBookingInGraph()
{
		$action =  $this->uri->segment(3);
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		 
		 if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

if (isset($_GET['action'])) {
	if ($_GET['action']=='submit') {
			$stringurl ='';
			if (isset($_GET['bookingType'])) {
				$stringurl ='?bookingType='.$_GET['bookingType'].'&fromdate='.$_GET['fromdate'].'&todate='.$_GET['todate'];
			}
			$time_slot = $this->input->post('time_slot');
			print_r($time_slot);
			$countdata = count($time_slot)-1;

				while ($countdata>=0) {
					$time_id = $time_slot[$countdata];
						$data = array(  
							'block_date' => $this->input->post('block_date'),
							'time_slot' => $time_id,
							'leave_purpose' => $this->input->post('leave_purpose'),
							'dataPuja' => $this->input->post('dataPuja'),
							'sel_priest' => $this->input->post('sel_priest'),
							'block_date_create' => date('d-M-Y'),
							'block_time_create' => date('H:i:s A')
						);
					$this ->db->insert('booking_slot_block',$data);
					$countdata--;
				}
				$this->session->set_flashdata('success', '<span class="text-success">Selected slot blocked successfully.</span>');
				redirect('pages/ViewBookingInGraph/'.$this->uri->segment(3).$stringurl);
	}
}

			$this->db->select('*');
			$this->db->from('adminlogin');
			$this->db->where('id',$this->uri->segment(3)); 
			$data['userDetails'] = $this->db->get()->row();

			// $this->db->select('*');
			// $this->db->from('slnt_booking_slot');
			// $this->db->where('sel_priest',$this->uri->segment(3)); 
			// $this->db->group_by('puja_id');
			// $data['slot_of_booking'] = $this->db->get()->result();


				$this->db->select('*');
				$this->db->from('slnt_booking_slot');
				if ($this->uri->segment(3)!='') {
					$this->db->where('sel_priest',$this->uri->segment(3)); 
				}
				if(isset($_GET['fromdate'])){
					$this->db->where('puja_type',$_GET['bookingType']); 
					$fromdate = date('Ymd',strtotime($_GET['fromdate']));
					$todate = date('Ymd',strtotime($_GET['todate']));


					$data['u_from_date']=$fromdate;
					$data['u_todate']=$todate;

						$this->db->where('sel_date>=',$fromdate); 
						$this->db->where('sel_date<=',$todate); 
				} else {
					$this->db->where('puja_type','puja'); 
					$fromdate = date('Ymd');
					$todate = date('Ymd', strtotime(date('Y-m-d')."+7 day"));
					$data['u_from_date']=$fromdate;
					$data['u_todate']=$todate;


					
					$this->db->where('sel_date>=',$fromdate); 
					$this->db->where('sel_date<=',$todate); 
				}





			$this->db->order_by('id','DESC');
			$this->db->group_by('puja_id');
			$data['slot_of_booking'] = $this->db->get()->result();



		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/view-booking-in-graph');
		$this->load->view('templates/footer');
}


public function adminblogs(){
		$action =  $this->uri->segment(3);
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		 
		 if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}


	$this->db->select('*');
	$this->db->from('blogcategory');
	$this->db->order_by('name','ASC');
	$data['result'] = $this->db->get();

			if ($action=='edit') {
				$this->db->select('*');
				$this->db->from('adminblogs');
				$where2 = array('bid' => $this->uri->segment(4));
				$this->db->where($where2);
        		$data['query'] = $this->db->get()->result();
			}



			
			if ($action=='update') {
				$config['upload_path']          = './../assets/blogs/';
		        $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
				if (! $this->upload->do_upload('gallery'))
                { 
				$data['title']=ucfirst('Admin Panel banner');
				$datan = array('post_by'=>  $this->input->post('post_by'), 'blog_url'=>  $this->input->post('blog_url'), 'metdescription'=>  $this->input->post('metdescription'), 'category'=>  $this->input->post('category'),'metkeywords'=>  $this->input->post('metkeywords'),'metatitle'=>  $this->input->post('metatitle'),'title'=>  $this->input->post('title'), 'postdate'=>date("d M, Y"), 'url'=>  $this->input->post('url'), 'addin'=>  $this->input->post('addin'));
				$where = array('bid' => $this->uri->segment(4));
				$this->db->where($where);
                $this ->db->update('adminblogs',$datan);
                redirect("pages/adminblogs/");  
            } else {
           		$urs=base_url().'./../assets/blogs/';
               	$data['title']=ucfirst('Admin Panel banner');
               	$x=$this->upload->data();   		
                $datan = array('post_by'=>  $this->input->post('post_by'), 'blog_url'=>  $this->input->post('blog_url'), 'metdescription'=>  $this->input->post('metdescription'), 'category'=>  $this->input->post('category'),'metkeywords'=>  $this->input->post('metkeywords'),'metatitle'=>  $this->input->post('metatitle'),'image' => $x['file_name'], 'postdate'=>date("d M, Y"), 'title'=>  $this->input->post('title'), 'url'=>  $this->input->post('url'), 'addin'=>  $this->input->post('addin'));
				$where = array('bid' => $this->uri->segment(4));
				$this->db->where($where);
                $this ->db->update('adminblogs',$datan);
                redirect("pages/adminblogs/");  
            }
}
if ($action=='insert') {
	$config['upload_path']          = './../assets/blogs/';
	$config['allowed_types']        = 'gif|jpg|png';
   	$config['max_size'] = 1024 * 8;
	$config['encrypt_name'] = TRUE;
	$this->load->library('upload', $config);
	if (! $this->upload->do_upload('gallery'))
	{
		$error = array('error' => $this->upload->display_errors());    
		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $error);
		$this->load->view('adminblogs');
		$this->load->view('templates/footer');
	}
	else
	{

		//date("D M j G:i:s T Y");
		$urs=base_url().'./../assets/blogs/';
		$data['title']=ucfirst('Admin Panel banner');
		$x=$this->upload->data();   		
		$datan = array('post_by'=>  $this->input->post('post_by'), 'blog_url'=>  $this->input->post('blog_url'), 'metdescription'=>  $this->input->post('metdescription'), 'category'=>  $this->input->post('category'),'metkeywords'=>  $this->input->post('metkeywords'),'metatitle'=>  $this->input->post('metatitle'), 'image' => $x['file_name'],'postdate'=>date("d M, Y"),'title'=>  $this->input->post('title'), 'url'=>  $this->input->post('url'), 'addin'=>  $this->input->post('addin'));
		$this ->db->insert('adminblogs',$datan);
		$this->session->set_flashdata('success', '<div class="alert alert-success">Blog save successfully</div>');
		redirect("pages/adminblogs/");  
	}
	} else {
		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('adminblogs');
		$this->load->view('templates/footer');
	}
}



public function adminblogslist(){
		$action =  $this->uri->segment(3);
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}
		$this->db->select('*');
		$this->db->from('adminblogs');
		$data['result'] = $this->db->get();
		if ($action=='delete') {
			$this->db->select('*');
			$this->db->from('adminblogs');
			$where2 = array('bid' => $this->uri->segment(4));
			$this->db->where($where2);
	   		$query2 = $this->db->get();
	   		$deletepic=$query2->row();
	   				@unlink('../assets/blogs/'.$deletepic->image);
					$where = array('bid' => $this->uri->segment(4));
					$this->db->where($where);
					$this->db->delete('adminblogs');
				redirect("pages/adminblogslist/");
		}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('adminblogslist');
		$this->load->view('templates/footer');
}

 

public function manage_users()
{
	date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($_COOKIE["login_rol"]==0) {
			redirect('pages/logout');
		}

		$this->db->select('*');
		$this->db->from('adminlogin');
		$this->db->where('rol',0);
		$this->db->order_by('id','DESC');
        $data['all_members'] = $this->db->get()->result();

        $this->db->select('*');
		$this->db->from('adminlogin');
		$this->db->order_by('id','DESC');
		$this->db->limit(1);
        $data['all_members2'] = $this->db->get()->row();


if ($this->uri->segment(3)=='update') {
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('collegecode', 'User Login Id', 'required');
				$this->form_validation->set_rules('mobleno', 'Mobile number', 'required');
				$this->form_validation->set_rules('name', 'name', 'required');
				$this->form_validation->set_rules('status', 'Status', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {

						$config['upload_path']          = './../assets/setting/';
		                $config['allowed_types']        = 'jpg|png';
		            	$config['max_size'] = 1024 * 2;
		        		$config['encrypt_name'] = TRUE;
		        		$this->load->library('upload', $config);
		        		 if (!$this->upload->do_upload('profilepic'))
		                {
		                		if ($this->input->post('adminpassword')=='') {
	$data = array(  
						            'adminusername' => md5($this->input->post('collegecode')),
						            'name' => $this->input->post('name'),
						            'mobleno' => $this->input->post('mobleno'),
						            'status' => $this->input->post('status'),
						            'email' => $this->input->post('email'),
						             
						); 
} else {
	$data = array(  
						            'adminusername' => md5($this->input->post('collegecode')),
						            'adminpassword' => md5($this->input->post('adminpassword')),
						            'name' => $this->input->post('name'),
						            'mobleno' => $this->input->post('mobleno'),
						            'status' => $this->input->post('status'),
						            'email' => $this->input->post('email'),
						            'b_password' => $this->input->post('adminpassword')
						); 
}
		                		
					$this->db->where('collegecode', $this->input->post('collegecode')); 
					$this->db->update('adminlogin',$data);
					$this->session->set_flashdata('success', 'Update Successfully.');
					redirect('pages/manage_users');

		                } else {
		                		 
		                		$x=$this->upload->data();
		                		$profilepic = $x['file_name'];

if ($this->input->post('adminpassword')=='') {
	$data = array(  
						            'adminusername' => md5($this->input->post('collegecode')),
						            'name' => $this->input->post('name'),
						            'mobleno' => $this->input->post('mobleno'),
						            'status' => $this->input->post('status'),
						            'email' => $this->input->post('email'),
						            'profilepic' => $profilepic
						); 
} else {
	$data = array(  
						            'adminusername' => md5($this->input->post('collegecode')),
						            'adminpassword' => md5($this->input->post('adminpassword')),
						            'name' => $this->input->post('name'),
						            'mobleno' => $this->input->post('mobleno'),
						            'status' => $this->input->post('status'),
						            'email' => $this->input->post('email'),
						            'profilepic' => $profilepic,
						            'b_password' => $this->input->post('adminpassword')
						); 
}
		                		
					$this->db->where('collegecode', $this->input->post('collegecode')); 
					$this->db->update('adminlogin',$data);
					$this->session->set_flashdata('success', 'Update Successfully.');
					redirect('pages/manage_users');



		                }	
				}
}


        if ($this->uri->segment(3)=='insert') {
        	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('collegecode', 'User Login Id', 'required');
				$this->form_validation->set_rules('mobleno', 'Mobile number', 'required');
				$this->form_validation->set_rules('name', 'name', 'required');
				$this->form_validation->set_rules('adminpassword', 'password', 'required');
				$this->form_validation->set_rules('status', 'Status', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'jpg|png';
            	$config['max_size'] = 1024 * 2;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('profilepic'))
                {
                		$profilepic ='';

                } else {
                		 
                		$x=$this->upload->data();
                		$profilepic = $x['file_name'];

                }	



					$data = array(  
						            'adminusername' => md5($this->input->post('collegecode')),
						            'adminpassword' => md5($this->input->post('adminpassword')),
						            'rol' => 0,
						            'name' => $this->input->post('name'),
						            'mobleno' => $this->input->post('mobleno'),
						            'status' => $this->input->post('status'),
						            'collegecode' => $this->input->post('collegecode'),
						            'email' => $this->input->post('email'),
						            'profilepic' => $profilepic,
						            'b_password' => $this->input->post('adminpassword')
						);  
					$this->db->insert('adminlogin',$data);
					$this->session->set_flashdata('success', 'Save Successfully.');
					redirect('pages/manage_users');

				}
        }
		$data['title']=ucfirst('Welcome :: Admin');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('manage_users');
		$this->load->view('templates/footer');
}

public function All_Booking()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

			if (isset($_GET['action'])) {
				if ($_GET['action']=='submit') {
						$data = array(  
						    'sel_priest' => $this->input->post('sel_priest')
						); 
		                		
					$this->db->where('id', $this->input->post('sel_booking_id')); 
					$this->db->update('slnt_booking_slot',$data);
					$this->session->set_flashdata('success', 'Priest assigned successfully');
					$stringurl ='';
						if (isset($_GET['bookingType'])) {
							$stringurl ='?bookingType='.$_GET['bookingType'].'&fromdate='.$_GET['fromdate'].'&todate='.$_GET['todate'];
						}
					redirect('pages/All_Booking'.$stringurl);

				}
			}
            
            
            if($this->uri->segment(4)=='collect'){
                    $config['upload_path'] = './../assets/membership/';
                    $config['allowed_types'] = 'jpg|png|jpeg|JPG|PNG|JPEG|PDF|pdf';     
                    $config['max_size'] = 1024 * 8;
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('transection_slip'))
                    {
                        $x=$this->upload->data();
                        $transection_slip = $x['file_name']; 
                        
                        
                        
                        $collectedamount = $this->input->post('collectedamount');
                        $transid = $this->input->post('transid');
                        $trans_status = $this->input->post('trans_status');
                        $notes = $this->input->post('notes');
                        $book_pooja=$this->uri->segment(3);
                        if($trans_status==1){
                            $statussss=1;
                           $due_amt=0.00; 
                           $amt_pay=$this->input->post('collectedamount');
                        } else {
                            $statussss=0;
                            $due_amt=$this->input->post('collectedamount');
                            $amt_pay=0.00;
                        }
                
                $this->db->select('*');
				$this->db->from('slnt_payment_summery');
				$this->db->where('booking_id',$this->uri->segment(3)); 
				$this->db->order_by('id','DESC');
				$this->db->limit(1);
				$lastsummerybooking = $this->db->get()->row();
				   //echo count($this->uri->segment(3));
				    $lastid=$this->uri->segment(3);
				   	$ncount=strlen($lastid);
					if ($ncount<=6) {
						 	$randpassword=sprintf('%05d', $lastid);
					} else {
					 	$randpassword=$lastid;
					}   
				  		$booking_id='SPSLNT'.date('Ymd').$randpassword;
				        $data = array(  
						    'booking_id' => $booking_id,
						    'status' => $statussss
						); 
					$this->db->where('id',$this->uri->segment(3)); 
					$this->db->update('slnt_booking_slot',$data);
					
                 $datan = array(
                    'payment_id'=> $transid,
                    'total'=>$lastsummerybooking->total,
                    'pay_percent'=> 100,
                    'amt_pay'=> $amt_pay,
                    'due_amt'=> $due_amt,
                    'booking_id'=> $this->uri->segment(3),
                    'paydate'=> date('d-m-Y'),
                    'paytime'=> date('H:i:s A'),
                    'transection_slip'=> $transection_slip,
                    'paystatus'=> $trans_status,
                    'notes'=> $notes,
                    'paywith'=> $_COOKIE["login_by_sohan"]
                );
                
                $this->db->insert('slnt_payment_summery',$datan);
                
                $this->db->select('*');
				$this->db->from('slnt_payment_summery');
				$this->db->where('booking_id',$this->uri->segment(3)); 
				$this->db->order_by('id','DESC');
				$this->db->limit(1);
				$la = $this->db->get()->row();
				
                redirect('pages/emailNotificationOfPooja/'.$this->uri->segment(3).'/'.$transid.'/'.$la->id);
                
                        
                    } else {
                         $data['file_error'] = $this->upload->display_errors();
                    }
               
                
            }

		if ($this->uri->segment(3)!='') {
			 $this->db->select('*');
				$this->db->from('slnt_booking_slot');
				$this->db->where('id',$this->uri->segment(3)); 
				$this->db->order_by('id','DESC');
				$data['pujabo'] = $this->db->get();
			$data['title']=ucfirst('Welcome :: Admin');
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('pages/booking-details');
			$this->load->view('templates/footer');
		} else {
				$this->db->select('*');
				$this->db->from('slnt_booking_slot');
				if(isset($_GET['bookingType'])){
					$this->db->where('puja_type',$_GET['bookingType']); 
					$fromdate = date('Ymd',strtotime($_GET['fromdate']));
					$todate = date('Ymd',strtotime($_GET['todate']));
						$this->db->where('sel_date>=',$fromdate); 
						$this->db->where('sel_date<=',$todate); 
				} 
			$this->db->order_by('id','DESC');
			$data['bookinglist'] = $this->db->get();
			$data['title']=ucfirst('Welcome :: Admin');
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('pages/all-booking-list');
			$this->load->view('templates/footer');
		}
}

public function emailNotificationOfPooja()
{
    
                                $segem3 =  $this->uri->segment(5);
	                            $segem4 =  $this->uri->segment(4);
	    
	    
                	        $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where(array('id'=>$this->uri->segment(5),'payment_id'=>$this->uri->segment(4)));
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $booking_details = $this->db->get()->row();
                            
                            $this->db->select('*');
                            $this->db->from('slnt_booking_slot');
                            $this->db->where('id',$booking_details->booking_id); 
                            $this->db->order_by('id','DESC');
                            $pujabo = $this->db->get();
                            $pujabooking = $pujabo->row();
                            
                            
                            
                            $totalamt = 0.00;
                            $this->db->select('*');
                            $this->db->from('slnt_puja_time');
                            $this->db->where('id',$pujabooking->time_id);
                            $this->db->where('pooja_time',$pujabooking->puja_id);
                            $bookingTime = $this->db->get();
                            $actbooktime = $bookingTime->row();
                               
                            $this->db->select('*');
                            $this->db->from('slnt_puja');
                            $this->db->where('id',$pujabooking->puja_id);
                            $pujaList = $this->db->get();
                            $actpujalist = $pujaList->row();
                                
                            $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where('booking_id',$pujabooking->id);
                            $this->db->where('paystatus',1);
                            $this->db->order_by('id','ASC');
                            $paymentdetails = $this->db->get();
                                   
                             
                            $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where('booking_id',$pujabooking->id);
                            $this->db->where('paystatus',1);
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $paymentd = $this->db->get()->row();
                            
                                    $data['poojaBookingSlots']=$pujabooking; // Pooja Nooking Slots table
                                    $data['poojaTime']=$actbooktime;   // poojaTiming Pooja 
                                    $data['seletedPooja']=$actpujalist;   // poojaTiming Pooja 
                                    $data['poojaSummeryAsc']=$paymentdetails;   //  Pooja Summery ASC
                                    $data['poojaSummerydesc']=$paymentd;   // poojaTiming Pooja 
	    
                            	$this->db->select('*');
                    			$this->db->from('configuration_general');
                    			$this->db->where('id',1);
                    			$this->db->order_by('id','DESC');
                    	        $webconfig = $this->db->get()->row();
                           		$fromemail=$webconfig->organization_email;
       		
       		
       		                    $this->db->select('*');
                    			$this->db->from('slnt_member');
                    			$this->db->where(array('user_id'=>$pujabooking->user_id));
                    			$userDetails=$this->db->get()->row();
                    			$toemail = $userDetails->email;
                			
                			    $this->db->select('*');
                                $this->db->from('adminlogin');
                                $this->db->where('id',$pujabooking->sel_priest);
                                $pujaLisprt = $this->db->get();
                                $prestl = $pujaLisprt->row();
                                $count=0;
                                
                               
                                if($count==0){
                                     $subject ='Pooja Booking Notification';
            					    $mesg = $this->load->view('pages/mail/userpoojabooking',$data,true);
                					$config=array(
                						'charset'=>'utf-8',
                						'wordwrap'=> TRUE,
                						'mailtype' => 'html'
                					);
                                	$this->email->initialize($config);

                					$this->email->to($toemail);
                					$this->email->cc($fromemail);
                					$this->email->bcc($prestl->email);
                					$this->email->from($fromemail, $webconfig->site_name);
                					$this->email->subject($subject);
                					$this->email->message($mesg);
                					$mail = $this->email->send(); 
                                    $count++;
                                }
                                
                                if($pujabooking->catering==0){
                                   	$this->db->select('*');
                                    $this->db->from('adminlogin');
                                    $this->db->where('rol',4);
                                    $this->db->where('status',1);
                                    $pujaLisprtcook = $this->db->get();
                                    $prestlcook = $pujaLisprtcook->result();
                                    foreach($prestlcook as $sndml){
                                        $subject ='Pooja Booking Notification';
                					    $mesg = $this->load->view('pages/mail/userpoojabookingcookingdetails',$data,true);
                    					$config=array(
                    						'charset'=>'utf-8',
                    						'wordwrap'=> TRUE,
                    						'mailtype' => 'html'
                    					);
                                    	$this->email->initialize($config);
                    					$this->email->to($sndml->email);
                    					$this->email->from($fromemail, $webconfig->site_name);
                    					$this->email->subject($subject);
                    					$this->email->message($mesg);
                    					$mail = $this->email->send(); 
                                    } 
                                }
                			
redirect('pages/All_Booking/'.$this->uri->segment(3).'/'.$this->uri->segment(4));
    
}


public function configuration_general()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}


$replyt=1;
$this->db->select('*');
$this->db->from('configuration_general');
$this->db->where('id', $replyt);
$set = $this->db->get();

$data['configuration_details'] = $set->row();


$datax = $set->row();

if($this->uri->segment(3)=='save'){
				 
				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png|PNG|JPG|JPEG|jpeg';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		$company_logo =$datax->company_logo;

                } else {
                		unlink('./../assets/setting/'.$datax->company_logo);
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                }	 
					
					$data = array(  
						            'site_name' => $this->input->post('site_name'),
						            'organization_name' => $this->input->post('organization_name'),
						            'domain_name' => $this->input->post('domain_name'),
						            'organization_email' => $this->input->post('organization_email'),
						            'meta_title' => $this->input->post('meta_title'),
						            'meta_keyword' => $this->input->post('meta_keyword'),
						            'meta_content' => $this->input->post('meta_content'),
						            'address' => $this->input->post('address'),
						            'primary_mobile' => $this->input->post('primary_mobile'),
						            'opening_days' => $this->input->post('opening_days'),
						            'company_logo' => $company_logo,
						            'other_mobile' => $this->input->post('other_mobile'),
						            'other_email' => $this->input->post('other_email'),
						            'facebook' => $this->input->post('facebook'),
						            'twitter' => $this->input->post('twitter'),
						            'linkedin' => $this->input->post('linkedin'),
						            'youtube' => $this->input->post('youtube'),
						            'pinterest' => $this->input->post('pinterest'),
						            'powerd_by' => $this->input->post('powerd_by'),
						            'powerd_by_link' => $this->input->post('powerd_by_link'),
						            'signupbonus' => $this->input->post('signupbonus'),
						            'reffererrern' => $this->input->post('reffererrern'),
						            'lastupdate' => date('d-m-Y'),
						            'cashbackpercent' => $this->input->post('cashbackpercent'),
						            'instagram' => $this->input->post('instagram')
						);  
					$replyto=1;
					$this->db->where('id', $replyto);
					$this->db->update('configuration_general',$data);
					$this->session->set_flashdata('success', 'Record Update Successfully.');
					redirect('pages/configuration_general');

				 
}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('configuration_general');
		$this->load->view('templates/footer');


}


public function more_images()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

$this->db->select('*');
$this->db->from('tbl_more_images');
$this->db->where('type',$_GET['field']);
$set = $this->db->get();
$data['website_image'] = $set->result();

if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('tbl_more_images');
	$this->db->where('id',$_GET['editid']);
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}

if ($this->uri->segment(3)=='delete') {
	

	$this->db->select('*');
	$this->db->from('tbl_more_images');
	$this->db->where('id',$_GET['editid']);
	$set = $this->db->get();
	$datadd= $set->row();
	unlink('./../assets/events/'.$datadd->image);
	$this->db->where('id',$_GET['editid']);
	$this->db->delete('tbl_more_images');
	$this->session->set_flashdata('success', 'Image deleted successfully.');
	 redirect('pages/more_images?field='.$_GET['field']); 

}
if ($this->uri->segment(4)=='update') {
				$config['upload_path']          = './../assets/events/';
                $config['allowed_types']        = 'gif|jpg|png|GIF|JPG|PNG|JPEG|jpeg';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		
                	$data = array(  
						  'type' => $_GET['field'],
						'title' => $this->input->post('title')
					);  
                	$this->db->where('id',$_GET['editid']);
					$this->db->update('tbl_more_images',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					 redirect('pages/more_images/edit/?field='.$_GET['field'].'&editid='.$_GET['editid']); 
                } else {
                		
                		unlink('./../assets/events/'.$this->input->post('lastimage'));
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						            'type' => $_GET['field'],
						            'title' => $this->input->post('title'),
						            'image' => $company_logo
						);  
                	$this->db->where('id',$_GET['editid']);	
					$this->db->update('tbl_more_images',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					 redirect('pages/more_images/edit/?field='.$_GET['field'].'&editid='.$_GET['editid']); 

                }	 
					
}


if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('image_category', 'Image Category', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {
				$config['upload_path']          = './../assets/events/';
                $config['allowed_types']        = 'gif|jpg|png|GIF|JPG|PNG|JPEG|jpeg';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                	$this->session->set_flashdata("image_error","Please select image in correct format.");
                    redirect('pages/more_images?field='.$_GET['field']); 
                } else {
                		
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						    'type' => $_GET['field'],
						    'title' => $this->input->post('title'),
						    'image' => $company_logo
						);  
					
					$this->db->insert('tbl_more_images',$data);
					$this->session->set_flashdata('success', 'Image add Successfully.');
					 redirect('pages/more_images?field='.$_GET['field']); 

                }	 
					


		}

}



		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('more_images');
		$this->load->view('templates/footer');
}




public function web_images()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

$this->db->select('*');
$this->db->from('tbl_web_images');
$set = $this->db->get();
$data['website_image'] = $set->result();

if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('tbl_web_images');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}

if ($this->uri->segment(3)=='delete') {
	

	$this->db->select('*');
	$this->db->from('tbl_web_images');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$datadd= $set->row();
	unlink('./../assets/setting/'.$datadd->image);
	$this->db->where('id',$this->uri->segment(4));
	$this->db->delete('tbl_web_images');
	$this->session->set_flashdata('success', 'Image deleted successfully.');
	redirect('pages/web_images');

}
if ($this->uri->segment(3)=='update') {
	

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		
                	$data = array(  
						            'type' => $this->input->post('image_category'),
						            'title' => $this->input->post('title')
					);  
                	$this->db->where('id',$this->uri->segment(4));
					$this->db->update('tbl_web_images',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/web_images'); 
                } else {
                		
                		unlink('./../assets/setting/'.$this->input->post('lastimage'));
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						            'type' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'image' => $company_logo
						);  
                	$this->db->where('id',$this->uri->segment(4));	
					$this->db->update('tbl_web_images',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/web_images'); 

                }	 
					
}


if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('image_category', 'Image Category', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                		
                	$this->session->set_flashdata("image_error","Please select image in correct format.");
                    redirect('pages/web_images'); 
                } else {
                		
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$data = array(  
						            'type' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'image' => $company_logo
						);  
					
					$this->db->insert('tbl_web_images',$data);
					$this->session->set_flashdata('success', 'Image add Successfully.');
					 redirect('pages/web_images'); 

                }	 
					


		}

}



		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('web_images');
		$this->load->view('templates/footer');
}


public function imageGalleryCategory()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}
			$this->db->select('*');
			$this->db->from('slnt_gallery_categories');
			$setc = $this->db->get();
			$data['categories'] = $setc->result();
if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('slnt_gallery_categories');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}


if ($this->uri->segment(3)=='delete') {
	$this->db->where('id',$this->uri->segment(4));
	$this->db->delete('slnt_gallery_categories');
	$this->session->set_flashdata('success', 'Category deleted successfully.');
	redirect('pages/imageGalleryCategory');

}
if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->form_validation->set_rules('title', 'Category title', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {
			$data = array(  
				'name' => $this->input->post('title')
			);  
			$this->db->insert('slnt_gallery_categories',$data);
			$this->session->set_flashdata('success', 'Category add Successfully.');
			redirect('pages/imageGalleryCategory');
		}

}
if ($this->uri->segment(3)=='update') {
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		$this->form_validation->set_rules('title', 'Category title', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {
			$data = array(  
				'name' => $this->input->post('title')
			);  
			$this->db->where('id',$this->uri->segment(4));
			$this->db->update('slnt_gallery_categories',$data);
			$this->session->set_flashdata('success', 'Category update successfully.');
			redirect('pages/imageGalleryCategory'); 
		}
}

	$data['title']=ucfirst('Welcome :: Manage Website Images');
	$this->load->view('templates/header', $data);
	$this->load->view('templates/sidebar');
	$this->load->view('pages/gallery-category');
	$this->load->view('templates/footer');		
}
 


public function imageGallery()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

$this->db->select('*');
$this->db->from('slnt_img_gallery');
$this->db->order_by('id','DESC');
$set = $this->db->get();
$data['website_image'] = $set->result();


$this->db->select('*');
$this->db->from('slnt_gallery_categories');
$setc = $this->db->get();
$data['categories'] = $setc->result();

if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('slnt_img_gallery');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}

if ($this->uri->segment(3)=='delete') {
	$this->db->select('*');
	$this->db->from('slnt_img_gallery');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$datadd= $set->row();
	@unlink('./../assets/setting/'.$datadd->image);
	$this->db->where('id',$this->uri->segment(4));
	$this->db->delete('slnt_img_gallery');
	$this->session->set_flashdata('success', 'Image deleted successfully.');
	redirect('pages/imageGallery');

}
if ($this->uri->segment(3)=='update') {
	

				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png|GIF|PNG|JPG|PDF|pdf';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                	if ($this->input->post('uploadtype')=='video') {
                		$data = array(  
						    'type' => $this->input->post('image_category'),
						    'title' => $this->input->post('title'),
						    'image' =>$this->input->post('youtubevideo'),
						    'uploadtype' => $this->input->post('uploadtype'),
						    'extension' => 'video'
						);  
                	} else {
                		$data = array(  
							'type' => $this->input->post('image_category'),
							'title' => $this->input->post('title'),
							'uploadtype' => $this->input->post('uploadtype'),
						);  	
                	}
                	
                	$this->db->where('id',$this->uri->segment(4));
					$this->db->update('slnt_img_gallery',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/imageGallery'); 
                } else {
                		
                		unlink('./../assets/setting/'.$this->input->post('lastimage'));
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];

                		$extension=pathinfo($company_logo,PATHINFO_EXTENSION);
                		$data = array(  
						    'type' => $this->input->post('image_category'),
						    'title' => $this->input->post('title'),
						    'image' => $company_logo,
						    'uploadtype' => $this->input->post('uploadtype'),
						    'extension' => $extension
						);  
                	$this->db->where('id',$this->uri->segment(4));	
					$this->db->update('slnt_img_gallery',$data);
					$this->session->set_flashdata('success', 'Image update successfully.');
					redirect('pages/imageGallery'); 

                }	 
					
}


if ($this->uri->segment(3)=='saveCategory') {
	$data = array(  
		'name' => $this->input->post('category')
	);  
	$this->db->insert('slnt_gallery_categories',$data);
	$this->session->set_flashdata('success', '<span class="text-success">Category add successfully.</span>');
	redirect('pages/imageGallery'); 
}




if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('image_category', 'Image Category', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
					
		} else {
			if ($this->input->post('uploadtype')=='video') {
						$data = array(  
						    'type' => $this->input->post('image_category'),
						    'title' => $this->input->post('title'),
						    'image' =>$this->input->post('youtubevideo'),
						    'uploadtype' => $this->input->post('uploadtype'),
						    'extension' => 'video'
						);  
					$this->db->insert('slnt_img_gallery',$data);
					$this->session->set_flashdata('success', 'Image add Successfully.');
					redirect('pages/imageGallery');
			} else if ($this->input->post('uploadtype')=='image') {
				$config['upload_path']          = './../assets/setting/';
                $config['allowed_types']        = 'gif|jpg|png|GIF|PNG|JPG|PDF|pdf';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('company_logo'))
                {
                	$this->session->set_flashdata("image_error","Please select image in correct format.");
                    redirect('pages/imageGallery'); 
                } else {
                		
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];
                		$extension=pathinfo($company_logo,PATHINFO_EXTENSION);
                		$data = array(  
						    'type' => $this->input->post('image_category'),
						    'title' => $this->input->post('title'),
						    'image' => $company_logo,
						    'uploadtype' => $this->input->post('uploadtype'),
						    'extension' => $extension
						);  
					$this->db->insert('slnt_img_gallery',$data);
					$this->session->set_flashdata('success', 'Image add Successfully.');
					redirect('pages/imageGallery'); 
                }	 
			}
		}

}



		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('image-gallery');
		$this->load->view('templates/footer');
}



public function TrendingEvents()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}


$this->db->select('*');
$this->db->from('add_products');
$this->db->order_by('id','ASC');
$data['all_products']  = $this->db->get();



$this->db->select('*');
$this->db->from('highlighted2');
$set = $this->db->get();
$data['website_image'] = $set->result();

if ($this->uri->segment(3)=='edit') {
	$this->db->select('*');
	$this->db->from('highlighted2');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$data['website_edit_image'] = $set->row();
}

if ($this->uri->segment(3)=='delete') {
	

	$this->db->select('*');
	$this->db->from('highlighted2');
	$this->db->where('id',$this->uri->segment(4));
	$set = $this->db->get();
	$datadd= $set->row();
	 
	$this->db->where('id',$this->uri->segment(4));
	$this->db->delete('highlighted2');
	$this->session->set_flashdata('success', 'Image deleted successfully.');
	redirect('pages/TrendingEvents');

}
if ($this->uri->segment(3)=='update') {
	

				 
                		
$this->db->select('*');
$this->db->from('add_products');
$this->db->where('id',$this->input->post('image_category'));
$ll_products  = $this->db->get()->row();
                		$data = array(  
						            'image_category' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'content' => $this->input->post('content'),
						            'bgcolor' => $this->input->post('bgcolor'),
						            'content'=>$ll_products->category
						);   
                	$this->db->where('id',$this->uri->segment(4));
					$this->db->update('highlighted2',$data);
					$this->session->set_flashdata('success', 'Data update successfully.');
					redirect('pages/TrendingEvents'); 
            
					
}


if ($this->uri->segment(3)=='add') {
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('image_category', 'Category', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
					
		} else {


				$this->db->select('*');
				$this->db->from('add_products');
				$this->db->where('id',$this->input->post('image_category'));
				$ll_products  = $this->db->get()->row();





                		$data = array(  
						            'image_category' => $this->input->post('image_category'),
						            'title' => $this->input->post('title'),
						            'content' => $this->input->post('content'),
						            'bgcolor' => $this->input->post('bgcolor'),
						            'content'=>$ll_products->category
						);  
					
					$this->db->insert('highlighted2',$data);
					$this->session->set_flashdata('success', 'Data save Successfully.');
					 redirect('pages/TrendingEvents'); 
		}

}
		$data['title']=ucfirst('Welcome :: Manage Website Images');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('highlighted2');
		$this->load->view('templates/footer');
}


 

public function manage_pages($value='')
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

if ($this->uri->segment(3)=='savedata') {
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>$this->input->post('pagename'));
        $this->db->where($s);
        $query=$this->db->get();

         

        if ($query->num_rows()>0) {
        	$data = array(
			'pagecontent' => $this->input->post('content')
		);
        	$this->db->where('pagid',$this->input->post('pagename'));
        	$this->db->update('tbl_pages',$data);
        	$this->session->set_flashdata('success', 'Record Update Successfully.');
        } else {

        	$data = array(  
			'pagid' => $this->input->post('pagename'),
			'pagecontent' => $this->input->post('content')
			);
        	$this->db->insert('tbl_pages',$data);
        	$this->session->set_flashdata('success', 'Record insert Successfully.');
        }

       redirect('pages/manage_pages/');
}


		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('manage_pages');
		$this->load->view('templates/footer');


		
}





public function configuration_weblogos()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}

		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}
		$replyt=1;
$this->db->select('*');
$this->db->from('tbl_email_setting');
$this->db->where('id', $replyt);
$data['email_setting'] = $this->db->get()->row();;




if($this->uri->segment(3)=='save'){
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('host', 'Host Name', 'required');
				$this->form_validation->set_rules('port', 'Port', 'required');
				$this->form_validation->set_rules('username', 'User Name', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {
					 
					$data = array(  
						            'host' => $this->input->post('host'),
						            'port' => $this->input->post('port'),
						            'username' => $this->input->post('username'),
						            'password' => $this->input->post('password')
						);  
					$replyto=1;
					$this->db->where('id', $replyto);
					$this->db->update('tbl_email_setting',$data);
					$this->session->set_flashdata('success', 'Record Update Successfully.');
					redirect('pages/email_settings');

				}
}

		$data['title']=ucfirst('Welcome :: ');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('configuration_weblogos');
		$this->load->view('templates/footer');


}



public function change_password()
	{	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		  if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

if ($this->uri->segment(3)=='confirm') {
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
 
$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[25]|matches[confirmpassword]');

	$this->form_validation->set_rules('confirmpassword', 'Confirm  Password', 'trim|required');
				if ($this->form_validation->run() == FALSE) {
					 
				} else {

					$data = array( 
						'adminpassword' => md5($this->input->post('password'))
					);  
					 
					$this->db->where('collegecode', $_COOKIE["login_by_sohan"]);
					$this->db->update('adminlogin',$data);
					$this->session->set_flashdata('profile_update_success', 'Password update Successfully');
					redirect('pages/change_password');
				}
}


		$data['title']=ucfirst('Admin : Dashboard  Manage Websites');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('change_password');
		$this->load->view('templates/footer');
		 
}	











public function dashboard(){
	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
 
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

			  



		//$_SESSION['wssinfotech']['sohan']=$_SESSION['wssinfotech']['sohan']; 
		$data['title']=ucfirst('Admin : Dashboard  Manage Websites');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
}





public function BlockSlot()
{

	    date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(4)=='delete') {
			$this->db->where('id',$this->uri->segment(5));
			$this->db->delete('pooja_block');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/BlockSlot/".$this->uri->segment(3)); 
		}

			$this->db->select('*');
			$this->db->from('slnt_puja');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_data'] = $this->db->get()->row();


			$this->db->select('*');
			$this->db->from('pooja_block');
			$this->db->where('puja_id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['block_time_slot'] = $this->db->get()->result();

		if ($this->uri->segment(4)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'blockdate', 'Date',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

// 			$this->form_validation->set_rules(
// 				'reason', 'reason',
// 	        	'required',
// 	        	array(
// 		        	'required'     => 'This field is required.'
// 		        )
// 			);
	 		if ($this->form_validation->run() == FALSE) {
				
			} else {
			    
			     $block_time = count($this->input->post('block_time'));
			        foreach($this->input->post('block_time') as $x => $val){
			            $datan = array(
    						'puja_id'=>  $this->uri->segment(3),
    						'blockdate'=>  $this->input->post('blockdate'),
    						'block_time'=>  $val,
    						'sel_fill_date'=>  date('Ymd',strtotime($this->input->post('blockdate'))), 
    						'leave_purpose'=>  $this->input->post('leave_purpose'), 
    					);
    					$this ->db->insert('pooja_block',$datan);
			        }
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/BlockSlot/".$this->uri->segment(3)); 
			}
	 	}


	 	$data['title']=ucfirst('Admin : Dashboard  Manage Websites');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/block-slot');
		$this->load->view('templates/footer');
}








public function BlockPoojaDate()
{

	    date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(4)=='delete') {
			$this->db->where('id',$this->uri->segment(5));
			$this->db->delete('pooja_block');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/BlockPoojaDate/".$this->uri->segment(3)); 
		}

			$this->db->select('*');
			$this->db->from('slnt_puja');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['puja_data'] = $this->db->get()->row();


			$this->db->select('*');
			$this->db->from('pooja_block');
			$this->db->where('puja_id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['block_time_slot'] = $this->db->get()->result();

		if ($this->uri->segment(4)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'blockdate', 'Date',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

// 			$this->form_validation->set_rules(
// 				'reason', 'reason',
// 	        	'required',
// 	        	array(
// 		        	'required'     => 'This field is required.'
// 		        )
// 			);
	 		if ($this->form_validation->run() == FALSE) {
				
			} else {
			    
			     $block_time = count($this->input->post('block_time'));
			        foreach($this->input->post('block_time') as $x => $val){
			            $datan = array(
    						'puja_id'=>  $this->uri->segment(3),
    						'blockdate'=>  $this->input->post('blockdate'),
    						'block_time'=>  $val,
    						'sel_fill_date'=>  date('Ymd',strtotime($this->input->post('blockdate'))), 
    						'leave_purpose'=>  $this->input->post('leave_purpose'), 
    					);
    					$this ->db->insert('pooja_block',$datan);
			        }
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/BlockPoojaDate/".$this->uri->segment(3)); 
			}
	 	}


	 	$data['title']=ucfirst('Admin : Dashboard  Manage Websites');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/block-pooja-date');
		$this->load->view('templates/footer');
}







public function BlockUserTimeSlot()
{

	    date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

		if ($this->uri->segment(4)=='delete') {
			$this->db->where('id',$this->uri->segment(5));
			$this->db->delete('slnt_block_all_pooja_date_staff');
			$this->session->set_flashdata('success', '<div class="alert alert-success">Record deleted successfully</div>');
			redirect("pages/BlockUserTimeSlot/".$this->uri->segment(3)); 
		}
            
            
            $this->db->select('*');
			$this->db->from('adminlogin');
			$this->db->where('id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['user_details'] = $this->db->get()->row();
	        
	        
	 
			$this->db->select('*');
			$this->db->from('slnt_block_all_pooja_date_staff');
			$this->db->where('staff_id', $this->uri->segment(3));
			$this->db->order_by('id','DESC');
	        $data['all_block_date'] = $this->db->get();

		if ($this->uri->segment(4)=='insert') {
			$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	 		$this->form_validation->set_rules(
				'block_date', 'Date',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);

//             	$this->form_validation->set_rules(
// 				'fromtime', 'From  Time',
// 	        	'required',
// 	        	array(
// 		        	'required'     => 'This field is required.'
// 		        )
// 			);
			
// 				$this->form_validation->set_rules(
// 				'totime', 'To Time',
// 	        	'required',
// 	        	array(
// 		        	'required'     => 'This field is required.'
// 		        )
// 			);
			
				$this->form_validation->set_rules(
				'leave_purpose', 'leave_purpose',
	        	'required',
	        	array(
		        	'required'     => 'This field is required.'
		        )
			);
			
			
	 		if ($this->form_validation->run() == FALSE) {
				
			} else {
			    
	 
			            $datan = array(
    						'staff_id'=>  $this->uri->segment(3),
    						'block_date'=>  $this->input->post('block_date'),
    				// 		'fromtime'=>  $this->input->post('fromtime'),
    				// 		'totime'=>  $this->input->post('totime'),
    						'block_date_filt'=>  date('Ymd',strtotime($this->input->post('block_date'))), 
    						'leave_purpose'=>  $this->input->post('leave_purpose'), 
    					);
    					$this ->db->insert('slnt_block_all_pooja_date_staff',$datan);
			         
					$this->session->set_flashdata('success', '<div class="alert alert-success">Record save successfully</div>');
					redirect("pages/BlockUserTimeSlot/".$this->uri->segment(3)); 
			}
	 	}


	 	$data['title']=ucfirst('Admin : Dashboard  Manage Websites');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pages/block-user-time-slot');
		$this->load->view('templates/footer');
}



public function Events()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		
	 	if (!isset($_SESSION['wssinfotech']['sohan'])){
			redirect('pages/logout');						
		}
			$this->db->select('*');
			$this->db->from('tbl_category');
			$this->db->order_by('id','DESC');
        	$data['all_category'] = $this->db->get()->result();
			

			$this->db->select('*');
			$this->db->from('slnt_events_time');
			$this->db->order_by('id','ASC');
        	$data['slnt_events_time'] = $this->db->get()->result();

if($this->uri->segment(3)=='edit'){ 
			$this->db->select('*');
			$this->db->from('add_products');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$data['all_packages'] = $this->db->get()->row();
			
		
}
if($this->uri->segment(3)=='insert'){
	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
 
	$this->form_validation->set_rules('title', 'Events name ', 'trim|required');
	$this->form_validation->set_rules('description', 'Description', 'trim|required');
	$this->form_validation->set_rules('event_date', 'events date', 'trim|required');
	//$this->form_validation->set_rules('event_from_time', 'event from time', 'trim|required');
	// $this->form_validation->set_rules('event_to_time', 'Event to time', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
								
		} else {


			
				$config['upload_path']          = './../assets/products/';
                $config['allowed_types']        = 'gif|jpg|png|JPEG|jpeg|PNG|JPG|GIF';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		if (!$this->upload->do_upload('product_image'))
                {
                	$this->session->set_flashdata('success', 'Select image in jpg, png format');	
                	$company_logo='';

                } else {
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];
                }
                
                if($this->input->post('neet_to_pay')==1){
                    $sel_yajman=json_encode($this->input->post('sel_yajman')); 
                } else {
                    $sel_yajman='';
                }
                		$datan = array(
					       	'neet_to_pay'=>  $this->input->post('neet_to_pay'),
					       	'title'=>  $this->input->post('title'),
					       	'filterdate'=>  date('Ymd',strtotime($this->input->post('event_date'))),
					       	'description'=>  $this->input->post('description'), 
					       	'product_image'=> $company_logo, 
					       	'video_link'=>  $this->input->post('video_link'), 
					       	'metatitle'=>  $this->input->post('metatitle'),
					       	'metkeywords'=>  $this->input->post('metkeywords'), 
					       	'metdescription'=>  $this->input->post('metdescription'),
					       	'event_date'=>  $this->input->post('event_date'),
					       	'event_amount'=>  $this->input->post('event_amount'),
					       	'sel_yajman'=>  $sel_yajman
						);
                		$this ->db->insert('add_products',$datan);
                		$insert_id = $this->db->insert_id();
                		$counts = count($this->input->post('event_from_time'));
                		foreach($this->input->post("event_from_time") as $tar){
                			$datan = array(
						       	'timeid'=> $tar, 
						       	'eventid'=>  $insert_id,
						       	'filterdate'=>  date('Ymd',strtotime($this->input->post('event_date')))
							);
							$this ->db->insert('event_time_table',$datan);

						}
					$this->session->set_flashdata('success', '<div class="alert alert-success errorHandler no-display">Record Save Successfully.</div>');
					redirect('pages/Events');
		}
	
}


if($this->uri->segment(5)=='update'){
								

	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
 
	$this->form_validation->set_rules('title', 'Events name ', 'trim|required');
	$this->form_validation->set_rules('description', 'Description', 'trim|required');
	$this->form_validation->set_rules('event_date', 'events date', 'trim|required');
 
 
		if ($this->form_validation->run() == FALSE) {
								
		} else {
	$this->db->select('*');
    $this->db->from('tbl_category');
    $this->db->where('id',$this->input->post('category'));
    $checkcatlevel = $this->db->get()->row();
                if($this->input->post('neet_to_pay')==1){
                    $sel_yajman=json_encode($this->input->post('sel_yajman')); 
                } else {
                    $sel_yajman='';
                }
                
                
			$sub_category='';
				$config['upload_path']          = './../assets/products/';
                $config['allowed_types']        = 'gif|jpg|png';
            	$config['max_size'] = 1024 * 8;
        		$config['encrypt_name'] = TRUE;
        		$this->load->library('upload', $config);
        		 if (!$this->upload->do_upload('product_image'))
                {
                		$datan = array(
                		    'neet_to_pay'=>  $this->input->post('neet_to_pay'),
					       	'title'=>  $this->input->post('title'),
					       	'filterdate'=>  date('Ymd',strtotime($this->input->post('event_date'))),
					       	'description'=>  $this->input->post('description'),
					       	'video_link'=>  $this->input->post('video_link'), 
					       	'metatitle'=>  $this->input->post('metatitle'),
					       	'metkeywords'=>  $this->input->post('metkeywords'), 
					       	'metdescription'=>  $this->input->post('metdescription'),
					       	'event_date'=>  $this->input->post('event_date'),
						    'event_amount'=>  $this->input->post('event_amount'),
					       	'sel_yajman'=>  $sel_yajman
						);
                } else {
					$this->db->select('*');
					$this->db->from('add_products');
					$where2 = array('id' => $this->uri->segment(4));
					$this->db->where($where2);
		        	$dall_packages = $this->db->get()->row();
        			unlink('./../assets/products/'.$dall_packages->product_image);
                		$x=$this->upload->data();
                		$company_logo = $x['file_name'];
                		
                		$datan = array(
                		    'neet_to_pay'=>  $this->input->post('neet_to_pay'),
					       	'title'=>  $this->input->post('title'),
					       	'filterdate'=>  date('Ymd',strtotime($this->input->post('event_date'))),
					       	'description'=>  $this->input->post('description'), 
					       	'product_image'=> $company_logo, 
					       	'video_link'=>  $this->input->post('video_link'), 
					       	'metatitle'=>  $this->input->post('metatitle'),
					       	'metkeywords'=>  $this->input->post('metkeywords'), 
					       	'metdescription'=>  $this->input->post('metdescription'),
					       	'event_date'=>  $this->input->post('event_date'),
					       	'event_amount'=>  $this->input->post('event_amount'),
					       	'sel_yajman'=>  $sel_yajman  
						);
                	}	 
					    	$where2 = array('id'=> $this->uri->segment(4));
							$this->db->where($where2);
							$this ->db->update('add_products',$datan);
										$where = array('eventid'=> $this->uri->segment(4));
										$this->db->where($where);
										$this->db->delete('event_time_table');
								foreach($this->input->post("event_from_time") as $tar){
		                			$datan = array(
								       	'timeid'=> $tar, 
								       	'eventid'=> $this->uri->segment(4),
						       			'filterdate'=>  date('Ymd',strtotime($this->input->post('event_date')))
									);
									$this ->db->insert('event_time_table',$datan);
								}
				$this->session->set_flashdata('success', '<div class="alert alert-success errorHandler no-display">Record Update Successfully.</div>');
				redirect('pages/Events/edit/'.$this->uri->segment(4));
		}	
}			
		
		
		 
		$data['title']=ucfirst('Admin : Manage All User');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('add_products');
		$this->load->view('templates/footer');	
}	



 public function Events_list()
 {
 	date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');				
		}	
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}

			$this->db->select('*');
			$this->db->from('add_products');
        	$data['all_products'] = $this->db->get()->result();



if($this->uri->segment(3)=='delete'){ 
			$this->db->select('*');
			$this->db->from('add_products');
			$where2 = array('id' => $this->uri->segment(4));
			$this->db->where($where2);
        	$dall_packages= $this->db->get()->row();

        				$where = array('assignment_id'=>  $this->uri->segment(4));
						$this->db->where($where);
						$this->db->delete('assignment_urgency');
        	unlink('./../assets/products/'.$dall_packages->product_image);
						$where = array('id' => $this->uri->segment(4));
						$this->db->where($where);
						$this->db->delete('add_products');
		$this->session->set_flashdata('success', 'Record Delete Successfully.');
		redirect('pages/Events_list');
}


 
		$data['title']=ucfirst('Admin : Manage Products');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('products_list');
		$this->load->view('templates/footer');	
 }





public function getPriest($value='')
{
			$this->db->select('*');
			$this->db->from('slnt_booking_slot');
			$where2 = array('id' => $this->input->post('bookid'));
			$this->db->where($where2);
        	$dall_packages = $this->db->get()->row();


        	$this->db->select('*');
			$this->db->from('slnt_puja');
			$whe = array('id' => $dall_packages->puja_id);
			$this->db->where($whe);
        	$dall_p = $this->db->get()->row();

        	$this->db->select('*');
			$this->db->from('slnt_puja_time');
			$whe = array('id' => $dall_packages->time_id);
			$this->db->where($whe);
        	$dall_time = $this->db->get()->row();

      ?>

				<h4>Assign priest to Booking ID #<?=$dall_packages->booking_id;?> On  <?=date('d-M-Y',$dall_packages->sel_date);?>, 
					<?=$dall_time->from_time;?>-<?=$dall_time->to_time;?>
<p>
	<?=$dall_p->description_charge;?>
</p>
					


				</h4><br>
				  
				  	<input type="hidden" name="sel_booking_id" value="<?=$this->input->post('bookid');?>">
				  	<label for="sel_priest">Select Priest</label>
				  	<select class="form-control" name="sel_priest" id="sel_priest">
				  		
				  		 <?php 
						 	$this->db->select('*');
							$this->db->from('adminlogin');
							$w = array('status' =>1);
							$this->db->where($w);
				        	$list_priest  = $this->db->get();
				        	foreach ($list_priest->result() as $priest_list) { ?>
				        		<option value="<?=$priest_list->id?>"><?=$priest_list->name_title?> <?=$priest_list->name?>  <?=$priest_list->last_name?> </option>
				        <?php } ?>
				  	</select>
				  	<br />
				  	<br />
						<button name="save_assign" class="btn btn-success" type="submit">Assign</button>
				 
					
      <?php 
}

public function getGraphPopup($value='')
{
	$dataPuja = $this->input->post('dataPuja');
	$date = $this->input->post('date');
	$idPreist = $this->input->post('idPreist');
	$dataPujaTime = $this->input->post('dataPujaTime');


	$this->db->select('*');
	$this->db->from('slnt_puja_time');
	$this->db->where('pooja_time',$dataPuja);
 	$this->db->order_by('id','ASC');
	$listtime = $this->db->get()->result();


	$this->db->select('*');
	$this->db->from('adminlogin');
	$this->db->where('id',$idPreist);
 	$this->db->order_by('id','ASC');
	$priestProfile = $this->db->get()->row();


?>
<input type="hidden" name="block_date" id="block_date" value="<?=$date;?>">
<input type="hidden" name="dataPuja" id="dataPuja" value="<?=$dataPuja;?>">
<div class="row">
<label class="col-sm-12">
	<h2>Block the slot</h2>
	<hr />
</label>
</div>
<div class="row  form-group">
		<div class="col-sm-4">
			<label>Date : </label>
		</div>
		<div class="col-sm-8">
			<?=date('d M Y', strtotime($date));?>
		</div>
</div>

<div class="row form-group">
		<div class="col-sm-4">
			<label>Time Slot : </label>
		</div>
		<div class="col-sm-8">
			<?php foreach ($listtime as $rowsdata) { 
					$check ='';
					if ($rowsdata->id==$dataPujaTime) {
						$check ='checked';
					}
					echo '<label><input type="checkbox"  name="time_slot[]" id="" value="'.$rowsdata->id.'" '.$check.'>&nbsp; '.$rowsdata->from_time.'-'.$rowsdata->to_time.'</label>&nbsp;&nbsp;&nbsp;';

				}
			?>
		</div>
</div>
<div class="row  form-group">
		<div class="col-sm-4">
			<label>Purpose of Leave</label>
		</div>
		<div class="col-sm-8">
			 <label class="col-sm-12">
			 	<input type="radio" name="leave_purpose" id="" value="duty at temple" checked=""> Duty at Temple
			 </label>
			 <label class="col-sm-12">
			 	<input type="radio" name="leave_purpose" id="" value="leave"> Leave
			 </label>
		</div>
</div>

<div class="row  form-group">
		<div class="col-sm-4">
			<label>Block For</label>
		</div>
		<div class="col-sm-8">
			 <label class="col-sm-12">
			 	<input type="radio" name="sel_priest" id="" value="<?php echo $priestProfile->id;?>" checked=""> <?php echo $priestProfile->name_title;?> <?php echo $priestProfile->name;?> <?php echo $priestProfile->last_name;?>
			 </label>
			 <label class="col-sm-12">
			 	<input type="radio" name="sel_priest" id="" value="0"> All  Priest
			 </label>
		</div>
</div>
<div class="row  form-group">
	<div class="col-sm-12 text-center">
		<br />
		<br />
		<button name="save_assign" class="btn btn-success" type="submit">Block  & Save</button>
	</div>
</div>
<?php 
 
}

public function logout(){
	
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		 delete_cookie('login_by_sohan'); 
		 delete_cookie('login_rol'); 
		 redirect('pages/home');
}


public function getpagedata()
{
		date_default_timezone_set("Asia/Calcutta");
	 	$this->load->helper('cookie','url'); 
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('email');
		if (!isset($_COOKIE["login_by_sohan"])){
				redirect('pages/logout');					
		}
		 if (!isset($_SESSION['wssinfotech']['sohan'])){
				redirect('pages/logout');						
		}
		$this->db->select('*');
        $this->db->from('tbl_pages');
        $s = array('pagid'=>$this->uri->segment(3));
        $this->db->where($s);
        $query=$this->db->get();

        if ($query->num_rows()>0) {
        	$x = $query->row();
			echo $x->pagecontent;
        } else {
        	echo 'No Data Set';
        }
}
	public function ManageCatering()
	{
		

		$data['title']=ucfirst('Admin : Manage Products');
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');

		if($this->uri->segment(3)=='ViewAllCatering'){
			if (isset($_GET['action'])) {
				if($_GET['action']=='delete'){
					$this->db->where('id',$_GET['id']);
					$this->db->delete('slnt_catering_menus');
					$this->session->set_flashdata('success', '<h4 class="text-center text-danger">Record save Successfully.</h4>');
					redirect('pages/ManageCatering/ViewAllCatering');
				}
			}


				$this->db->select('*');
		        $this->db->from('slnt_catering_menus');
		        $data['menus']=$this->db->get();		
				$this->load->view('pages/catering/view-catering',$data);
		} else if($this->uri->segment(3)=='AddNewCatering'){


			if (isset($_GET['action'])) {
				if ($_GET['action']=='doSave') {

				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('menu_name', '', 'trim|required');
				$this->form_validation->set_rules('menu_items', '', 'trim|required');
			
				if ($this->form_validation->run() == FALSE) {
										
				} else {


					 	$menu_name=$this->input->post('menu_name');
					 	$menu_items=$this->input->post('menu_items');
					 	$days=json_encode($this->input->post('days'));
					 	$no_of_pax=$this->input->post('no_of_pax');
					 	$mem_price=$this->input->post('mem_price');
					 	$none_mem_price=$this->input->post('none_mem_price');
					 	$item_name=$this->input->post('item_name');
					 	$item_price=$this->input->post('item_price');
					 		$counts=count($no_of_pax);
					 		$items = array(); 
					 		for ($i=0; $i < $counts; $i++) { 
					 			$temp_array = array(
					 				'no_of_pax' => $no_of_pax[$i], 
					 				'mem_price' => $mem_price[$i], 
					 				'none_mem_price' => $none_mem_price[$i] 
					 			);
					 			$items[] = $temp_array;
					 		}
								$counts2=count($item_name);
								$items2 = array(); 
								for ($j=0; $j < $counts2; $j++) { 
						 		$temp_array2 = array(
						 			'item_name' => $item_name[$j], 
						 			'item_price' => $item_price[$j]
						 		);
						 		$items2[] = $temp_array2;
					 		}

					 		 	$data = array(
					 		 		'menu_name' => $menu_name,
					 		 		'menu_items' => $menu_items,
					 		 		'days' => $days,
					 		 		'price' => json_encode($items),
					 		 		'additional' => json_encode($items2),
					 		 	);
					 		$this->db->insert('slnt_catering_menus',$data);
					 		$this->session->set_flashdata('success', '<h4 class="text-center">Record save Successfully.</h4>');
							redirect('pages/ManageCatering/AddNewCatering');
					 	}

				 } 
			}

				$this->load->view('pages/catering/add-new-catering');
		} else if($this->uri->segment(3)=='EditCatering'){

				if (isset($_GET['action'])) {
				if ($_GET['action']=='doSave') {

				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_rules('menu_name', '', 'trim|required');
				$this->form_validation->set_rules('menu_items', '', 'trim|required');
			
				if ($this->form_validation->run() == FALSE) {
										
				} else {


					 	$menu_name=$this->input->post('menu_name');
					 	$menu_items=$this->input->post('menu_items');
					 	$days=json_encode($this->input->post('days'));
					 	$no_of_pax=$this->input->post('no_of_pax');
					 	$mem_price=$this->input->post('mem_price');
					 	$none_mem_price=$this->input->post('none_mem_price');
					 	$item_name=$this->input->post('item_name');
					 	$item_price=$this->input->post('item_price');
					 		$counts=count($no_of_pax);
					 		$items = array(); 
					 		for ($i=0; $i < $counts; $i++) { 
					 			$temp_array = array(
					 				'no_of_pax' => $no_of_pax[$i], 
					 				'mem_price' => $mem_price[$i], 
					 				'none_mem_price' => $none_mem_price[$i] 
					 			);
					 			$items[] = $temp_array;
					 		}
								$counts2=count($item_name);
								$items2 = array(); 
								for ($j=0; $j < $counts2; $j++) { 
						 		$temp_array2 = array(
						 			'item_name' => $item_name[$j], 
						 			'item_price' => $item_price[$j]
						 		);
						 		$items2[] = $temp_array2;
					 		}

					 		 	$data = array(
					 		 		'menu_name' => $menu_name,
					 		 		'menu_items' => $menu_items,
					 		 		'days' => $days,
					 		 		'price' => json_encode($items),
					 		 		'additional' => json_encode($items2),
					 		 	);
					 		$this->db->where('id',$_GET['id']);
					 		$this->db->update('slnt_catering_menus',$data);
					 		$this->session->set_flashdata('success', '<h4 class="text-center">Record update Successfully.</h4>');
							redirect('pages/ManageCatering/EditCatering?id='.$_GET['id']);
					 	}

				 } 
			}
				$this->db->select('*');
		        $this->db->from('slnt_catering_menus');
		        $this->db->where('id',$_GET['id']);
		        $data['menus']=$this->db->get()->row();

				$this->load->view('pages/catering/edit-catering',$data);
		}
		
		$this->load->view('templates/footer');	
	}

 

}
