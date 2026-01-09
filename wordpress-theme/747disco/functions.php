<?php
/**
 * 747 Disco Theme Functions
 */

// Theme Setup
function disco747_theme_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', '747disco' ),
        'footer'  => __( 'Footer Menu', '747disco' ),
    ) );
}
add_action( 'after_setup_theme', 'disco747_theme_setup' );

// Enqueue styles and scripts
function disco747_enqueue_scripts() {
    // Main stylesheet
    wp_enqueue_style( '747disco-style', get_stylesheet_uri(), array(), '1.0.0' );
    
    // Main JavaScript
    wp_enqueue_script( '747disco-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'disco747_enqueue_scripts' );

// Customizer Settings
function disco747_customize_register( $wp_customize ) {
    // Hero Section
    $wp_customize->add_section( '747disco_hero', array(
        'title'    => __( 'Hero Section', '747disco' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( '747disco_hero_title', array(
        'default'           => 'Benvenuti al 747 Disco',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( '747disco_hero_title', array(
        'label'   => __( 'Hero Title', '747disco' ),
        'section' => '747disco_hero',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( '747disco_hero_subtitle', array(
        'default'           => 'La location perfetta per i tuoi eventi indimenticabili a Roma Sud',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( '747disco_hero_subtitle', array(
        'label'   => __( 'Hero Subtitle', '747disco' ),
        'section' => '747disco_hero',
        'type'    => 'textarea',
    ) );

    // Contact Info Section
    $wp_customize->add_section( '747disco_contact', array(
        'title'    => __( 'Contact Information', '747disco' ),
        'priority' => 31,
    ) );

    $wp_customize->add_setting( '747disco_phone', array(
        'default'           => '+39 06 123 4567',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( '747disco_phone', array(
        'label'   => __( 'Phone Number', '747disco' ),
        'section' => '747disco_contact',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( '747disco_email', array(
        'default'           => 'info@747disco.it',
        'sanitize_callback' => 'sanitize_email',
    ) );

    $wp_customize->add_control( '747disco_email', array(
        'label'   => __( 'Email Address', '747disco' ),
        'section' => '747disco_contact',
        'type'    => 'email',
    ) );

    $wp_customize->add_setting( '747disco_address', array(
        'default'           => 'Via Example, 123' . "\n" . 'Ciampino (RM)',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );

    $wp_customize->add_control( '747disco_address', array(
        'label'   => __( 'Address', '747disco' ),
        'section' => '747disco_contact',
        'type'    => 'textarea',
    ) );

    // Social Media Section
    $wp_customize->add_section( '747disco_social', array(
        'title'    => __( 'Social Media', '747disco' ),
        'priority' => 32,
    ) );

    $wp_customize->add_setting( '747disco_facebook', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( '747disco_facebook', array(
        'label'   => __( 'Facebook URL', '747disco' ),
        'section' => '747disco_social',
        'type'    => 'url',
    ) );

    $wp_customize->add_setting( '747disco_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( '747disco_instagram', array(
        'label'   => __( 'Instagram URL', '747disco' ),
        'section' => '747disco_social',
        'type'    => 'url',
    ) );

    $wp_customize->add_setting( '747disco_whatsapp', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( '747disco_whatsapp', array(
        'label'   => __( 'WhatsApp URL', '747disco' ),
        'section' => '747disco_social',
        'type'    => 'url',
    ) );
}
add_action( 'customize_register', 'disco747_customize_register' );

// Add custom nav menu class
function disco747_nav_menu_link_attributes( $atts, $item, $args ) {
    if ( $args->menu_class === 'nav-menu' ) {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'disco747_nav_menu_link_attributes', 10, 3 );
