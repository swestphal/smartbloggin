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
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'marie' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'marie' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'marie' ), 'marie', '<a href="#" rel="designer">(c) 2015 handmady by smart bloggin</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
