<?php
/**
 * @package Marie
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

        <div class="entry-meta">
            <?php marie_posted_on(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

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

<!-- #wrapper-inner-container-sidebar -->
<!--        <footer class="entry-footer">-->
<!--            --><?php //edit_post_link( esc_html__( 'Edit', 'marie' ), '<span class="edit-link">', '</span>' ); ?>
<!--        </footer><!-- #entry-footer -->
