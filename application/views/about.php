<div _ngcontent-ngq-c159="" class="main-site about-main-site">
    <router-outlet _ngcontent-ngq-c159=""></router-outlet>
    <app-landing-home _nghost-ngq-c160="" class="ng-star-inserted">
        <section class="section-gap banner-section-inner aboutUs-page">
        <div class="overlay"></div>
        <div class="container">
            <section class="header-title d-flex justify-content-center align-content-center">
                <h1 class="title">About us</h1>
            </section>
        </div>
        </section>
        <section _ngcontent-ngq-c160="" class="section-gap about-section about-page">
            <div _ngcontent-ngq-c160="" class="container">
                <div _ngcontent-ngq-c160="" class="row align-item-center justify-content-between">
                    <div class="col-md-6">
                        <section _ngcontent-ngq-c160="" class="header-title">
                            <!--<p _ngcontent-ngq-c160="" class="sub-title">Welcome</p>-->
                            <!--<h2 _ngcontent-ngq-c160="" class="title">About Shree Lakshminarayan Temple</h2>-->
                            <h2 _ngcontent-ngq-c160="" class="title">Siddh Peeth Shree Lakshminarayan Temple</h2>
                        </section></div>
                    <div class="col-md-6">
                        <div _ngcontent-ngq-c160="" class="wrapper img-wrapper">
                            <?php 
                                    if ($homeaboutimg->num_rows()>0) {
                                       $ndx = $homeaboutimg->row();
                                    ?>
                                <img _ngcontent-ngq-c160="" src="<?=base_url();?>assets/setting/<?=$ndx->image;?>" alt="slnt_about" class="img-fluid" />
                                <?php } ?>
                        </div>
                    </div>
                    <div _ngcontent-ngq-c160="" class="col-md-12">
                        <div _ngcontent-ngq-c160="" class="wrapper content-wrapper">
                            <?=$home_intro->pagecontent;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </app-landing-home>
    <!---->
</div>
<style>

.about-main-site {
    /* padding-top: 20px !important; */
    padding-bottom: 80px !important;
}
</style>