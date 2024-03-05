<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>
<div class="service-right-slider overflow-hidden">
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php
		foreach ($args['banners'] as $image) :?>
			<div class="swiper-slide w-full">
				<img class="w-full h-full object-cover object-center" src="<?= $image; ?>">
			</div>
		<?php endforeach; ?>
	</div>
</div>
