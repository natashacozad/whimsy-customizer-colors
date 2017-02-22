<?php
/*
 * Plugin Name: Whimsy: Customizer Colors
 * Version: 0.1.1
 * Plugin URI: http://www.whimsycreative.co/framework/plus
 * Description: A plugin that adds more color options to Whimsy Framework.
 * Author: Whimsy Creative Co.
 * Author URI: http://www.whimsycreative.co
 * Requires at least: 4.0
 * Tested up to: 4.7
 *
 * Text Domain: whimsy-customizer-colors
 * Domain Path: /language/
 *
 * @package WordPress
 * @author Whimsy Creative Co.
 * @since 1.0.0
 */

if ( !class_exists( 'WhimsyCustomizerColors' ) ) {

	/**
	 * @since  1.0.0
	 * @access public
	 */
	class WhimsyCustomizerColors {
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function __construct() {
        
			global $WhimsyCustomizerColors;

			/* Set up an empty class for the global $WhimsyCustomizerColors object. */
			$WhimsyCustomizerColors = new stdClass;

			/* Define Whimsy constants. */
			add_action( 'init', array( $this, 'constants' ), 10 );
            
			/* Remove actions hooked from conflicting plugins or themes. */
			add_action( 'init', array( $this, 'unhook' ), 100 );
            
			/* Load the settings and controls for the Customizer. */
            add_action( 'customize_register', array( $this, 'customize' ), 40 );
            
			/* Enqueue necessary scripts and CSS files for the skins . */
            add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ), 45 );
            
			/* Setup things for outputing styles . */
            add_action( 'wp_enqueue_scripts', array( $this, 'style' ), 115 );
            
        }
   
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function constants() {

			/* Sets the plugin version number. */
			define( 'WHIMSY_COLORS_VERSION',   '0.1.1' );

			/* Sets the path to the plugin directory. */
            define( 'WHIMSY_COLORS_PATH',      trailingslashit( dirname( __FILE__ ) )  );
            
			/* Sets the url to the plugin directory. */
            define( 'WHIMSY_COLORS_URI',       trailingslashit( dirname( __FILE__ ) )  );
                    
        }
   
		/**
		 * @since  1.0.0
		 * @access public
		 * @return void
		 */
		function unhook() {
            
			// Access Whimsy Framework
            global $whimsy;
            
			// Remove Customizer styles from Whimsy Framework.
            remove_action('wp_head', 'whimsy_customizer_styles', 100);

        }
        
        function customize ( $wp_customize ) {
                        
			// Include customizer settings and controls for Colors.
            require_once WHIMSY_COLORS_PATH . 'whimsy-customizer-colors-admin.php' ;
            
        }
        
        /**
         * Include additional styles when in admin.
         */
        function enqueue() {

            // Enqueue live preview js.
            wp_enqueue_script( 'whimsy-customizer-colors', WHIMSY_COLORS_URI . 'js/customizer-colors.js', array( 'customize-preview' ), WHIMSY_COLORS_VERSION , true );
            
            // Enqueue custom stylesheet
            wp_enqueue_style( 'whimsy-customizer-colors', WHIMSY_COLORS_URI . 'css/customizer-colors.css', array(), WHIMSY_COLORS_VERSION, true );
            
        }

        /**
         * Insert Customizer styles.
         */
        function style() {
                        
            // Include Global Colors.
            require_once WHIMSY_COLORS_PATH . 'inc/inline-styles/global.php' ;
            
            // Include Menu Colors.
            require_once WHIMSY_COLORS_PATH . 'inc/inline-styles/menu.php' ;
            
            // Include Header Colors.
            require_once WHIMSY_COLORS_PATH . 'inc/inline-styles/header.php' ;
            
            // Include Content Colors.
            require_once WHIMSY_COLORS_PATH . 'inc/inline-styles/content.php' ;
            
            // Include Sidebar Colors.
            require_once WHIMSY_COLORS_PATH . 'inc/inline-styles/sidebar.php' ;
            
            // Include Footer Colors.
            require_once WHIMSY_COLORS_PATH . 'inc/inline-styles/footer.php' ;
            
            // Include Mosaic Colors.
            require_once WHIMSY_COLORS_PATH . 'inc/inline-styles/mosaic.php' ;
            
            // Include Forms Colors.
            require_once WHIMSY_COLORS_PATH . 'inc/inline-styles/forms.php' ;

        }
    
    }
}

new WhimsyCustomizerColors();