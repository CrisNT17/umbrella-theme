<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>
<div class="testimonials-slider overflow-hidden relative box-content">
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php foreach ($args['testimonials'] as $testimonial) : ?>
			<div class="swiper-slide w-full">
				<div class="container  sm:w-full sm:p-0 md:p-20">
					<p class="text-center md:text-3xl leading-snug mt-16 sm:text-lg"><?= $testimonial['description'];?></p>
					<span class="block text-center md:text-3xl text-lg text-gray leading-snug mt-5 italic"><?= $testimonial['name']?></span>

				</div>

			</div>

		<?php endforeach; ?>
	</div>
	
</div>
