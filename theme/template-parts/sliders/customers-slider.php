<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */
$args = array(
	'post_type'      => 'customers',
	'posts_per_page' => -1,
	'order' 		  => 'DESC',

);

$query = new WP_Query($args);

?>
<div class="container md:my-20 my-10">
	<h2 class="xl:text-6xl lg:text-5xl md:text-4xl text-3xl text-sky-blue font-cocogoose text-center uppercase">Nuestros clientes</h2>
	<hr class="bg-sky-blue text-sky-blue rounded-md h-1 w-24 mt-1 md:mb-20 mb-10 mx-auto">
	<div class="customers-slider px-10 box-content relative overflow-hidden">
		<div class="swiper-wrapper">
			<!-- Slides -->
			<?php
					if ($query->have_posts()) :
						while ($query->have_posts()) :
							$query->the_post();
							$image = umbrella_get_image_data(get_field('logo')); ?>
							<div class="swiper-slide w-96">
								<img class="w-80 h-28 object-contain object-center" src="<?= $image['url']; ?>" alt="<?= $image['name']; ?>" srcset="<?= $image['srcset']; ?>">
							</div>
					<?php
						endwhile;
						// Restablecer la consulta
						wp_reset_query();
					endif;
					?>
		</div>
		<div class="swiper-button-prev customers"></div>
	<div class="swiper-button-next customers"></div>
	</div>
</div>
