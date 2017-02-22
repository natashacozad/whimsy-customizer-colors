<?php
/**
 * @since  1.0.0
 * @access public
 * @return void
 */

    // Define variables for global style output

    $whimsy_global_colors_css = '';
    $whimsy_global_highlight_color_css = '';
    $whimsy_global_link_color_css = '';
    $whimsy_global_link_hover_color_css = '';

    // check if it's empty
    if( '' != get_theme_mod('whimsy_body_color') ) {
        $whimsy_global_colors_css .= 'color: ' . get_theme_mod('whimsy_body_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_alt_color') ) {
        $whimsy_global_highlight_color_css .= 'background: ' . get_theme_mod('whimsy_alt_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_link_color') ) {
        $whimsy_global_link_color_css .= 'color: ' . get_theme_mod('whimsy_link_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_link_color') ) {
        $whimsy_global_link_color_css .= 'border-color: ' . get_theme_mod('whimsy_link_color') . ';';
    }

    // check if it's empty
    if( '' != get_theme_mod('whimsy_link_hover_color') ) {
        $whimsy_global_link_hover_color_css .= 'color: ' . get_theme_mod('whimsy_link_hover_color') . ';';
    }

    // if variable $whimsy_global_bg_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_global_colors_css ) {
        $whimsy_global_colors_css = 'body, #content, .widget {' . esc_html($whimsy_global_colors_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_global_colors_css );
    }
    // if variable $whimsy_global_highlight_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_global_link_color_css ) {
        $whimsy_global_link_color_css = 'a, a:visited, ul.whimsy-nav li a:hover, ul.whimsy-nav li a:focus, .entry-title a, a.btn-shortcode, button, input[type="button"], input[type="reset"], input[type="submit"], #infinite-handle span  {' . esc_html($whimsy_global_link_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_global_link_color_css );
    }
    // if variable $whimsy_alt_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_global_highlight_color_css ) {
        $whimsy_global_highlight_color_css = '::selection, ::-moz-selection {' . esc_html($whimsy_global_highlight_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_global_highlight_color_css );
    }
    // if variable whimsy_global_link_hover_color has changed, then add the changes and execute wp_add_inline_style
    if( '' != $whimsy_global_link_hover_color_css ) {
        $whimsy_global_link_hover_color_css = 'a:hover, a:focus, a:active, .collapse-button, #site-navigation ul.sub-menu a:hover, ul.whimsy-nav li a, a.btn-shortcode:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, #infinite-handle span:hover {' . esc_html($whimsy_global_link_hover_color_css) . '}';
        wp_add_inline_style( 'whimsy-customizer-colors', $whimsy_global_link_hover_color_css );
    }