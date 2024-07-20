<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage creativium
 * @since creativium 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function creativium_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Creativium_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Creativium Pro', 'creativium' ),
		'button_text'      => __( 'Upgrade Pro', 'creativium' ),
		'url'              => esc_url( CREATIVIUM_BUY_NOW ),
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'creativium_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function creativium_custom_control_scripts() {
	wp_enqueue_script( 'creativium-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'creativium_custom_control_scripts' );