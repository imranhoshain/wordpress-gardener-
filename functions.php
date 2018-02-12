<?php


//All css and js file
require_once(get_template_directory().'/inc/enqueue.php');

//Theme menu function
require_once(get_template_directory().'/inc/theme-menu.php');

//Theme Drop-Down menu function
require_once(get_template_directory().'/inc/navwalker.php');

//Theme Drop-Down menu function
require_once(get_template_directory().'/inc/custom-slider.php');

//Theme menu function
require_once(get_template_directory().'/inc/theme-supports.php');



//Theme setup file
//require_once(get_template_directory().'/inc/theme-setup.php');




//Comment  feild
function consult_wpb_move_comment_field_to_bottom( $fields ) {
	
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}

add_filter( 'comment_form_fields', 'consult_wpb_move_comment_field_to_bottom' );
