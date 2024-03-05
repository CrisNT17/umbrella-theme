<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>
<div class="home-slider overflow-hidden xl:h-[850px] lg:h-[750px] md:h-[550px] h-[400px] relative box-content">
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php foreach ($args['banners'] as $banner) :
			/* $image_data = umbrella_get_image_data($image['id']);*/ ?>
			<div class="swiper-slide w-full bg-cover bg-center" style="background-image: url(<?= $banner['image']; ?>);">
				<div class="container flex flex-col justify-center items-center h-full">
					<!-- <img class="w-full h-full object-cover object-center" src="<?= $image_data['url']; ?>" srcset="<?= $image_data['srcset']; ?>" alt="<?= $image_data['name'] ?>"> -->
					<span class="text-white text-center font-cocogoose font-light md:text-3xl text-lg tracking-wider md:leading-[3.25rem] w-3/4"><?= $banner['description'] ?></span>
					<?php if (isset($banner['title'])) : ?>
						<div class="mt-auto mr-auto">
							<h2 class="text-white xl:text-8xl lg:text-7xl md:text-6xl text-4xl tracking-wider font-cocogoose">
								<span class="text-sky-blue"><?= esc_html(substr($banner['title'], 0, 1)); ?></span><?= nl2br(esc_html(substr($banner['title'], 1))); ?>
							</h2>
							<hr class="bg-sky-blue text-sky-blue rounded-md md:h-2 h-1 xl:w-28 lg:w-24 md:w-24 w-14 md:mb-20 mb-10">
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="absolute z-40 lg:right-14 md:right-10 right-8 md:bottom-0 bottom-5">
		<?php get_template_part('template-parts/rrss/banner-social', 'media'); ?>
	</div>
	<div class="z-40 absolute md:bottom-10 bottom-4 left-1/2 transform -translate-x-1/2 flex justify-center items-center gap-3">
		<button class="bg-sky-blue/70 md:size-3 size-2 rounded-full"></button>
		<button class="bg-light-gray/70 md:size-3 size-2 rounded-full"></button>
		<button class="bg-light-gray/70 md:size-3 size-2 rounded-full"></button>
	</div>
</div>
