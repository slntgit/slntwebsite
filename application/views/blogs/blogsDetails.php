      <!-- End Header Area -->
      <!-- Start Page Title Area -->

       <?php
$configwebsite=$this->Main_model->getData('configuration_general','id','DESC',1,'id',1);
$webconfig=$configwebsite->row();
?>
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



        <div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-9 man_main_sidebar">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php  

                $this->db->select('*');
                $this->db->from('blogcategory');
                $where2 = array('id' => $blog->category);
                $this->db->where($where2);
                $dquery = $this->db->get()->row();

                ?>
                    <article id="post-245" class="post-245 post type-post status-publish format-standard has-post-thumbnail hentry category-textile-news tag-efforts tag-energy tag-fruits tag-textile">
                        <div class="man_single_page"><?php 
 if($blog->image!=''){ ?>
                    

 <img width="800" height="519" src="<?= base_url();?>assets/blogs/<?=$blog->image;?>" data-lazy-type="image" data-src="<?= base_url();?>assets/blogs/<?=$blog->image;?>"
                                class="attachment-manufacturer_single size-manufacturer_single wp-post-image lazy-loaded" alt="" srcset="<?= base_url();?>assets/blogs/<?=$blog->image;?> 1600w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 300w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 768w,<?= base_url();?>assets/blogs/<?=$blog->image;?> 1024w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 285w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 660w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 150w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 360w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 600w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 550w"
                                data-srcset="" sizes="(max-width: 800px) 100vw, 800px"><noscript><img width="800" height="519" src="<?= base_url();?>assets/blogs/<?=$blog->image;?>" class="attachment-manufacturer_single size-manufacturer_single wp-post-image" alt="" srcset="<?= base_url();?>assets/blogs/<?=$blog->image;?> 1600w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 300w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 768w,<?= base_url();?>assets/blogs/<?=$blog->image;?> 1024w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 285w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 660w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 150w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 360w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 600w, <?= base_url();?>assets/blogs/<?=$blog->image;?> 550w" sizes="(max-width: 800px) 100vw, 800px" /></noscript>






                            <?php } ?>
                          <?=$blog->url;?>
                        </div>
                        
                    </article>
                
                </main>
            </div>
        </div>
        <div class="col-lg-3 man_sidebar_col">
            <div class="man_sidebar">
              
                <section id="recent-posts-2" class="widget widget_recent_entries">
                    <h3 class="widget-title">Recent Posts</h3>
                    <ul>
<?php 
    foreach ($popularPosts as $popularp):
?>
                        <li><a href="<?= base_url();?>blog/<?= $popularp->blog_url ?>"><?= $popularp->title;?></a></li>
<?php endforeach; ?>       


                    </ul>
                </section>
                 <section class="widget widget_categories">
                                  <div class="lte-sidebar-header">
                                        <h3 class="header-widget"><span class="widget-icon"></span>Categories<span class="last widget-icon"></span></h3>
                                    </div>
                                <!-- <h3 class="widget-title">Categories</h3> -->

                            <ul>
                                <?php foreach($blogsCategory as $category):?>
                                <li><a href="<?=base_url();?>blogs/<?=$category->search_id;?>"><?=$category->name;?> <span class="post-count">(<?=$this->Blogs_model->get_count($category->search_id);?>)</span></a></li>
                                <?php endforeach;?>
                            </ul>
                            </section>
            </div>
        </div>
    </div>
</div>