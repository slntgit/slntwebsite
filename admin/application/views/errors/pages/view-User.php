<style type="text/css">
	.btn-danger{
		background: red;
	}
</style>
<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Staff</li>
				</ul>
				<h4>View User</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
			<div class=" ">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 text-center">	
	<a  href="<?php echo base_url();?>pages/View_User"  class="btn <?php if(!isset($_GET['type'])){ echo ' btn-danger';} else { echo 'btn-success';} ?> ">
		View All Users
	</a>

	<a href="<?php echo base_url();?>Pages/View_User/?type=1"  class="btn <?php if(isset($_GET['type'])){ if($_GET['type']==1){echo ' btn-danger';} else { echo 'btn btn-success';} } else { echo 'btn-success';} ?> ">
		Super Admin
	</a>

	
	<a href="<?php echo base_url();?>Pages/View_User/?type=2"   class="btn <?php if(isset($_GET['type'])){ if($_GET['type']==2){echo ' btn-danger';} else { echo 'btn btn-success';} } else { echo 'btn-success';} ?> ">
		Chief Priest
	</a>
	<a href="<?php echo base_url();?>Pages/View_User/?type=3"   class="btn <?php if(isset($_GET['type'])){ if($_GET['type']==3){echo ' btn-danger';} else { echo 'btn btn-success';} } else { echo 'btn-success';} ?> ">
		Priest
	</a>
	<a href="<?php echo base_url();?>Pages/View_User/?type=4"   class="btn <?php if(isset($_GET['type'])){ if($_GET['type']==4){echo ' btn-danger';} else { echo 'btn btn-success';} } else { echo 'btn-success';} ?> ">
		Cook Priest
	</a>


	<a href="<?php echo base_url();?>Pages/View_User/?type=5"   class="btn <?php if(isset($_GET['type'])){ if($_GET['type']==5){echo ' btn-danger';} else { echo 'btn btn-success';} } else { echo 'btn-success';} ?> ">
		Admin Executive  
	</a>
	<a href="<?php echo base_url();?>Pages/Add_User"  class="btn btn-success">
		Add New User
	</a>
			</div>
		</div>
	</div>
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
										 	<th  class="width_action">User Name</th>
										 	<th  class="width_action">Name</th>
											<th  class="width_action">Mobile </th>
											<th  class="width_action">Email</th>
											<th  class="width_action">Role </th>
											<th  class="width_action">Status </th>
											<th class="width_action">Action</th>
										</tr>
									</thead>
									<tbody> 

									<?php 
										$count =1;
										foreach($puja_list as $myresult){
if ($myresult->id!=1) {
	

									?>	
																			
										<tr>
											<td><?php echo $count; ?></td>
											<td><?php echo $myresult->adminusername; ?></td>
											<td><?php echo $myresult->name_title; ?> <?php echo $myresult->name; ?>  <?php echo $myresult->last_name; ?></td>
											<td>+65 <?php echo $myresult->mobleno; ?></td>
											<td><?php echo $myresult->email; ?></td>
											<td>

												<?php 
													if ($myresult->rol==1) {
														echo 'Super Admin';
													}
													if ($myresult->rol==2) {
														echo 'Chief Priest';
													}
													if ($myresult->rol==3) {
														echo 'Priest';
													}
													if ($myresult->rol==4) {
														echo 'Cook Priest';
													}
													if ($myresult->rol==5) {
														echo 'Admin Executive  ';
													}
												?>
												

											</td>
											<td><?php if ($myresult->status==1) {
												echo 'Active';
											} else {
												echo 'Inactive';
											} ?></td>
<td> 
<div class="btn-group" role="group" aria-label="Basic example">                                                                           
	<a href="<?php echo base_url();?>Pages/Add_User/edit/<?php echo $myresult->id; ?>" title="Edit" class="btn btn-info btn-xs" data-placement="top" data-original-title="Edit"  onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};"><i class="fa fa-edit"></i></a>

&nbsp;

<a href="<?php echo base_url();?>Pages/BlockUserTimeSlot/<?php echo $myresult->id; ?>" class="btn btn-info btn-xs">Block Slot</a>



<!-- 	<a href="<?php echo base_url();?>Pages/ViewBooking/<?php echo $myresult->id; ?>" class="btn btn-info btn-xs">View Booking</a> -->
	<!--<a href="<?php echo base_url();?>Pages//ViewBookingInGraph/<?php echo $myresult->id; ?>" class="btn btn-info btn-xs">View  Booking In Graph</a>-->
	
	<!-- <a href="<?php echo base_url();?>Pages/View_User/delete/<?php echo $myresult->id; ?>" title="inactive" class="btn-link btn_size has-tooltip text-info" data-placement="top" data-original-title="Edit"><i class="fa fa-trash"></i></a> -->
</div>
</td>       

</tr>

<?php $count++; 


}  # code...
} ?>										
									</tbody>
								</table>
								
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>