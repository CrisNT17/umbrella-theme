<?php

/**
 * Template Name: Servicios
 *
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

get_header();

$args = array(
	'post_type'      => 'service',
	'posts_per_page' => -1,
	'order' 			  => 'DESC',

);




$query = new WP_Query($args);


// Publicidad Aérea
get_template_part('template-parts/banners/internal', 'page');
?>
<section class="lg:my-20 my-10 md:space-y-10 space-y-0">
	<?php
	if ($query->have_posts()) :
		$counter = 1;
		while ($query->have_posts()) :
			$query->the_post();
			$service_data = array(
				'title' => get_the_title(),
				'description' => get_field('description'),
				'gallery' => get_field('gallery'),
				'button' => get_field('button'),
			);
			if ($counter % 2 == 0) {
				// Even
				get_template_part('template-parts/sliders/services', 'left', $service_data);
			} else {
				// Odd
				get_template_part('template-parts/sliders/services', 'right', $service_data);
				//get_template_part('template-parts/project/left', 'project', $project_data); aqui va izquierda
			}
			$counter++;
		endwhile;
		// Restablecer la consulta
		wp_reset_query();
	endif;
	?>

</section>
<?php
get_footer();
