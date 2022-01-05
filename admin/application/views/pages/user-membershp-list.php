<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Membership of <?=$memberDetails->name_title;?> <?=$memberDetails->first_name;?>  <?=$memberDetails->last_name;?></li>
				</ul>
				<h4>Membership of <?=$memberDetails->name_title;?> <?=$memberDetails->first_name;?>  <?=$memberDetails->last_name;?></h4>
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
 						 <table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>#</th>
										 	<th  class="width_action"> Name (As NRIC)</th>
										 	<th  class="width_action"> Member ID</th>
										 	<th  class="width_action"> Passport No</th>
											<th  class="width_action">Email / Contact No</th>
											<th  class="width_action">Membership</th>
											<th  class="width_action">Amount</th>
											<th class="width_action">Status</th>
											<th class="width_action">Payment Status</th>
											<th class="width_action">Action</th>
											 
										</tr>
									</thead>
									<tbody> 
									<?php 
										$count =1;
										foreach($memberlist->result() as $myresult){
										    /////print_r($myresult);
									?>	
																			
								<tr>
									<td>
										<?php echo $count; ?>

									</td>
									<td><?php echo $myresult->name_title; ?>  <?php echo $myresult->name_as_nric; ?> 
											
										</td>

 
                                        <td><?php echo $myresult->membership_id; ?>
                                        </td>

										<td><?php echo $myresult->nric_passport; ?>   
										</td>


									<td><?php echo $myresult->email; ?> <br /> +65 <?php echo $myresult->mobile; ?></td>
									<td>
									<?php 
											if ($myresult->status==0) {
											 echo '<span class="text-warning">'.$myresult->membership_title.'</span>';
											} else {
												echo '<span class="text-success">'.$myresult->membership_title.'</span>';
											}
 
									?>	

									</td>
					  
									<td style="font-size:12px;"> $<?php echo $myresult->membership_amount; ?> SGD For <br /> <?php echo $myresult->membership_days; ?>Days</td>
									<td>
										<?php  if ($myresult->status==0) {
													echo '<span class="text-danger">InActive</span>';
												} else {
													echo '<span class="text-success">Active</span>';
												} 
										?>
									</td>

									<td>
										<?php  if ($myresult->pay_status==0) {
													echo '<span class="text-danger">UnPaid</span>';
												} else {
													echo '<span class="text-success">Paid</span>';
												} 
										?>
									</td>


									<td>
									    
<a class="btn btn-sm btn-info"  href="<?=base_url();?>pages/MembershipEdit/<?php echo $myresult->id; ?>/<?=$this->uri->segment(3); ?>">Edit</a>
<a class="btn btn-sm btn-info"  href="<?=base_url();?>pages/MemberPrint/<?php echo $myresult->id; ?>/<?=$this->uri->segment(3); ?>">Print</a>
									    
									    
											<?php  if ($myresult->pay_status==0) { ?>
 											<a class="btn btn-sm btn-info"  href="<?=base_url();?>pages/MembershipPayment/<?php echo $myresult->id; ?>?#payment-part">Collect Payment</a>
 <!--<a class="btn btn-sm btn-info"  href="<?=base_url();?>pages/UserMembershpList/<?=$this->uri->segment(3); ?>/<?php echo $myresult->id; ?>/sendLink">Send Payment Link</a>-->
										  	<?php } else {  ?>
										  	
										  	<?php } 
										?>
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
	<style>
	    td{
	        font-size:11px;
	    }
	</style>
</div>