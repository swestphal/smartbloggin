<?php
/**
 * The sidebar containing the footer widget area.
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="supplementary">
    <div id="footer-widgets" class="footer-widgets widget-area clear" role="complementary">
	    <div id="footer-widgets-inner">
	    <?php dynamic_sidebar( 'sidebar-2' ); ?>
	    </div>
	</div>
</div><!-- #secondary -->
