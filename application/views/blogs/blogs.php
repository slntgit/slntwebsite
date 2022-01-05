
        <div class="man_intro  man_image_bck" data-image="https://manufacturer.stylemixthemes.com/textile/wp-content/uploads/sites/6/2018/08/photo-1530396220186-53cd210802ef.jpeg" data-color="#333333" data-repeat="no-repeat" data-position="center center"
            data-attachment="" data-size="cover">
            <div class="man_over"></div>
            <div class="man_intro_cont">
                <h1> Textile News</h1>
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Manufacturing WordPress Theme." href="https://manufacturer.stylemixthemes.com/textile" class="home"><span property="name">Manufacturing WordPress Theme</span></a>
                        <meta
                            property="position" content="1">
                            </span>
                    </li>
                    <li class="archive taxonomy category current-item"><span property="itemListElement" typeof="ListItem"><span property="name">Textile News</span>
                        <meta property="position" content="2">
                        </span>
                    </li>
                </div>
            </div>
        </div>
        <div id="content" class="site-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 man_main_sidebar">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="man_blog_archive row">
                                    






                                    <?php foreach ($blogs as $blog): ?>
    <?php 
                $this->db->select('*');
                $this->db->from('blogcategory');
                $where2 = array('id' => $blog->category);
                $this->db->where($where2);
                $dquery = $this->db->get()->row();

    ?>
                                    <article id="post-250" class="post-250 post type-post status-publish format-standard has-post-thumbnail hentry category-textile-news tag-dna tag-westpoint">
                                        <div class="man_news_item_list row">
                                            <div class="col-md-5 col-lg-5 man_news_item_photo_col">
                                                <div class="man_news_item_photo"> 
                                                    <a href="<?= base_url();?>blog/<?= $blog->blog_url ?>" class="man_image_bck" data-image="<?= base_url();?>assets/blogs/<?=$blog->image;?>"></a></div>
                                            </div>
                                            <div class="col-md-7 col-lg-7 man_news_item_cont_col ">
                                                <div class="man_news_item_cont_list">
                                                    <div class="man_news_item_title">
                                                        <h3 class="entry-title"><a href="<?= base_url();?>blog/<?= $blog->blog_url ?>" rel="bookmark"><?= $blog->title ?></a></h3>
                                                    </div>
                                                    <div class="man_news_item_txt">
                                                        <p><?= word_limiter(strip_tags($blog->url), 60);?></p>
                                                    </div>
                                                    <div class="man_news_item_tech">
                                                        <div class="man_news_item_date">

                                                         <a href="<?= base_url();?>blog/<?= $blog->blog_url ?>">
                                                            <i class="ti ti-arrow-circle-right"></i>Read More</a> 


                                                            <span>
                                                                <span class="posted-on">
<?php if($blog->postdate!=''){ ?>
    <i class="ti ti-time"></i>
                                                                    <time class="entry-date published" datetime="2018-07-19T06:35:38+00:00"><?= $blog->postdate ?></time>
                                                                  
<?php } ?>   
                                                                   
<?php if($blog->post_by!=''){ ?>
                                                            <span class="tags-links">By : <a href="<?= base_url();?>blog/<?= $blog->blog_url ?>" class="d-inline-block"> <?= $blog->post_by;?></a>
 <?php } ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
<?php endforeach; ?>
                                </div>
                            </main>
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




</style>     