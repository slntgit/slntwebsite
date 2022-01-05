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
              <div id="invoice"> 
                <div class="table-reasponsive" id="divToPrint">
                <table class="table table-reasponsive table-bordered table-striped tableList">
                  <thead>
                    <tr>
                      <th colspan="2">
                          <img src="<?=base_url();?>assets/print-logo.png">
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
                                    <td>Event Date </td>
 <td>  <?=date('Y-M-d',strtotime($booking->date_of_event));?></td>
                                </tr>


                                  <tr>
                                    <td>Event Time </td>
                                    <td><?=$booking->time_of_event;?></td>
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
                                

                                 <tr>
                                <td>
                                  Booking ID 
                                </td>
                                <td>
                                <?= $booking->evnt_bookin_id;?>
                                </td>
                              </tr>
                              

   <tr>
    <td colspan="2">
        <p><strong>Is the booking for self? :</strong> <?=$booking->booking_for;?></p>
    </td>
</tr>
       

                               <tr>
                                <td>
                                  Status 
                                </td>
                                <td>
                                   <?php if($booking->status==1){ ?>
                                      <label class="btn btn-success">Pay Successfully</label>
                                   <?php } else { ?>
                                      <label class="btn btn-warning">Pay Un-Successfully</label>
                                   <?php }?>
                                </td>
                              </tr>



                            </tbody>


                        
                    </table>

                   
                </div>
                 <div class="row">
                        <div class="col-sm-12 text-center">
                            <button onclick="PrintDiv();" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white">
                              Print
                          </button>
                        </div>
                    </div>

            </div>
        </div>
    </div>

                </div>
            </section>
        </app-landing-home>
</div>
<script type="text/javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=600,height=600');
        popupWin.document.open();
        popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
     </script>
    
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