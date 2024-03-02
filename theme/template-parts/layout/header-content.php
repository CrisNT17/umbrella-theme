<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>

<header class="fixed w-full py-6 z-50" id="masthead">
	<nav class="container flex justify-between items-center" id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'umbrella'); ?>">
		<img class="h-14" src="<?= get_template_directory_uri() . '/assets/img/logo-header.svg' ?>" alt="Logo Umbrella">
		<button aria-controls="primary-menu" aria-expanded="false"><img class="h-10" src="<?= get_template_directory_uri() . '/assets/img/icons/menu-icon.svg' ?>" alt=""></button>
	</nav><!-- #site-navigation -->
	<div id="primary-menu" class="hidden fixed top-0 right-0 bg-white p-8 shadow-md h-screen w-1/5 space-y-10">
		<button id="close-menu" class="float-right">
			<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
				<path stroke="none" d="M0 0h24v24H0z" fill="none" />
				<path d="M18 6l-12 12" />
				<path d="M6 6l12 12" />
			</svg>
		</button>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'items_wrap'     => '<ul id="%1$s" class="space-y-5" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</div>

</header><!-- #masthead -->
<script>
	jQuery(document).ready(function($) {
		$('button[aria-controls="primary-menu"]').on('click', function() {
			$('#primary-menu').animate({
				width: 'toggle',
				right: '0'
			});
		});

		$('#close-menu').on('click', function() {
			$('#primary-menu').animate({
				width: 'toggle',
				right: '-100%'
			});
		});
	});
</script>
