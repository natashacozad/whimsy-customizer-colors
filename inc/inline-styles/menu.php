<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */
    // Define variables for menu style output

    $whimsy_menu_background_color_css = '';
    $whimsy_menu_link_color_css = '';
    $whimsy_menu_link_hover_color_css = '';
    $whimsy_submenu_background_color_css = '';
    $whimsy_submenu_link_color_css = '';

    // check if it's empty
    if( '' != get_theme_mod('whimsy_menu_background_color') ) {
        $whimsy_menu_background_color_css .= 'background: ' . get_theme_mod('whimsy_menu_background_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_menu_link_color') ) {
        $whimsy_menu_link_color_css .= 'color: ' . get_theme_mod('whimsy_menu_link_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_menu_link_hover_color') ) {
        $whimsy_menu_link_hover_color_css .= 'color: ' . get_theme_mod('whimsy_menu_link_hover_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_submenu_background_color') ) {
        $whimsy_submenu_background_color_css .= 'background: ' . get_theme_mod('whimsy_submenu_background_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_submenu_link_color') ) {
        $whimsy_submenu_link_color_css .= 'color: ' . get_theme_mod('whimsy_submenu_link_color') . ';';
    }

    // if variable $whimsy_menu_background_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_menu_background_color_css ) {
        $whimsy_menu_background_color_css = '#site-navigation, #site-navigation ul.whimsy-nav.collapsed { ' . esc_html($whimsy_menu_background_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_menu_background_color_css, 30 );
    }

    // if variable $whimsy_menu_link_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_menu_link_color_css ) {
        $whimsy_menu_link_color_css = '#site-navigation a, .sub-collapser {' . esc_html($whimsy_menu_link_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_menu_link_color_css, 40 );
    }

    // if variable $whimsy_menu_link_hover_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_menu_link_hover_color_css ) {
        $whimsy_menu_link_hover_color_css = '#site-navigation a:hover, #site-navigation a:focus, .sub-collapser :hover, .sub-collapser :focus {' . esc_html($whimsy_menu_link_hover_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_menu_link_hover_color_css, 50 );
    }

    // if variable $whimsy_submenu_background_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_submenu_background_color_css ) {
        $whimsy_submenu_background_color_css = '#site-navigation ul.sub-menu, #site-navigation ul.sub-menu li {' . esc_html($whimsy_submenu_background_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_submenu_background_color_css, 50 );
    }

    // if variable $whimsy_menu_link_hover_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_menu_link_hover_color_css ) {
        $whimsy_menu_link_hover_color_css = '#site-navigation ul.sub-menu a {' . esc_html($whimsy_menu_link_hover_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_menu_link_hover_color_css, 50 );
    }