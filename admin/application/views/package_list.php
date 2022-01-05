<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="index.php">Dashboard</a></li>
					<li>Package List</li>
				</ul>
				<h4>Package List</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">            
						<a href="<?php echo base_url();?>pages/add_package" class="btn btn-sm btn-primary btn-addon pull-right" value="add product" ><i class="fa fa-plus"></i> New Package</a> 
						<div class="">


							<?php if($this->session->flashdata('success')){ ?>
<div class="alert alert-danger errorHandler no-display">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<?php echo validation_errors(); ?>
    <?php echo $this->session->flashdata('success'); ?> 
	</div> 
<?php } ?>
							<div >
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>#</th>
											 
											<th  class="width_action">Name</th>
											<th>Amount</th> 
											<th>Package Item Cost</th>
											<th>Gift Amount</th>
											<th>Gift % Amount</th>
											<th>Status</th>
											<th class="width_action">Action</th>
										</tr>
									</thead>
									<tbody>
										
									<?php 
									$count =1;
										foreach($all_packages as $myresult){
									?>	
										
										<tr>
											<td><?php echo $count; ?></td>
											 
											<td><?php echo $myresult->package_activation_name; ?></td>
											<td><?php echo $myresult->package_activation_amount; ?></td>
											<td><?php echo $myresult->package_activation_item_cost; ?></td>
											<td><?php echo $myresult->package_activation_gift_amount; ?></td>
											<td><?php echo $myresult->package_gift_amount_percentage_per_child; ?></td>
											<td><?php echo $myresult->package_gift_amount_percentage_per_child; ?></td>
											 
											 
											<td>                                                                            
<a href="<?php echo base_url();?>Pages/add_package/edit/<?php echo $myresult->id; ?>/update" title="Edit" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
<a href="<?php echo base_url();?>Pages/package_list/delete/<?php echo $myresult->id; ?>/" title="inactive" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"><i class="fa fa-trash"></i></a>
												
											</td>       
										</tr> 

										<?php $count++; } ?>
										
									</tbody>
								</table>
								
							</div>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>
 