<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

    // Header container background color
    $wp_customize->add_setting(
        'whimsy_header_container_bg_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_header_container_bg_color',
            array(
                'label'     => __( 'Header Container Background Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_header_colors_section',
                'settings'  => 'whimsy_header_container_bg_color'
            )
        )
    ); 

    // Masthead background color
    $wp_customize->add_setting(
        'whimsy_masthead_bg_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_masthead_bg_color',
            array(
                'label'     => __( 'Masthead Background Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_header_colors_section',
                'settings'  => 'whimsy_masthead_bg_color'
            )
        )
    ); 

    // Masthead text color
    $wp_customize->add_setting(
        'whimsy_masthead_text_color',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'whimsy_masthead_text_color',
            array(
                'label'     => __( 'Masthead Text Color', 'whimsy-customizer-colors' ),
                'section'   => 'whimsy_extend_header_colors_section',
                'settings'  => 'whimsy_masthead_text_color'
            )
        )
    ); 

    // Site Title color
	$wp_customize->add_setting(
	    'whimsy_site_title_color',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'whimsy_site_title_color',
	        array(
	            'label' 	=> __( 'Site Title Color', 'whimsy-customizer-colors' ),
	            'section' 	=> 'whimsy_extend_header_colors_section',
	            'settings' 	=> 'whimsy_site_title_color'
	        )
	    )
	);

    // Site description color
	$wp_customize->add_setting(
	    'whimsy_site_desc_color',
	    array(
	        'default' => '',
	        'sanitize_callback' => 'sanitize_hex_color'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'whimsy_site_desc_color',
	        array(
	            'label' 	=> __( 'Site Description Color', 'whimsy-customizer-colors' ),
	            'section' 	=> 'whimsy_extend_header_colors_section',
	            'settings' 	=> 'whimsy_site_desc_color'
	        )
	    )
	);