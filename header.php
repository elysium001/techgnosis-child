<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package techgnosis-theme
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'techgnosis-theme' ); ?></a>

	<header id="masthead" class="site-header" style="padding-bottom: 1em;">
		<?php the_header_image_tag(); ?>
		<div class="container">
			<div class="site-branding row">
				<div class="ten columns">
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title sr-only"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$techgnosis_theme_description = get_bloginfo( 'description', 'display' );
				if ( $techgnosis_theme_description || is_customize_preview() ) :
					?>
					<p class="site-description sr-only"><?php echo $techgnosis_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
				</div>
			</div><!-- .site-branding -->
	
			<nav id="site-navigation" class="main-navigation">
                <?php the_custom_logo(); ?>
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="dashicons dashicons-menu-alt3"></span><?php esc_html_e( 'Menu', 'techgnosis-theme' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container_class'	 => 'bondlaw-nav'
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
