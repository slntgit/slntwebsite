 
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bg-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb__title"><?=$detailsnews->title;?></h2>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="index.php">home</a></li>
                        <li class="active__list-item">pages</li>
                        <li><?=$detailsnews->title;?></li>
                    </ul>
                    
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START News AREA

        $dob = "2012-03-08";
echo date("d-m-Y", strtotime($dob));
//output date
08-03-2012
======================================-->
<section class="course-detail">
    <div class="container">
        <div class="row course-item-wrap">
            <div class="col-lg-8">
                <style>
                    .short-heading-meta-data{
                        margin-top: 15px;
                        color:red !important;
                    }
                </style>
                
                <div class="section-heading">
                    <h1 class="short-heading-meta-data" title="<?=$detailsnews->title;?>"><?=$detailsnews->title;?></h1>
                
                    <span class="section__divider"></span>
                </div>   
                    
                    
                <div class="course-item-content">
                     
<?php if($detailsnews->image!=''){ ?>

                     <div class="description-wrap text-center">
                        <img src="<?=base_url();?>assets/setting/<?=$detailsnews->image;?>" class="img-responsive" />
                     </div>
<?php } ?>


                     
                    <div class="description-wrap">
                        <?=$detailsnews->content;?>                         
                    </div><!-- end description-wrap -->
                                         
                </div><!-- end course-item-content -->
 
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar-component">
                    <div class="sidebar">

                      
                        <div class="sidebar-widget recent-widget">
                            <h3 class="widget__title">Related News</h3>
                            <span class="section__divider"></span>
                            
<?php foreach($datax2 as $row){ ?>
 
                            <div class="recent-item">
                                <div class="recent-img">
                                    <a href="<?=base_url();?>News/<?= $row->id;?>/<?= slugify($row->title);?>">
                                        <img src="<?php echo base_url()?>/assets/setting/<?= $row->image ?>" alt="blog image">
                                    </a>
                                </div><!-- end recent-img -->
                                <div class="recentpost-body">
                                    <h4 class="recent__link">
                                        <a href="<?=base_url();?>News/<?= $row->id;?>/<?= slugify($row->title);?>"> <?php echo $row->title; ?></a>
                                    </h4>
                                    <p><?php 
                            $dob = $row->add_date;
                            echo date("d-M", strtotime($dob));
                        ?></p>
                                </div><!-- end recent-img -->
                            </div><!-- end recent-item -->

<?php } ?>

                            
                        </div><!-- end sidebar-widget -->
                                            
                         
                    </div><!-- end sidebar -->
                </div><!-- end sidebar-component -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

 <style type="text/css">
     .sidebar .sidebar-widget:last-child {
    margin-bottom: 0;
    margin-top: 130px;
}
 </style>