<?php
/**
 * Kyle\'s Theme Theme Customizer
 *
 * @package Kyle\'s Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kyle_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	// Logo
	$wp_customize->add_setting( 'logo' , array(
		'default' => ''
	) );
	$wp_customize->add_section( 'logo' , array(
		'title'      => __( 'Logo', 'kyle' ),
		'priority'   => 30,
	) );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo',
			array(
				'label'      => __( 'Upload a logo', 'theme_name' ),
				'section'    => 'logo',
				'settings'   => 'logo'
			)
		)
	);
	// Small logo
	$wp_customize->add_setting( 'logo-small' , array(
		'default' => ''
	) );
	$wp_customize->add_section( 'logo-small' , array(
		'title'      => __( 'Small Logo', 'kyle' ),
		'priority'   => 30,
	) );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'logo-small',
			array(
				'label'      => __( 'Upload a smaller logo (optional)', 'theme_name' ),
				'section'    => 'logo-small',
				'settings'   => 'logo-small'
			)
		)
	);
}
add_action( 'customize_register', 'kyle_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function kyle_customize_preview_js() {
	wp_enqueue_script( 'kyle_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'kyle_customize_preview_js' );
