<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel='stylesheet' id='fonts-css'  href='/wp-content/themes/hamburg-freifunk-wp-theme/dist/assets/fonts/HKGrotesk/stylesheet.css' type='text/css' media='all' />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" data-responsive-toggle="mobile-menu" data-hide-for="large">
			<div class="title-bar-left">
				<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>

		<div class="top-bar-outer">
			<nav class="site-navigation top-bar" role="navigation">
				<div class="top-bar-left">
					<div class="site-desktop-title top-bar-title">
						<div id="logo">
							<div id="logo-inner">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="/wp-content/themes/hamburg-freifunk-wp-theme/dist/assets/images/hamburg_freifunk_net_logo__modified.svg"  />
								</a>
							</div>
						</div>
						<div id="title">
							<h1>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<span class="title"><?php bloginfo( 'name' ); ?></span>
								</a>
							</h1>
							<h2>
								 Für freies WLAN in Hamburg
							</h2>
						</div>
					</div>
				</div>
				<div class="top-bar-right">
					<?php foundationpress_top_bar_r(); ?>

					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</nav>
		</div>

	</header>

	<div id="banner" class="hide">
		<img src="/wp-content/themes/hamburg-freifunk-wp-theme/dist/assets/images/header/20150202_201457_Pano_k.jpg" />
		<img src="/wp-content/themes/hamburg-freifunk-wp-theme/dist/assets/images/header/2012.12.31 29C3.jpg" />
		<img src="/wp-content/themes/hamburg-freifunk-wp-theme/dist/assets/images/header/hamburg_freifunk_topomap_001.jpg" />
	</div>