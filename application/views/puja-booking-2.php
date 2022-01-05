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
    .inner_header {
        font-size: 58px !important;
        font-weight: 500;
        color: #ffefe2;
        text-shadow: 2px 10px 10px rgba(0,0,0,.78);
    }
</style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<div _ngcontent-ngq-c159=""   class="section-gap donation-section about-main-site2">
    <app-landing-donation _ngcontent-ngq-c159="" _nghost-ngq-c157="">
        <div _ngcontent-gko-c162="" class="inner_banner d-flex align-items-center justify-content-between ng-star-inserted"><div _ngcontent-gko-c162="" class="overlay"></div><div _ngcontent-gko-c162="" class="container"><h1 _ngcontent-gko-c162="" class="inner_header">Puja Booking  </h1></div></div>
        <div _ngcontent-ngq-c157="" class="container">
                
</div>
 <section class="poojaBooking">
    <div class="container-fluid">
        <div class="row">

<?php if ($this->uri->segment(2)=='recover') { ?>
<div class="board">
    <div class="board-inner">
        <div class="tab-pane fade in active" id="home">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-login">
                        <form  action="<?=base_url();?>poojaBooking/recover/GetNewPassword" method="post" role="form" >
                            <div class="col-lg-6 col-md-offset-3">
                                <div class="form-group">
                                    <label for="email">Email <abbr class="text-danger">*</abbr> </label>
                                    <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Enter email " value="">
                                    <?=form_error('email');?>
                                    <?php echo $this->session->flashdata('success');?>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                                            <span class="mat-button-wrapper">Submit</span>
                                            <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                            <div class="mat-button-focus-overlay"></div>
                                        </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } else { ?>
    <div class="board">
        <div class="board-inner">
            <ul class="nav nav-tabs" id="myTab">
                <div class="liner"></div>
<!-- Login / Regiter Tab  -->
                        <li class="<?php if($this->uri->segment(2)=='' or $this->uri->segment(2)=='login' or $this->uri->segment(2)=='recover' or $this->uri->segment(2)=='register'or $this->uri->segment(2)=='otp'){ ?>active<?php } ?><?php /* if(isset($_COOKIE["token"])){ ?>active<?php } */  ?>">
                            <a  href="javascript:void();" title="Login / Register">
                                <span class="round-tabs one">
                                    <i class="glyphicon glyphicon-log-in"></i>
                                </span>
                            </a>
                        </li>
<!-- Login / Regiter Tab  -->

<!-- Choose Services & Date/Time Tab  -->
                        <li class="<?php if($this->uri->segment(2)=='Services-Date-Time' or $this->uri->segment(2)=='ExpireNotification'  or $this->uri->segment(2)=='Membership'  or $this->uri->segment(2)=='Membership_success'  or $this->uri->segment(2)=='MembershipStep2' or $this->uri->segment(2)=='MembershipStep3'  or $this->uri->segment(2)=='MembershipPrintApplication'){ ?>active<?php } ?>">
                            <a href="javascript:void();"  title="Choose Services & Date/Time">
                                <span class="round-tabs two">
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                </span>
                            </a>
                        </li>
<!-- Choose Services & Date/Time Tab  -->
<!-- Booking Information Tab  -->

                        <li  class="<?php if($this->uri->segment(2)=='Booking-Information'){ ?>active<?php } ?>">
                            <a href="javascript:void();"  title="Booking Information">
                                <span class="round-tabs three">
                                    <i class="glyphicon glyphicon-info-sign"></i>
                                </span>
                            </a>
                        </li>
<!-- Booking Information Tab  -->
<!-- Preview and Payment  -->
                        <li class="<?php if($this->uri->segment(2)=='Preview-and-Payment'){ ?>active<?php } ?>">
                            <a href="javascript:void();"  title="Preview and Payment">
                                <span class="round-tabs four">
                                    <i class="glyphicon glyphicon-credit-card"></i>
                                </span>
                            </a>
                        </li>
<!-- Preview and Payment  -->
<!-- Thank You  -->
    <li class="<?php if($this->uri->segment(2)=='Thank-You'){ ?>active<?php } ?>">
        <a href="javascript:void();" title="Thank You">
        <span class="round-tabs five">
        <i class="glyphicon glyphicon-ok"></i>
        </span>
    </a>
</li>
<!-- Thank You   -->
                    </ul>
                </div>


<div class="tab-content">
<!-- Login & MemberShip Plan  -->
<?php
if ($this->uri->segment(2)=='') {
    $_SESSION['user']['last']='poojaBooking';
    redirect('Membership/ChkMembership2');
}



 if (isset($_COOKIE["login_user"])) { 



    if ($this->uri->segment(2)=='Services-Date-Time' or $this->uri->segment(2)=='Booking-Information' or $this->uri->segment(2)=='Preview-and-Payment'  or $this->uri->segment(2)=='Thank-You') {
        } else {
            if ($this->uri->segment(2)!='ExpireNotification' and $this->uri->segment(2)!='Membership' and $this->uri->segment(2)!='Membership_success' and $this->uri->segment(2)!='MembershipStep2' and $this->uri->segment(2)!='MembershipStep3'  and $this->uri->segment(2)!='MembershipPrintApplication') {
                redirect('poojaBooking/Services-Date-Time');
            }
        }
    } 
if (!isset($_COOKIE["login_user"])) {
    $_SESSION['user']['last']='poojaBooking/';
    redirect('Login');
}




if ($this->uri->segment(2)=='Membership') {
        if (!isset($_COOKIE["login_user"])) {
            $_SESSION['user']['last']='poojaBooking';
            redirect('poojaBooking');
        } else {
            redirect('poojaBooking');
        }
    }
?>


<?php if (!isset($_COOKIE["login_user"])) { ?>
<div class="tab-pane fade  <?php if($this->uri->segment(2)=='' or $this->uri->segment(2)=='login' or $this->uri->segment(2)=='register' or $this->uri->segment(2)=='otp'){ ?> in active <?php } ?> <?php /* if(isset($_COOKIE["token"])){ ?>in active<?php }  */ ?>" id="home">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-login">
<?php if($this->uri->segment(2)=='otp'){ ?>
<form  action="<?=base_url();?>poojaBooking/otp/verify" method="post" role="form" >
    <div class="col-lg-6 col-md-offset-3">
        <div class="form-group">
            <label>OTP <abbr class="text-danger">*</abbr> </label>
            <input type="password" name="otp" id="otp" tabindex="1" class="form-control" placeholder="OTP " value="">
            <?=form_error('otp');?>
            <?php echo $this->session->flashdata('success');?>
        </div>
    </div>
<div class="col-sm-12">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                <span class="mat-button-wrapper">Submit</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>
            </div>
        </div>
    </div>
</div>

</form>
<?php } else {
            require_once'login-registration.php';
        } 
?>
                </div>
            </div>
        </div>
    </div>
<!-- Login & MemberShip Plan  -->
<?php } else {



    if ($this->uri->segment(2)=='ExpireNotification') { 
        require_once'expire-notification-puja-booking.php';
    } 


    if ($this->uri->segment(2)=='MembershipStep2') { 
        require_once'membership-step-2.php';
    }

if ($this->uri->segment(2)=='MembershipStep3') { 
        require_once'membership-step-3.php';
}


if ($this->uri->segment(2)=='MembershipPrintApplication') { 
        require_once'membership-print-application.php';
}


    if ($this->uri->segment(2)=='Membership') { 
        require_once'user_membership.php';
    }

   if ($this->uri->segment(2)=='Membership_success') { 
        require_once'membership_success.php';
    }





 if ($this->uri->segment(2)=='Services-Date-Time') { 
        require_once'services-date-time.php';
    }
     if ($this->uri->segment(2)=='Booking-Information') { 
        require_once'booking-information.php';
    }
     if ($this->uri->segment(2)=='Preview-and-Payment') { 
        require_once'preview-and-payment.php';
    }


?>

<style type="text/css">
   .list-group-item { margin-right:0px; }
 
.list-group-item:hover, a.list-group-item:focus {text-decoration: none;background-color: rgb(245, 245, 245);}
.list-group { margin-bottom:0px; }
.list-group-item {
    border: 1px solid #efefe9 !important;
    margin-top: 3px !important;
    padding: 3px;
}

.list-group-item a{
    text-decoration: none !important;
    color: #818181;
    font-size: 13px !important;
}


</style>
<?php 
if ($this->uri->segment(2)=='Thank-You') {
    require_once'thank-you.php';
} 
            } ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>
   </app-landing-donation>
</div>
<style type="text/css">
    .img-responsive, .thumbnail>img, .thumbnail a>img, .carousel-inner>.item>img, .carousel-inner>.item>a>img {
    display: inherit;
    max-width: 100%;
    height: auto;
}
</style>
<?php if($this->uri->segment(2)=='Thank-You' or $this->uri->segment(2)=='Preview-and-Payment'){ ?>
<style type="text/css">
    
    #invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    //text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: left
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
</style>
<script type="text/javascript">
     $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(data) 
            {
                window.print();
                return true;
            }
        });
