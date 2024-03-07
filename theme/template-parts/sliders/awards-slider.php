<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>
<div class="awards-slider overflow-hidden relative box-content">
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php foreach ($args['banners'] as $banner) : ?>
			<div class="swiper-slide w-full">
				<div class="container xl:w-1/2 lg:w-2/3 md:w-3/4 w-full flex flex-col justify-center items-center space-y-3">
					<div class="text-center">
						<h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl">
							Mejor stand
						</h2>
						<h3 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl font-bold uppercase">
							EXPO GANADERA 2022
						</h3>
					</div>
					<img class="w-full md:h-[30rem] h-72 object-cover object-center" src="<?= $banner['image'] ?>" alt="">
					<div class="text-center flex justify-center items-center py-5">
						<p class=""><?= $banner['description'] ?></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="swiper-button-prev awards-slider"></div>
	<div class="swiper-button-next awards-slider"></div>

</div>
