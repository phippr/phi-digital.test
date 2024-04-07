<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Phi_Digital_2024
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
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'phi-digital-2024'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<svg id="svg_logo" data-name="Logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198 80" aria-labelledby="logo_title" role="img">
						<title id="logo_title">Phi Digital Logo</title>
						<g id="logo_group" data-name="Layer 1">
							<g id="logo_group_1">
								<path class="logo_element logo_shape" id="shape_1" d="M45.24,73.23c3.53-1.02,6.87-2.6,9.91-4.7,3.01-2.08,5.66-4.61,7.87-7.53,2.24-2.95,3.99-6.22,5.19-9.73,1.24-3.62,1.87-7.42,1.87-11.28,0-4.66-.91-9.19-2.69-13.45-1.73-4.12-4.19-7.81-7.34-10.98-3.14-3.17-6.81-5.66-10.89-7.4-.85-.36-1.7-.69-2.57-.97-.8,2.4-1.98,4.66-3.53,6.73-.15.2-.3.39-.45.59,11.15,3.02,19.38,13.31,19.38,25.49s-7.81,22.19-19,25.39l-.07.02c-3.13.96-5.95,2.95-7.93,5.59-1.93,2.59-3,5.65-3.12,8.87,1.04.08,2.1.13,3.16.13,1.68,0,3.33-.11,4.96-.31.3-2.98,2.37-5.57,5.24-6.46Z" />
								<path class="logo_element logo_shape" id="shape_2" d="M24.84,6.77c-3.53,1.02-6.87,2.6-9.91,4.7-3.01,2.08-5.66,4.61-7.87,7.53-2.24,2.95-3.99,6.22-5.19,9.73-1.24,3.62-1.87,7.42-1.87,11.28,0,4.66.91,9.19,2.69,13.45,1.73,4.12,4.19,7.81,7.34,10.98,3.14,3.17,6.81,5.66,10.89,7.4.85.36,1.7.69,2.57.97.8-2.4,1.98-4.66,3.53-6.73.15-.2.3-.39.45-.59-11.15-3.02-19.38-13.31-19.38-25.49s7.81-22.19,19-25.39l.07-.02c3.13-.96,5.95-2.95,7.93-5.59,1.93-2.59,3-5.65,3.12-8.87-1.04-.08-2.1-.13-3.16-.13-1.68,0-3.33.11-4.96.31-.3,2.98-2.37,5.57-5.24,6.46Z" />
							</g>
							<g id="logo_group_2">
								<path class="logo_element logo_letter" id="logo_p" d="M91.28,73.59V21.31h11.21v3.51c2.64-3.04,6.35-4.56,11.13-4.56s9.14,1.91,12.63,5.72c3.49,3.81,5.23,8.48,5.23,14.01s-1.74,10.2-5.23,14.01c-3.49,3.81-7.7,5.72-12.63,5.72s-8.49-1.52-11.13-4.56v18.43h-11.21ZM104.99,46.64c1.67,1.64,3.8,2.47,6.39,2.47s4.72-.82,6.39-2.47c1.67-1.64,2.5-3.86,2.5-6.65s-.83-5.01-2.5-6.65c-1.67-1.64-3.8-2.47-6.39-2.47s-4.72.82-6.39,2.47c-1.67,1.64-2.5,3.86-2.5,6.65s.83,5.01,2.5,6.65Z" />
								<path class="logo_element logo_letter" id="logo_h" d="M161.74,58.67v-21.27c0-2.19-.61-3.87-1.83-5.04-1.22-1.17-2.78-1.76-4.67-1.76-2.14,0-3.84.65-5.08,1.94-1.25,1.3-1.87,3.21-1.87,5.75v20.37h-11.21s0-52.28,0-52.28h11.21v18.46c2.24-3.04,5.8-4.56,10.69-4.56,3.98,0,7.31,1.37,9.98,4.11,2.66,2.74,4,6.53,4,11.36v22.91h-11.21Z" />
								<path class="logo_element logo_letter" id="logo_i" d="M190.02,17.86c-1.32,1.32-2.9,1.98-4.74,1.98s-3.43-.66-4.74-1.98c-1.32-1.32-1.98-2.9-1.98-4.74s.66-3.42,1.98-4.74,2.9-1.98,4.74-1.98,3.42.66,4.74,1.98c1.32,1.32,1.98,2.9,1.98,4.74s-.66,3.43-1.98,4.74ZM179.67,58.67V23.13h11.21v35.54h-11.21Z" />
							</g>
						</g>
					</svg>
				</a>

			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'phi-digital-2024'); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->