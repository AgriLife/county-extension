<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Flexopotamus
 * @since Flexopotamus 1.0
 */
?>

	<div id="footer" role="contentinfo">
		<div id="colophon">

			<div id="site-info">
				<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->

			<div id="site-generator">
				<?php do_action( 'flexopotamus_credits' ); ?>
				<a href="<?php echo esc_url( __('https://github.com/indyplanets/flexopotamus', 'flexopotamus') ); ?>"
						title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'flexopotamus'); ?>" rel="generator">
					<?php printf( __('Powered by %s.', 'flexopotamus'), 'Flexopotamus' ); ?>
				</a>
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
