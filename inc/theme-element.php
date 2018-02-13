<?php 
function consult_section_1(){
	extract(
		shortcode_atts(array(
			'title_sec_1' => 'Your Title',


		),$attr)
	);

	ob_start();

	?>

	 <div class="looking_for_specific_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="looking_for_left para_default">
                        <h3><?php echo esc_html($title_sec_1);?></h3>
                        <p><?php echo esc_html($title_sec_desc_1);?> </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="looking_for_right image_fulwidth wow fadeInRight" data-wow-delay="300ms">
                        <img src="<?php echo wp_get_attachment_image_src(cs_get_option('fields_3'),'full')[0]; ?>">
                    </div>
                </div>
            </div><!--row -->
        </div><!--container -->
    </div><!--looking_for_specific_area -->

<?php

	return ob_get_clean();

}

add_shortcode( 'section_1','consult_section_1' );

?>