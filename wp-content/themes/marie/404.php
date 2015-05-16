<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Marie
 */

get_header(); ?>

<h1>404</h1>
<div id="wrapper-inner">
    <div id="wrapper-inner-container">
        <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>
        <div id="wrapper-inner-container-content">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <section class="error-404 not-found">
                        <header class="page-header">
                            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'marie' ); ?></h1>
                        </header><!-- .page-header -->

                        <div class="page-content">
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'marie' ); ?></p>

                            <?php get_search_form(); ?>

                            <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

                            <?php if ( marie_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
                            <div class="widget widget_categories">
                                <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'marie' ); ?></h2>
                                <ul>
                                <?php
                                    wp_list_categories( array(
                                        'orderby'    => 'count',
                                        'order'      => 'DESC',
                                        'show_count' => 1,
                                        'title_li'   => '',
                                        'number'     => 10,
                                    ) );
                                ?>
                                </ul>
                            </div><!-- .widget -->
                            <?php endif; ?>

                            <?php
                                /* translators: %1$s: smiley */
                                $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'marie' ), convert_smilies( ':)' ) ) . '</p>';
                                the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                            ?>

                            <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->

                </main><!-- #main -->
            </div><!-- #primary -->

        </div>
        <div id="wrapper-inner-container-sidebar">
            <?php get_sidebar(); ?>
        </div><!-- #wrapper-inner-container-sidebar -->
    </div><!-- #wrapper-inner-container -->
</div><!-- #wrapper-inner -->
<?php get_footer(); ?>
