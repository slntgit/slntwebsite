                <div _ngcontent-ngq-c159="" class="main-site">
                    <router-outlet _ngcontent-ngq-c159=""></router-outlet>
                    <app-landing-home class="ng-star-inserted">
                        <!-- <section _ngcontent-ngq-c160="" class="banner fullscreen">
                            <div _ngcontent-ngq-c160="" class="banner-wrapper align-item-center justify-content-between d-flex">
                                <div _ngcontent-ngq-c160="" class="overlay"></div>
                            </div>
                        </section> -->
<!-- <style>
  /* Make the image fully responsive */
  .carousel-inner img {
        height: 801px;
    width: 1363px;
  }
  </style>-->
  
  <style>
      .btnNewText{
          background-color:#c5514c !important;
      }
      .headlinenewtextcolor{
          color:#4a403c !important;
      }
      .search-form input::placeholder {
          color:#df9882 !important;
          font-weight:bold;
          padding-left:15px;
      }
  </style>
  
  <div id="demo">
      <video controls width="100%" height="auto" loop autoplay muted>
          <source src="admin/assets/images/slider/d445a3b2194e67b594a2c56167289c50.mp4" type="video/mp4" alt="your vdieo is not working">
          
      </video>
  </div>
  

      
  
<div id="demo" class="carousel slide" data-ride="carousel" style="display:none; ">
        
        <?php $data = $this->SliderModel->all();

          ?>
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          
          <!-- The slideshow -->
          <div class="carousel-inner shu-wra" >
           <?php 
           $count = 0;
           foreach($data as $image){
            ++$count;
            ?>
            <div class="carousel-item <?php if($count == 1){ ?> active <?php }?>">
              <img src="<?php echo base_url('admin/assets/images/slider/'); ?><?php echo $image['feature_image'];?>" alt="" width="100%">

            </div>
        <?php }?>
          </div>
          
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
    </div>


                        <section class="section-gap serchOption">
                            <div class="container">
                                <div _ngcontent-ngq-c160="" class="warpper m-auto">
                                    <h2 class="title text-center " style="color:#4a403c;">Search Pooja Type</h2>
                                    <br />
                                    
                                    <div _ngcontent-ngq-c160="" class="text-center search-form">
                                        <form _ngcontent-ngq-c160="" novalidate="" formgroup="search" action="<?=base_url('skeyword');?>" method="post">
                                            <button _ngcontent-ngq-c160="" class="search-submit" type="submit" name="submit"><span _ngcontent-ngq-c160="" class="material-icons text-white" style="color:#fff !important;">search</span></button>
                                            <input _ngcontent-ngq-c160="" type="text" name="description_charge" placeholder="Search Pooja"  />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
  
                    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/slick/slick.css">
                    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/slick/slick-theme.css">    
                    <style type="text/css">
                    .slider {
                        /* width: 80%; */
                        margin: 10px auto;
                    }
                
                    .slick-slide {
                      margin: 0px 8px;
                    }
                
                    .slick-slide img {
                      width: 100%;
                    }
                
                    .slick-prev:before,
                    .slick-next:before {
                      color: black;
                    }
                
                
                    .slick-slide {
                      transition: all ease-in-out .3s;
                      opacity: .2;
                    }
                    
                    .slick-active {
                      opacity: 1;
                    }
                
                    .slick-current {
                      opacity: 1;
                    }
                  </style>

                  <section class="homePujaSlider">
                    <div class="container">
                        <section class="regular slider">
                          <?php foreach($puja_list as $all_packages){ ?>
                                <div class="pujaContentSlider text-center">
<a href="<?=base_url();?>Pooja/details/<?=$all_packages->id;?>/<?=slugify($all_packages->description_charge);?>">
                                    
                                    <div class="wrapperImg">

<img src="<?=base_url();?>assets/temple/<?php echo $all_packages->puja_image; ?>" class="img-fluid" title="<?php echo $all_packages->description_charge; ?>" alt="<?php echo $all_packages->description_charge; ?>">

                                    </div>
                                  <h3 class="slider-heading"><?php echo $all_packages->description_charge; ?></h3>
</a>  
                                  
                                  
                                </div>
                            <?php } ?>
                        </section>
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <a href="<?=base_url();?>Pooja" class="mat-focus-indicator mat-flat-button mat-button-base mat-primary text-white btnNewText">Load More</a>
                            </div>
                        </div>
                    </div>
                  </section>
                      
                  
                    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
                      <script src="<?=base_url();?>assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>
                      <script type="text/javascript">
                    $(document).on('ready', function() {
                      $(".regular").slick({
                        dots: false,
                        infinite: true,
                        slidesToShow: 5,
                        slidesToScroll: 4,
                        responsive: [{
                            breakpoint: 676,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                arrows: false,
                            }
                        }]
                      });
                      
                      $(".lazy").slick({
                        lazyLoad: 'ondemand', // ondemand progressive anticipated
                        infinite: true
                      });
                    });
                    </script>
   
                    <section class="section-gap slntUps">
                                                        <section _ngcontent-ngq-c160="" class="header-title text-center">
                                    <!-- <p _ngcontent-ngq-c160="" class="sub-title">Events</p> -->
                                    <h2 _ngcontent-ngq-c160="" class="title" style="color:#4a403c !important; padding-bottom:30px">Major Milestones</h2>
                                    <br />
                                </section>
                                
                        <div class="container">
                            <div class="row d-flex align-item-center">
                                <div class="col-md-6">
                                    <div class="wrapper card text-center">
                                        <div class="img">
                                            <img src="<?php echo base_url()?>assets/aniversary.jpeg" alt="" class="img-fluid">
                                        </div>
                                        <div class="content">
                                            <h3>SPSLNT<br>50th Anniversary</h3>
                                            <p style="color:#f1d7b4;" class="text-justify">SPSLNT celebrated our 50th year Anniversary on 28th April 2019.The celebration kicked off with bhajans and kirtan by devotees, children cultural programmers, bursary awards.The ceremony was graced by Mr Tharman Shanmugaratnam was the Deputy Prime Minister at 50th Anniversary and Coordinating Minister for Social Policies.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wrapper active card text-center">
                                        <div class="img">
                                            <img src="<?php echo base_url()?>assets/123.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="content">
                                            <h3>Inauguration of Temple to Siddh Peeth Shree  Lakshminarayan Temple</h3>
                                            <p style="color:#f1d7b4;" class="text-justify"> On 25th October 2020 Shree Lakshminaryan Temple was declared Siddh Peeth Shree Lakshminarayan Temple which is the auspicious day of Navami. This historic event took place with the blessings of Tulsipeethadhisaar Jagadguru Ramanamdacharya Swami Shri Rambhdracharya Ji Maharaj from Chitrakoot, India and the guidance of temple priests led by Chief Priest Acharya Ved Prakash Shukla Ji.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="col-md-4">
                                    <div class="wrapper card text-center">
                                        <div class="img">
                                            <img src="<?php echo base_url()?>assets/variety-of-puja.png" alt="" class="img-fluid">
                                        </div>
                                      <div class="content">
                                            <h3>Variety of Pooja's</h3>
                                            <p>We provide all kind of pooja services within the temple with all amenities.</p>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </section>
                    <section _ngcontent-ngq-c160="" class="section-gap event-section">
                            <div _ngcontent-ngq-c160="" class="container">
                                <section _ngcontent-ngq-c160="" class="header-title text-center">
                                    <!-- <p _ngcontent-ngq-c160="" class="sub-title">Events</p> -->
                                    <h2 _ngcontent-ngq-c160="" class="title" style="color:#4a403c !important;">Upcoming Events</h2>
                                    <br />
                                </section>
                                <section class="event-list-section">

                                    <div class="row">
                                        <div class="col-12 m-auto text-center">
                                        <ul class="event-list">

                                            <?php foreach($events as $eventsdata){ ?>

                                            <li>
                                            
                                                <img alt="Independence Day" src="<?=base_url();?>assets/products/<?=$eventsdata->product_image;?>" />

                                                <time datetime="<?=$eventsdata->event_date;?>">
                                                    <span class="day"><?=date('d', strtotime($eventsdata->event_date));?></span>
                                                    <span class="month"><?=date('M', strtotime($eventsdata->event_date));?></span>
                                                    <span class="year"><?=date('Y', strtotime($eventsdata->event_date));?></span>
                                                </time>

                                                <div class="info">
                                                    <h2 class="title"><?=$eventsdata->title;?></h2>
                                                    <p class="dateEvent"><?=date('d M Y', strtotime($eventsdata->event_date));?></p>


                                                    <?php if($eventsdata->event_amount>0){ ?>
                                                    <h3 class="title text-warning"> $<?=$eventsdata->event_amount;?> SGD</h3>
                                                    <?php } else { ?>
                                                    <h3 class="title text-warning"></h3>
                                                    <?php } ?>

                                                </div>
                                                <div class="social">
                                                <p class="mt-event-button"><a href="<?=base_url();?>Events/<?=$eventsdata->id;?>" class="btn btn-danger btn-events">More Details</a></p>
                                                    
                                                </div>
                                            </li>
                                            <?php } ?>

                                            <a href="<?=base_url();?>Events" class="btn btn-warning btn-custom">Load More </a> 
                                        </ul>
                                        </div>
                                    </div>
                                </section>
                             </div>
                    </section>

 
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/index.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<section class="section-gap homeGallery">
            <div _ngcontent-ngq-c160="" class="container">
                
                <div _ngcontent-ngq-c160="" class="row align-item-center justify-content-between">
                    <div _ngcontent-ngq-c160="" class="col-md-12">
                        <section _ngcontent-ngq-c157="" class="header-title text-center">
                            <br />
                            <!--   <p _ngcontent-ngq-c157="" class="sub-title">Gallery</p> -->
                            <h2 _ngcontent-ngq-c157="" class="title headlinenewtextcolor">Gallery</h2>
                            <br />  
                        </section>
 
     <div class="row galleryCatagory">
        <div class="col-md-12 text-center">
                <select class="form-control  mobile-item" onchange="openCatGallery(this.value);">
                    <option value="<?=base_url();?>Gallery/">All</option>
                        <?php foreach ($gal_cat as $gallerycategory) { ?>
                             <option value="<?=base_url();?>Gallery/<?=$gallerycategory->id;?>" <?php if($this->uri->segment(2)==$gallerycategory->id){ ?> selected <?php }?>>
                                <?=$gallerycategory->name;?>
                            </option>
                        <?php } ?>
                </select>  


            <ul class="gallery-men-items">
                <li class="tab-menu-item <?php if($this->uri->segment(2)==''){ ?> active <?php }?>">
                    <a href="<?=base_url();?>Gallery/">All</a>
                </li>
                 <?php  foreach ($gal_cat as $gallerycategory) { ?>
                <li class="tab-menu-item"><a href="<?=base_url();?>Gallery/<?=$gallerycategory->id;?>"><?=$gallerycategory->name;?></a> </li>
                <?php } ?>
            </ul>
        </div>
     </div>  

        <div class="row galleryConternt">
        <?php foreach($galleryimg as $vgallery){ ?>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <?php if($vgallery->uploadtype=='video'){ ?>
                        <a href="javascript:void();" class="video-popup" title="<?php echo $vgallery->title; ?>" data-id="https://www.youtube.com/embed/<?php echo $vgallery->image; ?>" data-title="https://www.youtube.com/embed/<?php echo $vgallery->image; ?>" data-toggle="modal" data-target="#myModal">
                            <div class="warpper gallVod">
                                <div class="contentImg">
                                    <img  src="http://img.youtube.com/vi/<?php echo $vgallery->image; ?>/hqdefault.jpg" class="zoom img-fluid "  alt="<?php echo $vgallery->title; ?>" title="<?php echo $vgallery->title; ?>">
                                </div>
                                <div class="contentText">
                                    <h5 class="text-center"><?php echo $vgallery->title; ?></h5>
                                </div>
                                <div class="socialMedia d-flex text-center">
                                    <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/embed/<?php echo $vgallery->image; ?>" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <!-- <a  class="whatsapp" href="whatsapp://send?text=https://www.youtube.com/watch?v=<?php echo $vgallery->image; ?>" data-action="share/whatsapp/share" target="_blank"> 
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> 
                                    </a>  -->
                                </div>
                            </div>
                        </a>

                    <?php }  else {
                    if ($vgallery->extension=='pdf' || $vgallery->extension=='PDF') { ?>
                        <a href="<?=base_url();?>assets/setting/<?=$vgallery->image;?>" download>
                            <div class="warpper gallpdf">
                                <div class="contentImg">
                                    <img  src="<?=base_url();?>assets/pdf.png" class="img-fluid "   alt="<?php echo $vgallery->title; ?>" title="<?php echo $vgallery->title; ?>">
                                </div>
                                <div class="contentText">
                                    <h5 class="text-center"><?php echo $vgallery->title; ?></h5>
                                </div>
                                <div class="socialMedia d-flex text-center">
                                    <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?=base_url();?>assets/setting/<?=$vgallery->image;?>" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <!-- <a  class="whatsapp" href="whatsapp://send?text=<?=base_url();?>assets/setting/<?=$vgallery->image;?>" data-action="share/whatsapp/share" target="_blank"> 
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> 
                                    </a>  -->
                                </div>
                            </div>
                        </a>
                        <?php } else { ?>
                        <a href="<?=base_url();?>assets/setting/<?=$vgallery->image;?>?auto=compress&cs=tinysrgb&h=650&w=940" class="fancybox" rel="ligthbox">
                            <div class="warpper gallImg">
                                <div class="contentImg">
                                    <img  src="<?=base_url();?>assets/setting/<?=$vgallery->image;?>" class="zoom img-fluid "  alt="<?php echo $vgallery->title; ?>" title="<?php echo $vgallery->title; ?>">
                                </div>
                                <div class="contentText">
                                    <h5 class="text-center"><?php echo $vgallery->title; ?></h5>
                                </div>
                                <div class="socialMedia d-flex text-center">
                                    <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?=base_url();?>assets/setting/<?=$vgallery->image;?>" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <!-- <a class="whatsapp" href="whatsapp://send?text=<?=base_url();?>assets/setting/<?=$vgallery->image;?>" data-action="share/whatsapp/share" target="_blank"> 
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i> 
                                    </a>  -->
                                </div>
                            </div>
                        </a>
                    <?php } 
                } ?>

               


            </div>
<?php } ?> 
           
       </div>

     
      

    </div>

                    </div>
                </div></section>
            </div>
            
    
<script type="text/javascript">
    $(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    $(".zoom").hover(function(){
        
        $(this).addClass('transition');
    }, function(){
        
        $(this).removeClass('transition');
    });
});
    
</script>


 </app-landing-home> 
<?php require_once(APPPATH."views/price-slider.php");?>