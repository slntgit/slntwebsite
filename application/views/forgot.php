 
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb__title">Forgot Password</h2>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="<?php echo base_url()?>">Home</a></li>
                        <li class="active__list-item">pages</li>
                        <li>Forgot Password</li>
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
            <div class="col-lg-7 mx-auto">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form__title">Reset to your Password</h3>                        
                    </div>
                     <?php echo $this->session->flashdata('msg'); ?>      
                    <!--Contact Form-->
                    <form method="post" action="<?=base_url();?>Forget/getNewPassword">
                        <div class="row">                             
                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" value="<?php echo set_value('mobile'); ?>" name="mobile" id="mobile" placeholder="Enter Mobile No">
                                    <span class="la la-user input-icon"></span>
                                     <span class="bbt_registration_error error text-danger">
                                        <?php echo form_error('mobile');  ?><?php echo $this->session->flashdata('mobile'); ?>
                                    </span>
                                </div>
                            </div><!-- end col-md-12 -->                            
                            
                            <div class="col-lg-12 col-sm-12">
                                 <div class="form-group">
                                     <button class="theme-btn" type="submit">Reset now</button>
                                 </div>
                            </div><!-- end col-md-12 -->
                            <div class="col-lg-12 col-sm-12">
                              <div class="account-assist">
                                  <p class="account__desc">Already Register?<a href="<?php echo base_url()?>Login"> Login now</a></p>
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
 