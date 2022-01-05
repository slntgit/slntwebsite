<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
		
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Bookings</li>
				</ul>
				<h4>All Pooja Bookings</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">	
				<?=$this->session->flashdata('success');?>

<?php 
	if (isset($_GET['bookingType'])) {
		$bookingType=$_GET['bookingType'];
	} else {
		$bookingType='puja';
	}

	 $ffdate = date('Y-m-d',strtotime($u_from_date));
	 $ttdate = date('Y-m-d',strtotime($u_todate));
	 $next7days = date('Y-m-d',strtotime($ttdate."+7 days"));
	 $lstkstrt = date('Y-m-d',strtotime($ffdate."-7 days"));
?>



 			<table class="custom-table">
            
            <thead>
            	<tr align="center">
            		<th class="text-center">
            		 
						        <div class="row">
						            <div class="col-sm-12 text-center">
						                
						                <div class="btn-group btn-group-or" role="group">
<!-- <a href="<?=base_url();?>pages/ViewBookingInGraph/<?=$this->uri->segment(3);?>?bookingType=<?=$bookingType;?>&fromdate=<?=$lstkstrt;?>&todate=<?=$ffdate;?>" class="btn btn-success text-white"> <i class="fa fa-angle-double-left" aria-hidden="true"></i> Previous Week  </a>
		
		<a href="<?=base_url();?>Pages/ViewBooking/<?=$this->uri->segment(3);?>?bookingType=<?=$bookingType;?>&fromdate=<?=$ttdate;?>&todate=<?=$next7days;?>" class="btn btn-success text-white"> <i class="fa fa-list" aria-hidden="true"></i> List View  </a>


 <a href="<?=base_url();?>pages/ViewBookingInGraph/<?=$this->uri->segment(3);?>?bookingType=<?=$bookingType;?>&fromdate=<?=$ttdate;?>&todate=<?=$next7days;?>" class="btn btn-success text-white">Next Week <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
		 -->				                
