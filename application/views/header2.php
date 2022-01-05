<?php 
function slugify($text){
// replace non letter or digits by -
$text = preg_replace('~[^\pL\d]+~u', '-', $text);
// transliterate
$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
// remove unwanted characters
$text = preg_replace('~[^-\w]+~', '', $text);
// trim
$text = trim($text, '-');
// remove duplicated - symbols
$text = preg_replace('~-+~', '-', $text);
// lowercase
$text = strtolower($text);
if (empty($text)) {
return 'n-a';
}
return $text;
}
$configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
$webconfig=$configwebsite->row();

if($this->uri->segment(1)=='Login'){
    
} else {
    //$_SESSION['user']['last']=$this->uri->segment(1);
}

?>
<html lang="en">
    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $webconfig->meta_title;?> | Home</title>
      <link rel="icon" href="<?=base_url();?>assets/favicon.png" sizes="32x32" />
    <meta name="description" content="<?= $webconfig->meta_content;?>" />
    <meta name="keywords" content="<?= $webconfig->meta_keyword;?>">
    <meta name="distribution" content="Global" />
    <link rel="canonical" href="<?php echo $webconfig->domain_name;?>"/>
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="author" content="<?php echo $webconfig->domain_name;?>"/>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta property="og:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta property="og:url" content="<?php echo $webconfig->domain_name;?>" />
    <meta property="og:site_name" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:card" content="app" />
    <meta name="twitter:description" content="<?php echo $webconfig->meta_content;?>" />
    <meta name="twitter:title" content="<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:site" content="@<?php echo $webconfig->meta_title;?>" />
    <meta name="twitter:creator" content="@<?php echo $webconfig->meta_title;?>" />
<link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,600&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500&amp;display=swap"
            rel="stylesheet"
        />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?=base_url();?>assets/script/styles.695781241edc433b4ff1.css" />
<link rel="stylesheet" href="<?=base_url();?>assets/custome.css" />
<link rel="stylesheet" href="<?=base_url();?>assets/main.css" />
<style>
.banner[_ngcontent-ngq-c160] .banner-wrapper[_ngcontent-ngq-c160] {
                background-color: #48263d;
<?php 
$webcon2 = $this->Main_model->getData('tbl_web_images','id','ACS',1,'type',1);
if($webcon2->num_rows()>0){
    $brs=$webcon2->row();
 ?>
                background-image: url(<?=base_url();?>assets/setting/<?=$brs->image;?>);
<?php } ?>
                background-position: 50%;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
                max-width: 92%;
                max-height: 100vh;
                width: 100%;
                height: 100%;
                margin: auto;
                right: 0;
                left: 0;
                top: 60px;
                border-radius: 4px;
                overflow: hidden;
            }
          
        </style>
    </head>

    <body class="mat-typography">

<app-root _nghost-ngq-c57="" ng-version="10.0.6">
    <router-outlet _ngcontent-ngq-c57=""></router-outlet>
    <app-landing-page _nghost-ngq-c159="" class="ng-star-inserted">
        <header _ngcontent-ngq-c159="" id="header">
            <app-landing-header _ngcontent-ngq-c159="" _nghost-ngq-c156="">
                <div _ngcontent-ngq-c156="" class="container headerBtn">
                    <div class="row">
                        <div class="col-sm-12">
                        
                        <?php if (isset($_COOKIE["login_user"])) { ?>
                          <!--   <a class="mat-focus-indicator mat-flat-button mat-button-base mat-primary pull-right text-white" href="<?=base_url();?>Dashboard">
                                        <span class="mat-button-wrapper"><i class="fa fa-tachometer" aria-hidden="true"></i> My Dashboard</span>
                                        <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                        <div class="mat-button-focus-overlay"></div>
                            </a>
                            -->

                             <a class="mat-focus-indicator mat-flat-button mat-button-base mat-primary pull-right text-white" href="<?=base_url();?>Logout">
                                        <span class="mat-button-wrapper">Logout</span>
                                        <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                        <div class="mat-button-focus-overlay"></div>
                            </a>



                         <?php   } else {
                        ?>
                            <a class="mat-focus-indicator mat-flat-button mat-button-base mat-primary pull-right text-white" href="<?=base_url();?>Login">
                                        <span class="mat-button-wrapper">Login / Registrations</span>
                                        <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                        <div class="mat-button-focus-overlay"></div>
                            </a>
                        <?php } ?>


                        </div>                    
                    </div>
                </div>
                <div _ngcontent-ngq-c156="" class="container">
                    <div _ngcontent-ngq-c156="" id="logo" class="logo text-center">
                        <a href="<?php echo base_url()?>">
                            <img _ngcontent-ngq-c156="" src="<?php echo base_url()?>assets/setting/<?php echo $webconfig->company_logo;?>"  title="<?php echo $webconfig->meta_title;?>"  alt="<?php echo $webconfig->meta_title;?>" />
                        </a>
                    </div>
                </div>


