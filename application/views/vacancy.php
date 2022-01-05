 

<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/events.css">
<div _ngcontent-ngq-c159="" class="main-site about-main-site">
        <app-landing-home _nghost-ngq-c160="" class="ng-star-inserted">
        <section class="section-gap banner-section-inner aboutUs-page">
            <div class="overlay"></div>
            <div class="container">
                <section class="header-title d-flex justify-content-center align-content-center">
                    <h1 class="title">Career</h1>
                </section>
            </div>
        </section>
            <!-- <div id="parallax-world-of-ugg">
                <section>
                    <div class="parallax-one">
                      <h2>Career</h2>
                    </div>
                </section>
            </div> -->
            <section _ngcontent-ngq-c160="" class="  ">
                <div _ngcontent-ngq-c160="" class="container">
                    <div _ngcontent-ngq-c160="" class="row align-item-center justify-content-between">
                        <div _ngcontent-ngq-c160="" class="col-md-12"> 
                         
                        <div class="card card-default">
<div id="collapse1" class="collapse show">
    <div class="card-body">

        <?php 
            echo $this->session->flashdata('success');
        ?>


        <form action="<?=base_url();?>career?action=save/apply" method="post" enctype='multipart/form-data'> 
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <label class="control-label" for="first_name">First Name <abbr>*</abbr></label>
                        <input type="text"  class="form-control alphabet"  id="first_name" name="first_name" value="<?=set_value('first_name');?>" />

                        <?=form_error('first_name');?>
                    </div>
                </div>
                
                   <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="last_name">Last Name </label>
                            <input type="text"  class="form-control alphabet" id="last_name" name="last_name" value="<?=set_value('last_name');?>"  />
                            <?=form_error('last_name');?>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="date_of_birth">Date Of Birth <abbr>*</abbr></label>
                            <div class="input-group date">
                                <input  class="form-control" id="date_of_birth" name="date_of_birth" value="<?=set_value('date_of_birth');?>"  type="date" />
                                <?=form_error('date_of_birth');?>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-md-5 col-lg-5">
                        <div class="form-group">
                            <label class="control-label" for="email">Email Address <abbr>*</abbr></label>
                            <input type="text"  class="form-control" id="email" name="email" value="<?=set_value('email');?>"  />
                            <?=form_error('email');?>
                        </div>
                    </div>
                     <div class="col-md-7 col-lg-7">
                        <div class="form-group">
                            <label class="control-label" for="contact_no">Contact No. <abbr>*</abbr></label>
                            <div class="row">
                                <div class="col-md-3 ">
                                  <input type="text" class="form-control" value="+65" readonly="" disabled="">
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control number" name="contact_no" id="contact_no" placeholder="Contact No." maxlength="8"  value="<?=set_value('contact_no');?>">
                                      <?=form_error('contact_no');?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <label class="control-label" for="postal_code">Postal Code <abbr>*</abbr></label>
                            <input type="text" maxlength="6" minlength="6"  class="form-control number" id="postal_code" name="postal_code" value="<?=set_value('postal_code');?>"  />
                            <?=form_error('postal_code');?>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <label class="control-label" for="city">City <abbr>*</abbr></label>
                            <input type="text"  class="form-control alphabet" id="city" name="city" value="<?=set_value('city');?>"  />
                            <?=form_error('city');?>
                        </div>
                    </div>

                    <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <label class="control-label" for="some_value">State <abbr>*</abbr></label>
                            <input type="text"  class="form-control alphabet" id="state" name="state" value="<?=set_value('state');?>"  />
                            <?=form_error('state');?>
                        </div>
                    </div>
                     <div class="col-md-3 col-lg-3">
                        <div class="form-group">
                            <label class="control-label" for="some_value">Country <abbr>*</abbr></label>
                            <input type="text"  class="form-control alphabet" id="country" name="country" value="<?=set_value('country');?>"  />
                            <?=form_error('country');?>
                        </div>
                    </div>
                    
             
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label class="control-label" for="some_value">Full Address <abbr>*</abbr> </label>
                      

                            <textarea  class="form-control" id="full_address" name="full_address"><?=set_value('full_address');?></textarea>
                            <?=form_error('full_address');?>
                        </div>
                    </div>
                      <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label class="control-label" for="some_value">C.V. / Resume Attechment <abbr>*</abbr></label>
                            <input type="file"  class="form-control uploadFile" id="resume" name="resume" value="<?=set_value('resume');?>"  />
                            <?=form_error('resume');?>
                                <?php 
                                    echo $this->session->flashdata('image_error');
                                ?>
                        </div>
                    </div>

                     <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <label class="control-label" for="tnc"><input type="checkbox" name="tnc" value="I have read term and condition">  I have read term and condition?  </label>
                       <?=form_error('tnc');?>
                        </div>
                    </div>

                      <div class="col-12">
              <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                                        <span class="mat-button-wrapper">Submit</span>
                                        <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                        <div class="mat-button-focus-overlay"></div>
                                    </button>
            </div>

                </div>


</form>
            </div>
        </div>
    </div>
  
        
                      </div>
                                 
                                </div>
                            </div>
                        </section>
              
                    </app-landing-home>
                    <!---->
                </div>
                <style type="text/css">
                    .card {
    margin-top: 0px !important;
  
}.section-gap {
    padding: 12px 0 !important !important;
    /* background: #ffefe2; */
}
                </style>