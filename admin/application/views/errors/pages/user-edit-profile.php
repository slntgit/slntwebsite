<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="<?=base_url();?>"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Register User</li>
				</ul>
				<h4>Edit Register User</h4>
			</div>
		</div><!-- media --> 
	</div><!-- pageheader -->

	<div class=" ">		
		<div class="row">	
			<div class="col-sm-12 col-md-12 text-right">
			    <br />	
				<a  href="<?php echo base_url();?>pages/View_Register_User"  class="btn <?php if(!isset($_GET['type'])){ echo ' btn-danger';} else { echo 'btn-success';} ?> ">
					View All  Registered Users
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
<form action="<?php echo base_url();?>pages/editProfile/<?php echo $this->uri->segment(3); ?>/update"  id="form" method="post" accept-charset="utf-8"  enctype="multipart/form-data">
					<?php echo $this->session->flashdata('success');?>  
<div class="form-group col-sm-12">
	<div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="name_title">Name Prefix <abbr class="text-danger">*</abbr></label>
              <select class="form-control" id="name_title" name="name_title">
                <option <?php if($all_packages->name_title=='Mr'){ ?> selected <?php } ?>  value="Mr">Mr.</option>
                <option <?php if($all_packages->name_title=='Madam'){ ?> selected <?php } ?>  value="Madam">Madam.</option>
                <option <?php if($all_packages->name_title=='Miss'){ ?> selected <?php } ?>  value="Miss">Miss.</option>
                <option <?php if($all_packages->name_title=='Dr'){ ?> selected <?php }  ?>  value="Dr">Dr.</option>
                <option <?php if($all_packages->name_title=='A/Prof'){ ?> selected <?php } ?>  value="A/Prof">A/Prof.</option>
                <option <?php if($all_packages->name_title=='Prof'){ ?> selected <?php } ?>  value="Prof">Prof.</option>
              </select>
              <span name ='form_err'><?=form_error('name_title');?></span>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="name">First Name <abbr class="text-danger">*</abbr></label>
            <input  value="<?php echo $all_packages->first_name;?>" type="text" name="first_name" id="first_name" tabindex="1" class="form-control alphabet" placeholder="First name">
            <span name ='form_err'><?=form_error('first_name');?></span>
        </div>
    </div>

    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="last_name">Last Name <abbr class="text-danger">*</abbr></label>
            <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control alphabet" placeholder="Last name" value="<?php echo $all_packages->last_name;?>">
        <span name ='form_err'><?=form_error('last_name');?></span>
    </div>
    </div>
</div>
	                <div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="mobile">Mobile <abbr class="text-danger">*</abbr></label>
                        <input type="text" class="form-control number" name="mobile" id="mobile"  value="<?php echo $all_packages->mobile;?>" maxlength="8" placeholder="Mobile"/>
							<span name ='form_err'><?=form_error('mobile');?></span>
						</div>
					</div>



					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="email">Email  <abbr class="text-danger">*</abbr></label>
                            <input type="text" class="form-control" name="email" id="email"  value="<?php echo $all_packages->email;?>" autocomplete="off" placeholder="Email"/>
                            <span name ='form_err'><?=form_error('email');?></span>
						</div>
					</div>

 					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="office_number">Office Number  <abbr class="text-danger">*</abbr></label>
                            <input type="text" class="form-control" name="office_number" id="office_number"  value="<?php echo $all_packages->office_number;?>" autocomplete="off" placeholder="Office Number"/>
                            <span name ='form_err'><?=form_error('office_number');?></span>
						</div>
					</div>

					<div class="form-group col-sm-6">
						<div class="col-sm-12">
							<label class="control-label required" for="address_1">Address 1  <abbr class="text-danger">*</abbr></label>
                            <input type="text" class="form-control" name="address_1" id="address_1"  value="<?php echo $all_packages->address_1;?>" autocomplete="off" placeholder="Address 1"/>
                            <span name ='form_err'><?=form_error('address_1');?></span>
						</div>
					</div>

						
						
<div class="form-group col-sm-6">
    <div class="col-sm-12">
	    <label class="control-label required" for="address_2">Address 2  <abbr class="text-danger">*</abbr></label>
            <input type="text" class="form-control" name="address_2" id="address_2"  value="<?php echo $all_packages->address_2;?>" autocomplete="off" placeholder="Address 2"/>
            <span name ='form_err'><?=form_error('address_2');?></span>
		</div>
</div>

						
<div class="form-group col-sm-6">
    <div class="col-sm-12">
	    <label class="control-label required" for="postal_code">Postal  <abbr class="text-danger">*</abbr></label>
            <input type="text" class="form-control" name="postal_code" id="postal_code"  value="<?php echo $all_packages->postal_code;?>" autocomplete="off" placeholder="Postal code"/>
            <span name ='form_err'><?=form_error('postal_code');?></span>
		</div>
</div>

						
								
							
						
								<div class="form-group col-sm-12">
<button type="submit" class="btn btn-sm btn-primary" name="submit_prod" id="submit_prod" value="Update">Update</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>