<div _ngcontent-ngq-c156="" class="container-fluid main-nav">
    <div _ngcontent-ngq-c156="" class="row">
        <nav _ngcontent-ngq-c156="" class="container text-center">
            <button _ngcontent-ngq-c156="" mat-button="" href="<?=base_url();?>" class="mat-focus-indicator mat-button mat-button-base hrefLink" tabindex="0">
                <span class="mat-button-wrapper">Home</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>
            <button _ngcontent-ngq-c156="" mat-button="" href="<?=base_url();?>about" class="mat-focus-indicator mat-button mat-button-base hrefLink" tabindex="0">
                <span class="mat-button-wrapper">About Us</span>
                <div matripple="" class="mat-ripple mat-button-ripple"></div>
                <div class="mat-button-focus-overlay"></div>
            </button>
            <a _ngcontent-ngq-c156="" aria-haspopup="true" mat-button="" class="mat-focus-indicator mat-menu-trigger mat-button mat-button-base booking-drop">
                <span class="mat-button-wrapper booking-drop">Booking</span>
                <div matripple="" class="mat-ripple mat-button-ripple booking-drop"></div>
                <div class="mat-button-focus-overlay booking-drop"></div>
        <div class="dropdown-menuxcd"   style="position: absolute;">
            <div id="cdk-overlay-0" class="cdk-overlay-pane" style="position: static;">
                <div tabindex="-1" role="menu" class="mat-menu-panel ng-trigger ng-trigger-transformMenu ng-tns-c135-0 mat-menu-after mat-menu-below ng-star-inserted mat-elevation-z4" id="mat-menu-panel-0">
                    <div class="mat-menu-content ng-tns-c135-0">
                        <button href="<?=base_url();?>pujaBooking" _ngcontent-bdj-c156="" mat-menu-item="" class="mat-focus-indicator mat-menu-item ng-tns-c135-0 hrefLink" role="menuitem" tabindex="0" aria-disabled="false">
                        Pooja Booking
                            <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                        </button>
                        <button href="<?=base_url();?>Ceremonies" _ngcontent-bdj-c156="" mat-menu-item="" routerlink="/ceremonies" class="mat-focus-indicator mat-menu-item ng-tns-c135-0 hrefLink" tabindex="0" role="menuitem" aria-disabled="false">
                            Ceremonies (Wedding)
                            <div matripple="" class="mat-ripple mat-menu-ripple"></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </a>
<style type="text/css">
    @media only screen and (max-width: 676px) {
      .dropdown-menuxcd{
            display: none; 
        }
        .booking-drop:hover .dropdown-menuxcd{
            display: block !important;
            margin-left: -58px !important;
        }
    }
    @media only screen and (min-width: 677px) {
      .dropdown-menuxcd{
            display: none; 
        }
        .booking-drop:hover .dropdown-menuxcd{
            display: block !important;
        }
    }
</style>
<!-- Dropdown menu function  -->
                                   
                                    <button _ngcontent-ngq-c156="" mat-button="" href="<?=base_url();?>applyMembership" class="mat-focus-indicator mat-button mat-button-base hrefLink" tabindex="0">
                                        <span class="mat-button-wrapper">Apply Membership</span>
                                        <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                        <div class="mat-button-focus-overlay"></div>
                                    </button>



                                    <button _ngcontent-ngq-c156="" mat-button="" href="<?=base_url();?>career" class="mat-focus-indicator mat-button mat-button-base hrefLink" tabindex="0">
                                        <span class="mat-button-wrapper">Career</span>
                                        <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                        <div class="mat-button-focus-overlay"></div>
                                    </button>
                                    
                                    <button _ngcontent-ngq-c156="" mat-button="" href="<?=base_url();?>Donation" class="mat-focus-indicator mat-button mat-button-base hrefLink" tabindex="0">
                                        <span class="mat-button-wrapper">Donation</span>
                                        <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                        <div class="mat-button-focus-overlay"></div>
                                    </button>



                                    <button _ngcontent-ngq-c156="" mat-button="" href="<?=base_url();?>contact" class="mat-focus-indicator mat-button mat-button-base hrefLink" tabindex="0">
                                        <span class="mat-button-wrapper">Contact Us</span>
                                        <div matripple="" class="mat-ripple mat-button-ripple"></div>
                                        <div class="mat-button-focus-overlay"></div>
                                    </button>
                                </nav>
                            </div>
                        </div>
                    </app-landing-header>
                </header>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 

