<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/events.css">


<style>
 @media(min-width : 768px){
    .tab-content {
    overflow: hidden!important;
    margin-top: 100px !important;
    margin-bottom:10px !important;
}
}

 @media(max-width : 767px){
     .table>tbody>tr>th {
    border: 0 !important;
    font-size: 13px;
    font-weight: 500;
}
.btn{
    min-width:100% !important;
}
     .td-block{
         display:block !important;
     }
    .tab-content {
    overflow: hidden!important;
    margin-top:20px !important;
    margin-bottom:10px !important;
}
.inner_header{
    font-size:32px !important!important;
}
.sel-item {
    max-width: 100% !important!important;
    margin: 1%!important;
    text-align: center!important;
}
}
.img-responsive{
    max-width:100%!important;
}
input[type=file].form-control {
    display: block!important;
    width: 100% !important!important;
    height: auto!important;
    padding: 1rem .5rem 0.5rem 0.9rem !important!important;
    font-size: 1rem!important;
    font-weight: 400!important;
    line-height: 1.5!important;
    color: #495057!important;
    background-color: #fff!important;
    background-clip: padding-box!important;
    border: 1px solid #b1b1b1!important;
    border-radius: 4px!important;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out!important;
}
</style>

<div _ngcontent-ngq-c159="" class="main-site about-main-site">
    <router-outlet _ngcontent-ngq-c159=""></router-outlet>
        <app-landing-home _nghost-ngq-c160="" class="ng-star-inserted">
            <!-- <div id="parallax-world-of-ugg">
                <section>
                    <div class="parallax-one">
                      <h2><?=$eventsDetails->title;?></h2>
                    </div>
                </section>
            </div> -->
            
            <section class="section-gap banner-section-inner aboutUs-page">
                <div class="overlay"></div>
                <div class="container">
                    <section class="header-title d-flex justify-content-center align-content-center">
                        <h1 class="title"><?=$eventsDetails->title;?></h1>
                    </section>
                </div>
            </section>



            <section _ngcontent-ngq-c160="" class="section-gap about-section  btn-group-custom">
                <div _ngcontent-ngq-c160="" class="container">
                  <div class="row pujaSectionListPage pujaSectionSinglePage d-flex align-items-center justify-content-between">
                    <div class="col-md-6">
                      <div class="wrapper">
                        <div class="imgEventPuja">
                          <div class="active" id="pic-0">
                            <img src="<?=base_url();?>assets/products/<?=$eventsDetails->product_image;?>" class="img-fluid" />
                          </div>
                          <?php 
                            $this->db->select('*');
                            $this->db->from('tbl_more_images');
                            $this->db->where('type',$eventsDetails->id);
                            $set = $this->db->get();
                            $website_image= $set->result();
                            foreach ($website_image as $kvalue) { ?>
                            <div class="tab-pane" id="pic-<?=$kvalue->id;?>"><img src="<?=base_url();?>assets/events/<?=$kvalue->image;?>" /></div>
                        <?php    } ?>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                          <li class="active"><a data-target="#pic-0" data-toggle="tab">
                            <img src="<?=base_url();?>assets/products/<?=$eventsDetails->product_image;?>" /></a>
                        </li>
                        <?php foreach ($website_image as $kvalue2) { ?>
                        <li>
                          <a data-target="#pic-<?=$kvalue2->id;?>" data-toggle="tab">
                            <img src="<?=base_url();?>assets/events/<?=$kvalue2->image;?>" />
                          </a>
                        </li>
                        <?php    } ?>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="eventsDetiPujaList">
                      <h2 class="titleEvent"><a><?=$eventsDetails->title;?></a></h2>
                      <p class="desc"><i class="fa fa-calendar"></i> <?=$eventsDetails->event_date;?></p>
                      <p class="desc">
                      <i class="fa fa-clock-o"></i> 
                      <?php 
                      $fttrctd = $this->db->select('*')
                       ->from('event_time_table as et')
                       ->where('et.filterdate', $eventsDetails->filterdate)
                       ->where('et.eventid', $eventsDetails->id)
                       ->join('slnt_events_time as set', 'et.timeid = set.id')
                       ->get();
                      $m=$fttrctd->num_rows();

                        if ($m>0) { 
                          foreach ($fttrctd->result() as $xcvvalue) {
                      ?>
                      <?='<label class="btn-tags">'.$xcvvalue->from_time;?> To <?=$xcvvalue->to_time.'</label>';?>
                      <?php } } ?> 
                      </p>
                        <?php if($eventsDetails->event_amount>0){ ?>
                      <p class="eventPriceList">
                        <i class="fa fa-dollar"></i><a> <?=$eventsDetails->event_amount;?> SGD</a>
                      </p>
                        <?php } else { ?>
                        <?php } ?>
                        <?=$eventsDetails->description;?>   
                      <a href="#fillForm" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
                        <span class="mat-button-wrapper">Book Now</span>
                      </a>          
                  </div>
  </div>
