<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li><a href="<?php echo base_url();?>">Dashboard</a></li>
					<li>Manage Users</li>
				</ul>
				<h4>Manage Users</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12">
				<table class="table table-striped table-bordered " style="width:100%">
						<tr><td>
							<div class="text-danger">  <?php echo validation_errors(); ?></div>
            <?php echo  $this->session->flashdata('profile_update_success') ? '<div class="text-success"><b>' . $this->session->flashdata('profile_update_success') . '</b></div>' : ''; ?>
							<button data-toggle="modal" data-target="#associatedMemberList" type="button" class="btn btn-info btn-sm pull-right">Add User</button>
						</td></tr>
				</table>
			</div>
			<div class="col-sm-12 col-md-12 ">
				<div class="table-responsive">
					<table id="example" class="table table-striped table-bordered " style="width:100%">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
															
								<th>Login ID</th>
								<th>Password</th>
								<th>Mobile</th>	
								<th>Email</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$counts=1;
							foreach($all_members as $all_member_result){
						?>	
							
							<tr>
								<td><?php echo $counts; ?></td>
								<td><?php echo $all_member_result->name;?></td>
								<td><?php echo $all_member_result->collegecode;?> (<a data-toggle="modal" data-target="#memberDetails_<?php echo $all_member_result->collegecode;?>" onClick="getRecords(<?php echo $all_member_result->collegecode;?>);" href="">Details</a>) </td>
								<td><?php echo $all_member_result->b_password;?></td>
									<td><?php echo $all_member_result->mobleno;?></td>								
							
								<td><?php echo $all_member_result->email;?></td>
								<td><?php if($all_member_result->status==1){ ?>Active<?php }  else { echo 'inActive';}?></td>
							</tr>
							

<div id="memberDetails_<?php echo $all_member_result->collegecode;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" > Profile Details Of <span class="membertitle"></span></h4>
      </div>
      <div class="modal-body">
         <form action="<?= base_url();?>pages/manage_users/update" method="post"  enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="col-sm-12" for="collegecode">Login ID *</label>
        				<input type="text" name="collegecode" id="collegecode" value="<?php echo $all_member_result->collegecode;?>" readonly class="form-control">
        			</div>
        		</div>

        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="col-sm-12" for="mobleno">Mobile *</label>
        				<input type="text" name="mobleno" id="mobleno" value="<?php echo $all_member_result->mobleno;?>"  class="form-control">
        			</div>
        		</div>

        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="col-sm-12" for="email">Email *</label>
        				<input type="text" name="email" id="email" value="<?php echo $all_member_result->email;?>"  class="form-control">
        			</div>
        		</div>

        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="col-sm-12" for="name">Name *</label>
        				<input type="text" name="name" id="name" value="<?php echo $all_member_result->name;?>"  class="form-control">
        			</div>
        		</div>

        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="col-sm-12" for="adminpassword">Password *</label>
        				<input type="text" name="adminpassword" id="adminpassword" value=""  class="form-control">
        			</div>
        		</div>

        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="col-sm-12" for="status">Status *</label>
        				 <select class="form-control" name="status" id="status">
        				 	<option value="1" <?php if($all_member_result->status==1){ ?>selected=""<?php } ?>>Active</option>
        				 	<option value="0" <?php if($all_member_result->status==0){ ?>selected=""<?php } ?>>InActive</option>
        				 </select>
        			</div>
        		</div>

        		<div class="col-sm-12">
        			<div class="form-group">
        				<label class="col-sm-12" for="profilepic">Profile Pic *</label>
        				<input type="file" name="profilepic" id="profilepic" class="form-control col-sm-12">
<?php if($all_member_result->profilepic!=''){ ?>
        				<img src="<?= base_url();?>../assets/setting/<?= $all_member_result->profilepic?>" style="width: 150px;" class="pull-right">
<?php } ?>
        			</div>
        		</div>
        		<div class="col-sm-12">
        			<div class="form-group">
        				<input type="submit" name="savedata" value="Save" class="btn btn-info">
        			</div>
        		</div>










        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

						<?php $counts++; } ?>
							
							
						</tbody>
					</table>
				</div>	
			
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>
<!-- Associated Member Modal -->
<script>
function getRecords(str){

	$('.membertitle').text(str);
	//$('#model_head').text('Profile Id : '+str);
	$.ajax({
    type: "POST",
    url: '<?php echo base_url();?>pages/getProdile/'+str,
    data: "id="+str,
    success: function(data) {
         
          $('#model_body').html(data);
     }

   });
}

</script>	
 
<script>
	function getAssociats(str){
		//alert(str);
		$('.membertitle2').text(str);
	}
</script>

<div id="associatedMemberList" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Associated Member List Of <span class="membertitle2"></span></h4>
      </div>
      <div class="modal-body">
        <form action="<?= base_url();?>pages/manage_users/insert" method="post"  enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-sm-6">
        			<div class="form-group">
        				<?php 


        					$num0 = (rand(10,9999));
						    $num1 = rand(9999,date("isd"));
						    $num2 = (rand(99,9999));
						   	$num3 = time();
						    $x = $num0.$num1.$num2.$num3;
						    $randnum=substr($x,0,8).$all_members2->id;

        				?>
        				<label class="col-sm-12" for="collegecode">Login ID *</label>
        				<input type="text" name="collegecode" id="collegecode" value="<?= $randnum;?>" readonly class="form-control">
        			</div>
        		</div>

        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="col-sm-12" for="mobleno">Mobile *</label>
        				<input type="text" name="mobleno" id="mobleno" value=""  class="form-control">
        			</div>
        		</div>

        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="col-sm-12" for="email">Email *</label>
        				<input type="text" name="email" id="email" value=""  class="form-control">
        			</div>
        		</div>

        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="col-sm-12" for="name">Name *</label>
        				<input type="text" name="name" id="name" value=""  class="form-control">
        			</div>
        		</div>

        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="col-sm-12" for="adminpassword">Password *</label>
        				<input type="text" name="adminpassword" id="adminpassword" value=""  class="form-control">
        			</div>
        		</div>

        		<div class="col-sm-6">
        			<div class="form-group">
        				<label class="col-sm-12" for="status">Status *</label>
        				 <select class="form-control" name="status" id="status">
        				 	<option value="1">Active</option>
        				 	<option value="0">InActive</option>
        				 </select>
        			</div>
        		</div>

        		<div class="col-sm-12">
        			<div class="form-group">
        				<label class="col-sm-12" for="profilepic">Profile Pic *</label>
        				<input type="file" name="profilepic" id="profilepic" class="form-control col-sm-12">
        			</div>
        		</div>
        		<div class="col-sm-12">
        			<div class="form-group">
        				<input type="submit" name="savedata" value="Save" class="btn btn-info">
        			</div>
        		</div>










        	</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>