<div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Brand
                    </a>
                </li>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">Team</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
             
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <style type="text/css">
 body {
    position: relative;
    overflow-x: hidden;
}
body,
html { height: 100%;}
.nav .open > a, 
.nav .open > a:hover, 
.nav .open > a:focus {background-color: transparent;}

/*-------------------------------*/
/*           Wrappers            */
/*-------------------------------*/

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 220px;
}

#sidebar-wrapper {
    z-index: 1000;
    left: 220px;
    width: 0;
    height: 100%;
    margin-left: -240px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #1a1a1a;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#sidebar-wrapper::-webkit-scrollbar {
  display: none;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    padding-top: 70px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -220px;
}

/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 220px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    position: relative; 
    line-height: 20px;
    display: inline-block;
    width: 100%;
}

.sidebar-nav li:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    height: 100%;
    width: 3px;
    background-color: #1c1c1c;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}
.sidebar-nav li:first-child a {
    color: #fff;
    background-color: #1a1a1a;
}
.sidebar-nav li:nth-child(2):before {
    background-color: #ec1b5a;   
}
.sidebar-nav li:nth-child(3):before {
    background-color: #79aefe;   
}
.sidebar-nav li:nth-child(4):before {
    background-color: #314190;   
}
.sidebar-nav li:nth-child(5):before {
    background-color: #279636;   
}
.sidebar-nav li:nth-child(6):before {
    background-color: #7d5d81;   
}
.sidebar-nav li:nth-child(7):before {
    background-color: #ead24c;   
}
.sidebar-nav li:nth-child(8):before {
    background-color: #2d2366;   
}
.sidebar-nav li:nth-child(9):before {
    background-color: #35acdf;   
}
.sidebar-nav li:hover:before,
.sidebar-nav li.open:hover:before {
    width: 100%;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}

.sidebar-nav li a {
    display: block;
    color: #ddd;
    text-decoration: none;
    padding: 10px 15px 10px 30px;    
}

.sidebar-nav li a:hover,
.sidebar-nav li a:active,
.sidebar-nav li a:focus,
.sidebar-nav li.open a:hover,
.sidebar-nav li.open a:active,
.sidebar-nav li.open a:focus{
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 20px;
    line-height: 44px;
}
.sidebar-nav .dropdown-menu {
    position: relative;
    width: 100%;
    padding: 0;
    margin: 0;
    border-radius: 0;
    border: none;
    background-color: #222;
    box-shadow: none;
}

/*-------------------------------*/
/*       Hamburger-Cross         */
/*-------------------------------*/

.hamburger {
  position: fixed;
  top: 20px;  
  z-index: 999;
  display: block;
  width: 32px;
  height: 32px;
  margin-left: 15px;
  background: transparent;
  border: none;
}
.hamburger:hover,
.hamburger:focus,
.hamburger:active {
  outline: none;
}
.hamburger.is-closed:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom,
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  position: absolute;
  left: 0;
  height: 4px;
  width: 100%;
}
.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-closed .hamb-top { 
  top: 5px; 
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed .hamb-middle {
  top: 50%;
  margin-top: -2px;
}
.hamburger.is-closed .hamb-bottom {
  bottom: 5px;  
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed:hover .hamb-top {
  top: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover .hamb-bottom {
  bottom: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-bottom {
  top: 50%;
  margin-top: -2px;  
}
.hamburger.is-open .hamb-top { 
  -webkit-transform: rotate(45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open .hamb-middle { display: none; }
.hamburger.is-open .hamb-bottom {
  -webkit-transform: rotate(-45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}

/*-------------------------------*/
/*            Overlay            */
/*-------------------------------*/

.overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(250,250,250,.8);
    z-index: 1;
}
    </style>
    <script type="text/javascript">
        $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
    </script>