<?php
/**
 * The template for displaying all single posts.
 *
 * @package Marie
 */

get_header(); ?>

<?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>


<div id="primary" class="content-area clear" >
    <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'single' ); ?>

            <?php the_post_navigation(); ?>

            <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>


        <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
    <?php get_sidebar(); ?>
</div><!-- #primary -->
<?php get_footer(); ?>