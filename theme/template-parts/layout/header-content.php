<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>

<header class="absolute w-full" id="masthead">
	<nav class="container flex justify-between items-center py-10" id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'umbrella'); ?>">
		<img class="h-20" src="<?= get_template_directory_uri() . '/assets/img/logo-header.svg' ?>" alt="">
		<button aria-controls="primary-menu" aria-expanded="false"><img class="h-14" src="<?= get_template_directory_uri() . '/assets/img/menu-icon.svg' ?>" alt=""></button>
	</nav><!-- #site-navigation -->
	<div class="hidden">
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</div>
</header><!-- #masthead -->