<a href="<?=base_url();?>pages/CreatPoojaBooking" class="btn btn-success text-white"><i class="fa fa-plus" aria-hidden="true"></i> Create Pooja Booking </a>						                
						                
						                
						                </div>
						                
						            </div>
						        </div>
						    
            		</th>
            	</tr>
            </thead>
        </table>
				<form action="<?=base_url();?>pages/All_Booking/">
					<div class="row">
						<div class="col-sm-3 col-xs-12">
							<select class="form-control" name="bookingType" id="bookingType" required>
									<option value="puja" <?php if(isset($_GET['bookingType'])){ if ($_GET['bookingType']=='puja') { echo 'selected';  } } ?>>Pooja</option>
								
							</select>
						</div>
						<div class="col-sm-3 col-xs-12">
							 <input type="date" name="fromdate" id="fromdate" class="form-control" value="<?php if(isset($_GET['fromdate'])){ echo $_GET['fromdate'];} ?>" required>
						</div>
						<div class="col-sm-3 col-xs-12">
							<input type="date" name="todate" id="todate" class="form-control" value="<?php if(isset($_GET['todate'])){ echo $_GET['todate'];}?>" required>
						</div>
						<div class="col-sm-3 col-xs-12">
							 <button type="submit" class="btn btn-info btn-lg">Search</button>
						</div>
					</div>
					<br />
				</form>
			</div>





			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
								<?php echo $this->session->flashdata('success');?>  
						 <table class="table table-bordered table-striped" id="example">
									<thead>
										<tr align="center">
											<th>#</th>
										 	<th  class="width_action">Booking ID</th>
											<th  class="width_action">Booking Type </th>
											<th  class="width_action">Booking Date &  Time</th>
											<th  class="width_action">Registered  Date </th>
											<th  class="width_action">Paid Amount (SGD)</th>
											<th  class="width_action">Due Amount (SGD) </th>
											<th  class="width_action">Priest Assign Status</th>
											<th class="width_action">Status</th>
											<!-- <th class="width_action">Action</th> -->
										</tr>
									</thead>
									<tbody> 
									<?php 
										$count =1;
										foreach($bookinglist->result() as $myresult){

											$this->db->select('*');
											$this->db->from('slnt_puja_time');
											$this->db->where('id',$myresult->time_id);
											$this->db->order_by('id','DESC');
											$timinglist = $this->db->get()->row();

											$this->db->select('*');
											$this->db->from('slnt_payment_summery');
											$this->db->where('booking_id',$myresult->id);
											$this->db->order_by('id','DESC');
											$payment = $this->db->get();
											$dueamt=0.00;
											$paidamt=0.00;
											foreach ($payment->result() as $payval) {
												if ($payval->paystatus==1) {
													$paidamt=$paidamt+$payval->amt_pay;
												}
											}
											$this->db->select('*');
											$this->db->from('slnt_payment_summery');
											$this->db->where('booking_id',$myresult->id);
 											$this->db->order_by('id','DESC');
											$this->db->limit(1);
											$payment2 = $this->db->get()->row();
									?>	
																			
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $myresult->booking_id; ?></td>
											<td style="text-transform: capitalize;"><?php echo $myresult->puja_type; ?></td>
											<td>
											
												<strong><?php echo date('d-M-Y',strtotime($myresult->sel_date)); ?> </strong>
												<br />
												<strong><?php echo $timinglist->from_time; ?> To <?php echo $timinglist->to_time; ?></strong>
											 <?php
											   if($myresult->req_date!=''){ 
											   
											   	$this->db->select('*');
    											$this->db->from('slnt_puja_time');
    											$this->db->where('id',$myresult->req_time);
    											$this->db->order_by('id','DESC');
    											$timin = $this->db->get()->row();
											   ?>
											    <h5 class="text-danger">Request  For Postpone Booking </h5>  
											    
											     
											    <strong class="text-danger">Date : <?php echo date('d-M-Y',strtotime($myresult->req_date)); ?> </strong>
												<br />
												<strong class="text-danger">Time : <?php echo $timin->from_time; ?> To <?php echo $timin->to_time; ?></strong>
												<strong class="text-danger">Status : 
												<?php  if($myresult->req_status==0){ echo 'Pending'; } else   if($myresult->req_status==1){ echo 'Accepted'; } else   if($myresult->req_status==2){ echo 'Rejected'; } ?>
												
												</strong>
												<br />
												<a href="javascript:void();" class="btn btn-xs btn-info changeStatus" data-id="<?=$myresult->id;?>" data-toggle="modal" data-target="#delete" >Change Status</a>
												
												
											 <?php   }
											   ?> 
                                                
											</td>
											<td><?php echo $myresult->create_date; ?></td>
											<td><?php echo $paidamt; ?></td>
											<td>

				<?php if($payment->num_rows()>0){ 
					echo $dueamt=$payment2->due_amt; 
						} ?>
							
						</td>
											<td>
												<a href="javascript:void();" data-toggle="modal" data-target="#login-modal" class="btn btn-xs btn-success assign-priest" id="<?php echo $myresult->id; ?>">
													<i class="fa fa-plus" aria-hidden="true"></i> 
													Priest
												</a>
												<?php if($myresult->pre_priest==1){  ?>
														<p class="text-info">Preferred Priest By User</p>
												<?php } else { ?>
														<p class="text-danger">Not Preferred Priest By User</p>
												<?php }?>

												<?php 
													if($myresult->sel_priest==0){ 
															echo 'Priest Not Assigned';
												?>
												
												<?php
													} else { 
														$this->db->select('*');
														$this->db->from('adminlogin');
														$this->db->where('id',$myresult->sel_priest);
														$mem_deta = $this->db->get();
														if ($mem_deta->num_rows()>0) {
															$mem_details = $mem_deta->row();
															echo $mem_details->name_title.' '.$mem_details->name.' '.$mem_details->last_name;
															# code...
														}
													} 
												?></td>
											<td>
												<a href="<?=base_url();?>Pages/All_Booking/<?php echo $myresult->id; ?>" class="" target="_blank">
												<?php 
													if ($myresult->booking_id!='') {
														if ($dueamt==0) {
															echo 'Confirmed';
														} else {
															echo 'Partial Pay';
														}
													} else {
														echo 'Partial Booking';
													}
												?>
												 </a>

											</td>
 										<!-- 	<td>                                                                            
												<a href="<?php echo base_url();?>Pages/Add_Puja/edit/<?php echo $myresult->id; ?>" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
												
											</td> -->       

</tr>

<?php $count++; } ?>										
									</tbody>
								</table>
								
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div> 
<script>
    $('.changeStatus').on('click',function(){
        var dataid=$(this).attr('data-id');
        $('#booking_id').val(dataid);
       
    });
</script>

   <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
            <div class="modal-body">
                    <form method="post" action="">
                        
                                <input type="hidden" id="booking_id" name="booking_id" value="" />
                        
                        <div class="form-group">
                              <label>Status</label>
                                <select id="status_req" name="status_req" class="form-control">
                                    <option value="0">Pending</option>
                                    <option value="1">Accepted</option>
                                    <option value="2">Rejected</option>
                                </select>
                        
                        </div>
                    </form>
            </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success saveit" ><span class="glyphicon glyphicon-ok-sign"></span>Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>

<script>
            $('.saveit').on('click',function(){
                var booking_id=$('#booking_id').val();
                var status_req=$('#status_req').val();
                var datas= 'booking_id='+booking_id+'&status_req='+status_req;
                     $.ajax({
                       type: "post",
                       url: '<?=base_url();?>Pages/ResetTimeSlotMyBooking',
                       cache: false,    
                       data:datas,
                       success: function(response){
                            $('.modal-body').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                       }
                      });
            });
</script>


<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<?php 
						$stringurl ='';
						if (isset($_GET['bookingType'])) {
							$stringurl ='&bookingType='.$_GET['bookingType'].'&fromdate='.$_GET['fromdate'].'&todate='.$_GET['todate'];
						}
					?>
					<form action="<?=base_url();?>pages/All_Booking?action=submit<?=$stringurl;?>" id="modalrsp" method="post">
					</form>				  
				</div>
			</div>
		  </div>
		  <style type="text/css">
		  	@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}
		  </style>
		  <script type="text/javascript">
		  	$('.assign-priest').on('click',function(){
		  		var getbookingindex=$(this).attr("id");
		  		var queryString='bookid='+getbookingindex;
		  		 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('Pages/getPriest');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#modalrsp').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
		  	});
		  </script>