<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Marie
 */
?>

	</div><!-- #content -->

	<div class="footer-border">
	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">
	<?php get_sidebar('footer'); ?>
		<div class="site-info">

			<?php printf( esc_html__( 'Theme: %1$s by %2$s (c) 2015 ', 'marie' ), 'Marie', '<a href="www.swestphal.de" rel="designer">smart bloggin\'</a>' ); ?>
		</div><!-- site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
