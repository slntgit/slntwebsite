<style type="text/css">
    .inner_banner[_ngcontent-gko-c162] {
        position: relative;
        height: 30vh;
        background-color: #48263d;
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
    .fade:not(.show) {
        opacity: 1 !important;
    }
</style>
 
<div _ngcontent-ngq-c159=""   class="section-gap donation-section about-main-site2">
    <app-landing-donation _ngcontent-ngq-c159="" _nghost-ngq-c157="">
        <!-- <div _ngcontent-gko-c162="" class="inner_banner d-flex align-items-center justify-content-between ng-star-inserted"><div _ngcontent-gko-c162="" class="overlay"></div><div _ngcontent-gko-c162="" class="container"><h1 _ngcontent-gko-c162="" class="inner_header">Login / Register </h1></div></div> -->
        
        <section class="section-gap banner-section-inner aboutUs-page">
        <div class="overlay"></div>
        <div class="container">
            <section class="header-title d-flex justify-content-center align-content-center">
                <h1 class="title">Login / Register</h1>
            </section>
        </div>
        </section>
        <div _ngcontent-ngq-c157="" class="container">
                
</div>
 <section class="loginSection">
    <div class="container-fluid">
        <div class="row">

<?php if ($this->uri->segment(2)=='recover') { ?>
<div class="board">
    <div class="board-inner">
        <div class="tab-pane fade in active" id="home">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-login">
                        <form  action="<?=base_url();?>Login/recover/GetNewPassword" method="post" role="form" >
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

<div class="tab-content">
<!-- Login & MemberShip Plan  -->
 

<?php if (!isset($_COOKIE["login_user"])) { ?>
<div class="tab-pane fade  <?php if($this->uri->segment(2)=='' or $this->uri->segment(2)=='login' or $this->uri->segment(2)=='register' or $this->uri->segment(2)=='otp'){ ?> in active <?php } ?>" id="home">
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-login">
<?php if($this->uri->segment(2)=='otp'){ ?>
<form  action="<?=base_url();?>Login/otp/verify" method="post" role="form" >
    <div class="col-lg-6 col-md-offset-3">
        <div class="form-group">
            <label>OTP <abbr class="text-danger">*</abbr> <span style="font-size: 13px;" > We have sent an OTP to your registered email. (Please check your spam) </span> </label>
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
<?php } else { ?>
    <div class="panel-heading">
    <div class="row">
        <div class="col-xs-12">
            <div class="loginRegDigBtn">
                <a href="#" class="active tabsBtn" id="login-form-link">Login</a>
                <a href="#" class="tabsBtn" id="register-form-link">Register</a>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="panel-body login-section">
    <div class="row">
    <div class="col-md-6">
        <div class="wapper-img">
            <img src="<?=base_url();?>assets/setting/0777eaef2f1c1276eec75937b88fd879.jpg.jpg" class="img-fluid">
        </div>
    </div>
    <div class="col-md-6">

        <br>
        <form id="login-form" action="<?=base_url();?>Login/login/" method="post" role="form" <?php if($this->uri->segment(2)=='' or $this->uri->segment(2)=='login'){ ?> style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>>
        <div class="form-wapper">
            <?php echo $this->session->flashdata('success');?>
                <div class="form-group">
                <label>Username <abbr class="text-danger">*</abbr> </label>
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="<?php if(isset($_COOKIE["rem_user"])) {  echo $_COOKIE["rem_user"]; } ?>">
                    <?=form_error('username');?>
                </div>
                <div class="form-group">
                <label>Password <abbr class="text-danger">*</abbr></label>
                    <input value="<?php if(isset($_COOKIE["rem_pass"])) {  echo $_COOKIE["rem_pass"]; } ?>" type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                <?=form_error('password');?>
                </div>
                <div class="form-group text-left">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                        <label for="remember"> Remember Me</label>
                </div>
                <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                              

<button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                <span class="mat-button-wrapper">Login & Proceed</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>   
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-left mt-3">
            <a href="<?=base_url();?>Login/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
</div>
</form>

<form id="register-form" action="<?=base_url();?>Login/register/" method="post" role="form" <?php if($this->uri->segment(2)=='register'){ ?> style="display: block;" <?php } else { ?> style="display: none;" <?php } ?>>
                                    
<div class="row">
    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="name_title">Name Prefix <abbr class="text-danger">*</abbr></label>
              <select class="form-control" id="name_title" name="name_title">
               
                  <option value="Mr" <?php if(set_value('name_title')=='Mr'){ echo 'seleted'; } ?>>Mr.</option>
<option value="Madam" <?php if(set_value('name_title')=='Madam'){ echo 'seleted'; } ?>>Madam.</option>
<option value="Miss" <?php if(set_value('name_title')=='Mss'){ echo 'seleted'; } ?>>Miss.</option>

<option value="Dr" <?php if(set_value('name_title')=='Dr'){ echo 'seleted'; } ?>>Dr.</option>
<option value="A/Prof" <?php if(set_value('name_title')=='A/Prof'){ echo 'seleted'; } ?>>A/Prof.</option>

<option value="Prof" <?php if(set_value('name_title')=='Prof'){ echo 'seleted'; } ?>>Prof.</option>



              </select>
              <?=form_error('name_title');?>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="first_name">First Name <abbr class="text-danger">*</abbr></label>
            <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control alphabet" placeholder="First name" value="<?=set_value('first_name');?>">
            <?=form_error('first_name');?>
        </div>
    </div>

    <div class="col-md-4 col-sm-6">
        <div class="form-group">
            <label for="last_name">Last Name <abbr class="text-danger">*</abbr></label>
            <input type="text" name="last_name" id="last_name" tabindex="1" class="form-control alphabet" placeholder="Last name" value="<?=set_value('last_name');?>">
            <?=form_error('last_name');?>
        </div>
    </div>
        <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <label for="email">Email  <abbr class="text-danger">*</abbr></label>
            <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="<?=set_value('email');?>">
            <?=form_error('email');?>
        </div>
    </div>                              

    <div class="col-md-7 col-sm-6">
        <div class="form-group">
            <label for="mobile" class="col-sm-12">Mobile  <abbr class="text-danger">*</abbr></label>
            <div class="row">
                <div class="col-sm-4">
                    <input type="text" name="mobile_code" id="mobile_code"  class="form-control" readonly="" disabled=""  value="+65">    
                </div>
                <div class="col-sm-8">
                    <input type="tel" name="mobile" id="mobile" tabindex="1" class="form-control telephone number" placeholder="Mobile" value="<?=set_value('mobile');?>"  maxlength="8">
                </div>

            </div>
            
            
            
            <?=form_error('mobile');?>
    </div>
    </div>   
    <div class="col-md-5 col-sm-6">
        <div class="form-group">
            <label for="office_number">Office Number </label>
            <input type="tel" name="office_number" id="office_number" tabindex="1" class="form-control telephone number" placeholder="Office Number" value="<?=set_value('office_number');?>"  maxlength="8">
             <?=form_error('office_number');?>
        </div>
    </div>    
    <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <label for="password">Password  <abbr class="text-danger">*</abbr></label>
            <input type="password" name="password" id="password" tabindex="1" class="form-control" placeholder="Password" value="">
            <?=form_error('password');?>
    </div>
    </div>         

        <div class="col-md-6 col-sm-6">
        <div class="form-group">
            <label for="confirm_password">Confirm Password  <abbr class="text-danger">*</abbr></label>
            <input type="password" name="confirm_password" id="confirm_password" tabindex="1" class="form-control" placeholder="Confirm Password" value="">
            <?=form_error('confirm_password');?>
        </div>
    </div>    
    

    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <label for="address_1"> Address 1</label>
            <input type="text" name="address_1" id="address_1" tabindex="1" class="form-control" placeholder="Address 1" value="<?=set_value('address_1');?>">
             <?=form_error('address_1');?>
       </div>
    </div> 

    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <label for="address_2"> Address 2</label>
            <input type="text" name="address_2" id="address_2" tabindex="1" class="form-control" placeholder="Address 2" value="<?=set_value('address_2');?>">
             <?=form_error('address_2');?>
        </div>
    </div> 
        <div class="col-md-4 col-sm-4">
        <div class="form-group">
            <label for="postal_code">Postal Code <abbr>*</abbr></label>
            <input type="text" name="postal_code" id="postal_code" tabindex="1" class="form-control number" maxlength="6" minlength="6" placeholder="Postal Code" value="<?=set_value('postal_code');?>">
             <?=form_error('postal_code');?>
        </div>
    </div> 

</div>
<div class="form-group">
    <div class="row">
        <div class="col-sm-12">
            <button _ngcontent-ngq-c157="" mat-flat-button="" color="primary" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary">
                <span class="mat-button-wrapper">Register & Proceed</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>  
        </div>
    </div>
</div>
</form>
        </div>
    </div>
</div> 
<?php }  ?>
                </div>
            </div>
        </div>
    </div>
<!-- Login & MemberShip Plan  -->
<?php } ?>
 
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

.board > div.board-inner{
    background: #fafafa url(http://subtlepatterns.com/patterns/geometry2.png);
    background-size: 30%;
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
.nav-tabs > li.active:after {
    content: " ";
    position: absolute;
    left: 45%;
   opacity:1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #ddd;
    
}
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
padding: 0px;
//padding-bottom: 50px;
}
.tab-content .head{
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 25px;
    text-transform: uppercase;
    padding-bottom: 10px;
}
.about-main-site2 {
    padding-top: 0px !important;
    padding-bottom: 80px !important;
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
                
                