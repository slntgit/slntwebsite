 <!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area breadcrumb-area-bg-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb__title">Thought</h2>
                    <ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="<?php echo base_url()?>">home</a></li>
                        <li class="active__list-item">pages</li>
                        <li>Thought</li>
                    </ul>
                    
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!--================================
        END SLIDER AREA
=================================-->

<!--======================================
        START COURSE AREA
======================================-->
<section class="course-area course-area4">    
    <div class="course-content-wrapper">
        <div class="container">
            <div class="row course-item-wrap">
                <div class="col-lg-12">                    
					<div class="row">
						<div class="col-lg-12 col-xs-12">
							<div class="section-heading">
								
<?php $count =1; foreach ($thought as $thodata){  ?>


                                 <blockquote class="quote-card  <?php if($count%2){ ?>green-card<?php } else { echo 'red-card'; } ?>">
									<p style="font-size: 35px;">
									  <?=$thodata->title;?>
									</p>
								
									<cite>
                                      <?=$thodata->content;?>
									  
									</cite>
								  </blockquote>



<?php  $count++;} ?>


 
								
							</div><!-- end section-heading -->
						</div>
						
					</div>
					
					
                </div><!-- end col-lg-8 -->
                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end course-content-wrapper -->
</section><!-- end courses-area -->
<!--======================================
        END COURSE AREA
======================================-->

<div class="section-divider"></div>

<!--======================================
        START CATEGORY AREA
======================================-->
