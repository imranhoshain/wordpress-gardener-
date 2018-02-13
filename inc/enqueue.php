<?php

function gardener_cs_js(){
    
    //All css file
	//wp_enqueue_style( 'google-font', consult_fonts_url(), array(), '1.0.0' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), '3.4.4', 'all' );    
	wp_enqueue_style( 'faq', get_template_directory_uri().'/assets/css/faq.theme.css', array(), '3.4.4', 'all' );
	wp_enqueue_style( 'slicknav', get_template_directory_uri().'/assets/css/slicknav.min.css', array(), '3.4.4', 'all' );
	wp_enqueue_style( 'carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '3.4.4', 'all' );
	wp_enqueue_style( 'owl_theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '3.4.4', 'all' );
	wp_enqueue_style( 'navstylechange', get_template_directory_uri().'/assets/css/navstylechange.css', array(), '3.4.4', 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '3.4.4', 'all' );
	wp_enqueue_style( 'font_awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '3.4.4', 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css', array(), '3.4.4', 'all' );	
	wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '3.4.4', 'all' );
	wp_enqueue_style( 'settings', get_template_directory_uri().'/rs-plugin/css/settings.css', array(), '3.4.4', 'all' );
    //All js file
    wp_enqueue_script( 'jquery-min', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '2.2.4', 'false' );
    wp_enqueue_script( 'themepunch', get_template_directory_uri().'/assets/js/jquery.themepunch.plugins.min.js', array(), '2.2.4', 'false' );    
    wp_enqueue_script( 'themepunch_revolution', get_template_directory_uri().'/assets/js/jquery.themepunch.revolution.min.js', array(), '2.2.4', 'false' );	
	wp_enqueue_script( 'mixitup', get_template_directory_uri().'/assets/js/mixitup.min.js', array(), '2.2.4', 'false' ); 
	wp_enqueue_script( 'slicknav_js', get_template_directory_uri().'/assets/js/jquery.slicknav.min.js', array(), '2.2.4', 'false' );
	wp_enqueue_script( 'carousel_js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), '2.2.4', 'false' ); 
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '2.2.4', 'false' ); 
	wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/custom.js', array(), '2.2.4', 'false' );
}
add_action( 'wp_enqueue_scripts', 'gardener_cs_js');