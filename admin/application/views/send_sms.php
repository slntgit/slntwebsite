<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="index.php">Dashboard</a></li>
					<li>Setting</li>
				</ul>
				<h4>Send SMS</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						
  <div class="alert alert-success errorHandler no-display">
 <?php echo validation_errors(); ?>
 <?php if($this->session->flashdata('success')){ ?>
      <?php echo $this->session->flashdata('success'); ?> <?php } ?>
  </div> 



						<div class="">
							<form action="<?= base_url();?>pages/send_sms/send" class="form-horizontal" id="SendsmsIndexForm" method="post" accept-charset="utf-8"> 

							<!--	<div class="form-group">
								<label for="site_name" class="col-sm-2 control-label">Type</label>
								<div class="col-sm-10">
									<select name="data[Sendsms][type]" required="required" class="form-control" id="SendsmsType">
									<option value="">Please Select</option>
									<option value="all">All</option>									
									<option value="Any">Any Sms</option>
									</select>            
								</div>
							</div>	 -->						
							
							<div class="form-group" id="any">
								<label for="site_name" class="col-sm-2 control-label">Number</label>
								<div class="col-sm-10">
									<input name="number" placeholder="Type any number" class="form-control" type="text" id="SendsmsAnySms"/>            </div>
							</div>							
							<div class="form-group">
								<label for="group_name" class="col-sm-2 control-label">Sms Template:</label>
								<div class="col-sm-8">
									<textarea name="message" class="form-control" placeholder="Type sms message" rows="5" id="SendsmsMessage"></textarea>            </div>
								<div class="span2">
									<div id="characterLeft"></div>
								</div>
							</div>
							<div class="form-group text-left">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-success"><span
											class="fa fa-mobile"></span>&nbsp;Send</button>
									<button type="reset" class="btn btn-danger"><span class="fa fa-send"></span>&nbsp;Reset</button>            </div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>
