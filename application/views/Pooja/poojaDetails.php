<section class="section-gap banner-section-inner aboutUs-page">
    <div class="overlay"></div>
    <div class="container">
        <section class="header-title d-flex justify-content-center align-content-center">
            <h1 class="title"><?=$pooja->description_charge;?></h1>
        </section>
    </div>
</section>
<section class="section-gap poojaListPage">
    <div class="container">
        <div id="products" class="row pujaSectionListPage">
            <div class="col-md-4">
                <div class="imgEventPuja">
                    <img class="img-fluid" src="<?=base_url();?>assets/temple/<?=$pooja->puja_image;?>" alt="<?=$pooja->description_charge;?>">
                </div>
            </div>
            <div class="col-md-8">
                <div class="eventsDetiPujaList">
                    <h4 class="titleEvent"><a><?=$pooja->description_charge;?></a></h4>
                    <?=$pooja->description;?>
                    <a class="btnPrimary" href="<?=base_url();?>poojaBooking/Services-Date-Time?type=<?=$pooja->puja_type;?>&poojaId=<?=$pooja->id;?>#calendar">Book Now!</a>
                    <a class="btnPrimary" href="<?=base_url();?>Pooja">More Poojas</a>
                </div>
            </div>
        </div>
     
    </div>
</section>
        <div id="content" class="site-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 man_main_sidebar">
                        <div id="primary" class="content-area">
                           
                             <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="pagination-area text-center">
                                    <p><?php echo $links; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div> 
            </div>
        </div>
<style type="text/css">
    .pagination-area {
       margin-top: 53px !important;
    }
    .pagination-area a{
            padding: 14px 14px 14px 14px;
            background: #ff0754;
            color: #fff;
            border: 1px solid #fff !important;
    }

    .pagination-area strong{
            padding: 14px 14px 14px 14px;
            background: #eee;
            color: #ff0754;
            border: 1px solid #fff !important;
    }
.img-event{
    padding :2px 20px 10px 0px;
}

.pujaSectionListPage .btnPrimary {
    background-color: #c5514c !important;
    color: #ffefe2;
    padding: 12px 26px;
    border-radius: 31px;
    position: relative;
    top: 25px;
    font-weight: 600;
}


</style>     