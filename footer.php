<?php
    /**
     * footer file for the Simple Theme
     */

    if (! defined('ABSPATH') ) {
        return;
    }    

?>

<?php wp_footer( ); ?>

    <footer class="site-footer">
        <nav class="footer-menu">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer', 'menu' => 'Footer menu' , 'fallback_cb' => false // Do not fall back to wp_page_menu()
                ) );
            ?>
        </nav>

        <p class="copyright"> <?php echo __('Copyright &copy;','st' ). get_the_date(' Y '). ' | ' . get_bloginfo('name' ); ?> </p>

    </footer>
</body>
</html>
