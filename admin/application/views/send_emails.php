<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="index.php">Dashboard</a></li>
					<li>Setting</li>
				</ul>
				<h4>Send Emails</h4>
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
							<form action="<?= base_url();?>pages/send_emails/send"  class="form-horizontal" id="SendemailIndexForm" method="post" accept-charset="utf-8">


							<!--	<div class="form-group">
								<label for="site_name" class="col-sm-2 control-label">Type</label>
								<div class="col-sm-10">
								   <select name="data[Sendemail][type]" required="required" class="form-control" id="SendemailType">
									<option value="">Please Select</option>
									<option value="Student">All</option>									
									<option value="Any">Any Email</option>
									</select>			
								</div>			
								</div> -->
								
								<div class="form-group" id="any">
								<label for="site_name" class="col-sm-2 control-label">Enter Recepients</label>
								<div class="col-sm-10">
								   <input name="any_email" placeholder="Type any email" class="form-control" type="text" id="SendemailAnyEmail"/>			</div>			
								</div>
								<div class="form-group">
								<label for="site_name" class="col-sm-2 control-label">Subject</label>
								<div class="col-sm-10">
								   <input name="subject" placeholder="Type subject" required="required" class="form-control" type="text" id="SendemailSubject"/>			</div>
								</div>
								
								<div class="form-group">
								<label for="group_name" class="col-sm-2 control-label">Email Template:</label>
								<div class="col-sm-10">
									<textarea name="message" class="form-control" placeholder="If you do not want to select email template then simply type email message. Once you load editor then you can not select template go to reset button" cols="30" rows="6" id="SendemailMessage"></textarea><br/>
								</div>
								</div>
								<div class="form-group text-left">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-success"><span class="fa fa-send"></span>&nbsp;Send</button>

									<button type="reset" class="btn btn-danger"><span class="fa fa-send"></span>&nbsp;Reset</button>
								 		</div>
								</div>
								</form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>