<?php 
    $configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
$configuration_details=$configwebsite->row();
?>
<section _ngcontent-ngq-c159="" id="donation-section" class="section-gap donation-section">
    <app-landing-donation _ngcontent-ngq-c159="" _nghost-ngq-c157="">
        <div _ngcontent-ngq-c157="" class="container">
            <section _ngcontent-ngq-c157="" class="header-title text-center">
                <!--<p _ngcontent-ngq-c157="" class="sub-title">Donation</p>-->
                <h2 _ngcontent-ngq-c157="" class="title">Donation</h2>
            </section>
            <div _ngcontent-ngq-c157="" class="wrapper text-center">
                <div _ngcontent-ngq-c157="" class="description over-lay">
                    
                </div>

<form class="form-horizontal form-pricing" method="post" action="<?=base_url();?>Donation?do=action" role="form">
   
        
<div class="row">
    <div class="col-sm-12 chooesBtn">
        <div class="row">
            <div class="col-sm-12">
                   <h2 for="memberid" class="titleHead" style="color: #4a403c !important;"></h2>
                    <div class="listDonationDetails">
                        <?php 
                            $this->db->select('*');
                        	$this->db->from('tbl_category');
                        // 	$this->db->order_by('id','DESC');
                        	$this->db->order_by('name','ASC');
                            $donate_category= $this->db->get()->result();
                        
                        $count=0; foreach($donate_category as $dnscat){ ?>
                        <label for="donation_type_<?=$count;?>" class="btn sel-item btn-info select-dona donation_cat" data-id="<?=$dnscat->id;?>">
                        <input type="radio" name="donation_type" id="donation_type_<?=$count;?>" value="<?=$dnscat->name;?>" required> <?=$dnscat->name;?> &nbsp; &nbsp;
                        </label>
                        <?php $count++;} ?>
                        <?=form_error('donation_type');?>
                    </div>
            </div>
        </div>
        
        
        
    <div class="row">
        <div class="col-sm-12" id="donationslab">
            
        </div>
    </div>    
    </div>
</div>





    <div class="price-form text-center">
        <div class="row d-flex align-item-center justify-content-between">
            <label for="amount" class="col-md-8 col-sm-12 control-label">Amount (S$): </label>
                <div class="col-md-4  col-sm-12  control-label">
                    <input type="number" id="amount" name="amount" class="form-control">
                    </div>
                </div>
            </div>
            <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                <span class="mat-button-wrapper">Submit</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>
        </form>
    </div>
</div>

<section _ngcontent-ngq-c160="" class="section-gap about-section pb-0">
                            <div _ngcontent-ngq-c160="" class="container">
                                <section _ngcontent-ngq-c160="" class="header-title">
                                    <!--<p _ngcontent-ngq-c160="" class="sub-title">What we do</p>-->
                                    <h2 _ngcontent-ngq-c160="" class="title">About us</h2>
                                </section>
                                <div _ngcontent-ngq-c160="" class="row align-item-center justify-content-between">
                                    <div _ngcontent-ngq-c160="" class="col-md-6">
                                        <div _ngcontent-ngq-c160="" class="wrapper img-wrapper">
                                            <?php 
                                            if ($homeaboutimg->num_rows()>0) {
                                               $ndx = $homeaboutimg->row();
                                            ?>
                                            <img _ngcontent-ngq-c160="" src="<?=base_url();?>assets/setting/<?=$ndx->image;?>" alt="slnt_about" class="img-fluid" />
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div _ngcontent-ngq-c160="" class="wrapper content-wrapper">
                                            <?=$home_intro->pagecontent;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
</app-landing-donation>
</section>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        $("#slider").slider({
            range: "min",
            animate: true,
            value: 1,
            min: 1,
            max: <?php echo $configuration_details->signupbonus;?>,
            step: 10,
            slide: function (event, ui) {
                update(1, ui.value); //changed
            }
        });
        //Added, set initial value.
        $("#amount").val(1);
        $("#amount-label").text(0);


        update();
    });

    //changed. now with parameter
    function update(slider, val) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1 ? val : $("#amount").val();

        /* commented
         $amount = $( "#slider" ).slider( "value" );
         $duration = $( "#slider2" ).slider( "value" );
         */

        $("#amount").val($amount);
        $("#amount-label").text($amount);

        $('#slider a').html('<label>' + $amount + '</label><div class="ui-slider-label-inner"></div>');
    }
</script>

<script>
    $(document).ready(function() {
          $("#slider").slider({
              animate: true,
              value:1,
              min: 0,
              max: 1000,
              step: 10,
              slide: function(event, ui) {
                  update(1,ui.value); //changed
              }
          });

          $("#slider2").slider({
              animate: true,
              value:0,
              min: 0,
              max: 500,
              step: 1,
              slide: function(event, ui) {
                  update(2,ui.value); //changed
              }
          });

          //Added, set initial value.
          $("#amount").val(0);
          $("#duration").val(0);
          $("#amount-label").text(0);
          $("#duration-label").text(0);
          
          update();
      });

      //changed. now with parameter
      function update(slider,val) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1?val:$("#amount").val();
        var $duration = slider == 2?val:$("#duration").val();

        /* commented
        $amount = $( "#slider" ).slider( "value" );
        $duration = $( "#slider2" ).slider( "value" );
         */

         $total = "$" + ($amount * $duration);
         $( "#amount" ).val($amount);
         $( "#amount-label" ).text($amount);
         $( "#duration" ).val($duration);
         $( "#duration-label" ).text($duration);
         $( "#total" ).val($total);
         $( "#total-label" ).text($total);

         $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
         $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$duration+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
      }
      
function setdonation(str){
    $('#amount').val(str);
    if(parseInt(str)==0){
        $('#amount').removeAttr('readonly');
    }else {
        $('#amount').attr('readonly','readonly');
    }
    
}
</script>