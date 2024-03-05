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
<<<<<<< HEAD
	<h2 class="text-sky-blue">Ninguno de nosotros es tan bueno <br> <p class="text-light-gray">como todos nosotros juntos.</p></h2>
=======
	<p>Ninguno de nosotros es tan bueno <br> como todos nosotros juntos.</p>
>>>>>>> 896aef2c6984f649a7ec1b3adee698e88a531dea
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
<<<<<<< HEAD
		'name' => 'Alfredo Garcia',
		'position' => 'Gerente comercial',
		'description' => '25 años de experiencia en el mercado.<br>
		Experto en el conocimiento del sector<br>
		Farmaceutico, Alimentación,Tecnología,<br>
		Eventos y Congresos, Eventos, Ferias y más..'
	),
	"banner3" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/banner-nosotros-3.jpg',
		'name' => 'Hitler García',
		'position' => 'Gerente Logistica y atención Clientes Especiales',
		'description' => '
		29 años de trascendencia en el mercado,<br>
		 con amplia expericencia en el sector Minas <br>
		 y Petroleo, Educación, Congresos, Ferias,<br>
		Eventos Internacionales.'
	),
	"banner4" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/banner-nosotros-4.jpg',
		'name' => 'María J. García',
		'position' => 'Especialista en estrategia y comunicación digital',
		'description' => '9 años en el mundo digital, con pasión por<br> las redes soaiales.'
=======
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
>>>>>>> 896aef2c6984f649a7ec1b3adee698e88a531dea
	),
);
get_template_part('template-parts/sliders/about-us', 'page', array('banners' => $sliderAboutUs));
// Values
$sliderValues = array(
	"banner1" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/vision.jpg',
		'title' => 'Visión Estratégica',
<<<<<<< HEAD
		'description' => 'Creamos soluciones personalizadas<br> a la medida de tus necesidades.'
	),
	"banner2" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/servicio-personalizado.jpg',
		'title' => 'Servicio Personalizado',
		'description' => 'Creamos soluciones personalizadas<br> a la medida de tus necesidades.'
	),
	"banner3" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/acompanamiento-constante.jpg',
		'title' => 'Acompañamiento constante',
		'description' => 'Acompañamos una necesidad y bus-<br>camos soluciones de principio a fin.'
	),
	"banner4" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/amplia-experiencia.jpg',
		'title' => 'Amplia experiencia',
		'description' => 'Construimos lazos de confianza que <br>nos ayudan a entablar más que ne-<br>gocios, relaciones laborales.'
	),
); ?>
<div class="container font-cocogoose font-light text-center xl:text-5xl lg:text-4xl md:text-3xl text-xl md:py-20 py-10 text-sky-blue">
=======
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
>>>>>>> 896aef2c6984f649a7ec1b3adee698e88a531dea
	<h3>¿Qué valores distintivos nos inspiran?</h3>
</div>
<?php
get_template_part('template-parts/sliders/our', 'values', array('banners' => $sliderValues));
?>
<?php
get_footer();
