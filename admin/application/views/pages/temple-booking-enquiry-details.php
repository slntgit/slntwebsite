<div class="mainpanel">
	<div class="pageheader">
		<div class="media">
			<div class="media-body">
				<ul class="breadcrumb">
					<li><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
					<li>Manage Enquiry</li>
				</ul>
				<h4>View Temple Booking Enquiry</h4>
			</div>
		</div><!-- media -->
	</div><!-- pageheader -->
	
	<div class="contentpanel">	
	  <div class="row">
                                                    <div class="col-sm-12 col-md-4">
                                                    <?php echo $this->session->flashdata('success');?> 
                                                    </div>
                                                </div>
                                                
                                                <br />
		<div class="row">	
			<div class="col-sm-12 col-md-12 ">				
				<div class="panel panel-default">					
					<div class="panel-body">
					   
                                                        
						<div class="table table-responsive">
								 
						  <form action="<?=base_url();?>Pages/TempleBookingEnquiry/details/<?=$this->uri->segment(4);?>?action=save/update" method="post">
                                        <fieldset>
                                            <div class="form-group">
                                                
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-4">
                                                        <label>Choose Type  <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-12  col-md-8">
                                                        <label>
                                                            <input type="radio" name="choose_type" id="choose_type" value="1" <?php if($dx->choose_type==1){ echo 'checked'; } ?>  />
                                                            Temple Booking
                                                        </label>
                                                        &nbsp; &nbsp;
                                                        <label>
                                                            <input type="radio" name="choose_type" id="choose_type1" value="2" <?php if($dx->choose_type==2){ echo 'checked'; } ?>  />
                                                            Refreshment Booking
                                                        </label>
                                                          <?=form_error('choose_type');?>
                                                    </div>
                                                </div>
                                                <hr />
                                                <?php $floor = json_decode($dx->choose_floor);?>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-4">
                                                        <label>Choose Floor <span class="text-danger">*</span></label>
                                                    </div>
                                                    
                                                    <div class="col-sm-12  col-md-8">
                                                        <label>
                                                            <input type="checkbox" name="choose_floor[]" value="First Floor"  <?php if(in_array('First Floor', $floor)){ echo 'checked'; } ?>  />
                                                            First Floor
                                                        </label>
                                                        &nbsp; &nbsp;
                                                        <label>
                                                            <input type="checkbox" name="choose_floor[]" value="Second Floor"  <?php if(in_array('Second Floor', $floor)){ echo 'checked'; } ?> />
                                                            Second Floor
                                                        </label>
                                                        
                                                        &nbsp; &nbsp;
                                                        <label>
                                                            <input type="checkbox" name="choose_floor[]" value="Third Floor" <?php if(in_array('Third Floor', $floor)){ echo 'checked'; } ?>  />
                                                            Third Floor
                                                        </label> 
                                                        
                                                        &nbsp; &nbsp;
                                                        <label>
                                                            <input type="checkbox" name="choose_floor[]" value="Kitchen / Fourth Floor" <?php if(in_array('Kitchen / Fourth Floor', $floor)){ echo 'checked'; } ?>  />
                                                            Kitchen / Fourth Floor
                                                        </label>
                                                          <?=form_error('choose_floor[]');?>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                <div class="row">
                                                    <div class="col-sm-12  col-md-4">
                                                        <label>Purpose <span class="text-danger">*</span></label>
                                                    </div>
                                                    
                                                    <div class="col-sm-12  col-md-8">
                                                         <textarea class="form-control textarea" name="purpose" id="purpose" rows="6"><?php echo $dx->purpose;?></textarea>
                                                           <?=form_error('purpose');?>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                
                                                
                                                 <div class="row">
                                                    <div class="col-sm-12  col-md-4">
                                                        <label>Duration <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-12  col-md-8">
                                                        <div class="row">
                                                    <div class="col-sm-12 col-md-4">
                                                        <lable>Choose Date</lable>
                                                        <input type="date" class="form-control" value="<?php echo $dx->choose_date;?>" name="choose_date" id="txtDate" min="<?=date('m/d/Y');?>" />
                                                          <?=form_error('choose_date');?>
                                                    </div>
                                                    
                                                    <div class="col-sm-12 col-md-4">
                                                        <lable>Choose Start Time</lable>
                                                        <input type="time" class="form-control"  value="<?php echo $dx->choose_start_time;?>" name="choose_start_time" id="choose_start_time" />
                                                          <?=form_error('choose_start_time');?>
                                                    </div>
                                                    
                                                    <div class="col-sm-12 col-md-4">
                                                        <lable>Choose End Time</lable>
                                                        <input type="time" class="form-control" value="<?php echo $dx->choose_end_time;?>"  name="choose_end_time" id="choose_end_time" />
                                                          <?=form_error('choose_end_time');?>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                                <hr />
                                                
                                                
                                                
                                                <div class="row">
                                                    <div class="col-sm-12  col-md-4">
                                                        <label>No. Of Guests <span class="text-danger">*</span></label>
                                                    </div>
                                                    
                                                    <div class="col-sm-12  col-md-8">
                                                         <select class="form-control" name="no_of_guests">
                                                             <option value="50" <?php if($dx->no_of_guests=='50'){ echo 'selected'; } ?> >50</option>
                                                             <option value="100" <?php if($dx->no_of_guests=='100'){ echo 'selected'; } ?> >100</option>
                                                             <option value="150" <?php if($dx->no_of_guests=='150'){ echo 'selected'; } ?> >150</option>
                                                             <option value="200" <?php if($dx->no_of_guests=='200'){ echo 'selected'; } ?> >200</option>
                                                             <option value="250" <?php if($dx->no_of_guests=='250'){ echo 'selected'; } ?> >250</option>
                                                             <option value="400" <?php if($dx->no_of_guests=='400'){ echo 'selected'; } ?> >400</option>
                                                             <option value="500" <?php if($dx->no_of_guests=='500'){ echo 'selected'; } ?> >500</option>
                                                             <option value="500+" <?php if($dx->no_of_guests=='500+'){ echo 'selected'; } ?> >500+</option>
                                                         </select>
                                                           <?=form_error('no_of_guests');?>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                
                                                
                                                <div class="row">
                                                   <div class="col-sm-12  col-md-4"> 
                                                        <label>Catering <span class="text-danger">*</span></label>
                                                    </div>
                                                    
                                                    <div class="col-sm-12  col-md-8">
                                                        <label>
                                                            <input type="radio" name="catering" value="1" <?php if($dx->catering==1){ echo 'checked'; } ?>  />
                                                            Yes
                                                        </label>
                                                        &nbsp; &nbsp;
                                                        <label>
                                                            <input type="radio" name="catering" value="0" <?php if($dx->catering==0){ echo 'checked'; } ?> />
                                                            No
                                                        </label>
                                                          <?=form_error('catering');?>
                                                    </div>
                                                </div>
                                                <hr /> 
                                                   <div class="row">
                                                       <div class="col-sm-12">
                                                            <label>Contact Information <span class="text-danger">*</span></label>
                                                        </div>
                                                    </div>
                                                <hr /> 
                                                  <div class="row">
                                                     <div class="col-sm-2">
                                                        <label for="name_prefix">Name Prefix  <span class="text-danger">*</span></label>
                                                        <select class="form-control" id="name_prefix" name="name_prefix" readonly disabled>
                                                            <option <?php if($dx->name_prefix=='Mr'){ echo 'selected'; } ?> value="Mr">Mr.</option>
                                                            <option <?php if($dx->name_prefix=='Madam'){ echo 'selected'; } ?> value="Madam">Madam.</option>
                                                            <option <?php if($dx->name_prefix=='Miss'){ echo 'selected'; } ?> value="Miss">Miss.</option>
                                                            <option <?php if($dx->name_prefix=='Dr'){ echo 'selected'; } ?> value="Dr">Dr.</option>
                                                            <option <?php if($dx->name_prefix=='A/Prof'){ echo 'selected'; } ?> value="A/Prof">A/Prof.</option>
                                                            <option <?php if($dx->name_prefix=='Prof'){ echo 'selected'; } ?> value="Prof">Prof.</option>
                                                        </select>
                                                        <?=form_error('name_prefix');?>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <label for="first_name">First Name  <span class="text-danger">*</span></label>

