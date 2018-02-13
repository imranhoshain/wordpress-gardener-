<?php
/**
 * Madang Theme Customizer.
 *
 * @package Madang
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gardener_social_icon( $wp_customize ) {
    
    $wp_customize->add_section( 'madang_social_section' , array(
            'title'       => esc_html__( 'Social Networks', 'madang' ),
            'priority'    => 23,
            'description' => 'Set up social network links and icons, enter Twitter API keys.',
    ) );
    
$wp_customize->add_setting( 'facebook', array(
                                     'sanitize_callback' => 'madang_sanitize_text',
            ) );
    
    $wp_customize->add_control( 'facebook', array(
             'label'     => 'Facebook', 'madang',
             'section'   => 'madang_social_section',
             'priority'  => 10,
             'type'      => 'text'
    ) );

}
add_action( 'customize_register', 'gardener_social_icon' );