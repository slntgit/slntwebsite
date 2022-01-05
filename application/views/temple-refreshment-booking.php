<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0&appId=2275970259335001&autoLogAppEvents=1" nonce="P69xnWle"></script>
<app-root _nghost-ngq-c57="" ng-version="10.0.6">
    <router-outlet _ngcontent-ngq-c57=""></router-outlet>
    <app-landing-page _nghost-ngq-c159="" class="ng-star-inserted">
        <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/events.css" />
        <div _ngcontent-ngq-c159="" class="main-site about-main-site">
            <router-outlet _ngcontent-ngq-c159=""></router-outlet>
            <app-landing-home _nghost-ngq-c160="" class="ng-star-inserted">
                <section class="section-gap banner-section-inner aboutUs-page">
                    <div class="overlay"></div>
                    <div class="container">
                        <section class="header-title d-flex justify-content-center align-content-center">
                            <h1 class="title"> Facility Booking</h1>
                        </section>
                    </div>
                </section>
                <section _ngcontent-ngq-c160="" class="section-gap about-section btn-group-custom">
                    <div _ngcontent-ngq-c160="" class="container">
                        <div class="container" id="fillForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php echo $this->session->flashdata('success'); ?>
                                    <hr />
                                    <form action="<?=base_url();?>Temple-Refreshment-Booking/?action=save/apply" method="post">
                                        <fieldset>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-4">
                                                        <legend>Choose Type  <span class="text-danger">*</span></legend>
                                                    </div>
                                                    <div class="col-sm-12  col-md-8">
                                                        <label>
                                                            <input type="radio" name="choose_type" id="choose_type" value="1" checked />
                                                            Temple Booking
                                                        </label>
                                                        &nbsp; &nbsp;
                                                        <label>
                                                            <input type="radio" name="choose_type" id="choose_type1" value="2" />
                                                            Refreshment Booking
                                                        </label>
                                                          <?=form_error('choose_type');?>
                                                    </div>
                                                </div>
                                                <hr />

                                                <div class="row">
                                                    <div class="col-sm-12 col-md-4">
                                                        <legend>Choose Floor <span class="text-danger">*</span></legend>
                                                    </div>
                                                    
                                                    <div class="col-sm-12  col-md-8">
                                                        <label>
                                                            <input type="checkbox" name="choose_floor[]" value="First Floor" checked />
                                                            First Floor
                                                        </label>
                                                        &nbsp; &nbsp;
                                                        <label>
                                                            <input type="checkbox" name="choose_floor[]" value="Second Floor" />
                                                            Second Floor
                                                        </label>
                                                        
                                                        &nbsp; &nbsp;
                                                        <label>
                                                            <input type="checkbox" name="choose_floor[]" value="Third Floor" />
                                                            Third Floor
                                                        </label> 
                                                        
                                                        &nbsp; &nbsp;
                                                        <label>
                                                            <input type="checkbox" name="choose_floor[]" value="Kitchen / Fourth Floor" />
                                                            Kitchen / Fourth Floor
                                                        </label>
                                                          <?=form_error('choose_floor[]');?>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                <div class="row">
                                                    <div class="col-sm-12  col-md-4">
                                                        <legend>Purpose <span class="text-danger">*</span></legend>
                                                    </div>
                                                    
                                                    <div class="col-sm-12  col-md-8">
                                                         <textarea class="form-control textarea" name="purpose" id="purpose" rows="20"><?=set_value('purpose');?></textarea>
                                                           <?=form_error('purpose');?>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                
                                                
                                                 <div class="row">
                                                    <div class="col-sm-12  col-md-4">
                                                        <legend>Duration <span class="text-danger">*</span></legend>
                                                    </div>
                                                    <div class="col-sm-12  col-md-8">
                                                        <div class="row">
                                                    <div class="col-sm-12 col-md-4">
                                                        <lable>Choose Date</lable>
                                                        <input type="date" class="form-control" name="choose_date" id="txtDate" min="<?=date('m/d/Y');?>" />
                                                          <?=form_error('choose_date');?>
                                                    </div>
                                                    
                                                    <div class="col-sm-12 col-md-4">
                                                        <lable>Choose Start Time</lable>
                                                        <input type="time" class="form-control" name="choose_start_time" id="choose_start_time" />
                                                          <?=form_error('choose_start_time');?>
                                                    </div>
                                                    
                                                    <div class="col-sm-12 col-md-4">
                                                        <lable>Choose End Time</lable>
                                                        <input type="time" class="form-control" name="choose_end_time" id="choose_end_time" />
                                                          <?=form_error('choose_end_time');?>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                                <hr />
                                                
                                                
                                                
                                                <div class="row">
                                                    <div class="col-sm-12  col-md-4">
                                                        <legend>No. Of Guests <span class="text-danger">*</span></legend>
                                                    </div>
                                                    
                                                    <div class="col-sm-12  col-md-8">
                                                         <select class="form-control" name="no_of_guests">
                                                             <option value="50">50</option>
                                                             <option value="100">100</option>
                                                             <option value="150">150</option>
                                                             <option value="200">200</option>
                                                             <option value="250">250</option>
                                                             <option value="400">400</option>
                                                             <option value="500">500</option>
                                                             <option value="500+">500+</option>
                                                         </select>
                                                           <?=form_error('no_of_guests');?>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                
                                                
                                                <div class="row">
                                                   <div class="col-sm-12  col-md-4"> 
                                                        <legend>Catering <span class="text-danger">*</span></legend>
                                                    </div>
                                                    
                                                    <div class="col-sm-12  col-md-8">
                                                        <label>
                                                            <input type="radio" name="catering" value="1" checked />
                                                            Yes
                                                        </label>
                                                        &nbsp; &nbsp;
                                                        <label>
                                                            <input type="radio" name="catering" value="0" />
                                                            No
                                                        </label>
                                                          <?=form_error('catering');?>
                                                    </div>
                                                </div>
                                                <hr /> 
                                                   <div class="row">
                                                       <div class="col-sm-12">
                                                            <legend>Contact Information <span class="text-danger">*</span></legend>
                                                        </div>
                                                    </div>
                                                <hr /> 
                                                  <div class="row">
                                                     <div class="col-sm-2">
                                                        <label for="name_prefix">Name Prefix  <span class="text-danger">*</span></label>
                                                        <select class="form-control" id="name_prefix" name="name_prefix">
                                                          <?php if (isset($_COOKIE["login_user"])) {?>
                                                            <option <?php if($dx->name_title=='Mr'){ echo 'selected'; } ?> value="Mr">Mr.</option>
                                                            <option <?php if($dx->name_title=='Madam'){ echo 'selected'; } ?> value="Madam">Madam.</option>
                                                            <option <?php if($dx->name_title=='Miss'){ echo 'selected'; } ?> value="Miss">Miss.</option>
                                                            <option <?php if($dx->name_title=='Dr'){ echo 'selected'; } ?> value="Dr">Dr.</option>
                                                            <option <?php if($dx->name_title=='A/Prof'){ echo 'selected'; } ?> value="A/Prof">A/Prof.</option>
                                                            <option <?php if($dx->name_title=='Prof'){ echo 'selected'; } ?> value="Prof">Prof.</option>
                                                          <?php } else {?>
                                                            <option value="Mr">Mr.</option>
                                                            <option value="Madam">Madam.</option>
                                                            <option value="Miss">Miss.</option>
                                                            <option value="Dr">Dr.</option>
                                                            <option value="A/Prof">A/Prof.</option>
                                                            <option value="Prof">Prof.</option>
                                                          
                                                          <?php } ?> 
                                                           
                                                           
                                                            
                                                            
                                                            
                                                            
                                                        </select>
                                                          <?=form_error('name_prefix');?>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <label for="first_name">First Name  <span class="text-danger">*</span></label>

