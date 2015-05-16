<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Marie
 */
?>
<?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--                <header class="entry-header">-->
<!--                    --><?php //the_title( '<h2 class="entry-title">', '</h2>' ); ?>
<!--                </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marie' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->

<!--        <footer class="entry-footer">-->
<!--            --><?php //edit_post_link( esc_html__( 'Edit', 'marie' ), '<span class="edit-link">', '</span>' ); ?>
<!--        </footer>.entry-footer -->








