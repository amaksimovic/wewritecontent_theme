<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wwc
 */

?>

	</div><!-- #content -->

	<button onclick="topFunction()" id="scrollTop" title="Go to top"><i class="fas fa-angle-double-up"></i></button>

	<footer id="colophon" class="site-footer">

		<div id="footer-top">

		<div><!-- #footer-top -->

		<div id="footer-bottom">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wwc' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'wwc' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'wwc' ), 'wwc', '<a href="https://github.com/amaksimovic">Aleksandar Maksimovic</a>' );
					?>
			</div><!-- .site-info -->
		</div><!-- .footer-bottom -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