</script>

<?php } ?>




<style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700);
/* written by riliwan balogun http://www.facebook.com/riliwan.rabo*/

.panel-login {
    
}
.panel-login>.panel-heading {
    color: #00415d;
    background-color: #fff;
    border-color: #fff;
    text-align:center;
}
.panel-login>.panel-heading a{
    text-decoration: none;
    color: #666;
    font-weight: bold;
    font-size: 15px;
    -webkit-transition: all 0.1s linear;
    -moz-transition: all 0.1s linear;
    transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
    color: #029f5b;
    font-size: 18px;
}
.panel-login>.panel-heading hr{
    margin-top: 10px;
    margin-bottom: 0px;
    clear: both;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
    background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
    height: 45px;
    border: 1px solid #ddd;
    font-size: 16px;
    -webkit-transition: all 0.1s linear;
    -moz-transition: all 0.1s linear;
    transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
    outline:none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-color: #ccc;
}
.btn-login {
    background-color: #59B2E0;
    outline: none;
    color: #fff;
    font-size: 14px;
    height: auto;
    font-weight: normal;
    padding: 14px 0;
    text-transform: uppercase;
    border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
    color: #fff;
    background-color: #53A3CD;
    border-color: #53A3CD;
}
.forgot-password {
    text-decoration: underline;
    color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
    text-decoration: underline;
    color: #666;
}