<input type="text" class="form-control" name="first_name" id="first_name"  value="<?php if (isset($_COOKIE["login_user"])) { echo $dx->first_name;} else {?><?=set_value('first_name');?><?php } ?>" />
                                                          <?=form_error('first_name');?>
                                                    </div>

                                                    <div class="col-sm-5">
                                                        <label for="last_name">Last Name  <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="last_name" id="last_name"  value="<?php if (isset($_COOKIE["login_user"])) { echo $dx->last_name;} else {?><?= set_value('last_name');?><?php } ?>" />
                                                          <?=form_error('last_name');?>
                                                    </div>
                                                </div>
                                                
                                                  
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" name="email" id="email" value="<?php if (isset($_COOKIE["login_user"])) { echo $dx->email;} else {?><?= set_value('email');?><?php } ?>" />
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
                                                                <input type="text" class="form-control number"  value="<?php if (isset($_COOKIE["login_user"])) { echo $dx->mobile;} else {?><?= set_value('mobile');?><?php } ?>" name="mobile" id="mobile" maxlength="8" />
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
<input type="text" class="form-control number" name="office_no"  value="<?php if (isset($_COOKIE["login_user"])) { echo $dx->office_number;} else {?><?= set_value('office_no');?><?php } ?>" id="office_no" maxlength="8" />
                                                                <?=form_error('office_no');?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                
<div class="row">
 
 <label class="head col-sm-12">Is the booking for self? : </label> 
     
        <div class="col-sm-12">
           <label for="yes"> &nbsp;<input type="radio" name="booking_for" id="yes" value="Yes" checked/> Yes</label> 
							 <label for="no"> &nbsp;<input type="radio" name="booking_for" id="no" value="No" /> No</label> 
    </div>
</div>





                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <button class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </app-landing-home>
        </div>
    </app-landing-page>
</app-root>
<style>
    .textarea{
        min-height:180px !important;
    }
</style>
<script>
    $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    $('#txtDate').attr('min', maxDate);
});
</script>