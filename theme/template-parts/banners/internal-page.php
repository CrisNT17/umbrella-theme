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
<div class="xl:h-[900px] lg:h-[800px] md:h-[600px] sm:h-[500px] h-[400px] overflow-hidden w-full bg-no-repeat lg:bg-cover bg-contain" style="background: url('<?= esc_url($featured_image_url); ?>');">
	<div class="container w-full h-full flex justify-start items-end">
		<h1 class="text-white xl:text-9xl lg:text-8xl md:text-7xl sm:text-6xl text-5xl tracking-wider w-full mb-16 font-bold"><?= esc_html($page_title); ?></h1>
	</div>
</div>
