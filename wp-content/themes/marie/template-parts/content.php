<?php
/**
 * @package Marie
 */
?>
<?php //if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">


        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

        <?php if ( 'post' == get_post_type() ) : ?>
        <div class="entry-meta">
            <?php marie_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">

        <?php if (has_post_thumbnail()) {
                echo '<div class="index-post-thumbnail">';
                echo '<a href="'. get_permalink() . '" title="' . __('Mehr erfahren ...','marie') .get_the_title() . '" rel="bookmark">';
                echo the_post_thumbnail('index');
                echo '</a></div>';
            };
        ?>
        <?php
//            /* translators: %s: Name of current post */
//            the_content( sprintf(
//                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'marie' ), array( 'span' => array( 'class' => array() ) ) ),
//                the_title( '<span class="screen-reader-text">"', '"</span>', false )
//            ) );
            the_excerpt()
        ?>

        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marie' ),
                'after'  => '</div>',
            ) );
        ?>

    <footer class="entry-footer continue-reading">
    <?php echo '<a href="'. get_permalink() . '" title="' . __('Weiterlesen ...','marie') .get_the_title() . '" rel="bookmark">Weiterlesen<i class="fa fa-file"></i></a>'; ?>
    </footer><!-- .entry-footer -->
    </div><!-- .entry-content -->
</article><!-- #post-## -->

