<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

    // Define variables for content container style output

    $whimsy_content_container_colors_css = '';
    $whimsy_content_container_link_color_css = '';
    $whimsy_content_container_link_hover_color_css = '';

    // check if it's empty
    if( '' != get_theme_mod('whimsy_content_container_bg_color') ) {
        $whimsy_content_container_colors_css .= 'background: ' . get_theme_mod('whimsy_content_container_bg_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_content_container_text_color') ) {
        $whimsy_content_container_colors_css .= 'color: ' . get_theme_mod('whimsy_content_container_text_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_content_container_link_color') ) {
        $whimsy_content_container_link_color_css .= 'color: ' . get_theme_mod('whimsy_content_container_link_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_content_container_link_hover_color') ) {
        $whimsy_content_container_link_hover_color_css .= 'color: ' . get_theme_mod('whimsy_content_container_link_hover_color') . ';';
    }

    // if variable $whimsy_content_container_colors_css has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_content_container_colors_css ) {
        $whimsy_content_container_colors_css = '#content-container, #content {' . esc_html($whimsy_content_container_colors_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_content_container_colors_css, 30 );
    }

    // if variable whimsy_content_container_link_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_content_container_link_color_css ) {
        $whimsy_content_container_link_color_css = '#content-container a {' . esc_html($whimsy_content_container_link_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_content_container_link_color_css, 30 );
    }

    // if variable whimsy_content_container_link_hover_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_content_container_link_hover_color_css ) {
        $whimsy_content_container_link_hover_color_css = '#content-container a:hover, #content-container a:active, #content-container a:focus {' . esc_html($whimsy_content_container_link_hover_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_content_container_link_hover_color_css, 30 );
    }

    // Define variables for post style output

    $whimsy_post_colors_css = '';
    $whimsy_post_link_color_css = '';
    $whimsy_post_link_hover_color_css = '';
    $whimsy_post_title_link_color_css = '';
    $whimsy_post_title_link_hover_color_css = '';

    // check if it's empty
    if( '' != get_theme_mod('whimsy_post_bg_color') ) {
        $whimsy_post_colors_css .= 'background: ' . get_theme_mod('whimsy_post_bg_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_post_text_color') ) {
        $whimsy_post_colors_css .= 'color: ' . get_theme_mod('whimsy_post_text_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_post_link_color') ) {
        $whimsy_post_link_color_css .= 'color: ' . get_theme_mod('whimsy_post_link_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_post_link_hover_color') ) {
        $whimsy_post_link_hover_color_css .= 'color: ' . get_theme_mod('whimsy_post_link_hover_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_post_title_link_color') ) {
        $whimsy_post_title_link_color_css .= 'color: ' . get_theme_mod('whimsy_post_title_link_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_post_title_link_hover_color') ) {
        $whimsy_post_title_link_hover_color_css .= 'color: ' . get_theme_mod('whimsy_post_title_link_hover_color') . ';';
    }

    // if variable $whimsy_post_bg_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_post_colors_css ) {
        $whimsy_post_colors_css = '#primary .post {' . esc_html($whimsy_post_colors_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_post_colors_css, 30 );
    }

    // if variable whimsy_post_link_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_post_link_color_css ) {
        $whimsy_post_link_color_css = '#primary .post a {' . esc_html($whimsy_post_link_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_post_link_color_css, 30 );
    }

    // if variable whimsy_post_link_hover_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_post_link_hover_color_css ) {
        $whimsy_post_link_hover_color_css = '#primary .post a:hover, #primary .post a:active, #primary .post a:focus {' . esc_html($whimsy_post_link_hover_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_post_link_hover_color_css, 30 );
    }

    // if variable whimsy_post_link_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_post_title_link_color_css ) {
        $whimsy_post_title_link_color_css = '#primary .post h1.entry-title, #primary .post h1.entry-title a {' . esc_html($whimsy_post_title_link_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_post_title_link_color_css, 30 );
    }

    // if variable whimsy_post_title_link_hover_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_post_title_link_hover_color_css ) {
        $whimsy_post_title_link_hover_color_css = '#primary .post h1.entry-title a:hover, #primary .post h1.entry-title a:active, #primary .post h1.entry-title a:focus {' . esc_html($whimsy_post_title_link_hover_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_post_title_link_hover_color_css, 30 );
    }
