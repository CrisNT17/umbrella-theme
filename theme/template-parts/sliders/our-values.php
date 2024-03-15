<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */
$args = array(
	'post_type'      => 'values',
	'posts_per_page' => -1,
	'order' 		  => 'DESC',

);

$query = new WP_Query($args);
?>
<div class="our-values-slider overflow-hidden container px-0 relative box-content md:mb-20 mb-10">
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php if ($query->have_posts()) :
			while ($query->have_posts()) :
				$query->the_post();
				$image = umbrella_get_image_data(get_field('image'));
				$title_parts = explode(' ', get_the_title(), 2);
				$first_word = $title_parts[0];
				$rest_of_title = $title_parts[1]; ?>
				<div class="swiper-slide w-full">
					<div class="grid md:grid-cols-2 grid-cols-1">
						<img class="w-full md:h-[30rem] h-72 object-cover object-center" src="<?= $image['url'] ?>" alt="">
						<div class="md:text-end text-center flex justify-end items-center py-5">
							<div class="space-y-1">
								<h2 class="font-cocogoose xl:text-6xl lg:text-4xl md:text-4xl text-2xl"><span class="text-sky-blue"><?= $first_word; ?></span> <br> <?= $rest_of_title; ?></h2>
								<hr class="bg-sky-blue text-sky-blue md:h-2 h-0.5 md:w-44 w-24 md:ml-auto md:mx-0 mx-auto">
								<p class="md:text-2xl text-sm py-5 pl-28"><?= get_field('description') ?></p>
							</div>
						</div>
					</div>
				</div>
		<?php
			endwhile;
			// Restablecer la consulta
			wp_reset_query();
		endif; ?>
	</div>
	<div class="swiper-pagination our-values"></div>
</div>
