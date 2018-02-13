<?php get_header();?>
<div id="gardener-blogs-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pull-left">
               <?php 
                      if(have_posts()):
                      while(have_posts()):the_post();
                      
               ?>
                <div class="gardener-blog-posts">
                    <div class="gardener-blog-single-post">
                        <article class="single-blog-post wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <figure>
                                <?php the_post_thumbnail();?>
                            </figure>
                            <div class="post-title">
                                <h1><?php echo get_the_title();?></h1>
                            </div>
                            <div class="post-info">
                                <ul class="post-icons">
                                    <li><i class="fa fa-user"></i><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'),get_the_author_meta('user_nicename'));?>" class="admin"><?php the_author();?></a></li>
                                    <li><i class="fa fa-comment"></i><a href="">Comments</a></li>
                                    <li><i class="fa fa-heart"></i><a href="">Like</a></li>
                                </ul>
                            </div>
                            <div class="post-content">
                                <p><?php the_content(); ?></p>
                            </div>
                        </article>
                    </div>
                     <?php  

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>  
                </div>
            </div>
            <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
           ?>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-right ">
                <div class="gardener-blog-sidebar">
                    <aside class="blog-widget">
                        <?php echo dynamic_sidebar('right_sidebar'); ?>
                    </aside>
                    <!-- /.widget -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>