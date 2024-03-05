<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>
<div class="serviceci-slider overflow-hidden h-[50rem] relative">
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php
		foreach ($args['banners'] as $image) :
			/* $image_data = umbrella_get_image_data($image['id']);*/ ?>
			<figure class="swiper-slide w-full">
				<!-- <img class="w-full h-full object-cover object-center" src="<?= $image_data['url']; ?>" srcset="<?= $image_data['srcset']; ?>" alt="<?= $image_data['name'] ?>"> -->
				<img class="w-full h-full object-cover object-center" src="<?= $image; ?>">
			</figure>
		<?php endforeach; ?>
	</div>
	<div class="z-40 absolute bottom-10 left-1/2 transform -translate-x-1/2 flex justify-center items-center gap-3">
		<button class="bg-sky-blue/70 size-3 rounded-full"></button>
		<button class="bg-light-gray/70 size-3 rounded-full"></button>
		<button class="bg-light-gray/70 size-3 rounded-full"></button>
	</div>
</div>
