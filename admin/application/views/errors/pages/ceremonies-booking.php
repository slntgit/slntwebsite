<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Ceremonies Booking</li>
				</ul>
				<h4>Ceremonies Booking</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
<div class="contentpanel">		
	<div class="row">	
		<div class="col-sm-12 col-md-12 ">				
			<div class="panel panel-default">					
				<div class="panel-body">
					<div class="">
						<?php echo $this->session->flashdata('success');?>  
						<table class="table table-bordered table-striped" id="example">
							<thead>
								<tr>
									<th>#</th>
									<th  class="width_action">Booking ID</th>
									<th  class="width_action">Booking Type </th>
									<th  class="width_action">Booking Date &  Time</th>
									<th  class="width_action">Registered  Date </th>
									<th  class="width_action">Total Amount (SGD)</th>
									<th  class="width_action">Due Amount (SGD) </th>
									<th  class="width_action">Priest Status</th>
									<th class="width_action">Status</th>
								</tr>
							</thead>
							<tbody> 
								<?php 
									$count =1;
									foreach($bookign_list->result() as $myresult){

							$totalamt=0.00;
							$count =1;
                    		$this->db->select('*');
                            $this->db->from('slnt_ceremonies');
                            $this->db->where('id',$myresult->cer_evnt_type);
                            $ceremony = $this->db->get();
                            $ceremonydata = $ceremony->row();
                    	?>
								<tr>
									<td><?=$count;?></td>
									<td><?=$myresult->booking_id;?></td>
									<td><?=$ceremonydata->description_charge;?></td>
									<td><?=$myresult->datetimeids;?></td>
									<td><?=$myresult->create_time;?></td>
									<td>$<?=$myresult->last_pay_amt+$myresult->dueamt;?></td>
								<td>
									$<?=$myresult->dueamt;?>
									<?php if($myresult->dueamt>0){ ?>
<a href="<?=base_url();?>pages/CeremoniesBookingInvoiceCreateNMail/<?=$myresult->id;?>/<?=$myresult->booking_id;?>" class="btn btn-xs btn-info">Gerate Invoice</a>
									<?php } ?>
								</td>
									<td>
										<?php 
											$this->db->select('*');
											$this->db->from('adminlogin');
											$this->db->where('id',$myresult->sel_priest);
											$this->db->order_by('id','DESC');
										    $preistDetails = $this->db->get();
										    if ($preistDetails->num_rows()>0) {
										    	$preData=$preistDetails->row();
										?>
										<a href="<?=base_url();?>Pages/Add_User/edit/<?=$preData->id;?>" target="_blank">
											<?=$preData->name_title;?> <?=$preData->name;?> <?=$preData->last_name;?>
											

										</a>
										<?php 
										    }
										?>
									</td>
									<td>
										<a href="<?=base_url();?>pages/CeremoniesInvoice/<?=$myresult->id;?>" target="_blank" class="btn btn-success btn-xs">View Invoice</a>
									</td>
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