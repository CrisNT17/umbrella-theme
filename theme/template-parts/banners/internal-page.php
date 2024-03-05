<?php

/**
 * Template part for displaying banner in each page except front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

$featured_image_id = get_post_thumbnail_id(get_the_ID());
$featured_image_name = get_post_meta($featured_image_id, '_wp_attached_file', true);
$featured_image_sizes = wp_get_attachment_image_srcset($featured_image_id);
$featured_image_url = wp_get_attachment_url($featured_image_id);
$page_title = get_the_title();

?>
<div class="xl:h-[800px] lg:h-[700px] md:h-[500px] h-[350px] w-full bg-no-repeat bg-cover bg-center flex justify-between" style="background-image: url('<?= esc_url(wp_get_attachment_url($featured_image_id)); ?>');">
	<div class="container box-border flex justify-between items-end">
		<div class="h-full flex flex-col justify-end items-start">
			<h1 class="text-white xl:text-8xl lg:text-7xl md:text-6xl text-5xl tracking-wider w-full font-cocogoose font-bold">
				<span class="text-sky-blue"><?= esc_html(substr($page_title, 0, 1)); ?></span><?= esc_html(substr($page_title, 1)); ?>
			</h1>
			<hr class="bg-sky-blue text-sky-blue rounded-md md:h-2 h-0.5 md:w-44 w-12 lg:mb-20 md:mb-14 mb-5">
		</div>
		<?php get_template_part('template-parts/rrss/banner-social', 'media'); ?>
	</div>
</div>
