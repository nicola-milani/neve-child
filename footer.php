<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Neve
 * @since   1.0.0
 */

do_action( 'neve_before_primary_end' );
?>
</main><!--/.neve-main-->

<div id="footer-distributed" class="footer-distributed">
	
<div id="footer-left" class="footer-left">
<style>
 .wp-caption-text{
	 display:none !important;
	 margin-bottom: 10px;
	}
	.wp-caption{
		margin-bottom: 20px;
	}
</style>
<?php
if(is_active_sidebar('footer_area_one')){
dynamic_sidebar('footer_area_one');
}
?>
</div>
	
<div id="footer-center" class="footer-center">
<?php
if(is_active_sidebar('footer_area_two')){
dynamic_sidebar('footer_area_two');
}
?>
</div>
<div id="footer-right" class="footer-right">
<?php
if(is_active_sidebar('footer_area_three')){
dynamic_sidebar('footer_area_three');
}
?>
</div>
	<!--
<div id="footer-sidebar4" class="footer_section">
<?php
if(is_active_sidebar('footer_area_four')){
dynamic_sidebar('footer_area_four');
}
?>
</div>-->
</div>


<?php do_action( 'neve_after_primary' ); ?>

<?php
if ( apply_filters( 'neve_filter_toggle_content_parts', true, 'footer' ) === true ) {
	neve_before_footer_trigger();
	do_action( 'neve_do_footer' );
	neve_after_footer_trigger();
}
?>

</div><!--/.wrapper-->
<?php wp_footer(); ?>

</body>

</html>
