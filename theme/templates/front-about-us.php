<?php

/**
 * Template Name: Nosotros
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

// Banner
get_template_part('template-parts/banners/internal', 'page');
?>
<div class="container font-cocogoose font-light text-center xl:text-5xl lg:text-4xl md:text-3xl text-xl md:py-20 py-10">
	<p>Ninguno de nosotros es tan bueno <br> como todos nosotros juntos.</p>
</div>
<?php
$sliderAboutUs = array(
	"banner1" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/banner-nosotros-1.jpg',
		'name' => 'Nancy García',
		'position' => 'Economista',
		'description' => '27 años de experiencia generando soluciones administrativas, financieras y comerciales.'
	),
	"banner2" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/banner-nosotros-2.jpg',
		'name' => null,
		'position' => '',
		'description' => 'Pasión por la publicidad y comunicación en los genes.'
	),
	"banner3" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/banner-nosotros-3.jpg',
		'name' => null,
		'position' => '',
		'description' => 'Comunicamos, creamos y resolvemos tus necesidades, para fortalecer la exposición de tu marca en diferentes medios.'
	),
	"banner3" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/banner-nosotros-4.jpg',
		'name' => null,
		'position' => '',
		'description' => 'Comunicamos, creamos y resolvemos tus necesidades, para fortalecer la exposición de tu marca en diferentes medios.'
	),
);
get_template_part('template-parts/sliders/about-us', 'page', array('banners' => $sliderAboutUs));
// Values
$sliderValues = array(
	"banner1" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/vision.jpg',
		'title' => 'Visión Estratégica',
		'description' => '27 años de experiencia generando soluciones administrativas, financieras y comerciales.'
	),
	"banner2" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/servicio-personalizado.jpg',
		'title' => null,
		'description' => 'Pasión por la publicidad y comunicación en los genes.'
	),
	"banner3" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/acompanamiento-constante.jpg',
		'title' => null,
		'description' => 'Comunicamos, creamos y resolvemos tus necesidades, para fortalecer la exposición de tu marca en diferentes medios.'
	),
	"banner4" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/amplia-experiencia.jpg',
		'title' => null,
		'description' => 'Comunicamos, creamos y resolvemos tus necesidades, para fortalecer la exposición de tu marca en diferentes medios.'
	),
); ?>
<div class="container font-cocogoose font-light text-center xl:text-5xl lg:text-4xl md:text-3xl text-xl md:py-20 py-10">
	<h3>¿Qué valores distintivos nos inspiran?</h3>
</div>
<?php
get_template_part('template-parts/sliders/our', 'values', array('banners' => $sliderValues));
?>
<?php
get_footer();
