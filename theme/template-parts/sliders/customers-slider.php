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
	<div class="customers-slider px-10 box-content relative overflow-hidden">
		<div class="swiper-wrapper">
			<!-- Slides -->
			<?php foreach ($args['banners'] as $banner) :?>
				<div class="swiper-slide">
					<div class="lg:h-40 md:h-36 h-28 w-full flex justify-center items-center">
						<img class="lg:max-h-36 md:max-h-28 max-h-20 mx-auto" src="<?= $banner['image']; ?>" alt="">
					</div>
				</div>

			<?php endforeach; ?>
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
</div>
