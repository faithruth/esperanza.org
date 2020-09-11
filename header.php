<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Esperanza
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'esperanza' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="esperanza-contactus">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					<ul class="list-inline text-left">
						<li class="list-inline-item">
						<i class="far fa-envelope"></i>
							info@esperanzaug.org
						</li>
						<li class="list-inline-item">
							<i class="fas fa-mobile-alt"></i>
							+256 775 617913 | +256 785 933196

						</li>
					</ul>
					</div>
					<div class="col-md-6">
						<ul class=" text-right">
							<li class="list-inline-item">
								<a href=""><i class="fab fa-facebook-square"></i></a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fab fa-twitter-square"></i></a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fab fa-instagram"></i></a>
							</li>
							<li class="list-inline-item">
								<a href=""><i class="fab fa-youtube-square"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="esperanza-navbar">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light bg-white">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						
					?>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $image[0]; ?>"/></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#esperanza-nav" aria-controls="esperanza-nav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
					wp_nav_menu([
						'menu'            => 'menu-1',
						'theme_location'  => 'menu-1',
						'container'       => 'div',
						'container_id'    => 'esperanza-nav',
						'container_class' => 'collapse navbar-collapse',
						'menu_id'         => false,
						'menu_class'      => 'navbar-nav ml-auto mt-2 mt-lg-0',
						'depth'           => 2,
						'fallback_cb'     => 'bs4navwalker::fallback',
						'walker'          => new bs4navwalker()
					]);
					?>
				</nav>	
			</div>
		</div>
			
	</header><!-- #masthead -->
