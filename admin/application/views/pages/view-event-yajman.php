<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Yajman  Type</li>
				</ul>
				<h4>View Yajman  Type</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">	
		    <div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default text-right" style="padding:10px;">
				    <a href="<?=base_url();?>pages/Add_Event_Yajman" class="btn btn-info">Add New Yajman</a>
				</div>
		</div><!-- media -->
	</div><!-- pageheader -->
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
										 	<th  class="width_action">Title</th>
										 
											<th  class="width_action">Member Price SGD </th>
											<th  class="width_action">Non-Member Price SGD </th>
											<th  class="width_action">Status </th>
											<th  class="width_action" style="width:140px;">Action</th>
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
											 
											<td><?php echo $myresult->member_price; ?></td>
											<td><?php echo $myresult->non_member_price; ?></td>
											<td><?php if ($myresult->status==1) {
												echo 'Active';
											} else {
												echo 'Inactive';
											} ?></td>
											<td> 
                                                                    
	<a href="<?php echo base_url();?>Pages/Add_Event_Yajman/edit/<?php echo $myresult->id; ?>" title="Edit" class="btn  btn-xs btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit" >Edit</a>
 
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