<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>
<div class="our-values-slider overflow-hidden relative box-content">
	<div class="swiper-wrapper">
		<!-- Slides -->
		<?php foreach ($args['banners'] as $banner) :
			$title_words = explode(' ', $banner['title']);
			$first_word = array_shift($title_words);
			$remaining_words = implode(' ', $title_words); ?>
			<div class="swiper-slide w-full">
				<div class="container grid md:grid-cols-2 grid-cols-1">
					<img class="w-full md:h-[30rem] h-72 object-cover object-center" src="<?= $banner['image'] ?>" alt="">
					<div class="text-end flex justify-center items-center py-5 ">
						<div class="space-y-1 translate-x-14">
							<h2 class="font-cocogoose xl:text-7xl lg:text-6xl md:text-5xl text-2xl"><span class="text-sky-blue"><?= $first_word; ?></span> <br> <?= $remaining_words; ?></h2>
							<hr class="bg-sky-blue text-sky-blue md:h-2 h-0.5 rounded-md md:w-44 w-24 ml-auto">
							<p class="md:text-2xl text-sm py-5"><?= $banner['description'] ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
