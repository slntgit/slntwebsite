<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/events.css">
<div _ngcontent-kph-c159="" class="main-site about-main-site">
    <router-outlet _ngcontent-kph-c159=""></router-outlet>
    <app-landing-booking _nghost-kph-c162="" class="ng-star-inserted">
    <section class="section-gap banner-section-inner aboutUs-page">
            <div class="overlay"></div>
            <div class="container">
                <section class="header-title d-flex justify-content-center align-content-center">
                    <h1 class="title">Contact Us</h1>
                </section>
            </div>
        </section>
      <!-- <div id="parallax-world-of-ugg">
                <section>
                    <div class="parallax-one">
                      <h2>CONTACT US</h2>
                    </div>
                </section>
            </div> -->
        <!---->
      
  <section class="section-gap" id="contatti">
  <div class="container mt-5" >

    <div class="row">
      <div class="col-md-6 order-sm-2">
        <div class="contactFormCol topContact">
          <section class="header-title text-left pb-30">
            <!-- <p class="sub-title">Events</p> -->
           
          </section>
        <!-- <h2 class="text-uppercase mt-3 font-weight-bold">CONTACT US</h2> -->
        <?php echo $this->session->flashdata('msg'); ?>  
        <form action="<?=base_url();?>contact?action=post/query" method="post">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" value="<?=set_value('name');?>" class="form-control" name="name" id="name" >
                 <?=form_error('name');?>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" value="<?=set_value('email');?>" class="form-control" name="email" id="email" >
                 <?=form_error('email');?>
              </div>
            </div>
           
            <div class="col-lg-12">
              <div class="form-group">
                <label>Contact No</label>
                <div class="row">
                    <div class="col-md-3 ">
                      <input type="text" class="form-control" value="+65" readonly="" disabled="">
                    </div>
                    <div class="col-md-9">
                      <input type="number" class="form-control" name="contact_no" id="contact_no"  value="<?=set_value('contact_no');?>">
                      <?=form_error('contact_no');?>
                    </div>
                </div>
                
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Your query</label>
                <textarea class="form-control" name="query" id="query"  rows="3"><?=set_value('query');?></textarea>
                 <?=form_error('query');?>
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
        <div class="contactFormCol">
       <!--  <h2 class="text-uppercase mt-4 font-weight-bold">dove siamo</h2>
        -->
        <!--<i class="fa fa-phone mt-3"></i> <a href="tel:+">(+65) 62930195</a><br>-->
        <!--<i class="fa fa-envelope mt-3"></i> <a href="">admin@spslnt.org.sg</a><br>-->
        <!--<i class="fa fa-globe mt-3"></i> 5 Chander Rd, Singapore 219528<br>-->
 <style>
 .shu-contact{
    border: 1px solid #c5514c;
    padding: 9px 13px;
    font-size: 20px;
    border-radius: 3px;
 }
 .shu-contact1{
    border: 1px solid #c5514c;
    padding: 9px 9px;
    font-size: 20px;
    border-radius: 3px;
 }
 </style>
        <div class="my-4">
        <a href=""><i class="fa fa-facebook shu-contact"></i></a>
        <a href=""><i class="fa fa-linkedin shu-contact1"></i></a>
        <a href=""><i class="fa fa-twitter shu-contact1"></i></a>
        <a href="https://api.whatsapp.com/send/?phone=%2B92957866&text&app_absent=0"><i class="fa fa-whatsapp shu-contact1"></i></a>
        </div>
        </div>
      </div>
      <div class="col-md-6 maps " >
        <div class="warpperMap">
          
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31684209.090688817!2d72.24715458512614!3d14.212259856434294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da19c756006e9b%3A0xf1831b841957ea4f!2sShree%20Lakshminarayan%20Temple!5e0!3m2!1sen!2sin!4v1631598555932!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
 
    </div>
  </div>
</div>
    </app-landing-booking>
    <!---->
</div>





<style type="text/css">
  .mt-5, .my-5 {
    margin-top: 1rem!important;
}
    #contatti{
  background-color: #ffffff00;
  letter-spacing: 2px;
  }
#contatti a{
  color: #fff;
  text-decoration: none;
}


@media (max-width: 575.98px) {

  #contatti{padding-bottom: 800px;padding-left: 20px!important;
    padding-right: 10px !important;}
  #contatti .maps iframe{
    width: 100%;
    height: 450px;
  }
 }


@media (min-width: 576px) {

   #contatti{padding-bottom: 800px;}

   #contatti .maps iframe{
     width: 100%;
     height: 450px;
   }
 }

@media (min-width: 768px) {

  #contatti{padding-bottom: 350px;}

  #contatti .maps iframe{
    width: 100%;
    height: 850px;
  }
}

@media (min-width: 992px) {
  #contatti{padding-bottom: 200px;}

   #contatti .maps iframe{
     width: 100%;
     height: 700px;
   }
}


#author a{
  color: #fff;
  text-decoration: none;
    
}

#contatti a {
    color: #48263d;
    text-decoration: none;
}
</style>