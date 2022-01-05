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
						<div class="">
							<form action="<?php echo base_url('slider/create');?>" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
								<?php if($this->session->flashdata('success') != "") { ?>
              						<div class="alert alert-success" style="font-size: 11px !important; text-align: center;"><?php echo $this->session->flashdata('success');  ?></div>
            					<?php } ?>
								<div class="row">
									<div class="col-sm-12">
										<a href="<?=base_url('slider/view-slider');?>" class="btn btn-success btn-xs">View Slider</a>
									</div>
								</div>					
								<div class="form-group shu-mt-ml">
			                        <label>Slider Image</label><br>
			                        	<input type="file" name="feature_image" placeholder="Slider Image" required="">
			                    </div>
								<div class="form-group text-left">
									<div class="col-sm-offset-3 col-sm-7">
											<button type="submit" class="btn btn-lg btn-primary" name="submit">Submit</button>
									</div>
								</div>
							</form>
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
</style>