<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Enquiry</li>
				</ul>
				<h4>View Temple Booking Enquiry</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="table table-responsive">
								<?php echo $this->session->flashdata('success');?>  
						 <table class="table table-bordered table-striped" id="example">
									<thead>
										<tr>
											<th>#</th>
										 	<th  class="width_action">Type</th>
											<th  class="width_action">Submitted Date</th>
											<th  class="width_action">Contact Information</th>
											<th  class="width_action">Temple Booking Date</th>
											<th  class="width_action">Temple Booking Time </th>
											<th  class="width_action">Status </th>
											<th  class="width_action">Action</th>
										</tr>
									</thead>
									<tbody> 
 							            <?php $count=1; foreach($temple_booking as $trbooking){ ?>
 							                <tr>
    											<td><?=$count;?></td>
    										 	<td  class="width_action"><?php if($trbooking->choose_type==1){ echo 'Temple'; } else { echo 'Refreshment'; } ?></td>
    											<td  class="width_action"><?=$trbooking->post_date;?></td>
    											<td  class="width_action">
    											    <?=$trbooking->name_prefix;?> <?=$trbooking->first_name;?> <?=$trbooking->last_name;?> <br />
    											    <?=$trbooking->email;?> <br />
    											    +65 <?=$trbooking->mobile;?>
    											</td>
    											<td  class="width_action"><?=date('d-M-Y',strtotime($trbooking->choose_date));?></td>
    											<td  class="width_action">Start : <?=date('h:i:s A',strtotime($trbooking->choose_start_time));?> 
    											    <br /> End :  <?=date('h:i:s A',strtotime($trbooking->choose_end_time));?></td>
    											<td  class="width_action"><?php  if($trbooking->status==0){ echo 'Pending'; } else if($trbooking->status==1){ echo 'Confirm'; } else if($trbooking->status==02){ echo 'Cancle'; } ?> </td>
    											<td  class="width_action" >
    											    <a href="<?=base_url();?>Pages/TempleBookingEnquiry/details/<?=$trbooking->id;?>" class="btn btn-info btn-sm" target="_blank">View Details</a>
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