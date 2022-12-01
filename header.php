<?php

// Header file for the Simple theme  

if (! defined('ABSPATH') ) {
    return;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>WordPress with Yusuf</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( ) ?>>

    <header class="site-header">

        <h1 class="site-title">
            <a href="<?php echo home_url(); ?>"> <?php echo get_bloginfo('name','display'); ?> </a>
        </h1>
        
        <?php wp_nav_menu( array(
	        'theme_location' => 'primary', 'menu' => 'Primary menu' , 'fallback_cb' => false // Do not fall back to wp_page_menu()
        ) ); ?>


        <?php if ( is_active_sidebar( 'header' ) ) : ?>
            <div id="sidebar-header" class="sidebar">
                <?php dynamic_sidebar( 'header' ); ?>
            </div>
        <?php endif; ?>

    </header>