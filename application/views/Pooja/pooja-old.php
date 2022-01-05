<section class="section-gap banner-section-inner aboutUs-page">
    <div class="overlay"></div>
    <div class="container">
        <section class="header-title d-flex justify-content-center align-content-center">
            <h1 class="title">Pooja List</h1>
        </section>
    </div>
</section>
<section class="section-gap poojaListPage">
    <div class="container">
        <div id="products" class="row">
            <div class="col-xs-12 col-lg-12">
                <?php foreach ($pooja as $blog): ?>
                <div class="row pujaSectionListPage">
                    <div class="col-md-4">
                        <div class="imgEventPuja">
                            <img class="img-fluid" src="<?=base_url();?>assets/temple/<?=$blog->puja_image;?>" alt="<?= $blog->description_charge ?>">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="eventsDetiPujaList">
                            <h4 class="titleEvent">
                                <a href="<?=base_url();?>Pooja/details/<?=$blog->id;?>/<?=slugify($blog->description_charge);?>"><?= $blog->description_charge ?></a>
                            </h4>
                            <p><?= word_limiter(strip_tags($blog->description), 60);?></p>
                            
                            
                            <a class="btnPrimary" href="<?=base_url();?>Pooja/details/<?=$blog->id;?>/<?=slugify($blog->description_charge);?>">Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
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

.pujaSectionListPage .btnPrimary {
    background-color: #48263d !important;
    color: #ffefe2;
    padding: 12px 26px;
    border-radius: 31px;
    position: relative;
    top: 25px;
    font-weight: 600;
}


</style>     