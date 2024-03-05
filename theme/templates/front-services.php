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
<section class="w-full h-auto flex items-center justify-center">

<div class="md:container md:mx-auto  ">

<div class="container pl-0 pr-0 ">
	<!-- Publicidad Aérea -->
	<div class="flex items-center mt-10  sm:flex-col md:flex-row ">

		<div class="slider overflow-hidden relative md:w-3/5 sm:w-full">

		<?php
		$sliderServicespa = array(
			"banner1" => get_template_directory_uri() . '/assets/img/banners/banner-nosotros.jpg',
			"banner2" => get_template_directory_uri() . '/assets/img/banners/banner-portafolio.jpg',
			"banner3" => get_template_directory_uri() . '/assets/img/banners/banner-home-3.jpg',
		);
		get_template_part('template-parts/sliders/services-pa', 'page', array('banners' => $sliderServicespa));

		?>

			<!-- Bullets -->
  			<div class="absolute bottom-0 right-0 mb-4 mr-4" style="z-index: 10;">
  				<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
    				<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  				<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
   	 			<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
   	 			<span class="bg-white rounded-full w-2 h-2 inline-block mr-2"></span>
  			</div>
				<div class="absolute inset-0  bg-gradient-to-b from-transparent to-black" style="top: 70%; height: 50%; "></div>
		</div>

		<div class="mx-auto sm: ">
			<h2 class=" text-5xl text-sky-blue text-end font-cocogoose">
			Publicidad <br><span class="text-7xl font-bold">Aérea</span>

			</h2>
			<div class=" flex justify-end"> <hr class="bg-sky-blue rounded-md h-2 w-20 mb-3 ">  </div>

			<h2 class="text-end text-2xl mt-4">
			Donde todo el mundo te ve.
			</h2>
		</div>


	</div>
	<!-- comunicación integral -->
	<div class="flex items-center mt-8 sm:flex-col-reverse md:flex-row ">

		<div class="mx-auto">
			<h2 class=" text-5xl text-sky-blue text-end font-cocogoose">
				Comunicación <br><span class="text-7xl font-bold">Integral</span>

			</h2>
			<div class=" flex justify-end"> <hr class="bg-sky-blue rounded-md h-2 w-20 mb-3 ">  </div>
			<h2 class="text-end text-2xl mt-4">
			La imagen de tu marca <br> habla por sí sola. <br>Branding <br>Packaging <br>Logo (Proceso creativo)

			</h2>
		</div>
		<div class="slider overflow-hidden relative md:w-1/2 sm:w-full">

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
