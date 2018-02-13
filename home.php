<?php get_header(); ?>

   
   <section id="breadcrumb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcrumb-title text-center">
                    	<h1>blog</h1>
						<a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <span>blog</span>
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section>
    
   
    <div class="blog_page_area">
        <div class="container">
            <div class="row">
			
			
                <div class="col-md-8">
				
                    <div class="blog_left_side_area">

                    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<div class="blog_left_single_item">
                            <div class="blog_pic image_fulwidth">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                <h4 class="date_position"><?php echo get_the_date('F j Y'); ?></h4>
                            </div>

                            <div class="blog_left_single_content para_default">
                                <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                                <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                            </div>
                        </div><!-- blog_left_single_item -->

                    	<?php
                    	endwhile;
                    	?>                                      

                      
                        <div class="blog_pagination">
                            <nav>
                                <ul class="pagination pagination-lg">

                                    <?php the_posts_pagination( array(
                                        'mid_size' => 2,
                                        'prev_text' => __( '', 'textdomain' ),
                                        'next_text' => __( '<i class="flaticon-right-arrow"></i>', 'textdomain' ),
                                    ) ); ?>
                                    
                                </ul>
                            </nav>
                        </div>
						<?php
							else:
								get_template_part( 'template-parts/page/content', 'none' );
							endif;
							wp_reset_postdata();

						?>


                    </div><!-- blog_left_side_area -->
					
                </div><!-- col-md-8 -->
				
				
                <div class="col-md-4">
                    <div class="blog_right_side_area">                        
                        <?php echo dynamic_sidebar('right_sidebar'); ?>               
                    </div>
                </div><!-- col-md-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- blog_page_area -->

<?php get_footer(); ?>