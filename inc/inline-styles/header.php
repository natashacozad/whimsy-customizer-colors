<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

    // Define variables for header style output

    $whimsy_header_container_colors_css = '';
    $whimsy_masthead_colors_css = '';
    $whimsy_site_title_color_css = '';
    $whimsy_site_desc_color_css = '';

    // check if it's empty
    if( '' != get_theme_mod('whimsy_header_container_bg_color') ) {
        $whimsy_header_container_colors_css .= 'background: ' . get_theme_mod('whimsy_header_container_bg_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_masthead_bg_color') ) {
        $whimsy_masthead_colors_css .= 'background: ' . get_theme_mod('whimsy_masthead_bg_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_masthead_text_color') ) {
        $whimsy_masthead_colors_css .= 'color: ' . get_theme_mod('whimsy_masthead_text_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_site_title_color') ) {
        $whimsy_site_title_color_css .= 'color: ' . get_theme_mod('whimsy_site_title_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_site_desc_color') ) {
        $whimsy_site_desc_color_css .= 'color: ' . get_theme_mod('whimsy_site_desc_color') . ';';
    }

    // if variable $whimsy_content_container_colors_css has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_header_container_colors_css ) {
        $whimsy_header_container_colors_css = '#header-container { ' . esc_html($whimsy_header_container_colors_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_header_container_colors_css, 30 );
    }

    // if variable $whimsy_masthead_colors has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_masthead_colors_css ) {
        $whimsy_masthead_colors_css = '#masthead {' . esc_html($whimsy_masthead_colors_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_masthead_colors_css, 40 );
    }

    // if variable $whimsy_site_title_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_site_title_color_css ) {
        $whimsy_site_title_color_css = '.site-branding > hgroup > h1.site-title a {' . esc_html($whimsy_site_title_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_site_title_color_css, 50 );
    }


    // if variable $whimsy_site_desc_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_site_desc_color_css ) {
        $whimsy_site_desc_color_css = '.site-branding > hgroup > h2.site-description {' . esc_html($whimsy_site_desc_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_site_desc_color_css, 60 );
    }