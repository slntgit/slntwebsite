<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="<?php echo base_url();?>" style="color: gray !important;">Dashboard</a></li>
					<li> Setting</li>
				</ul>
				<h4>Images Gallery</h4>
			
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="shu-add">
									<div class="col-sm-12">
										<a href="<?=base_url('slider/add-slider');?>" class="btn btn-success btn-xs">Add Slider</a>
									</div>
								</div>	
						<div class="row">
							<?php
					          $success = $this->session->userdata('success');
					          if (!$success == "") {
					        ?>
					        <div class="alert alert-success"><?php echo $success; ?></div>
					        <?php
					          }
					        ?>
					        <?php
					          $failure = $this->session->userdata('failure');
					          if (!$failure == "") {
					        ?>
					        <div class="alert alert-success"><?php echo $failure; ?></div>
					        <?php
					          }
					        ?>
						    <div class="col-sm-12">
						        <table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%" role="grid" aria-describedby="example_info">
						            <thead>
						                <tr role="row">
						                    <th>#</th>
						                    <th>Image</th>
						            		<th>Created At</th>
						                    <th>Action</th>
						                </tr>
						            </thead>
						            <tbody>
										<?php  $temp =0;
											foreach ($data as $data) {   
										?>
										<tr>
											<td><?php echo ++$temp; ?></td>
											<td>
									          <img src="<?php echo base_url('./assets/images/slider/'); ?><?php echo $data['feature_image'];?>" alt="" width="100">   
									        </td>
											<td><?php echo $data['created_at'];?></td>
									        <td>
									            <div class="btn-group">
													<a href="<?php echo base_url('slider/delete/'); ?><?php echo $data['id'] ?>" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger btn-xs">Delete</a>      
									            </div>
									        </td>
										</tr>
						          		<?php } ?>         
						            </tbody>
						        </table>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- col-sm-12 -->	
	</div><!-- row -->
</div>

<style type="text/css">
	.shu-mt-ml{
		margin-top: 40px;
    	margin-left: 1px!important;
	}
	.shu-add{
		margin-bottom: 50px;
	}
</style>