<?php
/**
 * Template name: Home
 *
 * This is the template that displays the homepage.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wwc
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section id="main-lead" class="flex-container">

				<div id="lead-call-to-action">

					<h2 class="title">We can help you reach your full potential</h2>
					<p>Just give us a call and we’ll do the rest.</p>
					<a href="#" class="btn"><span class="btn-orange">START NOW</span></a>

				</div><!-- #lead-call-to-action -->

			</section><!-- #main-lead -->

			<section id="main-intro" class="flex-container">

				<div class="main-left" class="flex-container">

					<img src="<?php echo get_template_directory_uri(); ?>/img/main-intro.jpg" class="bordered-img">

				</div><!-- .main-left -->

				<div class="main-right" class="flex-container">

					<h2 class="title">What we do</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus finibus bibendum.</p>
					<p>Cras sed eros commodo, dapibus nulla et, pharetra neque. Suspendisse dolor libero, sodales tempor ligula sit amet, efficitur semper augue. Vivamus scelerisque mi vitae sollicitudin ullamcorper. In hac habitasse platea  dictumst. Quisque nec facilisis metus.</p>
					<p>Nullam neque sem, venenatis nec euismod in, facilisis nec nisl. Quisque auctor at enim commodo pellentesque.</p>
					<a href="#" class="btn"><span class="btn-white">START NOW</span></a>

				</div><!-- .main-right -->

			</section><!-- #main-intro -->

			<section id="main-services"></section><!-- #main-services -->

			<section id="main-cta"></section><!-- #main-cta -->

			<section id="main-contact"></section><!-- #main-contact -->

		<?php
		// while ( have_posts() ) :
		// 	the_post();
		//
		// 	get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;
		//
		// endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
