<!-- ================================
    START BREADCRUMB AREA
================================= -->
<?php 
        $pageScript=$this->Main_model->getData('tbl_pages','id','DESC',1,'pagid',6);
        $pageRow=$pageScript->row();
?>
<style type="text/css">
    p {
    margin-top: 0 !important;
    margin-bottom: 1rem !important;
    margin-bottom: 10px !important;
    line-height: 28px !important;
    font-family: "Libre Franklin",sans-serif!important;
}
</style>

<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb__title">Terms & Condition</h2></br></br>
                    <!--<ul class="breadcrumb__list">
                        <li class="active__list-item"><a href="<?php echo base_url()?>">home</a></li>
                        <li class="active__list-item">pages</li>
                        <li>Terms & Condition</li>
                    </ul>-->
                   
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!--======================================
        START ABOUT AREA
 ======================================-->
<section class="about-area about-area2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                     
                    <p class="section__desc">
                     <?php echo $pageRow->pagecontent;?>
                    </p>
                     
                </div><!-- end section-heading -->
            </div><!-- end col-lg-6 -->
            
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end about-area -->
<!--======================================
        END ABOUT AREA
======================================-->
 