</div>

    <?php if($eventsDetails->video_link!=''){ ?>
        <div class="row pujaSectionListPage pujaSectionSinglePage d-flex align-item-center justify-content-between">
          <div class="col-md-12">
            <div class="imgEventPuja">
              <iframe style="width: 100%; height: 100%; border-radius: 15px" src="https://www.youtube.com/embed/<?=$eventsDetails->video_link;?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
      </div>
    <?php } ?>
    <div class="container" id="fillForm">
        <div class="row">
            <div class="col-sm-12">
              <hr />
             <form action="<?=base_url();?>Events/<?=$this->uri->segment(2);?>?action=save/apply" method="post">
<input type="hidden" name="event_id" id="event_id" value="<?=$this->uri->segment(2);?>">
<input type="hidden" name="event_amount" id="event_amount" value="<?=$eventsDetails->event_amount;?>">

                      <fieldset>
                        <legend>Registration</legend>
                          <div class="form-group">
<div class="row">
  <div class="col-sm-12" >
     <input type="hidden" name="date_of_event" value="<?=$eventsDetails->event_date;?>">
      <?php 
        $fttrctd = $this->db->select('*')
         ->from('event_time_table as et')
         ->where('et.filterdate', $eventsDetails->filterdate)
         ->where('et.eventid', $eventsDetails->id)
         ->join('slnt_events_time as set', 'et.timeid = set.id')
         ->get();
        $m=$fttrctd->num_rows();
          $counttime=0;
          if ($m>0) { 
            foreach ($fttrctd->result() as $xcvvalue) {
      ?>
        <label>
          <input type="radio" name="time_of_event" value="<?=$xcvvalue->from_time;?> To <?=$xcvvalue->to_time;?>" <?php if($counttime==0){?> checked <?php } ?>>
          <?=$xcvvalue->from_time;?> To <?=$xcvvalue->to_time;?>
            
        </label> 
    <?php $counttime++; } } ?> 
  </div>
</div>
<hr />

                              <div class="row">
                                  <div class="col-sm-12" >
                                      <label for="membertype"  class="sel_chk_user" id="1">
                                          <input type="radio" name="membertype" id="membertype" value="1">
                                          Member
                                      </label>

                                      <label for="membertype2"  class="sel_chk_user" id="2" >
                                          <input type="radio" name="membertype" id="membertype2" value="2">
                                         Non-Member
                                      </label>

 <?=form_error('membertype');?> 
                                  </div>
                                </div>
                    <div class="row">
                          <div class="col-sm-12">
                              <label for="memberid">Member ID / Name</label>
                              <input type="text" class="form-control" name="memberid" id="memberid">
                          </div>
                    </div>
                    <div class="row">
                       <label for="memberid" class="col-sm-12">Name</label>
                          <div class="col-sm-2">
                              <label for="title">Title</label>
                              <select class="form-control" id="title" name="title">

<option value="Mr">Mr.</option>
<option value="Madam">Madam.</option>
<option value="Miss">Miss.</option>

<option value="Dr">Dr.</option>
<option value="A/Prof">A/Prof.</option>

<option value="Prof">Prof.</option>
                              </select>
                          </div>
                          <div class="col-sm-5">
                              <label for="first_name">First Name</label>
                              <input type="text" class="form-control" name="first_name" id="first_name">
                              <?=form_error('first_name');?> 
                          </div>

                          <div class="col-sm-5">
                              <label for="last_name">Last Name</label>
                              <input type="text" class="form-control" name="last_name" id="last_name">
                               <?=form_error('last_name');?> 
                          </div>
                    </div>
                     <div class="row">
                          <div class="col-sm-5">
                              <label for="email">Email</label>
                              <input type="text" class="form-control" name="email" id="email">
                                <?=form_error('email');?> 
                          </div>

                          <div class="col-sm-7">
                               <div class="row">
                                <div class="col-sm-3">
                                    <label for="mobile_code">Mobile Code</label>
                                    <input type="text" value="+65" class="form-control" name="mobile_code" id="mobile_code" readonly="" disabled="">
                                </div>

                                <div class="col-sm-9">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" maxlength="8">

                                      <?=form_error('mobile');?> 
                                </div>
                          </div>
                          </div>
                    </div>
