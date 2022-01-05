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
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,600&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp;display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?=base_url();?>assets/script/styles.695781241edc433b4ff1.css" />
<link rel="stylesheet" href="<?=base_url();?>assets/custome.css?id=<?= time();?>" />
<link rel="stylesheet" href="<?=base_url();?>assets/bootstrap.css" />
<link rel="stylesheet" href="<?=base_url();?>assets/main.css?id=<?= time();?>" />
<link rel="stylesheet" href="<?=base_url();?>assets/main-second.css" />
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
                top: 0px;
                border-radius: 4px;
                overflow: hidden;
            }
            .shu-wid{
                width: 50%;
              }
             /* table thead th {
                    font-size: 11px!important;
                }
                .tableList thead th:last-child {
                    text-align: end;
                    padding-right: 2px !important;
                }
                .tableList tbody tr td:last-child {
                    text-align: end;
                    padding-right: 2px !important;
                }
                .tableList tbody tr td:first-child {
                    text-align: start;
                    padding-left: 2px !important;
                }
                .tableList thead th:first-child {
                    text-align: start;
                    padding-left: 2px !important;
                } */
                @media only screen and (max-width: 767px) {
                    nav .navbar-nav .nav-item .nav-link {
                        color: #ffffff !important;
                    }
                    .dropdown-item {
                        font-size: 12px;
                    }
                    #demo {
                        height: 26%!important;
                    }
                }
                
                
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                  $(".navbar-toggler").on("click", function(){
                    $('.collapse').toggle(500)
                  });
                  // $(".navbar-toggler").on("show.bs.collapse", function(){
                  //   $(".btn").html('<span class="glyphicon glyphicon-collapse-up"></span> Close');
                  // });
                });
        </script>
        <script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<style>
    .newnavli li a{
        font-weight:900 !important;
    }
</style>
    </head>

<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0&appId=2275970259335001&autoLogAppEvents=1" nonce="P69xnWle"></script>
<app-root _nghost-ngq-c57="" ng-version="10.0.6">
    <router-outlet _ngcontent-ngq-c57=""></router-outlet>
        <app-landing-page class="ng-star-inserted">
            <div class="row">
                <div class="container-fluid">
                <div class="d-flex align-content-center align-content-between m-auto relative">
                    <div  id="logo" class="logo m-auto">
                       <a href="<?php echo base_url()?>">
                         <img  src="<?php echo base_url()?>assets/setting/<?php echo $webconfig->company_logo;?>"  title="<?php echo $webconfig->meta_title;?>"  alt="<?php echo $webconfig->meta_title;?>" class="img-responsive shu-wid" />
                       </a>
                    </div>
                    <div class="m-auto regLogBtn">
                            <?php if (isset($_COOKIE["login_user"])) { ?>
                            
                            
                            
                             <a class="mat-focus-indicator mat-flat-button mat-button-base mat-primary" href="<?=base_url();?>Dashboard/MyPujaBooking">Dashboard</a> 
                             <a class="mat-focus-indicator mat-flat-button mat-button-base mat-primary" href="<?=base_url();?>Logout">Logout</a> 
                          <?php   } else { ?>
                             <a class="mat-focus-indicator mat-flat-button mat-button-base mat-primary" href="<?=base_url();?>Login">Login Devotee</a> 
                          <?php } ?>
                    </div>
                </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#head_menu_items" aria-controls="head_menu_items" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="head_menu_items">
                        <ul class="navbar-nav mr-auto newnavli">
                            <li  class="nav-item active"><a class="nav-link " href="<?=base_url();?>">Home</a></li>
                            <!-- <li class="nav-item active"><a class="nav-link" href="<?=base_url();?>about">About Us</a></li> -->
<li class="nav-item dropdown active">
<a class="nav-link dropdown-toggle" href="javascript:void();" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="<?=base_url('about');?>">About Siddh Peeth Shree Lakshminarayan Temple</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="<?=base_url('management-committe');?>">Management Committe 2019-21</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="<?=base_url('advisors-trustees');?>">Trustees</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="<?=base_url('administration-priest-organisation-chart');?>">Priest Chart</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="<?=base_url('executive');?>">SPSLNT Administrative Executives</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="<?=base_url('temple-rules');?>">Temple Rules</a>
<div class="dropdown-divider"></div>


</div>
</li>

                            
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="javascript:void();" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Booking</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="<?=base_url();?>poojaBooking/Membership?type=pooja">Pooja Booking</a>
                              <div class="dropdown-divider"></div>
                              
                              
                               <a class="dropdown-item" href="<?=base_url();?>poojaBooking/Membership?type=yajman">Yajman   Booking</a>
                              <div class="dropdown-divider"></div>
                              
                               <a class="dropdown-item" href="<?=base_url();?>Temple-Refreshment-Booking">Facility Booking</a>
                              <div class="dropdown-divider"></div>
                              
                              
                              <a class="dropdown-item" href="<?=base_url();?>Ceremonies">Ceremonies Booking</a>
                              
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?=base_url();?>Events">Event Booking</a> 
                            </div>
                          </li>
                          <li class="nav-item active"><a class="nav-link" href="<?=base_url();?>Donation">Donation</a></li>
                          <li class="nav-item active"><a class="nav-link" href="<?=base_url();?>applyMembership">Membership</a></li>
                          <li class="nav-item active"><a class="nav-link" href="<?=base_url();?>Gallery">Gallery</a></li>
                          
                          <li class="nav-item active"><a class="nav-link" href="<?=base_url();?>career">Career</a></li>
                          <li class="nav-item active"><a class="nav-link" href="<?=base_url();?>contact">Contact</a></li>
                     
                     
                      <?php if (isset($_COOKIE["login_user"])) { ?>
                           <li class="nav-item active mobile-menu-items-login">  
                           <a class="nav-link" href="<?=base_url();?>Dashboard/MyPujaBooking">Dashboard</a> 
                           </li>
                           
                           <li class="nav-item active mobile-menu-items-login">  
                           <a class="nav-link" href="<?=base_url();?>Logout">Logout</a> 
                           </li>
                           
                           
                          <?php   } else { ?>
                           <li class="nav-item active mobile-menu-items-login">  
                           <a class="nav-link" href="<?=base_url();?>Login">Login / Registration</a> 
                           </li>
                          <?php } ?>
                          
                          
                          
                          
                        </ul>
                      </div>    
                            </nav>
                        </div>
                    </div>            
                     </app-landing-page>
                     <app-landing-page _nghost-ngq-c159="" class="ng-star-inserted">