<input type="text" class="form-control" name="first_name" id="first_name"  value="<?php  echo $dx->first_name;?>" readonly disabled />
                                                          <?=form_error('first_name');?>
                                                    </div>

                                                    <div class="col-sm-5">
                                                        <label for="last_name">Last Name  <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="last_name" id="last_name"  value="<?php echo $dx->last_name;?>" readonly disabled />
                                                          <?=form_error('last_name');?>
                                                    </div>
                                                </div>
                                                
                                                  
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <label for="email">Email</label>
<input type="email" class="form-control" name="email" id="email" value="<?php echo $dx->email;?>"  readonly disabled />
                                                          <?=form_error('email');?>
                                                    </div>

                                                    <div class="col-sm-7">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <label for="mobile_code">Mobile Code</label>
                                                                <input type="text" value="+65" class="form-control" name="mobile_code" id="mobile_code" readonly="" disabled="" />
                                                                  <?=form_error('mobile_code');?>
                                                            </div>

                                                            <div class="col-sm-9">
                                                                <label for="mobile">Mobile</label>
<input type="text" class="form-control number"  value="<?php echo $dx->mobile;?>" name="mobile" id="mobile" maxlength="8"  readonly disabled/>
                                                                  <?=form_error('mobile');?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 
                                                
                                                   <div class="row">
                                                    
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <label for="office_code">Code</label>
                                                                <input type="text" value="+65" class="form-control" name="office_code" id="office_code" readonly="" disabled="" />
                                                                 <?=form_error('office_code');?>
                                                            </div>

                                                            <div class="col-sm-9">
                                                                <label for="office_no">Office Number</label>
