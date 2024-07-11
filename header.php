<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Huda
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'huda' ); ?></a>

	<header id="masthead" class="huda-primary-header">
		<div class="d-flex align-items-center justify-content-between container">
			<div class="huda-site-title-wrapper">
				<?php 
					if(  function_exists('the_custom_logo') && has_custom_logo() ) : 
						the_custom_logo();
					else :
						?>
							<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
							<p><?php bloginfo( 'description' ); ?></p>
						<?php
					endif;
				?>
					
					
			</div><!-- .site-branding -->

			<nav id="huda-site-navigation" class="huda-main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( display_svg_icon('menu_icon'), 'huda' ); ?><?php display_svg_icon('menu_icon'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
