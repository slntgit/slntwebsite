<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">
    /*search box css start here*/
.search-sec{
    padding: 2rem;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
@media (min-width: 992px){
    .search-sec{
        position: relative;
        top: -114px;
        background: rgba(26, 70, 104, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}
</style>
<section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <?php
        $count=1;
foreach ($bannerimg as  $banner) {

        ?>
        <div class="carousel-item  <?php if($count==1){ ?>active<?php } ?>">
                <img src="<?=base_url().'assets/setting/'.$banner->image;?>" class="d-block w-100" alt="...">
            </div>
           <?php $count++;} ?>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>



    <div class="lte-text-page margin-disabled">
    <div class="row centered">
    <div class="col-xl-12 col-xs-12">
    <article id="post-13198" class="post-13198 page type-page status-publish hentry">
    <div class="entry-content clearfix" id="entry-div">
    <div data-elementor-type="wp-page" data-elementor-id="13198" class="elementor elementor-13198" data-elementor-settings="[]">
    <div class="elementor-inner">
    <div class="elementor-section-wrap">
    <section
    class="elementor-element elementor-element-4d0ebda elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="4d0ebda"
    data-element_type="section"
    >
    <div class="elementor-container elementor-column-gap-no">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-a831cd7 elementor-column elementor-col-100 elementor-top-column" data-id="a831cd7" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div
    class="elementor-element elementor-element-3440070 elementor-widget elementor-widget-lte-zoomslider"
    data-id="3440070"
    data-element_type="widget"
    data-widget_type="lte-zoomslider.default"
    >
    <?php
   
 $imgs='';
    $count =1;
foreach ($bannerimg as  $banner) {
if($count==1){
$imgs=base_url().'assets/setting/'.$banner->image;
} else {
    $imgs.=','.base_url().'assets/setting/'.$banner->image;
}
 $count++;}
?>
    <div class="elementor-widget-container">
    <div
    class="lte-slider-zoom lte-background-black zoom-default zoom-origin-center-center lte-zs-overlay-black"
    data-zs-prev=""
    data-zs-next=""
    data-zs-overlay="black"
    data-zs-initzoom="1.2"
    data-zs-speed="20000"
    data-zs-interval="4500"
    data-zs-switchSpeed="7000"
    data-zs-arrows="false"
    data-zs-bullets="true"
    data-zs-src="[&#34;http:\/\/queeny.like-themes.com\/wp-content\/uploads\/2019\/06\/SLIDE_01.jpg&#34;,&#34;http:\/\/queeny.like-themes.com\/wp-content\/uploads\/2019\/06\/SLIDE_02.jpg&#34;,&#34;http:\/\/queeny.like-themes.com\/wp-content\/uploads\/2019\/06\/SLIDE_03-new.jpg&#34;,&#34;http:\/\/queeny.like-themes.com\/wp-content\/uploads\/2019\/06\/SLIDE_04.jpg&#34;]"
    >
    <span class="lte-tagline"><span>Nam lobortis dui et feugiat pellentesque</span></span>
    <div class="container lte-zs-slider-wrapper">
        <?php
        $count=1;
foreach ($bannerimg as  $banners) {
// are backup to lelo is page ka pahle 
        ?>
    <div class="lte-zs-slider-inner inited visible lte-zs-slide-<?php echo $count; ?>" data-index="<?php echo $count; ?>">
    <div data-elementor-type="wp-post" data-elementor-id="13596" class="elementor elementor-13596" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-element elementor-element-49635294 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                    data-id="49635294"
                    data-element_type="section"
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div
                                class="elementor-element elementor-element-67d13d0e elementor-column elementor-col-100 elementor-top-column"
                                data-id="67d13d0e"
                                data-element_type="column"
                            >
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-6e5ff1d elementor-widget elementor-widget-spacer"
                                            data-id="6e5ff1d"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-743304d elementor-widget elementor-widget-lte-header"
                                            data-id="743304d"
                                            data-element_type="widget"
                                            data-widget_type="lte-header.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="lte-heading lte-size-lg header-subheader lte-subcolor-main lte-margin has-subheader heading-tag-h1"
                                                >
                                                    <h4 class="lte-subheader">Fashion Lingerie</h4>
                                                    <h1 class="lte-header">Fashion Lingerie</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-7b44feb elementor-widget elementor-widget-spacer"
                                            data-id="7b44feb"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <section
                                            class="elementor-element elementor-element-c5ad175 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                            data-id="c5ad175"
                                            data-element_type="section"
                                        >
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div
                                                        class="elementor-element elementor-element-93f60c7 elementor-column elementor-col-100 elementor-inner-column"
                                                        data-id="93f60c7"
                                                        data-element_type="column"
                                                    >
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div
                                                                    class="elementor-element elementor-element-d26c9d7 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                                    data-id="d26c9d7"
                                                                    data-element_type="widget"
                                                                    data-widget_type="text-editor.default"
                                                                >
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>
                                                                                Curabitur vel vulputate urna. Mmaecenas vel pretium eros. Sed sollicitudin,
                                                                                velit a iaculis blandit, risus arcu auctor ante, eu malesuada massa eros id
                                                                                elit. Aenean in faucibus odio.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div
                                            class="elementor-element elementor-element-fec2598 elementor-widget elementor-widget-spacer"
                                            data-id="fec2598"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-f78794a elementor-widget elementor-widget-lte-button"
                                            data-id="f78794a"
                                            data-element_type="widget"
                                            data-widget_type="lte-button.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="lte-btn-wrap">
                                                    <a href="#" class="lte-btn btn-lg color-hover-white">
                                                        <span class="lte-btn-inner">
                                                            <span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-2e25cc5 elementor-widget elementor-widget-spacer"
                                            data-id="2e25cc5"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
    <?php
    $count++;
}
?>
  <!--   <div class="lte-zs-slider-inner lte-zs-slide-1" data-index="1">
    <div data-elementor-type="wp-post" data-elementor-id="13597" class="elementor elementor-13597" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-element elementor-element-49635294 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                    data-id="49635294"
                    data-element_type="section"
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div
                                class="elementor-element elementor-element-67d13d0e elementor-column elementor-col-100 elementor-top-column"
                                data-id="67d13d0e"
                                data-element_type="column"
                            >
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-6e5ff1d elementor-widget elementor-widget-spacer"
                                            data-id="6e5ff1d"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-743304d elementor-widget elementor-widget-lte-header"
                                            data-id="743304d"
                                            data-element_type="widget"
                                            data-widget_type="lte-header.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="lte-heading lte-size-lg header-subheader lte-subcolor-main lte-margin has-subheader heading-tag-h1"
                                                >
                                                    <h4 class="lte-subheader">Fashion Lingerie</h4>
                                                    <h1 class="lte-header">Exclusive Sets</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-7b44feb elementor-widget elementor-widget-spacer"
                                            data-id="7b44feb"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <section
                                            class="elementor-element elementor-element-c5ad175 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                            data-id="c5ad175"
                                            data-element_type="section"
                                        >
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div
                                                        class="elementor-element elementor-element-93f60c7 elementor-column elementor-col-100 elementor-inner-column"
                                                        data-id="93f60c7"
                                                        data-element_type="column"
                                                    >
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div
                                                                    class="elementor-element elementor-element-d26c9d7 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                                    data-id="d26c9d7"
                                                                    data-element_type="widget"
                                                                    data-widget_type="text-editor.default"
                                                                >
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>
                                                                                Curabitur vel vulputate urna. Mmaecenas vel pretium eros. Sed sollicitudin,
                                                                                velit a iaculis blandit, risus arcu auctor ante, eu malesuada massa eros id
                                                                                elit. Aenean in faucibus odio.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div
                                            class="elementor-element elementor-element-fec2598 elementor-widget elementor-widget-spacer"
                                            data-id="fec2598"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-f78794a elementor-widget elementor-widget-lte-button"
                                            data-id="f78794a"
                                            data-element_type="widget"
                                            data-widget_type="lte-button.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="lte-btn-wrap">
                                                    <a href="#" class="lte-btn btn-lg color-hover-white">
                                                        <span class="lte-btn-inner">
                                                            <span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-2e25cc5 elementor-widget elementor-widget-spacer"
                                            data-id="2e25cc5"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div> -->
  <!--   <div class="lte-zs-slider-inner lte-zs-slide-2" data-index="2">
    <div data-elementor-type="wp-post" data-elementor-id="13595" class="elementor elementor-13595" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-element elementor-element-49635294 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                    data-id="49635294"
                    data-element_type="section"
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div
                                class="elementor-element elementor-element-67d13d0e elementor-column elementor-col-100 elementor-top-column"
                                data-id="67d13d0e"
                                data-element_type="column"
                            >
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-6e5ff1d elementor-widget elementor-widget-spacer"
                                            data-id="6e5ff1d"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-743304d elementor-widget elementor-widget-lte-header"
                                            data-id="743304d"
                                            data-element_type="widget"
                                            data-widget_type="lte-header.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="lte-heading lte-size-lg header-subheader lte-subcolor-main lte-margin has-subheader heading-tag-h1"
                                                >
                                                    <h4 class="lte-subheader">Fashion Lingerie</h4>
                                                    <h1 class="lte-header">Luxe Swimwear</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-7b44feb elementor-widget elementor-widget-spacer"
                                            data-id="7b44feb"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <section
                                            class="elementor-element elementor-element-c5ad175 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                            data-id="c5ad175"
                                            data-element_type="section"
                                        >
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div
                                                        class="elementor-element elementor-element-93f60c7 elementor-column elementor-col-100 elementor-inner-column"
                                                        data-id="93f60c7"
                                                        data-element_type="column"
                                                    >
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div
                                                                    class="elementor-element elementor-element-d26c9d7 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                                    data-id="d26c9d7"
                                                                    data-element_type="widget"
                                                                    data-widget_type="text-editor.default"
                                                                >
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>
                                                                                Curabitur vel vulputate urna. Mmaecenas vel pretium eros. Sed sollicitudin,
                                                                                velit a iaculis blandit, risus arcu auctor ante, eu malesuada massa eros id
                                                                                elit. Aenean in faucibus odio.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div
                                            class="elementor-element elementor-element-fec2598 elementor-widget elementor-widget-spacer"
                                            data-id="fec2598"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-f78794a elementor-widget elementor-widget-lte-button"
                                            data-id="f78794a"
                                            data-element_type="widget"
                                            data-widget_type="lte-button.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="lte-btn-wrap">
                                                    <a href="#" class="lte-btn btn-lg color-hover-white">
                                                        <span class="lte-btn-inner">
                                                            <span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-2e25cc5 elementor-widget elementor-widget-spacer"
                                            data-id="2e25cc5"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div> -->
<!--     <div class="lte-zs-slider-inner lte-zs-slide-3" data-index="3">
    <div data-elementor-type="wp-post" data-elementor-id="13495" class="elementor elementor-13495" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-element elementor-element-49635294 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                    data-id="49635294"
                    data-element_type="section"
                >
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div
                                class="elementor-element elementor-element-67d13d0e elementor-column elementor-col-100 elementor-top-column"
                                data-id="67d13d0e"
                                data-element_type="column"
                            >
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div
                                            class="elementor-element elementor-element-6e5ff1d elementor-widget elementor-widget-spacer"
                                            data-id="6e5ff1d"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-743304d elementor-widget elementor-widget-lte-header"
                                            data-id="743304d"
                                            data-element_type="widget"
                                            data-widget_type="lte-header.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="lte-heading lte-size-lg header-subheader lte-subcolor-main lte-margin has-subheader heading-tag-h1"
                                                >
                                                    <h4 class="lte-subheader">Fashion Lingerie</h4>
                                                    <h1 class="lte-header">Spring Arrivals</h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-7b44feb elementor-widget elementor-widget-spacer"
                                            data-id="7b44feb"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <section
                                            class="elementor-element elementor-element-c5ad175 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
                                            data-id="c5ad175"
                                            data-element_type="section"
                                        >
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div
                                                        class="elementor-element elementor-element-93f60c7 elementor-column elementor-col-100 elementor-inner-column"
                                                        data-id="93f60c7"
                                                        data-element_type="column"
                                                    >
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div
                                                                    class="elementor-element elementor-element-d26c9d7 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
                                                                    data-id="d26c9d7"
                                                                    data-element_type="widget"
                                                                    data-widget_type="text-editor.default"
                                                                >
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                            <p>
                                                                                Curabitur vel vulputate urna. Mmaecenas vel pretium eros. Sed sollicitudin,
                                                                                velit a iaculis blandit, risus arcu auctor ante, eu malesuada massa eros id
                                                                                elit. Aenean in faucibus odio.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <div
                                            class="elementor-element elementor-element-fec2598 elementor-widget elementor-widget-spacer"
                                            data-id="fec2598"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-f78794a elementor-widget elementor-widget-lte-button"
                                            data-id="f78794a"
                                            data-element_type="widget"
                                            data-widget_type="lte-button.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="lte-btn-wrap">
                                                    <a href="#" class="lte-btn btn-lg color-hover-white">
                                                        <span class="lte-btn-inner">
                                                            <span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-2e25cc5 elementor-widget elementor-widget-spacer"
                                            data-id="2e25cc5"
                                            data-element_type="widget"
                                            data-widget_type="spacer.default"
                                        >
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div> -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section
    class="lte-background-gray elementor-element elementor-element-ec6e17e lte-background-gray lte-overlay-wrapper-line-main elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="ec6e17e"
    data-element_type="section"
    >
    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-9998e6e elementor-column elementor-col-50 elementor-top-column" data-id="9998e6e" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div
    class="elementor-element elementor-element-d048dad elementor-widget elementor-widget-spacer"
    data-id="d048dad"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-11cfc0a elementor-widget elementor-widget-spacer"
    data-id="11cfc0a"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-a409489 elementor-widget elementor-widget-lte-header"
    data-id="a409489"
    data-element_type="widget"
    data-widget_type="lte-header.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-heading header-subheader lte-subcolor-main lte-margin has-subheader heading-tag-h2">
    <h4 class="lte-subheader">Main Secret</h4>
    <h2 class="lte-header">Femininity and Elegance</h2>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-9a28209 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
    data-id="9a28209"
    data-element_type="widget"
    data-widget_type="text-editor.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-text-editor elementor-clearfix">
    <p>
    Mauris in augue id felis sollicitudin laoreet eu vitae tellus. Sed pellentesque enim in eros molestie, pulvinar lacinia arcu tempus. Integer porttitor neque
    a lacus blandit, eget iaculis enim malesuada.
    </p>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-d25b433 elementor-widget elementor-widget-spacer"
    data-id="d25b433"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-0e842e3 elementor-widget__width-initial elementor-widget elementor-widget-lte-countup"
    data-id="0e842e3"
    data-element_type="widget"
    data-widget_type="lte-countup.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-countup layout-default container-fluid">
    <div class="row">
    <div class="col-md-4 col-sm-4 col-sm-6 col-ms-6 col-xs-12 center-flex countUp-wrap">
    <div class="countUp-item item">
        <h2 class="lte-header"><span class="lte-countup-animation">150</span></h2>
        <h4 class="lte-subheader">Lingerie Styles</h4>
    </div>
    </div>
    <div class="col-md-4 col-sm-4 col-sm-6 col-ms-6 col-xs-12 center-flex countUp-wrap">
    <div class="countUp-item item">
        <h2 class="lte-header"><span class="lte-countup-animation">26</span></h2>
        <h4 class="lte-subheader">Collections</h4>
    </div>
    </div>
    <div class="col-md-4 col-sm-4 col-sm-6 col-ms-6 col-xs-12 center-flex countUp-wrap">
    <div class="countUp-item item">
        <h2 class="lte-header"><span class="lte-countup-animation">14</span></h2>
        <h4 class="lte-subheader">Showrooms</h4>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-ef2cbe7 elementor-widget elementor-widget-spacer"
    data-id="ef2cbe7"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-9aa78a9 elementor-widget elementor-widget-lte-button"
    data-id="9aa78a9"
    data-element_type="widget"
    data-widget_type="lte-button.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-btn-wrap">
    <a href="#" class="lte-btn btn-lg color-hover-default">
    <span class="lte-btn-inner"><span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span>
    </a>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-623348c elementor-widget elementor-widget-spacer"
    data-id="623348c"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="elementor-element elementor-element-7d41870 elementor-column elementor-col-50 elementor-top-column" data-id="7d41870" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div
    class="elementor-element elementor-element-3666ad8 elementor-widget elementor-widget-spacer"
    data-id="3666ad8"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-88d42ad animated-slow elementor-absolute elementor-hidden-phone elementor-invisible elementor-widget elementor-widget-image"
    data-id="88d42ad"
    data-element_type="widget"
    data-settings='{"_animation":"fadeIn","_position":"absolute"}'
    data-widget_type="image.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-image">
    <img
    width="152"
    height="151"
    src="wp-content/uploads/2020/04/about-stamp.png"
    class="attachment-large size-large"
    alt=""
    srcset="
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-stamp.png         152w,
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-stamp-150x150.png 150w,
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-stamp-140x140.png 140w,
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-stamp-110x110.png 110w,
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-stamp-100x100.png 100w
    "
    sizes="(max-width: 152px) 100vw, 152px"
    />
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-849ce0c lte-image-shadow elementor-widget elementor-widget-image"
    data-id="849ce0c"
    data-element_type="widget"
    data-widget_type="image.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-image">
    <img
    width="726"
    height="472"
    src="wp-content/uploads/2020/04/about-image.jpg"
    class="attachment-large size-large"
    alt=""
    srcset="
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-image.jpg         726w,
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-image-300x195.jpg 300w,
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-image-128x84.jpg  128w,
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-image-495x322.jpg 495w,
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-image-550x358.jpg 550w,
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-image-480x312.jpg 480w,
    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/about-image-600x390.jpg 600w
    "
    sizes="(max-width: 726px) 100vw, 726px"
    />
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-4d96168 elementor-widget elementor-widget-spacer"
    data-id="4d96168"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section
    class="lte-background-black elementor-element elementor-element-de650fc lte-background-black elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="de650fc"
    data-element_type="section"
    data-settings='{"background_background":"classic"}'
    >
    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-260aba8 elementor-column elementor-col-100 elementor-top-column" data-id="260aba8" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
 <!--    <div
    class="elementor-element elementor-element-5866a8e elementor-widget elementor-widget-spacer"
    data-id="5866a8e"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div> -->
    <div
    class="elementor-element elementor-element-83eee70 elementor-widget elementor-widget-lte-header"
    data-id="83eee70"
    data-element_type="widget"
    data-widget_type="lte-header.default"
    >
  <!--   <div class="elementor-widget-container">
    <div class="lte-heading header-subheader lte-underline lte-subcolor-main lte-margin has-subheader heading-tag-h2">
    <h4 class="lte-subheader">Our Products</h4>
    <h2 class="lte-header">Lingerie Collections</h2>
    </div>
    </div>
    </div>
    <section
    class="elementor-element elementor-element-713b1cb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"
    data-id="713b1cb"
    data-element_type="section"
    >
    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-17a84a1 elementor-column elementor-col-100 elementor-inner-column" data-id="17a84a1" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
        <div
            class="elementor-element elementor-element-9ebbffd elementor-widget elementor-widget-text-editor"
            data-id="9ebbffd"
            data-element_type="widget"
            data-widget_type="text-editor.default"
        >
            <div class="elementor-widget-container">
                <div class="elementor-text-editor elementor-clearfix">
                    <p>
                        Nam lobortis dui et feugiat pellentesque. Proin ut volutpat diam. Etiam molestie feugiat ligula, id rhoncus ante ultrices eget. Nam
                        vel mauris a augue tempus semper quis at mi.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section> -->
 <!--    <div
    class="elementor-element elementor-element-3a4c8b6 elementor-widget elementor-widget-spacer"
    data-id="3a4c8b6"
    data-element_type="widget"
    data-widget_type="spacer.default"
    > -->
    <!-- <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-482ecb4 elementor-widget elementor-widget-lte-services"
    data-id="482ecb4"
    data-element_type="widget"
    data-widget_type="lte-services.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-lte-services-sc-wrapper lte-services-sc">
    <div class="row">
    <div class="lte-item col-lg-3 col-md-6">
    <div class="lte-item-inner">
        <a href="services/beach-collection-2/index.html" class="lte-image">
            <img
                width="385"
                height="525"
                src="wp-content/uploads/2019/06/COL_01-385x525.jpg"
                class="attachment-queeny-services size-queeny-services wp-post-image"
                alt=""
                srcset="
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/COL_01-385x525.jpg 385w,
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/COL_01-540x735.jpg 540w
                "
                sizes="(max-width: 385px) 100vw, 385px"
            />
            <span class="lte-photo-overlay"></span>
        </a>
        <div class="lte-description">
            <a href="services/beach-collection-2/index.html" class="lte-header"><h5 class="lte-header">Beach Collection</h5> </a>
            <p>Duis venenatis dolor id diam eleifend, vel viverra diam efficitur</p>
            <a href="services/beach-collection-2/index.html" class="lte-btn btn-transparent btn-xs">
                <span class="lte-btn-inner"><span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span>
            </a>
        </div>
    </div>
    </div>
    <div class="lte-item col-lg-3 col-md-6">
    <div class="lte-item-inner">
        <a href="services/asian-benefits/index.html" class="lte-image">
            <img
                width="385"
                height="525"
                src="wp-content/uploads/2020/04/COL_02-new-385x525.jpg"
                class="attachment-queeny-services size-queeny-services wp-post-image"
                alt=""
                srcset="
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/COL_02-new-385x525.jpg 385w,
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2020/04/COL_02-new-540x735.jpg 540w
                "
                sizes="(max-width: 385px) 100vw, 385px"
            />
            <span class="lte-photo-overlay"></span>
        </a>
        <div class="lte-description">
            <a href="services/asian-benefits/index.html" class="lte-header"><h5 class="lte-header">Asian Benefits</h5> </a>
            <p>Aenean est risus, posuere at lacus et, gravida pharetra nunc</p>
            <a href="services/asian-benefits/index.html" class="lte-btn btn-transparent btn-xs">
                <span class="lte-btn-inner"><span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span>
            </a>
        </div>
    </div>
    </div>
    <div class="lte-item col-lg-3 col-md-6">
    <div class="lte-item-inner">
        <a href="services/exclusive-set/index.html" class="lte-image">
            <img
                width="385"
                height="525"
                src="wp-content/uploads/2019/06/COL_03-385x525.jpg"
                class="attachment-queeny-services size-queeny-services wp-post-image"
                alt=""
                srcset="
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/COL_03-385x525.jpg 385w,
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/COL_03-540x735.jpg 540w
                "
                sizes="(max-width: 385px) 100vw, 385px"
            />
            <span class="lte-photo-overlay"></span>
        </a>
        <div class="lte-description">
            <a href="services/exclusive-set/index.html" class="lte-header"><h5 class="lte-header">Exclusive Set</h5> </a>
            <p>Nunc quam diam, eleifend sit amet molestie sit amet, rutrum at mi</p>
            <a href="services/exclusive-set/index.html" class="lte-btn btn-transparent btn-xs">
                <span class="lte-btn-inner"><span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span>
            </a>
        </div>
    </div>
    </div>
    <div class="lte-item col-lg-3 col-md-6">
    <div class="lte-item-inner">
        <a href="services/soft-home/index.html" class="lte-image">
            <img
                width="385"
                height="525"
                src="wp-content/uploads/2019/06/COL_04-385x525.jpg"
                class="attachment-queeny-services size-queeny-services wp-post-image"
                alt=""
                srcset="
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/COL_04-385x525.jpg 385w,
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/COL_04-540x735.jpg 540w
                "
                sizes="(max-width: 385px) 100vw, 385px"
            />
            <span class="lte-photo-overlay"></span>
        </a>
        <div class="lte-description">
            <a href="services/soft-home/index.html" class="lte-header"><h5 class="lte-header">Soft Home</h5> </a>
            <p>Vestibulum porta viverra tortor, sit amet convallis sem blandit et</p>
            <a href="services/soft-home/index.html" class="lte-btn btn-transparent btn-xs">
                <span class="lte-btn-inner"><span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span>
            </a>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> -->
 <!--    </div> -->
    </div>
    </div>
    </div>
    </div>
    </section>
    <section
    class="elementor-element elementor-element-a8861c6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="a8861c6"
    data-element_type="section"
    >
    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-592cbd4 elementor-column elementor-col-100 elementor-top-column" data-id="592cbd4" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div
    class="elementor-element elementor-element-7c631ac elementor-widget elementor-widget-spacer"
    data-id="7c631ac"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section
    class="elementor-element elementor-element-55196ad elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="55196ad"
    data-element_type="section"
    >
    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-7489b46 elementor-column elementor-col-100 elementor-top-column" data-id="7489b46" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div
    class="elementor-element elementor-element-b6ddc63 elementor-widget elementor-widget-spacer"
    data-id="b6ddc63"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-9831906 elementor-widget elementor-widget-lte-icons"
    data-id="9831906"
    data-element_type="widget"
    data-widget_type="lte-icons.default"
    >
    <div class="elementor-widget-container">
    <ul
    class="lte-block-icon has-descr icons-count-4 lte-icon-color-main lte-icon-divider-dashed lte-icon-size-medium lte-header-color-black lte-icon-type-icon-top layout-cols4"
    >
    <li class="col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12">
    <a href="#" class="lte-inner">
    <i aria-hidden="true" class="icon icon-leaf"></i>
    <h5 class="lte-header">100% Natural</h5>
    <div class="lte-descr">Integer sagittis nisi nec tortor fermentum aliquet. Integer non neque tempor.</div>
    </a>
    </li>
    <li class="col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12">
    <a href="#" class="lte-inner">
    <i aria-hidden="true" class="icon icon-free-shipping"></i>
    <h5 class="lte-header">Free Shipping</h5>
    <div class="lte-descr">Quisque id dictum tellus. Cras pretium lectus eu tempor pretium.</div>
    </a>
    </li>
    <li class="col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12">
    <a href="#" class="lte-inner">
    <i aria-hidden="true" class="icon icon-discount"></i>
    <h5 class="lte-header">Discount System</h5>
    <div class="lte-descr">Integer sagittis nisi nec tortor fermentum aliquet. Integer non neque tempor.</div>
    </a>
    </li>
    <li class="col-lg-3 col-md-3 col-sm-6 col-ms-6 col-xs-12">
    <a href="#" class="lte-inner">
    <i aria-hidden="true" class="icon icon-money"></i>
    <h5 class="lte-header">Moneyback</h5>
    <div class="lte-descr">Sed rutrum arcu vel sem vestibulum, vitae consequat massa eleifend.</div>
    </a>
    </li>
    </ul>
    </div>
    </div>
  <!--   <div
    class="elementor-element elementor-element-e16a5c3 elementor-widget elementor-widget-spacer"
    data-id="e16a5c3"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div> -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
  <!--   <section
    class="lte-background-gray elementor-element elementor-element-c066f61 lte-background-gray elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="c066f61"
    data-element_type="section"
    data-settings='{"background_background":"classic"}'
    >
    <div class="elementor-background-overlay"></div>
    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-bb822ae elementor-hidden-phone elementor-column elementor-col-50 elementor-top-column" data-id="bb822ae" data-element_type="column">
    <div class="elementor-column-wrap"><div class="elementor-widget-wrap"></div></div>
    </div>
    <div class="elementor-element elementor-element-f60f244 elementor-column elementor-col-50 elementor-top-column" data-id="f60f244" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div
    class="elementor-element elementor-element-8c394f3 elementor-widget elementor-widget-spacer"
    data-id="8c394f3"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-5ca288f elementor-widget elementor-widget-lte-header"
    data-id="5ca288f"
    data-element_type="widget"
    data-widget_type="lte-header.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-heading default lte-subcolor-main heading-tag-h2"><h2 class="lte-header">Summer Sale</h2></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-bec73e1 elementor-widget elementor-widget-lte-header"
    data-id="bec73e1"
    data-element_type="widget"
    data-widget_type="lte-header.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-heading lte-size-lg default lte-color-main lte-subcolor-main heading-tag-h2"><h2 class="lte-header">50% off</h2></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-d56f340 elementor-widget elementor-widget-spacer"
    data-id="d56f340"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-6d7b507 elementor-widget__width-initial elementor-widget elementor-widget-text-editor"
    data-id="6d7b507"
    data-element_type="widget"
    data-widget_type="text-editor.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-text-editor elementor-clearfix">
    <p>
    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce non eros id tortor eleifend volutpat eu et dolor. Quisque
    ullamcorper risus dui, in venenatis mi tempor sed.
    </p>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-06567b1 elementor-widget elementor-widget-spacer"
    data-id="06567b1"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-6abd29e elementor-widget elementor-widget-lte-button"
    data-id="6abd29e"
    data-element_type="widget"
    data-widget_type="lte-button.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-btn-wrap">
    <a href="#" class="lte-btn btn-lg color-hover-default">
    <span class="lte-btn-inner"><span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span>
    </a>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-d06b269 elementor-widget elementor-widget-spacer"
    data-id="d06b269"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section
    class="lte-background-black elementor-element elementor-element-b8919a6 lte-background-black elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="b8919a6"
    data-element_type="section"
    >
    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-e06f1da elementor-column elementor-col-100 elementor-top-column" data-id="e06f1da" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div
    class="elementor-element elementor-element-2b089bd elementor-widget elementor-widget-spacer"
    data-id="2b089bd"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-7868917 elementor-widget elementor-widget-lte-partners"
    data-id="7868917"
    data-element_type="widget"
    data-widget_type="lte-partners.default"
    >
    <div class="elementor-widget-container">
    <div class="container-fluid lte-partners lte-hover-logos">
    <div class="row centered">
    <div class="col-md-2 col-ms-6 col-xs-6 col-sm-4 partners-wrap center-flex">
    <div class="partners-item item center-flex">
        <a href="#"><img src="wp-content/uploads/2019/06/partners-01.png" class="image" alt="." /></a>
    </div>
    </div>
    <div class="col-md-2 col-ms-6 col-xs-6 col-sm-4 partners-wrap center-flex">
    <div class="partners-item item center-flex">
        <a href="#"><img src="wp-content/uploads/2019/06/partners-02.png" class="image" alt="." /></a>
    </div>
    </div>
    <div class="col-md-2 col-ms-6 col-xs-6 col-sm-4 partners-wrap center-flex">
    <div class="partners-item item center-flex">
        <a href="#"><img src="wp-content/uploads/2019/06/partners-03.png" class="image" alt="." /></a>
    </div>
    </div>
    <div class="col-md-2 col-ms-6 col-xs-6 col-sm-4 partners-wrap center-flex">
    <div class="partners-item item center-flex">
        <a href="#"><img src="wp-content/uploads/2019/06/partners-04.png" class="image" alt="." /></a>
    </div>
    </div>
    <div class="col-md-2 col-ms-6 col-xs-6 col-sm-4 partners-wrap center-flex">
    <div class="partners-item item center-flex">
        <a href="#"><img src="wp-content/uploads/2019/06/partners-05.png" class="image" alt="." /></a>
    </div>
    </div>
    <div class="col-md-2 col-ms-6 col-xs-6 col-sm-4 partners-wrap center-flex">
    <div class="partners-item item center-flex">
        <a href="#"><img src="wp-content/uploads/2019/06/partners-06.png" class="image" alt="." /></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-65236ac elementor-widget elementor-widget-spacer"
    data-id="65236ac"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section> -->
    <section
    class="elementor-element elementor-element-5b37a6b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="5b37a6b"
    data-element_type="section"
    >
    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-0d00e99 elementor-column elementor-col-100 elementor-top-column" data-id="0d00e99" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div
    class="elementor-element elementor-element-cc3c48b elementor-widget elementor-widget-spacer"
    data-id="cc3c48b"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-025c7f8 elementor-widget elementor-widget-lte-header"
    data-id="025c7f8"
    data-element_type="widget"
    data-widget_type="lte-header.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-heading header-subheader lte-underline lte-subcolor-main lte-margin has-subheader heading-tag-h2">
    <h4 class="lte-subheader">Online Store</h4>
    <h2 class="lte-header">New Products</h2>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-6d275b0 elementor-widget elementor-widget-lte-products"
    data-id="6d275b0"
    data-element_type="widget"
    data-widget_type="lte-products.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-products-sc-wrapper">
    <div class="woocommerce">
    <ul class="products columns-4 lte-products-sc lte-products-sc-list">
    <li
        id="post-13433"
        class="product post-13433 type-product status-publish has-post-thumbnail product_cat-lingerie first instock shipping-taxable purchasable product-type-simple"
    >
        <div class="item">
            <div class="lte-image">
                <img
                    width="480"
                    height="655"
                    src="wp-content/uploads/2019/06/shop-02-480x655.jpg"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-02-480x655.jpg  480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-02-220x300.jpg  220w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-02-768x1047.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-02-751x1024.jpg 751w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-02-242x330.jpg  242w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-02-385x525.jpg  385w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-02-587x800.jpg  587w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-02-403x550.jpg  403w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-02-600x818.jpg  600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-02.jpg          880w
                    "
                    sizes="(max-width: 480px) 100vw, 480px"
                />
            </div>
            <div class="lte-item-descr">
                <a href="product/glory-lady-lingerie-set/index.html"><h2 class="woocommerce-loop-product__title">Glory Lady Lingerie Set</h2></a>
                <span class="price">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>7.49</span>
                </span>
                <a
                    href="index2742.html?add-to-cart=13433"
                    data-quantity="1"
                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                    data-product_id="13433"
                    data-product_sku=""
                    aria-label="Add &ldquo;Glory Lady Lingerie Set&rdquo; to your cart"
                    rel="nofollow"
                >
                    Add to cart
                </a>
                <a href="product/glory-lady-lingerie-set/index.html" class="lte-btn-more lte-btn btn">More Info</a>
            </div>
        </div>
    </li>
    <li
        id="post-9248"
        class="product post-9248 type-product status-publish has-post-thumbnail product_cat-underwear instock shipping-taxable purchasable product-type-simple"
    >
        <div class="item">
            <div class="lte-image">
                <img
                    width="480"
                    height="655"
                    src="wp-content/uploads/2019/06/shop-07-480x655.jpg"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-07-480x655.jpg  480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-07-220x300.jpg  220w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-07-768x1047.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-07-751x1024.jpg 751w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-07-242x330.jpg  242w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-07-385x525.jpg  385w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-07-587x800.jpg  587w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-07-403x550.jpg  403w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-07-600x818.jpg  600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-07.jpg          880w
                    "
                    sizes="(max-width: 480px) 100vw, 480px"
                />
            </div>
            <div class="lte-item-descr">
                <a href="product/gray-lace-underwear-set/index.html"><h2 class="woocommerce-loop-product__title">Gray Lace Underwear Set</h2></a>
                <span class="price">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>19.00</span>
                </span>
                <a
                    href="indexff81.html?add-to-cart=9248"
                    data-quantity="1"
                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                    data-product_id="9248"
                    data-product_sku=""
                    aria-label="Add &ldquo;Gray Lace Underwear Set&rdquo; to your cart"
                    rel="nofollow"
                >
                    Add to cart
                </a>
                <a href="product/gray-lace-underwear-set/index.html" class="lte-btn-more lte-btn btn">More Info</a>
            </div>
        </div>
    </li>
    <li
        id="post-13432"
        class="product post-13432 type-product status-publish has-post-thumbnail product_cat-fashion last instock shipping-taxable purchasable product-type-simple"
    >
        <div class="item">
            <div class="lte-image">
                <img
                    width="480"
                    height="655"
                    src="wp-content/uploads/2019/06/shop-01-480x655.jpg"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-01-480x655.jpg  480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-01-220x300.jpg  220w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-01-768x1047.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-01-751x1024.jpg 751w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-01-242x330.jpg  242w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-01-385x525.jpg  385w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-01-587x800.jpg  587w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-01-403x550.jpg  403w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-01-600x818.jpg  600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-01.jpg          880w
                    "
                    sizes="(max-width: 480px) 100vw, 480px"
                />
            </div>
            <div class="lte-item-descr">
                <a href="product/snow-queen-underwear-set/index.html"><h2 class="woocommerce-loop-product__title">Snow Queen Underwear Set</h2></a>
                <span class="price">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>468.99</span>
                </span>
                <a
                    href="indexdd5e.html?add-to-cart=13432"
                    data-quantity="1"
                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                    data-product_id="13432"
                    data-product_sku=""
                    aria-label="Add &ldquo;Snow Queen Underwear Set&rdquo; to your cart"
                    rel="nofollow"
                >
                    Add to cart
                </a>
                <a href="product/snow-queen-underwear-set/index.html" class="lte-btn-more lte-btn btn">More Info</a>
            </div>
        </div>
    </li>
    <li
        id="post-11144"
        class="product post-11144 type-product status-publish has-post-thumbnail product_cat-fashion first instock shipping-taxable purchasable product-type-simple"
    >
        <div class="item">
            <div class="lte-image">
                <img
                    width="480"
                    height="655"
                    src="wp-content/uploads/2019/06/shop-11-480x655.jpg"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-11-480x655.jpg  480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-11-220x300.jpg  220w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-11-768x1047.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-11-751x1024.jpg 751w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-11-242x330.jpg  242w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-11-385x525.jpg  385w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-11-587x800.jpg  587w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-11-403x550.jpg  403w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-11-600x818.jpg  600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-11.jpg          880w
                    "
                    sizes="(max-width: 480px) 100vw, 480px"
                />
            </div>
            <div class="lte-item-descr">
                <a href="product/closed-white-swimsuit/index.html"><h2 class="woocommerce-loop-product__title">Closed White Swimsuit</h2></a>
                <span class="price">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>468.99</span>
                </span>
                <a
                    href="index43c4.html?add-to-cart=11144"
                    data-quantity="1"
                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                    data-product_id="11144"
                    data-product_sku=""
                    aria-label="Add &ldquo;Closed White Swimsuit&rdquo; to your cart"
                    rel="nofollow"
                >
                    Add to cart
                </a>
                <a href="product/closed-white-swimsuit/index.html" class="lte-btn-more lte-btn btn">More Info</a>
            </div>
        </div>
    </li>
    <li
        id="post-9246"
        class="product post-9246 type-product status-publish has-post-thumbnail product_cat-underwear instock shipping-taxable purchasable product-type-simple"
    >
        <div class="item">
            <div class="lte-image">
                <img
                    width="480"
                    height="655"
                    src="wp-content/uploads/2019/06/shop-10-480x655.jpg"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-10-480x655.jpg  480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-10-220x300.jpg  220w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-10-768x1047.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-10-751x1024.jpg 751w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-10-242x330.jpg  242w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-10-385x525.jpg  385w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-10-587x800.jpg  587w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-10-403x550.jpg  403w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-10-600x818.jpg  600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-10.jpg          880w
                    "
                    sizes="(max-width: 480px) 100vw, 480px"
                />
            </div>
            <div class="lte-item-descr">
                <a href="product/erotic-white-lingerie/index.html"><h2 class="woocommerce-loop-product__title">Erotic White Lingerie</h2></a>
                <span class="price">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>312.49</span>
                </span>
                <a
                    href="index252b.html?add-to-cart=9246"
                    data-quantity="1"
                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                    data-product_id="9246"
                    data-product_sku=""
                    aria-label="Add &ldquo;Erotic White Lingerie&rdquo; to your cart"
                    rel="nofollow"
                >
                    Add to cart
                </a>
                <a href="product/erotic-white-lingerie/index.html" class="lte-btn-more lte-btn btn">More Info</a>
            </div>
        </div>
    </li>
    <li
        id="post-9249"
        class="product post-9249 type-product status-publish has-post-thumbnail product_cat-fashion last instock shipping-taxable purchasable product-type-simple"
    >
        <div class="item">
            <div class="lte-image">
                <img
                    width="480"
                    height="655"
                    src="wp-content/uploads/2019/06/shop-08-480x655.jpg"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-08-480x655.jpg  480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-08-220x300.jpg  220w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-08-768x1047.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-08-751x1024.jpg 751w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-08-242x330.jpg  242w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-08-385x525.jpg  385w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-08-587x800.jpg  587w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-08-403x550.jpg  403w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-08-600x818.jpg  600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-08.jpg          880w
                    "
                    sizes="(max-width: 480px) 100vw, 480px"
                />
            </div>
            <div class="lte-item-descr">
                <a href="product/swimsuit-crest-wave/index.html"><h2 class="woocommerce-loop-product__title">Swimsuit Crest Wave</h2></a>
                <span class="price">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>143.49</span>
                </span>
                <a
                    href="index4737.html?add-to-cart=9249"
                    data-quantity="1"
                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                    data-product_id="9249"
                    data-product_sku=""
                    aria-label="Add &ldquo;Swimsuit Crest Wave&rdquo; to your cart"
                    rel="nofollow"
                >
                    Add to cart
                </a>
                <a href="product/swimsuit-crest-wave/index.html" class="lte-btn-more lte-btn btn">More Info</a>
            </div>
        </div>
    </li>
    <li
        id="post-9247"
        class="product post-9247 type-product status-publish has-post-thumbnail product_cat-underwear first instock sale shipping-taxable purchasable product-type-simple"
    >
        <div class="item">
            <div class="lte-image">
                <span class="onsale">Sale</span>
                <img
                    width="480"
                    height="655"
                    src="wp-content/uploads/2019/06/shop-09-480x655.jpg"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-09-480x655.jpg  480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-09-220x300.jpg  220w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-09-768x1047.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-09-751x1024.jpg 751w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-09-242x330.jpg  242w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-09-385x525.jpg  385w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-09-587x800.jpg  587w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-09-403x550.jpg  403w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-09-600x818.jpg  600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-09.jpg          880w
                    "
                    sizes="(max-width: 480px) 100vw, 480px"
                />
            </div>
            <div class="lte-item-descr">
                <a href="product/set-of-tightening-underwear/index.html"><h2 class="woocommerce-loop-product__title">Set of Tightening Underwear</h2></a>
                <span class="price">
                    <del>
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>126.99</span>
                    </del>
                    <ins>
                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>119.49</span>
                    </ins>
                </span>
                <a
                    href="indexfc06.html?add-to-cart=9247"
                    data-quantity="1"
                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                    data-product_id="9247"
                    data-product_sku=""
                    aria-label="Add &ldquo;Set of Tightening Underwear&rdquo; to your cart"
                    rel="nofollow"
                >
                    Add to cart
                </a>
                <a href="product/set-of-tightening-underwear/index.html" class="lte-btn-more lte-btn btn">More Info</a>
            </div>
        </div>
    </li>
    <li
        id="post-11062"
        class="product post-11062 type-product status-publish has-post-thumbnail product_cat-underwear instock shipping-taxable purchasable product-type-simple"
    >
        <div class="item">
            <div class="lte-image">
                <img
                    width="480"
                    height="655"
                    src="wp-content/uploads/2019/06/shop-06-480x655.jpg"
                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-06-480x655.jpg  480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-06-220x300.jpg  220w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-06-768x1047.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-06-751x1024.jpg 751w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-06-242x330.jpg  242w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-06-385x525.jpg  385w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-06-587x800.jpg  587w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-06-403x550.jpg  403w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-06-600x818.jpg  600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/shop-06.jpg          880w
                    "
                    sizes="(max-width: 480px) 100vw, 480px"
                />
            </div>
            <div class="lte-item-descr">
                <a href="product/golden-beach-set/index.html"><h2 class="woocommerce-loop-product__title">Golden Beach Set</h2></a>
                <span class="price">
                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>249.99</span>
                </span>
                <a
                    href="indexbb93.html?add-to-cart=11062"
                    data-quantity="1"
                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                    data-product_id="11062"
                    data-product_sku=""
                    aria-label="Add &ldquo;Golden Beach Set&rdquo; to your cart"
                    rel="nofollow"
                >
                    Add to cart
                </a>
                <a href="product/golden-beach-set/index.html" class="lte-btn-more lte-btn btn">More Info</a>
            </div>
        </div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-ff99bfe elementor-widget elementor-widget-spacer"
    data-id="ff99bfe"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- testimonial -->
    <section
    class="lte-background-black elementor-element elementor-element-313bbd6 lte-overlay-wrapper-black lte-background-black lte-parallax-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="313bbd6"
    data-element_type="section"
    data-settings='{"background_background":"classic"}'
    >
    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-440c6e3 elementor-column elementor-col-100 elementor-top-column" data-id="440c6e3" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div
    class="elementor-element elementor-element-c4a5850 elementor-widget elementor-widget-spacer"
    data-id="c4a5850"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-5f3e28a elementor-widget elementor-widget-lte-header"
    data-id="5f3e28a"
    data-element_type="widget"
    data-widget_type="lte-header.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-heading header-subheader lte-color-white lte-subcolor-main lte-margin has-subheader heading-tag-h2">
    <h4 class="lte-subheader">Testimonials</h4>
    <h2 class="lte-header">What Our Buyers Say</h2>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-067de27 elementor-widget elementor-widget-spacer"
    data-id="067de27"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-d6f3600 elementor-widget elementor-widget-lte-testimonials"
    data-id="d6f3600"
    data-element_type="widget"
    data-widget_type="lte-testimonials.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-swiper-slider-wrapper">
    <div
    class="lte-swiper-slider swiper-container lte-testimonials-list"
    data-space-between="30"
    data-arrows="sides"
    data-autoplay="0"
    data-autoplay-interaction=""
    data-loop=""
    data-speed="1000"
    data-effect="slide"
    data-slides-per-group="1"
    data-breakpoints="1;;;;;"
    >
    <div class="swiper-wrapper">
        <?php
    
foreach ($testimoni as $userreview) {

        ?>
    <div class="lte-item swiper-slide">
        <div class="lte-inner">
            <div class="lte-descr">
                <p>
                   <?php echo $userreview->content;?>
                </p>
            </div>
            <div class="lte-image">
                <img
                    width="110"
                    height="110"
                    src="wp-content/uploads/2018/02/client-02-110x110.jpg"
                    class="attachment-queeny-tiny-square size-queeny-tiny-square wp-post-image"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-110x110.jpg 110w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-150x150.jpg 150w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-300x300.jpg 300w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-768x768.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-330x330.jpg 330w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-250x250.jpg 250w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-140x140.jpg 140w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-275x275.jpg 275w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-800x800.jpg 800w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-550x550.jpg 550w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-480x480.jpg 480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-600x600.jpg 600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02-100x100.jpg 100w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-02.jpg         952w
                    "
                    sizes="(max-width: 110px) 100vw, 110px"
                />
            </div>
            <div class="lte-header"><?php echo $userreview->title;?></div>
           <!--  <div class="lte-subheader">Freelancer</div> -->
        </div>
    </div>
    <?php
   
}
?>
   <!--  <div class="lte-item swiper-slide">
        <div class="lte-inner">
            <div class="lte-descr">
                <p>
                    Maecenas ultricies felis sit amet libero scelerisque, ut eleifend leo mattis. Aliquam porta facilisis metus. Pellentesque habitant morbi
                    tristique.
                </p>
            </div>
            <div class="lte-image">
                <img
                    width="110"
                    height="110"
                    src="wp-content/uploads/2018/02/client-04-110x110.jpg"
                    class="attachment-queeny-tiny-square size-queeny-tiny-square wp-post-image"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-110x110.jpg 110w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-150x150.jpg 150w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-300x300.jpg 300w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-768x768.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-330x330.jpg 330w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-250x250.jpg 250w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-140x140.jpg 140w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-275x275.jpg 275w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-800x800.jpg 800w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-550x550.jpg 550w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-480x480.jpg 480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-600x600.jpg 600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04-100x100.jpg 100w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-04.jpg         952w
                    "
                    sizes="(max-width: 110px) 100vw, 110px"
                />
            </div>
            <div class="lte-header">Hugo James</div>
            <div class="lte-subheader">Manager</div>
        </div>
    </div>
    <div class="lte-item swiper-slide">
        <div class="lte-inner">
            <div class="lte-descr">
                <p>
                    Morbi viverra volutpat ex, id pellentesque felis volutpat eu. Duis et tellus imperdiet, lacinia risus id, tincidunt ipsum. Integer
                    euismod elit vel.
                </p>
            </div>
            <div class="lte-image">
                <img
                    width="110"
                    height="110"
                    src="wp-content/uploads/2018/02/client-01-110x110.jpg"
                    class="attachment-queeny-tiny-square size-queeny-tiny-square wp-post-image"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-110x110.jpg 110w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-150x150.jpg 150w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-300x300.jpg 300w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-768x768.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-330x330.jpg 330w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-250x250.jpg 250w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-140x140.jpg 140w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-275x275.jpg 275w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-800x800.jpg 800w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-550x550.jpg 550w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-480x480.jpg 480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-600x600.jpg 600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01-100x100.jpg 100w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-01.jpg         952w
                    "
                    sizes="(max-width: 110px) 100vw, 110px"
                />
            </div>
            <div class="lte-header">Stefanie Rashford</div>
            <div class="lte-subheader">Developer</div>
        </div>
    </div>
    <div class="lte-item swiper-slide">
        <div class="lte-inner">
            <div class="lte-descr">
                <p>
                    Nullam orci dui, dictum et magna sollicitudin, tempor blandit erat. Maecenas suscipit tellus sit amet augue placerat fringilla a id
                    lacus. Fusce.
                </p>
            </div>
            <div class="lte-image">
                <img
                    width="110"
                    height="110"
                    src="wp-content/uploads/2018/02/client-06-110x110.jpg"
                    class="attachment-queeny-tiny-square size-queeny-tiny-square wp-post-image"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-110x110.jpg 110w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-150x150.jpg 150w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-300x300.jpg 300w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-768x768.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-330x330.jpg 330w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-250x250.jpg 250w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-140x140.jpg 140w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-275x275.jpg 275w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-800x800.jpg 800w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-550x550.jpg 550w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-480x480.jpg 480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-600x600.jpg 600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06-100x100.jpg 100w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-06.jpg         952w
                    "
                    sizes="(max-width: 110px) 100vw, 110px"
                />
            </div>
            <div class="lte-header">Cassie Carleton</div>
            <div class="lte-subheader">Designer</div>
        </div>
    </div>
    <div class="lte-item swiper-slide">
        <div class="lte-inner">
            <div class="lte-descr">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis at turpis eu faucibus. In dignissim, enim eu ornare aliquet,
                    metus ex.
                </p>
            </div>
            <div class="lte-image">
                <img
                    width="110"
                    height="110"
                    src="wp-content/uploads/2018/02/client-08-110x110.jpg"
                    class="attachment-queeny-tiny-square size-queeny-tiny-square wp-post-image"
                    alt=""
                    srcset="
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-110x110.jpg 110w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-150x150.jpg 150w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-300x300.jpg 300w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-768x768.jpg 768w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-330x330.jpg 330w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-250x250.jpg 250w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-140x140.jpg 140w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-275x275.jpg 275w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-800x800.jpg 800w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-550x550.jpg 550w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-480x480.jpg 480w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-600x600.jpg 600w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08-100x100.jpg 100w,
                        http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/client-08.jpg         952w
                    "
                    sizes="(max-width: 110px) 100vw, 110px"
                />
            </div>
            <div class="lte-header">Coby Sue</div>
            <div class="lte-subheader">Company Owner</div>
        </div>
    </div> -->
    </div>
    </div>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-f8f026d elementor-widget elementor-widget-spacer"
    data-id="f8f026d"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section
    class="lte-background-gray elementor-element elementor-element-a20eda9 lte-background-gray elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="a20eda9"
    data-element_type="section"
    data-settings='{"background_background":"classic"}'
    >
    <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-39dc3b7 elementor-column elementor-col-100 elementor-top-column" data-id="39dc3b7" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div
    class="elementor-element elementor-element-d2bf675 elementor-widget elementor-widget-spacer"
    data-id="d2bf675"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-ba17eb5 elementor-widget elementor-widget-lte-header"
    data-id="ba17eb5"
    data-element_type="widget"
    data-widget_type="lte-header.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-heading header-subheader lte-underline lte-subcolor-main lte-margin has-subheader heading-tag-h2">
    <h4 class="lte-subheader">Fashion Blog</h4>
    <h2 class="lte-header">Popular Articles</h2>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-ad1e806 elementor-widget elementor-widget-spacer"
    data-id="ad1e806"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-ae149aa elementor-widget elementor-widget-lte-blog"
    data-id="ae149aa"
    data-element_type="widget"
    data-widget_type="lte-blog.default"
    >
    <div class="elementor-widget-container">
    <div class="blog lte-blog-sc row centered layout-featured layout-cols-3">
    <div class="lte-featured-large col-xl-6 col-lg-6 col-md-12 col-sm-12 col-ms-12 col-xs-12">
    <article
    id="post-6615"
    class="post-6615 post type-post status-publish format-standard has-post-thumbnail hentry category-clothes-store category-lingerie tag-clothes"
    >
    <a href="lace-underwear-as-a-way-to-emphasize-your-sexuality/index.html" class="lte-photo">
        <img
            src="wp-content/uploads/2019/06/blog_rev_01-755x521.jpg"
            width="755"
            height="521"
            alt=""
            srcset="
                http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/blog_rev_01-755x521.jpg   755w,
                http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/blog_rev_01-1120x720.jpg 1120w
            "
            sizes="(max-width: 3000px) 755px,(max-width: 1199px) 1120px,755px"
        />
        <span class="lte-photo-overlay"></span>
    </a>
    <div class="lte-description">
        <div class="lte-post-headline">
            <span class="lte-cats"><a href="category/clothes-store/index.html">Clothes Store</a></span>
        </div>
        <a href="lace-underwear-as-a-way-to-emphasize-your-sexuality/index.html" class="lte-header">
            <h3>Lace Underwear as a Way To Emphasize Your Sexuality in Accordance with the Fashion Trends</h3>
        </a>
        <ul class="lte-post-info">
            <li class="lte-post-date">
                <a href="lace-underwear-as-a-way-to-emphasize-your-sexuality/index.html" class="lte-date"><span class="dt">December 9, 2019</span></a>
            </li>
            <li class="lte-icon-comments"><span>1 comment</span></li>
        </ul>
    </div>
    </article>
    </div>
    <div class="lte-featured-small col-xl-6 col-lg-6 col-md-12 col-sm-12 col-ms-12 col-xs-12">
    <div class="col-lg-6 col-md-6 col-sm-12 col-ms-12 col-xs-12">
    <article
        id="post-11305"
        class="post-11305 post type-post status-publish format-standard has-post-thumbnail hentry category-clothes-store category-lingerie tag-clothes"
    >
        <a href="the-choice-of-universal-underwear-for-all-occasions/index.html" class="lte-photo">
            <img
                src="wp-content/uploads/2019/06/blog_rev_02-300x195.jpg"
                width="300"
                height="195"
                alt=""
                srcset="
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/blog_rev_02-300x195.jpg   300w,
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/blog_rev_02-1120x720.jpg 1120w
                "
                sizes="(max-width: 3000px) 300px,(max-width: 1199px) 1120px,300px"
            />
            <span class="lte-photo-overlay"></span>
        </a>
        <div class="lte-description">
            <div class="lte-post-headline">
                <span class="lte-cats"><a href="category/clothes-store/index.html">Clothes Store</a></span>
            </div>
            <a href="the-choice-of-universal-underwear-for-all-occasions/index.html" class="lte-header">
                <h3>The Choice Of Underwear For All Occasions</h3>
            </a>
            <ul class="lte-post-info">
                <li class="lte-post-date">
                    <a href="the-choice-of-universal-underwear-for-all-occasions/index.html" class="lte-date"><span class="dt">December 8, 2019</span></a>
                </li>
                <li class="lte-icon-comments"><span>0 comments</span></li>
            </ul>
        </div>
    </article>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-ms-12 col-xs-12">
    <article
        id="post-11304"
        class="post-11304 post type-post status-publish format-standard has-post-thumbnail hentry category-clothes-store category-lingerie tag-clothes"
    >
        <a href="prospects-for-using-pockets-in-underwear/index.html" class="lte-photo">
            <img
                src="wp-content/uploads/2019/06/blog_rev_03-300x195.jpg"
                width="300"
                height="195"
                alt=""
                srcset="
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/blog_rev_03-300x195.jpg   300w,
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/blog_rev_03-1120x720.jpg 1120w
                "
                sizes="(max-width: 3000px) 300px,(max-width: 1199px) 1120px,300px"
            />
            <span class="lte-photo-overlay"></span>
        </a>
        <div class="lte-description">
            <div class="lte-post-headline">
                <span class="lte-cats"><a href="category/clothes-store/index.html">Clothes Store</a></span>
            </div>
            <a href="prospects-for-using-pockets-in-underwear/index.html" class="lte-header"><h3>Prospects For Using Pockets In Underwear</h3></a>
            <ul class="lte-post-info">
                <li class="lte-post-date">
                    <a href="prospects-for-using-pockets-in-underwear/index.html" class="lte-date"><span class="dt">November 2, 2019</span></a>
                </li>
                <li class="lte-icon-comments"><span>0 comments</span></li>
            </ul>
        </div>
    </article>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-ms-12 col-xs-12">
    <article
        id="post-6579"
        class="post-6579 post type-post status-publish format-video has-post-thumbnail hentry category-fashion category-underwear tag-clothes tag-lingerie post_format-post-format-video"
    >
        <a href="tips-for-choosing-a-bra-size/index.html" class="lte-photo">
            <img
                src="wp-content/uploads/2019/06/blog_rev_04-300x195.jpg"
                width="300"
                height="195"
                alt=""
                srcset="
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/blog_rev_04-300x195.jpg   300w,
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/blog_rev_04-1120x720.jpg 1120w
                "
                sizes="(max-width: 3000px) 300px,(max-width: 1199px) 1120px,300px"
            />
            <span class="lte-photo-overlay"></span>
        </a>
        <div class="lte-description">
            <div class="lte-post-headline">
                <span class="lte-cats"><a href="category/fashion/index.html">Fashion</a></span>
            </div>
            <a href="tips-for-choosing-a-bra-size/index.html" class="lte-header"><h3>Tips For Choosing a Bra Size</h3></a>
            <ul class="lte-post-info">
                <li class="lte-post-date">
                    <a href="tips-for-choosing-a-bra-size/index.html" class="lte-date"><span class="dt">November 30, 2018</span></a>
                </li>
                <li class="lte-icon-comments"><span>1 comment</span></li>
            </ul>
        </div>
    </article>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-ms-12 col-xs-12">
    <article
        id="post-7951"
        class="post-7951 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion category-underwear tag-fashion"
    >
        <a href="bra-underwear-with-over-2000-years-of-history/index.html" class="lte-photo">
            <img
                src="wp-content/uploads/2019/06/blog_rev_05-300x195.jpg"
                width="300"
                height="195"
                alt=""
                srcset="
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/blog_rev_05-300x195.jpg   300w,
                    http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/blog_rev_05-1120x720.jpg 1120w
                "
                sizes="(max-width: 3000px) 300px,(max-width: 1199px) 1120px,300px"
            />
            <span class="lte-photo-overlay"></span>
        </a>
        <div class="lte-description">
            <div class="lte-post-headline">
                <span class="lte-cats"><a href="category/fashion/index.html">Fashion</a></span>
            </div>
            <a href="bra-underwear-with-over-2000-years-of-history/index.html" class="lte-header"><h3>Bra &#8211; Underwear with 2000 Years History</h3></a>
            <ul class="lte-post-info">
                <li class="lte-post-date">
                    <a href="bra-underwear-with-over-2000-years-of-history/index.html" class="lte-date"><span class="dt">November 30, 2018</span></a>
                </li>
                <li class="lte-icon-comments"><span>3 comments</span></li>
            </ul>
        </div>
    </article>
    </div>
    </div>
    </div>
    <div class="clear"></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-9195d06 elementor-widget elementor-widget-spacer"
    data-id="9195d06"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-4262bb2 elementor-widget elementor-widget-lte-button"
    data-id="4262bb2"
    data-element_type="widget"
    data-widget_type="lte-button.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-btn-wrap">
    <a href="blog-masonry-with-sidebar/index.html" class="lte-btn btn-lg color-hover-default">
    <span class="lte-btn-inner"><span class="lte-btn-before"></span>Read More<span class="lte-btn-after"></span></span>
    </a>
    </div>
    </div>
    </div>
    <div
    class="elementor-element elementor-element-4bde9a9 elementor-widget elementor-widget-spacer"
    data-id="4bde9a9"
    data-element_type="widget"
    data-widget_type="spacer.default"
    >
    <div class="elementor-widget-container">
    <div class="elementor-spacer"><div class="elementor-spacer-inner"></div></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section
    class="elementor-element elementor-element-955ec9c elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
    data-id="955ec9c"
    data-element_type="section"
    >
    <div class="elementor-container elementor-column-gap-no">
    <div class="elementor-row">
    <div class="elementor-element elementor-element-9c2bbea elementor-column elementor-col-100 elementor-top-column" data-id="9c2bbea" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
    <div class="elementor-widget-wrap">
    <div
    class="elementor-element elementor-element-df0d814 elementor-widget elementor-widget-lte-gallery"
    data-id="df0d814"
    data-element_type="widget"
    data-widget_type="lte-gallery.default"
    >
    <div class="elementor-widget-container">
    <div class="lte-gallery-sc lte-gallery-grid">
    <a href="wp-content/uploads/2019/06/gallery-01.jpg" class="swipebox lte-photo">
    <span>
    <img
        width="800"
        height="800"
        src="wp-content/uploads/2019/06/gallery-01-800x800.jpg"
        class="attachment-queeny-gallery-big size-queeny-gallery-big"
        alt=""
        srcset="
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-800x800.jpg  800w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-150x150.jpg  150w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-300x300.jpg  300w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-768x768.jpg  768w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-330x330.jpg  330w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-250x250.jpg  250w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-140x140.jpg  140w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-110x110.jpg  110w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-275x275.jpg  275w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-550x550.jpg  550w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-480x480.jpg  480w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-600x600.jpg  600w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01-100x100.jpg  100w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-01.jpg         1000w
        "
        sizes="(max-width: 800px) 100vw, 800px"
    />
    </span>
    </a>
    <a href="wp-content/uploads/2019/06/gallery-02.jpg" class="swipebox lte-photo">
    <span>
    <img
        width="800"
        height="800"
        src="wp-content/uploads/2019/06/gallery-02-800x800.jpg"
        class="attachment-queeny-gallery-big size-queeny-gallery-big"
        alt=""
        srcset="
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-800x800.jpg  800w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-150x150.jpg  150w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-300x300.jpg  300w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-768x768.jpg  768w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-330x330.jpg  330w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-250x250.jpg  250w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-140x140.jpg  140w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-110x110.jpg  110w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-275x275.jpg  275w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-550x550.jpg  550w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-480x480.jpg  480w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-600x600.jpg  600w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02-100x100.jpg  100w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-02.jpg         1000w
        "
        sizes="(max-width: 800px) 100vw, 800px"
    />
    </span>
    </a>
    <a href="wp-content/uploads/2019/06/gallery-05.jpg" class="swipebox lte-photo">
    <span>
    <img
        width="800"
        height="800"
        src="wp-content/uploads/2019/06/gallery-05-800x800.jpg"
        class="attachment-queeny-gallery-big size-queeny-gallery-big"
        alt=""
        srcset="
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-800x800.jpg  800w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-150x150.jpg  150w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-300x300.jpg  300w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-768x768.jpg  768w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-330x330.jpg  330w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-250x250.jpg  250w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-140x140.jpg  140w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-110x110.jpg  110w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-275x275.jpg  275w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-550x550.jpg  550w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-480x480.jpg  480w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-600x600.jpg  600w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05-100x100.jpg  100w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-05.jpg         1000w
        "
        sizes="(max-width: 800px) 100vw, 800px"
    />
    </span>
    </a>
    <a href="wp-content/uploads/2019/06/gallery-06.jpg" class="swipebox lte-photo">
    <span>
    <img
        width="800"
        height="800"
        src="wp-content/uploads/2019/06/gallery-06-800x800.jpg"
        class="attachment-queeny-gallery-big size-queeny-gallery-big"
        alt=""
        srcset="
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-800x800.jpg  800w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-150x150.jpg  150w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-300x300.jpg  300w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-768x768.jpg  768w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-330x330.jpg  330w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-250x250.jpg  250w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-140x140.jpg  140w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-110x110.jpg  110w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-275x275.jpg  275w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-550x550.jpg  550w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-480x480.jpg  480w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-600x600.jpg  600w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06-100x100.jpg  100w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-06.jpg         1000w
        "
        sizes="(max-width: 800px) 100vw, 800px"
    />
    </span>
    </a>
    <a href="wp-content/uploads/2018/02/gallery-03-new.jpg" class="swipebox lte-photo">
    <span>
    <img
        width="800"
        height="800"
        src="wp-content/uploads/2018/02/gallery-03-new-800x800.jpg"
        class="attachment-queeny-gallery-big size-queeny-gallery-big"
        alt=""
        srcset="
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-800x800.jpg    800w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-150x150.jpg    150w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-300x300.jpg    300w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-768x768.jpg    768w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-1024x1024.jpg 1024w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-1536x1536.jpg 1536w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-330x330.jpg    330w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-250x250.jpg    250w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-140x140.jpg    140w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-110x110.jpg    110w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-275x275.jpg    275w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-550x550.jpg    550w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-480x480.jpg    480w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-600x600.jpg    600w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new-100x100.jpg    100w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2018/02/gallery-03-new.jpg           1600w
        "
        sizes="(max-width: 800px) 100vw, 800px"
    />
    </span>
    </a>
    <a href="wp-content/uploads/2019/06/gallery-04.jpg" class="swipebox lte-photo">
    <span>
    <img
        width="800"
        height="800"
        src="wp-content/uploads/2019/06/gallery-04-800x800.jpg"
        class="attachment-queeny-gallery-big size-queeny-gallery-big"
        alt=""
        srcset="
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-800x800.jpg  800w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-150x150.jpg  150w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-300x300.jpg  300w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-768x768.jpg  768w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-330x330.jpg  330w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-250x250.jpg  250w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-140x140.jpg  140w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-110x110.jpg  110w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-275x275.jpg  275w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-550x550.jpg  550w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-480x480.jpg  480w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-600x600.jpg  600w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04-100x100.jpg  100w,
            http:<?=base_url();?>assets/web-content/wp-content/uploads/2019/06/gallery-04.jpg         1000w
        "
        sizes="(max-width: 800px) 100vw, 800px"
    />
    </span>
    </a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>
    </div>
    </div>
    </div>
    </article>
    </div>
    </div>
    </div>
    </div>
