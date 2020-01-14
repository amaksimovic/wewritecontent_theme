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

			<section id="main-lead"></section><!-- #main-lead -->

			<section id="main-tagline"></section><!-- #main-tagline -->

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
