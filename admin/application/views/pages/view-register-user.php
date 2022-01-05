<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage  User</li>
				</ul>
				<h4>All Register User</h4>
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
										 	<th  class="width_action"> Name</th>
											<th  class="width_action">Email / Contact No</th>
											<th  class="width_action">Membership</th>
											<!-- <th  class="width_action">Address </th> -->
											<th class="width_action">Status</th>
											<th class="width_action">Action</th>
											 
										</tr>
									</thead>
									<tbody> 
									<?php 
										$count =1;
										foreach($memberlist->result() as $myresult){
									?>	
																			
								<tr>
									<td>
										<?php echo $count; ?>

									</td>
									<td><?php echo $myresult->name_title; ?>. 
										<?php echo $myresult->first_name; ?> 
										<?php echo $myresult->last_name; ?>
											
										</td>
									<td><?php echo $myresult->email; ?> <br /> +65 <?php echo $myresult->mobile; ?></td>
									<td>
									<?php 
										$this->db->select('*');
										$this->db->from('slnt_user_membership');
										$this->db->where('user_id',$myresult->user_id);
										//$this->db->where('pay_status',1);
										$this->db->order_by('id','DESC');
										$this->db->limit(1);
									    $membership = $this->db->get();
									    if ($membership->num_rows()>0) {
									    	$memdata = $membership->row();

if ($memdata->status==0) {
 echo '<span class="text-warning">'.$memdata->membership_title.'</span>';
} else {
	echo '<span class="text-success">'.$memdata->membership_title.'</span>';
}


									    } else {
									    	echo '<span class="text-danger">No Membership Plan</span>';
									    }
									?>	

									</td>
					 
									<!-- <td>
										<strong>Address 1.</strong>
										<?php echo $myresult->address_1; ?>,<br />
										<strong>Address 2.</strong>
										<?php echo $myresult->address_2; ?>,<br />
										<strong>Postal Code</strong>
										<?php echo $myresult->postal_code; ?>	


									</td> -->
									<td>
										<?php  if ($myresult->status==0) {
													echo '<span class="text-danger">InActive</span>';
												} else {
													echo '<span class="text-success">Active</span>';
												} 
										?>
									</td>
									<td>
									   <a class="btn btn-sm btn-info" href="<?=base_url();?>pages/editProfile/<?php echo $myresult->id; ?>">Edit</a>     
									   <?php  if ($myresult->status==0) { ?>


<a class="btn btn-sm btn-info" href="<?=base_url();?>pages/View_Register_User/<?php echo $myresult->id; ?>/1"  onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Active</a> 
										  	<?php } else {  ?>
										  	 <a class="btn btn-sm btn-info" href="<?=base_url();?>pages/View_Register_User/<?php echo $myresult->id; ?>/0" onclick="if (confirm('Are you sure?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Inactive</a> 
										  	<?php } 
										?>
										    <!-- <li><a href="#">Delete</a></li> -->
<a class="btn btn-sm btn-info" href="<?=base_url();?>pages/UserMembershpList/<?php echo $myresult->id; ?>">Membership Details</a>

        
											     

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