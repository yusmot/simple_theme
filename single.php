<?php
/**
 * Single file for the Simple Theme
 */

 get_header();
?>
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?> id="post<?php echo get_the_id();?>" >

                <?php
                    if (is_singular( )) {
                        the_title('<h1>', '</h1>'); 
                    } else {
                        the_title('<h2><a href="' . get_permalink() . '">', '</a></h2>'); 
                    }
                ?>

                <?php the_content(); ?>

                <div class="content-meta">
                    <?php the_date(); ?>
                    <?php the_author(); ?>
                </div>
            
            </article>
            
            <?php endwhile; ?>

        <?php endif; ?>
    </div>


<?php get_footer(); ?>