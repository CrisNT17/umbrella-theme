<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>
<div class="container md:my-20 my-10">
	<h2 class="xl:text-6xl lg:text-5xl md:text-4xl text-3xl text-sky-blue font-cocogoose text-center uppercase">Nuestros clientes</h2>
	<hr class="bg-sky-blue text-sky-blue rounded-md h-1 w-24 mt-1 md:mb-20 mb-10 mx-auto">
	<div class="customers-slider container relative overflow-hidden">
		<div class="swiper-wrapper">
			<!-- Slides -->
			<?php foreach ($args['banners'] as $banner) :
				/* $image_data = umbrella_get_image_data($image['id']);*/ ?>
				<div class="swiper-slide">
					<!-- <img class="w-full h-full object-cover object-center" src="<?= $image_data['url']; ?>" srcset="<?= $image_data['srcset']; ?>" alt="<?= $image_data['name'] ?>"> -->
					<img class="max-h-20" src="<?= $banner['image']; ?>" alt="">
					<!-- Bullets -->
					<div class="absolute bottom-0 right-0 mb-4 mr-4" style="z-index: 10;">
						<span class="bg-white rounded-full size-2 inline-block mr-3"></span>
						<span class="bg-white rounded-full size-2 inline-block mr-3"></span>
						<span class="bg-white rounded-full size-2 inline-block mr-3"></span>
						<span class="bg-white rounded-full size-2 inline-block mr-3"></span>
						<span class="bg-white rounded-full size-2 inline-block mr-2"></span>
					</div>
					<div class="absolute inset-0  bg-gradient-to-b from-transparent to-black" style="top: 70%; height: 50%; "></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
