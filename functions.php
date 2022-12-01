<?php

// functions for the Simple theme  

if (! defined('ABSPATH') ) {
    return;
}

/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
	$content_width = 1200; /* pixels */

add_action( 'wp_enqueue_scripts', 'st_enqueue_scripts_styles' );

// Enqueueing styles and scripts

function st_enqueue_scripts_styles() {
    wp_enqueue_style( 'st-style', get_stylesheet_uri() );
}

// Theme setup funtion

if ( ! function_exists( 'st_setup' ) ) :
    /**
    * Sets up theme defaults and registers support for various WordPress features
    *
    *  It is important to set up these functions before the init hook so that none of these
    *  features are lost.
    *
    *  @since Simple Theme 1.0
    */
    function st_setup() {
        /**
        * Make theme available for translation.
        * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

        /**
	     * Enable support for post thumbnails and featured images.
	    */
	    add_theme_support( 'post-thumbnails' );

        /**
	     * Enable support for title.
	    */
	    add_theme_support( 'title-tag' );

        /**
	    * Add support for two custom navigation menus.
	    */
	    register_nav_menus( array(
		    'primary'   => __( 'Primary Menu', 'st' ),
		    'footer' => __('Footer Menu', 'st' ),
            'secondary' => __('Secondary Menu', 'st' )
	    ) );
        
        $html5_args = array(
            'search-form',
            'comment-from',
            'comment-list',
            'gallery',
            'caption'
        );

        // html5
        add_theme_support( 'html5', $html5_args );


    }

endif;

add_action( 'after_setup_theme', 'st_setup' );

/**
 * registering a sidebar for the Simple Theme
 */

add_action( 'widgets_init', 'st_register_sidebars' );
function st_register_sidebars() {
	/* Register the 'header' sidebar. */
	register_sidebar(
		array(
			'id'            => 'header',
			'name'          => __( 'Header Sidebar' ),
			'description'   => __( 'Adding a search funtionality to the header as a sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}

?>
