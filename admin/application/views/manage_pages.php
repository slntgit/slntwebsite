
<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="">Dashboard</a></li>
					<li>Manage Pages</li>
				</ul>
				<h4>Manage Pages</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	<script type="text/javascript">
		 

		function getdata(id) {
        $.ajax({
            type: "POST",
            url: '<?php echo site_url('Pages/getpagedata').'/';?>'+id,
            data: id = 'cat_id',
            success: function(data) {
                CKEDITOR.instances.editor1.setData(data);
            },
        });
    }

	</script>
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">            
						
        
<div style="font-size: 11px !important; color: red;">


	<?php echo $this->session->flashdata('success'); ?></div>

<form action="<?php echo base_url();?>pages/manage_pages/savedata" method="post" enctype="multipart/form-data">

<table class="table table-bordered table-striped">
	<tbody> 
		<tr>
			<td>
				<select required="required" name="pagename" id="pagename" class="form-control" onchange="getdata(this.value);">
					<option value="">Select Page</option>
					<option value="1">About Us</option>
					<option value="14">Contact Us</option>
					<option value="2">Vision</option>
					<option value="3">Mission</option>
					<option value="4">Privacy & Policy</option>
					<option value="6">Terms & Conditions</option>
					<option value="20">License</option>
					<option value="16">Chairman Message</option>
					<option value="5">Director Message</option>
					<option value="19">Discipline</option>	
					<option value="8">About Home Intro</option>					
					<option value="7">Career</option>					
					

				</select>

										</td>
											    
										</tr>
 										<tr>
 											<td>
 												<textarea name="content" class="ckeditor" id="editor1"></textarea>
 											</td>
 										</tr>
 										<tr>
 											<td>
 												<input type="submit" name="savedata" value="Save" class="btn btn-xs btn-warning pull-right">
 											</td>
 										</tr>
									</tbody>
								</table>	
							</form> 
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>

