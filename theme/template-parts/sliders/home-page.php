<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

 $page_title = 'New Beginnings';
?>
<div class="home-slider overflow-hidden h-[50rem] relative">
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php
		foreach ($args['banners'] as $image) :
			/* $image_data = umbrella_get_image_data($image['id']);*/ ?>
			<div class="swiper-slide w-full bg-cover bg-center flex items-end justify-start" style="background-image: url(<?= $image; ?>);">
				<!-- <img class="w-full h-full object-cover object-center" src="<?= $image_data['url']; ?>" srcset="<?= $image_data['srcset']; ?>" alt="<?= $image_data['name'] ?>"> -->
				<h2 class="text-white xl:text-7xl lg:text-6xl md:text-5xl sm:text-4xl text-3xl tracking-wider font-bold">
					<span class="text-sky-blue"><?= esc_html(substr($page_title, 0, 1)); ?></span><?= esc_html(substr($page_title, 1)); ?>
				</h2>
				<hr class="bg-sky-blue rounded-md h-2 w-44 mb-20">
			</div>
		<?php endforeach; ?>
	</div>
	<div class="z-40 absolute bottom-10 left-1/2 transform -translate-x-1/2 flex justify-center items-center gap-3">
		<button class="bg-sky-blue/70 size-3 rounded-full"></button>
		<button class="bg-light-gray/70 size-3 rounded-full"></button>
		<button class="bg-light-gray/70 size-3 rounded-full"></button>
	</div>
</div>
