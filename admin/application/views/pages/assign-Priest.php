<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Priest For Pooja</li>
				</ul>
				<h4>Assign Priest</h4>
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
								<h3>Assign priest to <mark><?=$all_packages->description_charge;?></mark></h3>
								<br />
<form action="<?=base_url();?>Pages/Assign_Priest/<?=$this->uri->segment(3);?>/save" method="post">
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
											 
										</tr>
									</thead>
									<tbody> 

									<?php 
										$count =1;
										foreach($puja_list as $myresult){
										if ($myresult->id!=1) {
	

									?>	
																			
										<tr>
											<td>
												<?php echo $count; ?>
												

											</td>
											<td><?php echo $myresult->adminusername; ?></td>
											<td><?php echo $myresult->name_title; ?> <?php echo $myresult->name; ?>  <?php echo $myresult->last_name; ?></td>
											<td><?php echo $myresult->mobleno; ?></td>
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
										</tr>

<?php $count++; 


}  # code...
} ?>										
									</tbody>
									<tfoot>
										<tr>
											<td colspan="7">
												<button class="btn btn-success pull-right">Save & Update</button>
											</td>
										</tr>
									</tfoot>
								</table>
	</form>							
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>