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

// Banner
get_template_part('template-parts/banners/internal', 'page');
?>
<section class="lg:my-20 my-10 space-y-10">
	<!-- Publicidad aérea -->
	<div class="grid md:grid-cols-11 grid-cols-1">
		<div class="col-span-6">
			<?php
			$sliderServicespa = array(
				"banner1" => get_template_directory_uri() . '/assets/img/banners/publicidad-aerea.jpg',
				"banner2" => get_template_directory_uri() . '/assets/img/banners/publicidad-aerea.jpg',
			);
			get_template_part('template-parts/sliders/services', 'right', array('banners' => $sliderServicespa));
			?>
		</div>
		<div class="col-span-5 flex flex-col justify-center items-end xl:w-3/4 lg:w-3/4 md:w-full w-full font-cocogoose">
			<h3 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-sky-blue text-end font-extralight">
				Publicidad <br><span class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl tracking-widest">Aérea</span>
			</h3>
			<hr class="bg-sky-blue text-sky-blue rounded-md h-2 md:w-44 w-20 mb-3 font-museo font-light">
			<span class="xl:text-2xl lg:text-lg md:text-lg text-base text-end mt-4">Donde todo el mundo te ve.</span>
		</div>
	</div>
	<!-- Comunicación integral -->
	<div class="grid md:grid-cols-11 grid-cols-1">
		<div class="col-span-5 flex flex-col justify-center items-end xl:w-3/4 lg:w-3/4 md:w-full w-full font-cocogoose">
			<h3 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-sky-blue text-end font-extralight">
				Comunicación <br><span class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl tracking-widest">Integral</span>
			</h3>
			<hr class="bg-sky-blue text-sky-blue rounded-md h-2 md:w-44 w-20 mb-3 font-museo font-light">
			<span class="xl:text-2xl lg:text-lg md:text-lg text-base text-end mt-4">Donde todo el mundo te ve.</span>
		</div>
		<div class="col-span-6">
			<?php
			$sliderServicesCI = array(
				"banner1" => get_template_directory_uri() . '/assets/img/banners/comunicacion-integral.jpg',
				"banner2" => get_template_directory_uri() . '/assets/img/banners/comunicacion-integral.jpg',
			);
			get_template_part('template-parts/sliders/services', 'right', array('banners' => $sliderServicesCI));
			?>
		</div>
	</div>
	<!-- Publicidad BTL -->
	<div class="grid md:grid-cols-11 grid-cols-1">
		<div class="col-span-6">
			<?php
			$sliderServicesBTL = array(
				"banner1" => get_template_directory_uri() . '/assets/img/banners/publicidad-btl.jpg',
				"banner2" => get_template_directory_uri() . '/assets/img/banners/publicidad-btl.jpg',
			);
			get_template_part('template-parts/sliders/services', 'right', array('banners' => $sliderServicesBTL));
			?>
		</div>
		<div class="col-span-5 flex flex-col justify-center items-end xl:w-3/4 lg:w-3/4 md:w-full w-full font-cocogoose">
			<h3 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-sky-blue text-end font-extralight">
				Publicidad <br><span class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl tracking-widest">BTL</span>
			</h3>
			<hr class="bg-sky-blue text-sky-blue rounded-md h-2 md:w-44 w-20 mb-3 font-museo font-light">
			<span class="xl:text-2xl lg:text-lg md:text-lg text-base text-end mt-4">Donde todo el mundo te ve.</span>
		</div>
	</div>
	<!-- Diseño y construcción de stands -->
	<div class="grid md:grid-cols-11 grid-cols-1">
		<div class="col-span-5 flex flex-col justify-center items-end xl:w-3/4 lg:w-3/4 md:w-full w-full font-cocogoose">
			<h3 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-sky-blue text-end font-extralight">
				Diseño y construcción de <br><span class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl tracking-widest">Stands</span>
			</h3>
			<hr class="bg-sky-blue text-sky-blue rounded-md h-2 md:w-44 w-20 mb-3 font-museo font-light">
			<span class="xl:text-2xl lg:text-lg md:text-lg text-base text-end mt-4">Donde todo el mundo te ve.</span>
		</div>
		<div class="col-span-6">
			<?php
			$sliderServicesCI = array(
				"banner1" => get_template_directory_uri() . '/assets/img/banners/comunicacion-integral.jpg',
				"banner2" => get_template_directory_uri() . '/assets/img/banners/comunicacion-integral.jpg',
			);
			get_template_part('template-parts/sliders/services', 'right', array('banners' => $sliderServicesCI));
			?>
		</div>
	</div>
	<!-- Rotulación publicitaria -->
	<div class="grid md:grid-cols-11 grid-cols-1">
		<div class="col-span-6">
			<?php
			$sliderServicesBTL = array(
				"banner1" => get_template_directory_uri() . '/assets/img/banners/rotulacion-publicitaria.jpg',
				"banner2" => get_template_directory_uri() . '/assets/img/banners/rotulacion-publicitaria.jpg',
			);
			get_template_part('template-parts/sliders/services', 'right', array('banners' => $sliderServicesBTL));
			?>
		</div>
		<div class="col-span-5 flex flex-col justify-center items-end xl:w-3/4 lg:w-3/4 md:w-full w-full font-cocogoose">
			<h3 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-sky-blue text-end font-extralight">
				Rotulación <br><span class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl tracking-widest">Publicitaria</span>
			</h3>
			<hr class="bg-sky-blue text-sky-blue rounded-md h-2 md:w-44 w-20 mb-3 font-museo font-light">
			<span class="xl:text-2xl lg:text-lg md:text-lg text-base text-end mt-4">Donde todo el mundo te ve.</span>
		</div>
	</div>
	<!-- Comunicación digital -->
	<div class="grid md:grid-cols-11 grid-cols-1">
		<div class="col-span-5 flex flex-col justify-center items-end xl:w-3/4 lg:w-3/4 md:w-full w-full font-cocogoose">
			<h3 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-sky-blue text-end font-extralight">
				Comunicación <br><span class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl tracking-widest">Digital</span>
			</h3>
			<hr class="bg-sky-blue text-sky-blue rounded-md h-2 md:w-44 w-20 mb-3 font-museo font-light">
			<span class="xl:text-2xl lg:text-lg md:text-lg text-base text-end mt-4">Donde todo el mundo te ve.</span>
		</div>
		<div class="col-span-6">
			<?php
			$sliderServicesCD = array(
				"banner1" => get_template_directory_uri() . '/assets/img/banners/comunicacion-digital.jpg',
				"banner2" => get_template_directory_uri() . '/assets/img/banners/comunicacion-digital.jpg',
			);
			get_template_part('template-parts/sliders/services', 'right', array('banners' => $sliderServicesCD));
			?>
		</div>
	</div>
	<!-- Diseño interior -->
	<div class="grid md:grid-cols-11 grid-cols-1">
		<div class="col-span-6">
			<?php
			$sliderServicesBTL = array(
				"banner1" => get_template_directory_uri() . '/assets/img/banners/diseno-interior.jpg',
				"banner2" => get_template_directory_uri() . '/assets/img/banners/diseno-interior.jpg',
			);
			get_template_part('template-parts/sliders/services', 'right', array('banners' => $sliderServicesBTL));
			?>
		</div>
		<div class="col-span-5 flex flex-col justify-center items-end xl:w-3/4 lg:w-3/4 md:w-full w-full font-cocogoose">
			<h3 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-sky-blue text-end font-extralight">
				Diseño <br><span class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl tracking-widest">Interior</span>
			</h3>
			<hr class="bg-sky-blue text-sky-blue rounded-md h-2 md:w-44 w-20 mb-3 font-museo font-light">
			<span class="xl:text-2xl lg:text-lg md:text-lg text-base text-end mt-4">Donde todo el mundo te ve.</span>
		</div>
	</div>
</section>
<?php
get_footer();
