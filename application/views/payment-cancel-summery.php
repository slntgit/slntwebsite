<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/events.css">
<div _ngcontent-ngq-c159="" class="main-site about-main-site">
    <router-outlet _ngcontent-ngq-c159=""></router-outlet>
        <app-landing-home _nghost-ngq-c160="" class="ng-star-inserted">
            <div id="parallax-world-of-ugg">
                <section>
                  <?php 
                    $perm2 = $booking->event_id;
                  $about=$this->Main_model->getData('add_products','id','DESC',NULL,'id',$perm2);
                  $eventsDetails=$about->row();
                  ?>
                    <div class="parallax-one">
                      <h2><?=$eventsDetails->title;?></h2>
                    </div>
                </section>
            </div>


            <section _ngcontent-ngq-c160="" class="section-gap about-section  btn-group-custom">
                <div _ngcontent-ngq-c160="" class="container">
   
    <div class="container" id="fillForm">
        <div class="row">
            <div class="col-sm-12">
              <hr />

                <div class="table-reasponsive">
                <table class="table table-reasponsive table-bordered table-striped tableList">
                  <thead>
                    <tr>
                      <th colspan="2">
                          <h2 class="text-white">My Booking  Summery</h2>
                          <h3 class="text-danger">Event Booking cancelled</h3>
                      </th>
                    </tr>
                  </thead>
                     <tbody>
                                
                              <?php if($booking->memberid!=''){ ?>
                                <tr>
                                    <td>Membership ID </td>
                                    <td><?= $booking->memberid?></td>
                                </tr>
                              <?php } else { ?>
                                <tr>
                                    <td>Membership </td>
                                    <td>Non-Member User</td>
                                </tr>
                              <?php } ?>

                                <tr>
                                    <td>Event Title </td>
                                    <td>  <?=$eventsDetails->title;?></td>
                                </tr>
                                 <tr>
                                    <td>Name </td>
                                    <td>  <?= $booking->title?> <?= $booking->first_name?> <?= $booking->last_name?></td>
                                </tr>
                                 <tr>
                                    <td>Email </td>
                                    <td> <?= $booking->email?></td>
                                </tr>

                                <tr>
                                    <td>Mobile </td>
                                    <td>  <?= $booking->mobile_code?> <?= $booking->mobile?></td>
                                </tr>
                            
                               <tr>
                                    <td>Yajman Type </td>
                                    <td>  <?= $booking->description_charge?></td>
                                </tr>
                               <tr>
                                    <td>Yajman Amount </td>
                                    <td>  $<?= $booking->puja_amount?> SGD</td>
                                </tr>
                            
                                 <tr>
                                    <td>Event Amount </td>
                                    <td> $<?= $booking->event_amount?> SGD</td>
                                </tr>
                              <tr>
                                <td>
                                  Total 
                                </td>
                                <td>
                                  $<?= $booking->puja_amount+$booking->event_amount;?> SGD
                                </td>
                              </tr>
          
                            </tbody>


                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                   <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12">

<?php if($booking->paymentmod=='PayPal'){ ?>


                                              <div>
<?php 
//$paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_url = 'https://www.paypal.com/cgi-bin/webscr'; //LIVE PayPal API URL
$paypal_id = 'info@lakshminarayantemple.com'; //Business Email
?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="text" name="business" value="info@lakshminarayantemple.com"  style="opacity: 0; position: absolute;">
<!-- Specify a Buy Now button. -->
<input type="text" name="cmd" value="_xclick" style="opacity: 0; position: absolute;">
<!-- Specify details about the item that buyers will purchase. -->
<input type="text" name="item_name" value="<?=$eventsDetails->title;?>" style="opacity: 0; position: absolute;">
<input type="text" name="item_number" value="<?=$eventsDetails->id;?>" style="opacity: 0; position: absolute;">
<input type="text" name="amount" value="<?= $booking->puja_amount+$booking->event_amount;?>" style="opacity: 0; position: absolute;">
<input type="text" name="currency_code" value="SGD" style="opacity: 0; position: absolute;">
<!-- Specify URLs -->
<input type='text' name='cancel_return' value='<?= base_url();?>EventStatus/Cancel/<?= $booking->id?>' style="opacity:0; position: absolute ;">
<input type='text' name='return' value='<?= base_url();?>EventStatus/Thank-You/<?= $booking->id?>' style="opacity: 0; position: absolute;">



                                                <img src="<?=base_url();?>assets/paypal.png" class="img-responsive-payment">
                                               
                                                    <button class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">Re-Pay With PayPal</button>
                                                </form>
                                              </div>
<?php } else if($booking->paymentmod=='Strip'){ ?>
                                                 <div>
                                                <form action="" method="post">
                                                <img src="<?=base_url();?>assets/strip.jpg" class="img-responsive-payment">
                                               
                                                    <button class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">Pay With Strip</button>
                                                </form>
                                              </div>
                                              
<?php } ?>





                                            </div>
                                          </div>
                                      </div>
 
                                    </td>
                                </tr>
                            </tfoot>
                    </table>


                </div>
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