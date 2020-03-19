<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wwc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/deed06ce8e.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wwc' ); ?></a>

	<header id="masthead" class="site-header">

			<div id="header-top" class="flex-container">
				<div id="header-left" class="flex-container">
					<div id="header-logo">
						<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo"></a>
					</div><!-- #header-logo -->
				</div><!-- #header-left -->
				<div id="header-right" class="flex-container">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wwc' ); ?></button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
					<div id="header-social" class="flex-container">
						<a href="#" target="blank" class="img-row"><img src="<?php echo get_template_directory_uri(); ?>/img/social-facebook.png" alt="facebook"></a>
						<a href="#" target="blank" class="img-row"><img src="<?php echo get_template_directory_uri(); ?>/img/social-skype.png" alt="skype" target="blank"></a>
						<a href="#" target="_blank" class="img-row"><img src="<?php echo get_template_directory_uri(); ?>/img/social-whatsapp.png" alt="whatsapp"></a>
						<a href="#" target="blank" class="img-row"><img src="<?php echo get_template_directory_uri(); ?>/img/social-twitter.png" alt="twitter"></a>
					</div><!-- #header-social -->
				</div><!-- #header-right -->
			</div><!-- #header-top -->

			<div id="header-bottom" class="flex-container">

				<div id="header-call-to-action">

					<h2>We can help you reach your full potential</h2>
					<p>Just give us a call and we’ll do the rest.</p>
					<span class="btn-orange">START NOW</span>

				</div><!-- #header-call-to-action -->

			</div><!-- #header-bottom -->

		<!-- <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$wwc_description = get_bloginfo( 'description', 'display' );
			if ( $wwc_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $wwc_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
