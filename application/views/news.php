 
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area bg-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb__title">News</h2>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="index.php">home</a></li>
                        <li class="active__list-item">pages</li>
                        <li>News</li>
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
<?php

 // print_r($data);
 ?>
<section class="blog-area blog-area3">
    <div class="container">
        <div class="row blog-post-wrapper">
                   <?php
            $count=1;
foreach ($datax as $row) {
    ?>
            <div class="col-lg-4 blog-post-item">
                <div class="blog-post-img">
                    <img src="<?php echo base_url()?>/assets/setting/<?= $row->image ?>" alt="blog image" class="blog__img">
                    <div class="blog__date">
                        <span><?php 
                            $dob = $row->add_date;
                            echo date("d-M", strtotime($dob));
                        ?></span>
                    </div><!-- end blog__date -->
                </div><!-- end blog-post-img -->
                <div class="post-body">
                    <div class="blog-title">
                        <a href="<?=base_url();?>News/<?= $row->id;?>/<?= slugify($row->title);?>" class="blog__title">
                           <?php echo $row->title; ?>
                        </a>
                    </div>
                    <ul class="blog__panel d-flex align-items-center">                        
                        <li><a href="<?=base_url();?>News/<?= $row->id;?>/<?= slugify($row->title);?>" class="theme-btn">Read more</a></li>
                    </ul>
                </div><!-- end post-body -->
            </div>
            <?php
            $count++;
        }
        ?><!-- end blog-post-item -->
          <!-- end blog-post-item -->
            
        </div><!-- end row -->
        
    </div><!-- end container -->
</section><!-- end blog-area -->
<!--======================================
        END News AREA
======================================-->


 