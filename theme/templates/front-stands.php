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
	<div class="xl:my-24 lg:my-20 md:my-20 my-10">
		<img class="xl:size-24 lg:size-20 md:size-20 size-16 mx-auto" src="<?= get_template_directory_uri() . '/assets/img/icons/umbrella-icon.svg' ?>" alt="Umbrella icon">
		<p class="xl:text-4xl lg:text-3xl md:text-2xl text-xl text-center md:w-[90%] w-full mx-auto md:my-20 my-10 font-museo font-light">Nuestra especialidad son los stands, sacamos el mayor potencial <br> para mostrar lo mejor de tu marca y que brille sin importar el lugar.</p>
		<!-- Bullets -->
		<div class="flex justify-center items-center lg:gap-10 md:gap-8 gap-6">
			<div class="lg:size-5 md:size-4 size-3 bg-sky-blue rounded-full"></div>
			<div class="lg:size-5 md:size-4 size-3 bg-sky-blue rounded-full"></div>
			<div class="lg:size-5 md:size-4 size-3 bg-sky-blue rounded-full"></div>
		</div>
	</div>
	<!-- Stand Titan -->
	<div class="grid md:grid-cols-2 grid-cols-1 place-content-center">
		<div class="flex justify-center items-center p-10">
			<img class="w-full my-10" src="<?= get_template_directory_uri() . '/assets/img/logos/titan-logo.jpg' ?>" alt="">
		</div>
		<div class="flex items-center justify-center xl:text-3xl lg:text-2xl md:text-xl text-lg text-center md:my-20 my-10 font-museo font-light">
			<p>Nuestro cliente nos pidió un stand en el cual esté inspirado la esencia de su marca, a traves de propuestas alineadas a su branding este fue el resultado.</p>
		</div>
	</div>
	<div class="grid md:grid-cols-5 grid-cols-1 gap-x-10 gap-y-5 place-content-center my-10">
		<a class="col-span-3 " data-fancybox="gallery-titan" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-TITAN.mp4">
			<video class="w-full h-full object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-TITAN.mp4" type="video/mp4" controls></video>
		</a>
		<a class="col-span-2 row-span-2" data-fancybox="gallery-titan" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Stand-TITAN.mp4">
			<video class="w-full h-full object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Stand-TITAN.mp4" type="video/mp4" controls></video>
		</a>
		<a class="col-span-3 " data-fancybox="gallery-titan" data-src="<?= get_template_directory_uri() . '/assets/img/stands/titan-stand-1.jpg' ?>">
			<img class="w-full h-96 object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stands/titan-stand-1.jpg' ?>" alt="">
		</a>



	</div>
	<!-- Stand Pan -->
	<div class="grid md:grid-cols-2 grid-cols-1 place-content-center">
		<div class="flex justify-center items-center p-10">
			<img class="w-full my-10" src="<?= get_template_directory_uri() . '/assets/img/logos/logo-pan.jpg' ?>" alt="">
		</div>
		<div class="flex items-center justify-center xl:text-3xl lg:text-2xl md:text-xl text-lg text-center md:my-20 my-10 font-museo font-light">
			<p>Nuestro cliente nos pidió un stand en el cual esté inspirado la esencia de su marca, a traves de propuestas alineadas a su branding este fue el resultado.</p>
		</div>
	</div>
	<div class="grid md:grid-cols-10 grid-cols2 gap-x-5 place-content-center">
		<a class="col-span-6 row-span-2" data-fancybox="gallery-pan" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-HAYPAN.mp4">
			<video class="w-full h-full object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-HAYPAN.mp4" type="video/mp4" controls></video>
		</a>
		<a class="col-span-2" data-fancybox="gallery-pan" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Stand-HAYPAN.mp4">
			<video class="w-full h-full object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Stand-HAYPAN.mp4" type="video/mp4" controls></video>
		</a>
		<a class="col-span-2" data-fancybox="gallery-pan" data-src="<?= get_template_directory_uri() . '/assets/img/stands/pan-stand-1.jpg' ?>">
			<img class="w-full h-full object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stands/pan-stand-1.jpg' ?>" alt="">
		</a>
	</div>
	<!-- Stand Montero -->
	<div class="grid md:grid-cols-2 grid-cols-1 place-content-center">
		<div class="flex justify-center items-center p-10 ">
			<img class="w-full my-10 " src="<?= get_template_directory_uri() . '/assets/img/logos/logo-montero.jpg' ?>" alt="">
		</div>
		<div class="flex items-center justify-center xl:text-3xl lg:text-2xl md:text-xl text-lg text-center md:my-20 my-10 font-museo font-light">
			<p>Nuestro cliente nos pidió un stand en el cual esté inspirado la esencia de su marca, a traves de propuestas alineadas a su branding este fue el resultado.</p>
		</div>
	</div>
	<div class="grid md:grid-cols-10 grid-cols-2 gap-5 place-content-center md:p-0 p-10">
		<a class="col-span-6 row-span-2 " data-fancybox="gallery-montero" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-MONTERO.mp4">
			<video class="w-full h-full object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-MONTERO.mp4" type="video/mp4" controls></video>
		</a>
		<a class="col-span-2" data-fancybox="gallery-montero" data-src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-1.jpg' ?>">
			<img class="w-full h-72 object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-1.jpg' ?>" alt="">
		</a>
		<a class="col-span-2" data-fancybox="gallery-montero" data-src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-2.jpg' ?>">
			<img class="w-full h-72 object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-2.jpg' ?>" alt="">
		</a>
		<a class="col-span-2" data-fancybox="gallery-montero" data-src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-3.jpg' ?>">
			<img class="w-full h-72 object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-3.jpg' ?>" alt="">
		</a>
		<a class="col-span-2" data-fancybox="gallery-montero" data-src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-4.jpg' ?>">
			<img class="w-full h-72 object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-4.jpg' ?>" alt="">
		</a>




	</div>
	<div class="lg:w-3/4 md:w-full w-full mx-auto lg:my-28 md:my-20 my-10">
		<h3 class="text-sky-blue text-center md:text-6xl text-2xl lg:mb-28 md:mb-20 mb-10  font-cocogoose font-extralight">Nuestros clientes</h3>
		<div class="grid md:grid-cols-2 grid-cols-1 gap-6 place-content-center">
			<div class="flex flex-col justify-center items-center gap-5">
				<a class="col-span-6 row-span-2 " data-fancybox="gallery-happycat" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-HAPPY-CAT-.mp4">
					<video class="w-full h-72 object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-HAPPY-CAT-.mp4" type="video/mp4" controls></video>
				</a>

				<span class="text-sky-blue lg:text-5xl text-xl font-cocogoose font-extralight">Propuesta</span>
			</div>
			<div class="flex flex-col justify-center items-center gap-5">
				<a class="col-span-6 row-span-2 " data-fancybox="gallery-happycat" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Stand-HAPPY-CAT.mp4">
					<video class="w-full h-72 object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Stand-HAPPY-CAT.mp4" type="video/mp4" controls></video>
				</a>
				<span class="text-sky-blue lg:text-5xl text-xl font-cocogoose font-extralight">Creación</span>
			</div>
		</div>
	</div>
</section>
<script>
	Fancybox.bind('[data-fancybox="gallery-titan"]', {});
	Fancybox.bind('[data-fancybox="gallery-pan"]', {});

	Fancybox.bind('[data-fancybox="gallery-montero"]', {});

	Fancybox.bind('[data-fancybox="gallery-happycat"]', {});
</script>
<?php
get_footer();
