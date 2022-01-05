<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb__title">Register</h2>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="<?php echo base_url()?>">home</a></li>
                        <li class="active__list-item">pages</li>
                        <li>Register</li>
                    </ul>
                   
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START FORM AREA
================================= -->
<section class="form-shared">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form__title">Create an account!</h3>                       
                    </div>

                      <?php echo $this->session->flashdata('msg'); ?>                    
                                     <!--Contact Form-->
                    <form method="post" action="<?=base_url();?>Register/create">
                        <div class="row">                            
                            <div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <input class="form-control" value="<?php echo set_value('first_name'); ?>" type="text" name="first_name" placeholder="Enter Your Name *">
                                    <span class="la la-user input-icon"></span>
                                     <span class="bbt_registration_error error text-danger">
                                        <?php echo form_error('first_name');  ?><?php echo $this->session->flashdata('first_name'); ?>
                                    </span>
                                </div>
                            </div><!-- end col-md-12 -->                           
                            
							<div class="col-lg-6 col-xs-12">
                                <div class="form-group">
                                    <input class="form-control"  value="<?php echo set_value('mobile'); ?>"  type="text" name="mobile" placeholder="Enter Your Mobile *">
                                    <span class="la la-phone input-icon"></span>
                                    <span class="bbt_registration_error error text-danger">
                                        <?php echo form_error('mobile');  ?><?php echo $this->session->flashdata('mobile'); ?>
                                    </span>
                                </div>
                            </div><!-- end col-md-12 --> 
                            <div class="col-lg-6 col-xs-12">
                               <div class="form-group">
                                   <input class="form-control" type="password" name="password" placeholder="Password *">
                                   <span class="la la-lock input-icon"></span>
                                   <span class="bbt_registration_error error text-danger">
                                        <?php echo form_error('password');  ?><?php echo $this->session->flashdata('password'); ?>
                                    </span>
                               </div>
                            </div><!-- end col-md-12 -->
                            <div class="col-lg-6 col-xs-12">
                              <div class="form-group">
                                  <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password *">
                                  <span class="la la-lock input-icon"></span>
                                    <span class="bbt_registration_error error text-danger">
                                        <?php echo form_error('confirm_password');  ?><?php echo $this->session->flashdata('confirm_password'); ?>
                                    </span>
                              </div>
                            </div><!-- end col-md-12 -->
                            <div class="col-lg-12 col-sm-12">                                
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="tnc_valid" value="1" id="chb2"/>
                                    <label for="chb2">I agree <a href="<?=base_url();?>TermsAndCondition" target="_blank">Terms of Services *</a></label>

                                    <span class="bbt_registration_error error text-danger">
                                        <?php echo form_error('tnc_valid');  ?><?php echo $this->session->flashdata('tnc_valid'); ?>
                                    </span>
                                </div>
                            </div><!-- end col-md-12 -->

                            <div class="col-lg-12 col-sm-12 ">
                                <div class="form-group">
                                    <button class="theme-btn" type="submit">Register Account</button>
                                </div>
                            </div><!-- end col-md-12 -->
                            <div class="col-lg-12 col-sm-12">
                               <div class="account-assist">
                                   <p class="account__desc">Already have an account?<a href="<?php echo base_url()?>Login"> Log in</a></p>
                               </div>
                            </div><!-- end col-md-12 -->
                        </div><!-- end row -->
                    </form>
                </div><!-- end contact-form -->
            </div><!-- end col-md-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end form-shared -->
<!-- ================================
       START FORM AREA
================================= -->
