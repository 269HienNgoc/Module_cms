<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NgocHai
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="type-1-header">
		<div class="container">
			<div class="image-carousel">
				<nav class="row">
					<div class="logo  col-md-2">
						<a class="navbar-brand" href="#">
							<img src="<?php bloginfo('template_url'); ?>/images/logo-wp.png" alt="logo">
						</a>
					</div>
					<div class="col-md-8">
						<?php
						if (has_nav_menu('menu-primary')) {
							wp_nav_menu(
								[
									'theme_location'  => 'menu-primary',
									'menu_class'      => '',
								]
							);
						} ?>
					</div>
					<div class="right  col-md-2">
						<span class="gold">8 800 </span>
						<span>353-24-55</span>
					</div>
				</nav>
			</div>
		</div>
	</div>

	

</body>