<input type="text" class="form-control number" name="office_no"  value="<?php echo $dx->office_no;?>" id="office_no" maxlength="8" readonly disabled />
                                                                <?=form_error('office_no');?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                
                                                
                                                 <div class="row">
                                                     <div class="col-sm-12  col-md-4">
                                                        <label for="status">Status <span class="text-danger">*</span></label>
                                                    </div>
                                                    
                                                    <div class="col-sm-12  col-md-8">
                                                   
                                                        <select class="form-control" id="status" name="status">
                                                            <option <?php if($dx->status==0){ echo 'selected'; } ?> value="0">Pending</option>
                                                            <option <?php if($dx->status==1){ echo 'selected'; } ?> value="1">Confirm</option>
                                                            <option <?php if($dx->status==2){ echo 'selected'; } ?> value="2">Cancel</option>
                                                             
                                                        </select>
                                                        <?=form_error('status');?>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                
                                                
                                                 <div class="row">
                                                    <div class="col-sm-12  col-md-4">
                                                        <label>Admin Notes <span class="text-danger">*</span></label>
                                                    </div>
                                                    
                                                    <div class="col-sm-12  col-md-8">
                                                         <textarea class="form-control textarea" name="temple_notes" id="temple_notes" rows="6"><?php echo $dx->temple_notes;?></textarea>
                                                           <?=form_error('temple_notes');?>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                
                                                
                                                <div class="row">
                                                    <div class="col-sm-12 text-center">
                                                        <br />
                                                        <br />
                                                        <button class="btn btn-info" type="submit">
                                                            Save
                                                        </button>
                                                        <a href="<?=base_url();?>Pages/TempleBookingEnquiry"  class="btn btn-info" >Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
								
						</div>
					</div>
				</div>
			</div><!-- col-sm-12 -->	
		</div><!-- row -->  
	</div><!-- contentpanel -->
	
</div>