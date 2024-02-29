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
<div class="xl:h-[800px] lg:h-[700px] md:h-[600px] sm:h-[500px] h-[400px] overflow-hidden w-full bg-no-repeat lg:bg-cover bg-contain" style="background: url('<?= esc_url(wp_get_attachment_url($featured_image_id)); ?>');">
	<div class="container w-full h-full flex flex-col justify-end items-start">
		<h1 class="text-white xl:text-9xl lg:text-8xl md:text-7xl sm:text-6xl text-5xl tracking-wider w-full font-bold">
			<span class="text-sky-blue"><?= esc_html(substr($page_title, 0, 1)); ?></span><?= esc_html(substr($page_title, 1)); ?>
		</h1>
		<hr class="bg-sky-blue rounded-md h-2 w-44 mb-20">
	</div>
</div>
