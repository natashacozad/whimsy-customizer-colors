<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

    // Clear out the original Colors section to make way for new colors.
    $wp_customize->remove_section( 'colors' );
    
    // Add our new Colors panel.
	$wp_customize->add_panel( 'whimsy_extend_colors_panel', array(
	    'priority' => 40,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Colors', 'whimsy-customizer-colors' ),
	    'description' => __( 'More control over color options for Whimsy.', 'whimsy-customizer-colors' ),
	) );

    // Add our new Global Colors section.
	$wp_customize->add_section(
		'whimsy_extend_global_colors_section',
		array(
			'title'      => __( 'Global Colors', 'whimsy-customizer-colors' ),
			'priority'   => 10,
			'capability' => 'edit_theme_options',
            'description' => '',
            'panel' => 'whimsy_extend_colors_panel',
		)
	);
    // Add our new Menu Colors section.
	$wp_customize->add_section(
		'whimsy_extend_menu_colors_section',
		array(
			'title'      => __( 'Menu Colors', 'whimsy-customizer-colors' ),
			'priority'   => 10,
			'capability' => 'edit_theme_options',
            'description' => '',
            'panel' => 'whimsy_extend_colors_panel',
		)
	);
    // Add our new Header Colors section.
	$wp_customize->add_section(
		'whimsy_extend_header_colors_section',
		array(
			'title'      => __( 'Header Colors', 'whimsy-customizer-colors' ),
			'priority'   => 10,
			'capability' => 'edit_theme_options',
            'description' => '',
            'panel' => 'whimsy_extend_colors_panel',
		)
	);
    // Add our new Content Colors section.
	$wp_customize->add_section(
		'whimsy_extend_content_colors_section',
		array(
			'title'      => __( 'Content Colors', 'whimsy-customizer-colors' ),
			'priority'   => 10,
			'capability' => 'edit_theme_options',
            'description' => '',
            'panel' => 'whimsy_extend_colors_panel',
		)
	);
    // Add our new Sidebar Colors section.
	$wp_customize->add_section(
		'whimsy_extend_sidebar_colors_section',
		array(
			'title'      => __( 'Sidebar Colors', 'whimsy-customizer-colors' ),
			'priority'   => 10,
			'capability' => 'edit_theme_options',
            'description' => '',
            'panel' => 'whimsy_extend_colors_panel',
		)
	);
    // Add our new Footer Colors section.
	$wp_customize->add_section(
		'whimsy_extend_footer_colors_section',
		array(
			'title'      => __( 'Footer Colors', 'whimsy-customizer-colors' ),
			'priority'   => 10,
			'capability' => 'edit_theme_options',
            'description' => '',
            'panel' => 'whimsy_extend_colors_panel',
		)
	);
    // Add our new Mosaic Colors section.
	$wp_customize->add_section(
		'whimsy_extend_mosaic_colors_section',
		array(
			'title'      => __( 'Mosaic Colors', 'whimsy-customizer-colors' ),
			'priority'   => 10,
			'capability' => 'edit_theme_options',
            'description' => '',
            'panel' => 'whimsy_extend_colors_panel',
		)
	);
    // Add our new Forms Colors section.
	$wp_customize->add_section(
		'whimsy_extend_forms_colors_section',
		array(
			'title'      => __( 'Form Colors', 'whimsy-customizer-colors' ),
			'priority'   => 10,
			'capability' => 'edit_theme_options',
            'description' => '',
            'panel' => 'whimsy_extend_colors_panel',
		)
	);

    // Include Global Colors.
    require_once WHIMSY_COLORS_PATH . 'inc/global.php' ;
    // Include Menu Colors.
    require_once WHIMSY_COLORS_PATH . 'inc/menu.php' ;
    // Include Header Colors.
    require_once WHIMSY_COLORS_PATH . 'inc/header.php' ;
    // Include Content Colors.
    require_once WHIMSY_COLORS_PATH . 'inc/content.php' ;
    // Include Sidebar Colors.
    require_once WHIMSY_COLORS_PATH . 'inc/sidebar.php' ;
    // Include Footer Colors.
    require_once WHIMSY_COLORS_PATH . 'inc/footer.php' ;
    // Include Mosaic Colors.
    require_once WHIMSY_COLORS_PATH . 'inc/mosaic.php' ;
    // Include Forms Colors.
    require_once WHIMSY_COLORS_PATH . 'inc/forms.php' ;