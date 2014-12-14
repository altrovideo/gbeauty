<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Great_Beauty
 * @since Great Beauty 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'greatbeauty_credits' ); ?>
                                <a href="http://cristiano.zanca.it/theme/">Great Beauty Theme</a> - Italian Style -
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'greatbeauty' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'greatbeauty' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>