<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Staff</li>
				</ul>
				<h4>Add Staff</h4>
			</div>
		</div><!-- media --> 
	</div><!-- pageheader -->

	<div class=" ">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 text-right">	
				<a  href="<?php echo base_url();?>pages/View_User"  class="btn <?php if(!isset($_GET['type'])){ echo ' btn-danger';} else { echo 'btn-success';} ?> ">
					View All Users
				</a>
<?php if($this->uri->segment(3)=='edit'){ ?>
				<a href="<?php echo base_url();?>Pages/Add_User"  class="btn btn-success">
					Add New
				</a>
<?php } ?>

			</div>
		</div>
	</div>
	<div class="contentpanel">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
						<div class="">
						<?php if($this->uri->segment(3)=='edit'){ ?>
							<form action="<?php echo base_url();?>Pages/Add_User/edit/<?php echo $this->uri->segment(4); ?>/update" class="" rol="form" id="form" method="post" accept-charset="utf-8"  enctype="multipart/form-data">
						<?php } else { ?>	
							<form action="<?php echo base_url();?>Pages/Add_User/insert" class="" rol="form" id="form" method="post" accept-charset="utf-8"  enctype="multipart/form-data">	
						<?php } ?>
					<?php echo $this->session->flashdata('success');?>  
					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="adminusername">User Name <?php if($this->uri->segment(3)=='edit'){ } else { ?> <abbr class="text-danger">*</abbr><?php } ?></label>
						 
							<input type="text" class="form-control" name="adminusername" id="adminusername" value="<?php if($this->uri->segment(3)=='edit'){  echo $all_packages->adminusername;  } else {  echo set_value('adminusername'); }?>" autocomplete="off" placeholder="User Name"/>
							<span name ='form_err'><?=form_error('adminusername');?></span>
						</div>
					</div>


					
					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="adminpassword">Password  <?php if($this->uri->segment(3)=='edit'){ } else { ?> <abbr class="text-danger">*</abbr><?php } ?> </label>
						 
							<input type="password" class="form-control" name="adminpassword" id="adminpassword" value="" autocomplete="off" placeholder="Password"/>
							<span name ='form_err'><?=form_error('adminpassword');?></span>
						</div>
					</div>
<hr />
<div class="form-group col-sm-12">
	<div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="name_title">Name Prefix <abbr class="text-danger">*</abbr></label>
              <select class="form-control" id="name_title" name="name_title">
                
<option <?php if($this->uri->segment(3)=='edit'){ if($all_packages->name_title=='Mr'){ ?> selected <?php }  } ?>  value="Mr">Mr.</option>
<option <?php if($this->uri->segment(3)=='edit'){ if($all_packages->name_title=='Madam'){ ?> selected <?php }  } ?>  value="Madam">Madam.</option>
<option <?php if($this->uri->segment(3)=='edit'){ if($all_packages->name_title=='Miss'){ ?> selected <?php }  } ?>  value="Miss">Miss.</option>
<option <?php if($this->uri->segment(3)=='edit'){ if($all_packages->name_title=='Dr'){ ?> selected <?php }  } ?>  value="Dr">Dr.</option>
<option <?php if($this->uri->segment(3)=='edit'){ if($all_packages->name_title=='A/Prof'){ ?> selected <?php }  } ?>  value="A/Prof">A/Prof.</option>
<option <?php if($this->uri->segment(3)=='edit'){ if($all_packages->name_title=='Prof'){ ?> selected <?php }  } ?>  value="Prof">Prof.</option>
<option <?php if($this->uri->segment(3)=='edit'){ if($all_packages->name_title=='Acharya'){ ?> selected <?php }  } ?>  value="Acharya">Acharya.</option>




              </select>
              <span name ='form_err'><?=form_error('name_title');?></span>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="name">First Name <abbr class="text-danger">*</abbr></label>

<input  value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->name;  } else {  echo set_value('name'); }?>" type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="First name">
            <span name ='form_err'><?=form_error('name');?></span>
        </div>
    </div>

    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="last_name">Last Name <abbr class="text-danger">*</abbr></label>
            <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last name" value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->last_name;  } else {  echo set_value('last_name'); }?>">
        <span name ='form_err'><?=form_error('last_name');?></span>
    </div>
    </div>
