<?php
/**
 * @package Marie
 */
?>
<p> content-single.php</p>
<div id="wrapper-inner">
    <div id="wrapper-inner-container">
        <div id="wrapper-inner-container-content">
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
      <!-- wrapper-inner-container-content-->

        </div>
    </div>
    <div id="wrapper-inner-container-sidebar">
        <?php get_sidebar(); ?>
    </div><!-- #wrapper-inner-container-sidebar -->
<!--        <footer class="entry-footer">-->
<!--            --><?php //edit_post_link( esc_html__( 'Edit', 'marie' ), '<span class="edit-link">', '</span>' ); ?>
<!--        </footer><!-- #entry-footer -->
</div>