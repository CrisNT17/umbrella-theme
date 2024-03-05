<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>

<header class="absolute w-full py-6 z-50" id="masthead">
	<nav class="container flex justify-between items-center" id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'umbrella'); ?>">
		<img class="md:h-14 h-10" src="<?= get_template_directory_uri() . '/assets/img/logo-header.svg' ?>" alt="Logo Umbrella">
		<div class="flex flex-col justify-center items-center">
			<button aria-controls="primary-menu" aria-expanded="false"><img class="md:h-10 h-8" src="<?= get_template_directory_uri() . '/assets/img/icons/menu-icon.svg' ?>" alt=""></button>
			<span class="font-museo font-bold text-white md:text-normal text-sm">Menú</span>
		</div>
	</nav><!-- #site-navigation -->
	<div id="primary-menu" class="hidden fixed top-0 right-0 bg-white p-8 shadow-md h-screen xl:w-1/6 lg:w-1/5 md:w-1/5 w-2/3">
		<div class="flex flex-col justify-between h-full">
			<button id="close-menu" class="ml-auto">
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
			<div class="mt-auto flex justify-between items-center">
				<img class="size-10" src="<?= get_template_directory_uri() . '/assets/img/icons/facebook-sky-icon.svg' ?>" alt="Facebook Icon">
				<img class="size-10" src="<?= get_template_directory_uri() . '/assets/img/icons/linkedin-sky-icon.svg' ?>" alt="LinkedIn Icon">
				<img class="size-10" src="<?= get_template_directory_uri() . '/assets/img/icons/whatsapp-sky-icon.svg' ?>" alt="Whatsapp Icon">
			</div>
		</div>
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
