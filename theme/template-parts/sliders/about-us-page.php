<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */
$args = array(
	'post_type'      => 'staff',
	'posts_per_page' => -1,
	'order' 		  => 'DESC',

);

$query = new WP_Query($args);
?>
<div class="about-us-slider relative overflow-hidden xl:h-[650px] lg:h-[550px] md:h-[550px] h-[300px]">
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php if ($query->have_posts()) :
			while ($query->have_posts()) :
				$query->the_post();
				$image = umbrella_get_image_data(get_field('image')); ?>
			<div class="swiper-slide w-full bg-cover bg-center" style="background-image: url(<?= $image['url'] ?>);">
				<div class="container flex justify-center items-center h-full text-white">
					<div class="lg:w-[39%] w-[55%] ml-auto">
						<h2 class="font-cocogoose xl:text-6xl lg:text-5xl md:text-4xl text-xl"><?= get_the_title(); ?></h2>
						<span class="font-cocogoose font-extralight md:text-xl text-sm"><?= get_field('position'); ?></span>
						<div class="md:text-2xl text-sm py-5 word-break  pr-11"><?= get_field('description') ?></div>
					</div>
				</div>
			</div>
		<?php
			endwhile;
			// Restablecer la consulta
			wp_reset_query();
		endif; ?>
	</div>
	<div class="swiper-button-prev about-us"></div>
	<div class="swiper-button-next about-us"></div>
</div>