<?php  if($eventsDetails->neet_to_pay==1){ ?>

                    <div class="row">
                       <h2 for="memberid" class="col-sm-12">Choose Yajman Type</h2>
                          


                          <?php
                                $evn_yajman = json_decode($eventsDetails->sel_yajman);
                          $countpuja=1;
                          foreach($evn_yajman as $sel_yaj){ 
                              
                                $this->db->select('*');
                        		$this->db->from('slnt_event_yajman');
                        		$this->db->where('id',$sel_yaj);
                                $pujasql = $this->db->get();
        
                                
                              foreach($pujasql->result() as $pujyajman){ ?>
                              <label for="yajman_type<?=$countpuja;?>" class="btn text-left <?php if($countpuja==1){ ?> btn-warning<?php } else { echo 'btn-info';} ?> sel-item "> 
                                  <input type="radio" name="yajman_type" id="yajman_type<?=$countpuja;?>" value="<?=$pujyajman->id;?>">
                                  YAJMAN - <?=$pujyajman->description_charge;?><br />
                                  Member Price - $<?=$pujyajman->member_price;?>SGD <br />
                                  Non-Member Price - $<?=$pujyajman->non_member_price;?>SGD 
                              </label>
                            <?php  } 
                             
                           $countpuja++;   }  ?>

                               <?=form_error('yajman_type');?> 
                    </div>
<?php } else{ ?>
<input type="hidden"  name="yajman_type" value="0" />
<?php }?>

                 <!--    <div class="row">
                        
                          <div class="col-sm-12">
                               <div class="row">
                                <div class="col-sm-12">
                                    <label for="payment_amount">Payment Amount (SGD)</label>
                                    <input type="text" value="65263" class="form-control" name="payment_amount" id="payment_amount">
                                </div>

                              
                          </div>
                          </div>
                    </div> -->
<hr />
 <div class="row">
 <h2 class="head col-sm-12">Is the booking for self? : </h2> 
     
        <div class="col-sm-12">
           <label for="yes"> &nbsp;<input type="radio" name="booking_for" id="yes" value="Yes" checked/> Yes</label> 
							 <label for="no"> &nbsp;<input type="radio" name="booking_for" id="no" value="No" /> No</label> 
    </div>
    </div>
 
 
                    <div class="row">
                        <div class="col-sm-12">
                          <h2>Payment Type</h2>
                        </div>
                         <div class="col-sm-12">
                             
                                  <label for="paypal">
                                    <input type="radio" name="paymentmod" value="PayPal" id="paypal" checked>
                                    <img src="<?=base_url();?>assets/paypal.png" class="img-responsive-payment">
                                  </label>
                                
                                  <!--<label for="strip">-->
                                  <!--  <input type="radio" name="paymentmod" value="Strip" id="strip">-->
                                  <!--  <img src="<?=base_url();?>assets/strip.jpg" class="img-responsive-payment">-->
                                  <!--</label>-->
                              
              <?=form_error('paymentmod');?> 
                                
                          </div>
                  

                          
                          
                          <div class="col-sm-12">
                            <hr />
                          <label for="termscondition">
                              <input type="checkbox" name="termscondition" id="termscondition"><a href="<?=base_url('TermsAndCondition');?>" target="_blank">
                              Terms & Conditions
                         </a> </label>
                            <?=form_error('termscondition');?>                      
                          </div>

                          <div class="col-sm-12">
                              <button class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
                              Proceed and pay
                          </button>
                          </div>
                        <!--  <div class="col-sm-12">
                              <div class="row">
                                <div class="accordion">
                                  <h4 class="accordion-toggle">
                                    <img src="<?=base_url();?>assets/paypal.png" class="img-responsive-payment">
                                  </h4>
                                  <div class="accordion-content">
                                    <form action="" method="post">
                                        <button class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">Pay With PayPal</button>
                                    </form>
                                  </div>
                                  
                                  <h4 class="accordion-toggle"> 
                                    <img src="<?=base_url();?>assets/strip.jpg" class="img-responsive-payment">
                                  </h4>
                                  <div class="accordion-content">
                                    <button class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">Pay With Strip</button>
                                  </div>
                                </div>
                              </div>
                          </div> -->
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
<script type="text/javascript">
  $('.sel-item').on('click',function(){
      $('.sel-item').removeClass('btn-warning');
      $('.sel-item').addClass('btn-info');
      $(this).removeClass('btn-info');
      $(this).addClass('btn-warning');
  });
  $(document).ready(function() {
  $('.accordion').find('.accordion-toggle').click(function() {
    $(this).next().slideToggle('600');
    $(".accordion-content").not($(this).next()).slideUp('600');
  });
  $('.accordion-toggle').on('click', function() {
    $(this).toggleClass('active').siblings().removeClass('active');
  });
});
  
</script>
 <script type="text/javascript">
    $('.sel_chk_user').on('click',function(){
      var selid = $(this).attr('id'); 
      if(selid==1){
              $('#memberid').removeAttr('readonly',''); 
              $('#memberid').attr('required',''); 
      }   else if(selid==2){
          $('#memberid').attr('readonly',''); 
         $('#memberid').removeAttr('required','');  
      }
               
    });
</script>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/events.css">