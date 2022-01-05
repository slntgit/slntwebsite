
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/events.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<div _ngcontent-ngq-c159="" class="main-site about-main-site">
    
<section class="section-gap banner-section-inner aboutUs-page">
<div class="overlay"></div>
<div class="container">
    <section class="header-title d-flex justify-content-center align-content-center">
        <h1 class="title">Gallery</h1>
    </section>
</div>
</section>
       <!-- <div id="parallax-world-of-ugg">
                <section>
                    <div class="parallax-one">
                      <h2>Gallery</h2>
                    </div>
                </section>
            </div> -->
    <app-landing-home >
        <section class="section-gap homeGallery page-gallery">
            <div class="container">
                <div class="row align-item-center justify-content-between">
            <div class="col-md-12">
    <!-- Page Content -->
   <div class="container">
     <div class="row galleryCatagory">
        <div class="col-md-12">
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
                    <li class="tab-menu-item <?php if($this->uri->segment(2)==$gallerycategory->id){ ?> active <?php }?>"><a href="<?=base_url();?>Gallery/<?=$gallerycategory->id;?>"><?=$gallerycategory->name;?></a> </li>
                    <?php } ?>
                </ul>
        </div>
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
                                <!-- <a  class="whatsapp" href="whatsapp://send?text=https://www.youtube.com/watch?v=<?php echo $vgallery->image; ?>"data-action="share/whatsapp/share"target="_blank"> 
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
                                    <img  src="<?=base_url();?>assets/pdf.png" class="zoom img-fluid " alt="<?php echo $vgallery->title; ?>" title="<?php echo $vgallery->title; ?>">
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
                                    <!-- <a  class="whatsapp" href="whatsapp://send?text=<?=base_url();?>assets/setting/<?=$vgallery->image;?>" data-action="share/whatsapp/share" target="_blank"> 
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
    </div>
    </div>
    </section>
 
  
</app-landing-home>
</div>

 