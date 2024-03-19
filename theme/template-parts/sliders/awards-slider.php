<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */
$args = array(
	'post_type'      => 'awards',
	'posts_per_page' => -1,
	'order' 		  => 'DESC',

);

$query = new WP_Query($args);
?>
<div class="awards-slider overflow-hidden relative box-content">
	<div class="swiper-wrapper">


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
				<!-- Slides -->
				<?php
				if ($query->have_posts()) :
					while ($query->have_posts()) :
						$query->the_post();
						$image = umbrella_get_image_data(get_field('image')); ?>
						<div class="swiper-slide w-96">
							<img class="w-full h-full object-contain object-center" src="<?= $image['url']; ?>" alt="<?= $image['name']; ?>" srcset="<?= $image['srcset']; ?>">
						</div>
						<div class="text-center flex justify-center items-center ">
					<p class="md:text-2xl text-sm "><?= get_field('description'); ?></p>

				</div>
				<?php
					endwhile;
					// Restablecer la consulta
					wp_reset_query();
				endif;
				?>


			</div>
		</div>

	</div>
	<div class="swiper-button-prev awards-slider"></div>
	<div class="swiper-button-next awards-slider"></div>

</div>