.btn-register {
    background-color: #1CB94E;
    outline: none;
    color: #fff;
    font-size: 14px;
    height: auto;
    font-weight: normal;
    padding: 14px 0;
    text-transform: uppercase;
    border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
    color: #fff;
    background-color: #1CA347;
    border-color: #1CA347;
}
.board{
    width: 75%;
margin: 20px auto;
height: auto !important;
background: #fff;
/*box-shadow: 10px 10px #ccc,-10px 20px #ddd;*/
}
.board .nav-tabs {
    position: relative;
    /* border-bottom: 0; */
    /* width: 80%; */
    margin: 40px auto;
    margin-bottom: 0;
    box-sizing: border-box;

}


p.narrow{
    width: 60%;
    margin: 10px auto;
}

.liner{
    height: 2px;
    background: #ddd;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    /* background-color: #ffffff; */
    border: 0;
    border-bottom-color: transparent;
}

span.round-tabs {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 50%;
    background: white !important;
    z-index: 2;
    padding: 22%;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 35px;
}


span.round-tabs.one{
    color: rgb(34, 194, 34);border: 2px solid rgb(34, 194, 34);
}

li.active span.round-tabs.one{
    background: #fff !important;
    border: 2px solid #ddd;
    color: rgb(34, 194, 34);
}

span.round-tabs.two{
    color: #febe29;border: 2px solid #febe29;
}

li.active span.round-tabs.two{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #febe29;
}

span.round-tabs.three{
    color: #3e5e9a;border: 2px solid #3e5e9a;
}

li.active span.round-tabs.three{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #3e5e9a;
}

span.round-tabs.four{
    color: #f1685e;border: 2px solid #f1685e;
}

li.active span.round-tabs.four{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #f1685e;
}

span.round-tabs.five{
    color: #999;border: 2px solid #999;
}

li.active span.round-tabs.five{
    background: #fff !important;
    border: 2px solid #ddd;
    color: #999;
}

.nav-tabs > li.active > a span.round-tabs{
    background: #fafafa;
}
.nav-tabs > li {
    width: 20%;
}
/*li.active:before {
    content: " ";
    position: absolute;
    left: 45%;
    opacity:0;
    margin: 0 auto;
    bottom: -2px;
    border: 10px solid transparent;
    border-bottom-color: #fff;
    z-index: 1;
    transition:0.2s ease-in-out;
}*/
.nav-tabs > li:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #ddd;
    transition:0.1s ease-in-out;
    
}
/* .nav-tabs > li.active:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #ddd;
    
} */
.nav-tabs > li a{
   width: 70px;
   height: 70px;
   margin: 20px auto;
   border-radius: 100%;
   padding: 0;
}

.nav-tabs > li a:hover{
    background: transparent;
}

.tab-content{
}
.tab-pane{
   position: relative;
padding: 50px;
//padding-bottom: 50px;
}
.tab-content .head{
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 25px;
    text-transform: uppercase;
    padding-bottom: 10px;
}
.btn-outline-rounded{
    padding: 10px 40px;
    margin: 20px 0;
    border: 2px solid transparent;
    border-radius: 25px;
}

.btn.green{
    background-color:#5cb85c;
    /*border: 2px solid #5cb85c;*/
    color: #ffffff;
}



@media( max-width : 585px ){
    
    .board {
width: 90%;
height:auto !important;
}
    span.round-tabs {
        font-size:16px;
width: 50px;
height: 50px;
line-height: 50px;
    }
    .tab-content .head{
        font-size:20px;
        }
    .nav-tabs > li a {
width: 50px;
height: 50px;
line-height:50px;
}

.nav-tabs > li.active:after {
content: " ";
position: absolute;
left: 35%;
}

.btn-outline-rounded {
    padding:12px 20px;
    }
}

</style>
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

</script>
                
                