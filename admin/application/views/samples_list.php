<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="" style="color: #000;">Dashboard</a></li>
					<li>Manage  Samples</li>
				</ul>
				<h4>Manage  Samples</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
							<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>#</th>
										 
											<th  class="width_action">Title</th>													 
											<th class="width_action">Action</th>
										</tr>
									</thead>
									<tbody> 

<?php 
									$count =1;
										foreach($all_category as $myresult){
									?>	
																			
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $myresult->name; ?></td>
																					 										
											 
											<td>                                                                            
<a href="<?php echo base_url();?>Pages/add_samples/edit/<?php echo $myresult->id; ?>/update" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
<a href="<?php echo base_url();?>Pages/samples_list/delete/<?php echo $myresult->id; ?>" title="inactive" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"><i class="fa fa-trash"></i></a>
												
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