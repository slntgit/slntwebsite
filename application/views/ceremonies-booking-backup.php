<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/ceremonies.css">
    <div class="main-site about-main-site">
        <app-landing-home _nghost-ngq-c160="" class="ng-star-inserted">
            <div id="parallax-world-of-ugg">
                <section>
                    <div class="parallax-one">
                      <h2>Ceremonies Booking</h2>
                    </div>
                </section>
            </div>
        </app-landing-home>
 
             <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                     
            <ul class="nav nav-tabs" id="myTab">
                <div class="liner"></div>
  <li>
    <a  href="javascript:void();" title="Login / Register">
        <span class="round-tabs one">
            <i class="glyphicon glyphicon-log-in"></i>
        </span>
    </a>
</li>
<!-- Choose Services & Date/Time Tab  -->
<li class="<?php if ($this->uri->segment(2)=='ChoosEvents') { ?>active<?php } ?>"  >
    <a href="javascript:void();" title="General Information">
        <span class="round-tabs two">
            <i class="glyphicon glyphicon-list-alt"></i>
        </span>
    </a>
</li>
<!-- Choose Services & Date/Time Tab  -->
<!-- Booking Information Tab  -->

<li class="<?php if ($this->uri->segment(2)=='ChoosCateringMenu') { ?>active<?php } ?>">
    <a href="javascript:void();"  title="Choose Catering Menu or Choose Preist">
        <span class="round-tabs three">
            <i class="glyphicon glyphicon-inbox"></i>
        </span>
    </a>
</li>
<!-- Booking Information Tab  -->

<!-- Login / Regiter Tab   
<li>
    <a  href="javascript:void();" title="Choose Preist">
        <span class="round-tabs one">
            <i class="glyphicon glyphicon-user"></i>
        </span>
    </a>
</li>
  Login / Regiter Tab  -->


<!-- Preview and Payment  -->
<li  class="<?php if ($this->uri->segment(2)=='Payments' or $this->uri->segment(2)=='Cancel') { ?>active<?php } ?>">
    <a href="javascript:void();"  title="Payments">
        <span class="round-tabs four">
            <i class="glyphicon glyphicon-credit-card"></i>
        </span>
    </a>
</li>
                    <!-- Preview and Payment  -->

                    <!-- Thank You  -->
<li  class="<?php if ($this->uri->segment(2)=='Success') { ?>active<?php } ?>">
    <a href="javascript:void();" title="Thank You">
        <span class="round-tabs five">
            <i class="glyphicon glyphicon-ok"></i>
        </span>
    </a>
</li>
                    <!-- Thank You   -->
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
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
    }
?>
                </div>
            </div>
    </div>
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
                
                


