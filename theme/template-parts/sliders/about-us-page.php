<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>
<<<<<<< HEAD
<div class="about-inspire-slider overflow-hidden xl:h-[650px] lg:h-[550px] md:h-[550px] h-[300px] relative box-content">
=======
<div class="about-us-slider overflow-hidden xl:h-[650px] lg:h-[550px] md:h-[550px] h-[300px] relative box-content">
>>>>>>> 896aef2c6984f649a7ec1b3adee698e88a531dea
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php foreach ($args['banners'] as $banner) :
			/* $image_data = umbrella_get_image_data($image['id']);*/ ?>
			<div class="swiper-slide w-full bg-cover bg-center" style="background-image: url(<?= $banner['image']; ?>);">
				<div class="container flex justify-center items-center h-full text-white">
					<div class="lg:w-1/2 w-[55%] ml-auto">
						<h2 class="font-cocogoose xl:text-7xl lg:text-6xl md:text-5xl text-2xl"><?= $banner['name'] ?></h2>
						<span class="font-cocogoose font-extralight md:text-xl text-sm"><?= $banner['position'] ?></span>
						<p class="md:text-2xl text-sm py-5"><?= $banner['description'] ?></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
