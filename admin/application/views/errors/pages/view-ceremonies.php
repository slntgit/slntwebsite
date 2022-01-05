<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Ceremonies Booking Type</li>
				</ul>
				<h4>View Ceremonies Booking</h4>
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
										 	<th  class="width_action">Description Of Charge</th>
										 
											<th  class="width_action">Venue Price SGD</th>
											<th  class="width_action">Member Price SGD </th>
											<th  class="width_action">Non-Member Price SGD </th>
											<th  class="width_action">Status </th>
											<th  class="width_action">Management </th>
											<th class="width_action">Action</th>
										</tr>
									</thead>
									<tbody> 

									<?php 
										$count =1;
										foreach($puja_list as $myresult){
									?>	
																			
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $myresult->description_charge; ?></td>
										 
											<td><?php echo $myresult->venue_price; ?></td>
											<td><?php echo $myresult->member_price; ?></td>
											<td><?php echo $myresult->non_member_price; ?></td>
											<td><?php if ($myresult->status==1) {
												echo 'Active';
											} else {
												echo 'Inactive';
											} ?></td>
											<td> 
<a href="<?php echo base_url();?>Pages/ManageCeremoniesDetails/<?php echo $myresult->id; ?>" title="Manage Details" class="btn btn_size has-tooltip text-success" data-placement="top" data-original-title="Edit">Manage</a>
  

</td>
<td>                                                                            
	<a href="<?php echo base_url();?>Pages/Add_Ceremonies/edit/<?php echo $myresult->id; ?>" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"  onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-edit"></i></a>
	 

<!-- 	<a href="<?php echo base_url();?>Pages/Ceremonies_Time/<?php echo $myresult->id; ?>" title="Add Pooja Timing" class="btn-link btn_size has-tooltip text-warning" data-placement="top" data-original-title="Edit"><i class="fa fa-clock-o" aria-hidden="true"></i></a> -->
 

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