<?php 
function conselt_intigrate(){

vc_map(array(
      'name' => __('First Section','text-domain'),
      'description' => 'My First addons',
      'base' => 'section_1',      
      'category' => 'Consult',
      'icon' => get_template_directory_uri().'/images/favicon.ico' ,      
      'params' => array(

      	array(
      	'param_name' => 'title_sec_1',
      	'type' => 'textfield',
      	'heading' => 'Section One TItle',      
      	'value' => 'Its Value',

      	),
      	array(
      	'param_name' => 'title_sec_2',
      	'type' => 'textarea',
      	'heading' => 'Section Two TItle',      
      	'value' => 'Its Value',

      	),
      ),

));


//Section 3

vc_map(array(
      'name' => __('Third Section','text-domain'),
      'description' => 'My Third addons',
      'base' => 'section_2',      
      'category' => 'Consult',
      'icon' => get_template_directory_uri().'/images/favicon.ico' ,      
      'params' => array(

      	array(
      	'param_name' => 'title_sec_3',
      	'type' => 'textfield',
      	'heading' => 'Section fdf TItle',      
      	'value' => 'Its sdfValue',

      	),
      	
      ),

));

}
add_action('vc_before_init','conselt_intigrate');
?>