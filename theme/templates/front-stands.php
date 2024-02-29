<?php

/**
 * Template Name: Stands
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

// Banner
get_template_part('template-parts/banners/internal', 'page');
?>
<section class="container">
	<div class="my-24">
		<img class="size-24 mx-auto" src="<?= get_template_directory_uri() . '/assets/img/umbrella-icon.svg' ?>" alt="Umbrella icon">
		<p class="text-4xl text-center w-[90%] mx-auto my-20">Nuestra especialidad son los stands, sacamos el mayor potencial para mostrar lo mejor de tu marca y que brille sin importar el lugar.</p>
		<!-- Bullets -->
		<div class="flex justify-center items-center gap-10">
			<div class="size-5 bg-sky-blue rounded-full"></div>
			<div class="size-5 bg-sky-blue rounded-full"></div>
			<div class="size-5 bg-sky-blue rounded-full"></div>
		</div>
	</div>
	<!-- Stand Titan -->
	<div class="grid grid-cols-2 place-content-center">
		<img class="w-full" src="<?= get_template_directory_uri() . '/assets/img/titan-logo.jpg' ?>" alt="">
		<div class="flex items-center justify-center text-4xl text-center">
			<p>Nuestro cliente nos pidió un stand en el cual esté inspirado la esencia de su marca, a traves de propuestas alineadas a su branding este fue el resultado.</p>
		</div>
	</div>
	<div class="grid grid-cols-5 gap-x-10 gap-y-5 place-content-center">
		<div class="col-span-3"><img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stand-1.jpg' ?>" alt=""></div>
		<div class="col-span-2 row-span-2"><img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stand-2.jpg' ?>"></div>
		<div class="col-span-3"><img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stand-1.jpg' ?>" alt=""></div>
	</div>
	<!-- Stand Pan -->
	<div class="grid grid-cols-2 place-content-center">
		<img class="w-full" src="<?= get_template_directory_uri() . '/assets/img/titan-logo.jpg' ?>" alt="">
		<div class="flex items-center justify-center text-4xl text-center">
			<p>Nuestro cliente nos pidió un stand en el cual esté inspirado la esencia de su marca, a traves de propuestas alineadas a su branding este fue el resultado.</p>
		</div>
	</div>
	<div class="grid grid-cols-10 gap-x-5 place-content-center">
		<div class="col-span-6"><img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stand-1.jpg' ?>" alt=""></div>
		<div class="col-span-2"><img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stand-2.jpg' ?>"></div>
		<div class="col-span-2"><img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stand-2.jpg' ?>" alt=""></div>
	</div>
	<!-- Stand Montero -->
	<div class="grid grid-cols-2 place-content-center">
		<img class="w-full" src="<?= get_template_directory_uri() . '/assets/img/titan-logo.jpg' ?>" alt="">
		<div class="flex items-center justify-center text-4xl text-center">
			<p>Nuestro cliente nos pidió un stand en el cual esté inspirado la esencia de su marca, a traves de propuestas alineadas a su branding este fue el resultado.</p>
		</div>
	</div>
	<div class="grid grid-cols-10 gap-5 place-content-center">
		<div class="col-span-6 row-span-2"><img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stand-1.jpg' ?>" alt=""></div>
		<div class="col-span-2"><img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stand-1.jpg' ?>"></div>
		<div class="col-span-2"><img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stand-1.jpg' ?>" alt=""></div>
		<div class="col-span-2"><img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stand-1.jpg' ?>"></div>
		<div class="col-span-2"><img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stand-1.jpg' ?>" alt=""></div>
	</div>
	<div class="w-3/4 mx-auto my-28 overflow-auto">
		<h3 class="text-sky-blue text-center text-6xl mb-28">Nuestros clientes</h3>
		<div class="grid grid-cols-2 gap-6 place-content-center">
			<div class="flex flex-col justify-center items-center gap-5">
				<img class="w-full" src="<?= get_template_directory_uri() . '/assets/img/stand-1.jpg' ?>" alt="">
				<span class="text-sky-blue text-5xl font-medium">Propuesta</span>
			</div>
			<div class="flex flex-col justify-center items-center gap-5">
				<img class="w-full" src="<?= get_template_directory_uri() . '/assets/img/stand-1.jpg' ?>" alt="">
				<span class="text-sky-blue text-5xl font-medium">Creación</span>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