</div>
	
					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="mobleno">Mobile <abbr class="text-danger">*</abbr></label>
						 
 <input type="text" class="form-control number" name="mobleno" id="mobleno"  value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->mobleno;  } else {  echo set_value('mobleno'); }?>" maxlength="8" placeholder="Mobile"/>
							<span name ='form_err'><?=form_error('mobleno');?></span>
						</div>
					</div>



					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="email">Email </label>
						 
							<input type="text" class="form-control" name="email" id="email"  value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->email;  } else {  echo set_value('email'); }?>" autocomplete="off" placeholder="Email"/>
							<span name ='form_err'><?=form_error('email');?></span>
						</div>
					</div>

				<!-- 	<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="priest_price">Priest Price </label>
						 
							<input type="text" class="form-control" name="priest_price" id="priest_price"  value="<?php if($this->uri->segment(3)=='edit'){ echo $all_packages->priest_price;  } else {  echo set_value('priest_price'); }?>" autocomplete="off" placeholder="Priest Price"/>
							<span name ='form_err'><?=form_error('priest_price');?></span>
						</div>
					</div>
 -->




					 
					<div class="form-group col-sm-12">
						<div class="col-sm-4">
							<label class="control-label required" for="rol">Role <abbr class="text-danger">*</abbr></label>
						</div>
						<div class="col-sm-8">
							<label>
<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->rol=='1'){ ?>  checked="checked" <?php }  } else { ?>  checked="checked" <?php }?> type="radio" name="rol" id="rol" value="1" autocomplete="off"/> Super Admin &nbsp; &nbsp;
							</label>
<label>
<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->rol=='2'){ ?>  checked="checked" <?php } } ?> type="radio" name="rol" id="rol" value="2" autocomplete="off"/> Chief Priest &nbsp; &nbsp;
							</label>
							<label>
<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->rol=='3'){ ?>  checked="checked" <?php }}?>  type="radio" name="rol" id="rol" value="3" autocomplete="off"/> Priest &nbsp; &nbsp;
							</label>
							<label>
 <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->rol=='4'){ ?>  checked="checked" <?php }}?>  type="radio" name="rol" id="rol" value="4" autocomplete="off"/> Cook Priest &nbsp; &nbsp;
							</label>


							<label>
 <input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->rol=='5'){ ?>  checked="checked" <?php }}?>  type="radio" name="rol" id="rol" value="5" autocomplete="off"/> Admin Executive &nbsp; &nbsp;
							</label>



							<span name ='form_err'><?=form_error('rol');?></span>
						</div>
					</div>



					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="profilepic">Profile Image </label>
							<input type="file" class="form-control" name="profilepic" id="profilepic" autocomplete="off" />
							<span name ='form_err'><?=form_error('profilepic');?></span>
							 <div style="font-size: 11px !important; color: red;">
							<?php if($this->uri->segment(3)=='edit'){ ?>
								<input type="hidden" name="profilepic_old" value="<?=$all_packages->profilepic;?>">
							<?php } ?>

	<?php 

echo $this->session->flashdata('image_error');


?></div>
						</div>
					</div>

<div class="row">
					<div class="col-sm-8">
						<table class="table table-responsive">
							<tbody>
								<tr>
									<th>Status</th>
									<th>
										<label>
											<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->status==1){ ?>  checked="checked" <?php }} else { ?> checked="checked" <?php } ?> type="radio" name="status" id="status" value="1" autocomplete="off"/> Active &nbsp; &nbsp;
										</label>
									
										<label>
											<input <?php if($this->uri->segment(3)=='edit'){ if($all_packages->status==0){ ?>  checked="checked" <?php }} else { ?>   <?php } ?>  type="radio" name="status" id="status2" value="0" autocomplete="off"/> Inactive &nbsp; &nbsp;
										</label>
									</th>
								</tr>
  

							</tbody>
						</table>
					</div>

					<div class="col-sm-4">
						<?php if($this->uri->segment(3)=='edit'){  ?>
						<?php if($all_packages->profilepic!=''){ ?><div class="img-thumbnail">
							<img src="<?=base_url();?>../assets/profile/<?=$all_packages->profilepic;?>" class="img-responsive">
					</div>
					<?php }}?>

					</div>
					</div>


					 



						
  


							<div class="form-group col-sm-12">
									<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="add_product"><?php if($this->uri->segment(3)=='edit'){ echo 'Update';  } else echo 'Save'; ?></button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>