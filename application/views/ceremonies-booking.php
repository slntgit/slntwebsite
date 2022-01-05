<style type="text/css">
    .inner_banner[_ngcontent-gko-c162] {
        position: relative;
        height: 30vh;
        background-color: $main-c;
        background-image: url(<?=base_url();?>assets/script/slnt_banner.8c737315d88f1d38dab3.jpg);
        background-position: 50%;
        background-size: cover;
        background-repeat: no-repeat;
    }
     @media(min-width : 768px){
    .inner_header {
        font-size: 58px !important;
        font-weight: 500;
        color: #ffefe2;
        text-shadow: 2px 10px 10px rgba(0,0,0,.78);
    }
     }
    
     @media(max-width : 767px){
    .inner_header {
    font-size: 42px !important;
    font-weight: 500;
    color: #ffefe2;
    text-shadow: 2px 10px 10px rgba(0,0,0,.78);
}}
    .section-gap {
        /* padding: 0px 0 !important; */
        /* background: #ffefe2; */
    }
</style>
<div _ngcontent-ngq-c159=""   class="ceremonies-section">
    <app-landing-donation _ngcontent-ngq-c159="" _nghost-ngq-c157="">
        
    <section class="section-gap banner-section-inner aboutUs-page">
        <div class="overlay"></div>
        <div class="container">
            <section class="header-title d-flex justify-content-center align-content-center">
                <h1 class="title">Ceremonies Booking</h1>
            </section>
        </div>
    </section>
        <!-- <div _ngcontent-gko-c162="" class="inner_banner d-flex align-items-center justify-content-between ng-star-inserted"><div _ngcontent-gko-c162="" class="overlay"></div><div _ngcontent-gko-c162="" class="container"><h1 _ngcontent-gko-c162="" class="inner_header">CEREMONIES BOOKING  </h1></div></div> -->
        <div _ngcontent-ngq-c157="" class="container">
                
</div>
 <section class="pujaBooking">
    <div class="container-fluid">
        <div class="row">
     <div class="board">


<?php /*
        <div class="board-inner">
            <ul class="nav nav-tabs" id="myTab">
               
<!-- Login / <div class="liner"></div> Regiter Tab  -->
                        <li class="">
                            <a  href="javascript:void();" title="Login / Register">
                                <span class="round-tabs one">
                                    <i class="fas fa-sign-in-alt"></i>
                                </span>
                            </a>
                        </li>
<!-- Login / Regiter Tab  -->

<!-- Choose Services & Date/Time Tab  -->
                       <li class="<?php if ($this->uri->segment(2)=='ChoosEvents') { ?>active<?php } ?>"  >
                            <a href="javascript:void();" title="General Information">
                                <span class="round-tabs two">
                                  <i class="fas fa-list-alt"></i>
                                </span>
                            </a>
                        </li>
<!-- Choose Services & Date/Time Tab  -->
<!-- Booking Information Tab  -->

                        <li class="<?php if ($this->uri->segment(2)=='ChoosCateringMenu') { ?>active<?php } ?>">
                            <a href="javascript:void();"  title="Choose Catering Menu or Choose Preist">
                                <span class="round-tabs three">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                            </a>
                        </li>
<!-- Booking Information Tab  -->
<!-- Preview and Payment  -->
                        <li  class="<?php if ($this->uri->segment(2)=='Payments' or $this->uri->segment(2)=='Cancel') { ?>active<?php } ?>">
                            <a href="javascript:void();"  title="Payments">
                                <span class="round-tabs four">
                                    <i class="far fa-credit-card"></i>
                                </span>
                            </a>
                        </li>
                    <!-- Preview and Payment  -->
                    <!-- Thank You  -->
                        <li  class="<?php if ($this->uri->segment(2)=='Success') { ?>active<?php } ?>">
                            <a href="javascript:void();" title="Thank You">
                                <span class="round-tabs five">
                                    <i class="fa fa-check-square-o"></i>
                                </span>
                            </a>
                    </li>
                    <!-- Thank You   -->
                    </ul>
                </div>
*/?>

                    <div class="tab-content">
                             <?php 
                                if ($this->uri->segment(2)=='MemberShip') {
                                    require_once'ceremonies/MemberShip.php';
                                }
                                if ($this->uri->segment(2)=='ChoosEvents') {
                                    require_once'ceremonies/general-information.php';
                                }
                                if ($this->uri->segment(2)=='ChoosCateringMenu') {
                                    require_once'ceremonies/choos-catering-menu.php';
                                } 
                                if ($this->uri->segment(2)=='ChoosPriest') {
                                    require_once'ceremonies/choos-priest.php';
                                }
                                if ($this->uri->segment(2)=='Payments' or $this->uri->segment(2)=='Cancel') {
                                    require_once'ceremonies/payments.php';
                                }
                                if ($this->uri->segment(2)=='Success') {
                                    require_once'ceremonies/thank-you.php';
                                    redirect('Ceremonies/Print/'.$this->uri->segment(3));
                                }

                                if ($this->uri->segment(2)=='Print') {
                                    require_once'ceremonies/print.php';
                                }


                            ?>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>
   </app-landing-donation>
</div>
 

<script type="text/javascript">
    $(function(){
$('a[title]').tooltip();
});


$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});
$('.chk_chair_deco').on('click',function(){
    var sel_chk = $(this).attr('value');
    alert(sel_chk);
});

function chnageTab() {
   // alert('w');
}
 
    $(document).ready(function(){
        $('#submit').submit(function(e){
             $('#submit-step1').attr('disabled','disabled');
            e.preventDefault();
                    $.ajax({
                     url:'<?php echo base_url();?>AjaxController/ajax_upload',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                     success: function(data){
                        if (data==0) {
                            window.location.href="<?=base_url();?>Ceremonies/ChoosCateringMenu";
                        } else {
                            $('#submit-step1').removeAttr('disabled');
                            $('#uploaded_image').html(data); 
                        }
                     }
                     });
        });
    });
     

        $('.puja_samagri2').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#pujaid').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('Ceremonies/getPujaSamagri');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#puja_samagri_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });
 
              $('.havan_samagri2').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#pujaid').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('Ceremonies/getHavanSamagri');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#havan_samagri_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });

               $('.bhog_prasad2').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#pujaid').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('Ceremonies/getBhogPrasad');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#bhog_prasad_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });

            $('.catering2').on('click',function(){
                var priestval = $(this).val();
                var  pujaid = $('#pujaid').val();
                var queryString='pujaid='+pujaid+'&status='+priestval;
                 $.ajax({
                       type: "post",
                       url: '<?php echo site_url('Ceremonies/getCatering');?>',
                       cache: false, 
                       data:queryString,
                       success: function(response){
                            $('#catering_list').html(response);
                       },
                       error: function(){      
                        alert('Error while request..');
                    }
                });
             });
</script>   
                