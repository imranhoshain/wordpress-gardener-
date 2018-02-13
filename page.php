<?php get_header(); ?>

<div id="gardener-blogs-content">
	<div class="container">
	<div class="row">
<?php 
while ( have_posts() ) : the_post();
        
        

get_template_part('template-parts/page/content','page');
	
endwhile;
?>
    </div>
</div>
</div>


<?php get_footer();