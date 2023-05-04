<?php
add_action ( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css');
}
/* AFFICHER LE HEADER */

add_action( 'wp_enqueue_scripts', 'planty_enqueue_styles' );
function planty_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Fonction de configuration du thème enfant
add_action( 'after_setup_theme', 'planty_child_theme_setup' );

function planty_child_theme_setup() {
	// Définition de la section pour le header dans le customizer
	add_action( 'customize_register', 'planty_customizer_sections' );
	function planty_customizer_sections( $wp_customize ) {
		$wp_customize->add_section( 'planty_header', array(
			'title' => __( 'Header', 'Planty-child' ),
			'description' => __( 'Customize the header of your site', 'Planty-child' ),
			'priority' => 1
		) );

		// Définition des options de personnalisation pour le header
		$wp_customize->add_setting( 'header_background_color', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport' => 'postMessage'
		) );

		$wp_customize->add_setting( 'header_logo', array(
			'default' => '',
			'sanitize_callback' => 'esc_url_raw'
		) );

		$wp_customize->add_setting( 'header_site_title', array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field'
		) );

		$wp_customize->add_setting( 'header_font_family', array(
			'default' => 'Arial, sans-serif',
			'sanitize_callback' => 'sanitize_text_field'
		) );

		$wp_customize->add_setting( 'header_text_color', array(
			'default' => '#000000',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport' => 'postMessage'
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
			'label' => __( 'Header Background Color', 'Planty-child' ),
			'section' => 'planty_header',
			'settings' => 'header_background_color'
		) ) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
			'label' => __( 'Header Logo', 'Planty-child' ),
			'section' => 'planty_header',
			'settings' => 'header_logo'
		) ) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_site_title', array(
			'label' => __( 'Header Site Title', 'Planty-child' ),
			'section' => 'planty_header',
			'settings' => 'header_site_title',
			'type' => 'text'
		) ) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_font_family', array(
			'label' => __( 'Header Font Family', 'Planty-child' ),
			'section' => 'planty_header',
			'settings' => 'header_font_family',
			'type' => 'text'
		) ) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_text_color', array(
			'label' => __( 'Header Text Color', 'Planty-child' ),
			'section' => 'planty_header',
			'settings' => 'header_text_color'
		) ) );

        
    }
}
