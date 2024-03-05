<?php

/**
 * The main template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

//  Menu
get_header();

$sliderHome = array(
	"banner1" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/banner-home-1.jpg',
		'title' => 'New' . PHP_EOL . 'Beginnings',
		'description' => null
	),
	"banner2" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/banner-home-2.jpg',
		'title' => null,
		'description' => 'Pasión por la publicidad y comunicación en los genes.'
	),
	"banner3" => array(
		'image' => get_template_directory_uri() . '/assets/img/banners/banner-home-3.jpg',
		'title' => null,
		'description' => 'Comunicamos, creamos y resolvemos tus necesidades, para fortalecer la exposición de tu marca en diferentes medios.'
	),
);
get_template_part('template-parts/sliders/home', 'page', array('banners' => $sliderHome));
?>

<!-- About Us-->
<section class="relative bg-cover bg-no-repeat bg-center overflow-auto" style="background-image: url('<?= get_template_directory_uri() . '/assets/img/banners/banner-quienes-somos.jpg' ?>');">
	<div class="container flex flex-col justify-center md:items-end items-center md:mt-32 mt-16 md:mb-24 mb-16">
		<h2 class="xl:text-9xl lg:text-8xl md:text-7xl sm:text-6xl text-5xl text-white font-cocogoose font-light md:text-end text-center">
			<span class="text-sky-blue">Q</span>uiénes </br>somos
		</h2>
		<hr class="bg-white text-white rounded-md h-1.5 w-28 mb-8 ">
		<span class="xl:text-4xl lg:text-[1.65rem] md:text-xl text-xl font-museo font-light text-white md:text-end text-center md:block hidden">Comunicación eficaz para tu marca <br>o producto. <br>Más de 25 años de experiencia en la <br>industria del Marketing & Publicidad.</span>
		<span class="xl:text-4xl lg:text-[1.65rem] md:text-xl text-xl font-museo font-light text-white text-center md:hidden block">Comunicación eficaz para tu marca o producto. <br> Más de 25 años de experiencia en la industria del Marketing & Publicidad.</span>
	</div>
</section>

<!-- Why choosen -->
<section class="container relative w-full bg-auto bg-white  flex items-center justify-center ">
	<div class="md:my-20 my-10">
		<h2 class="xl:text-6xl lg:text-5xl md:text-4xl text-3xl text-sky-blue font-cocogoose text-center uppercase"> ¿POR QUÉ ELEGIRNOS?</h2>
		<hr class="bg-sky-blue text-sky-blue rounded-md h-1 w-24 mt-1 md:mb-20 mb-10 mx-auto">
		<div class="container flex md:flex-row flex-col justify-center items-center xl:gap-40 lg:gap-28 md:gap-20 gap-10 space-y-5">
			<div class="flex flex-col justify-center items-center">
				<div class="xl:size-36 lg:size-28 md:size-20 size-20">
					<img class="h-full mx-auto" src="<?= get_template_directory_uri() . '/assets/img/icons/customers-icon.svg' ?>" alt="">
				</div>
				<h2 class="xl:text-8xl lg:text-7xl md:text-6xl text-5xl mt-4 text-sky-blue font-museo font-black flex text-center"> +200 </h2>
				<span class="xl:text-4xl lg:text-3xl md:text-2xl text-xl text-sky-blue font-museo font-medium text-center uppercase">CLIENTES</span>
			</div>
			<div class="flex flex-col justify-center items-center">
				<div class="xl:size-36 lg:size-28 md:size-20 size-20">
					<img class="h-full mx-auto" src="<?= get_template_directory_uri() . '/assets/img/icons/projects-icon.svg' ?>" alt="">
				</div>
				<h2 class="xl:text-8xl lg:text-7xl md:text-6xl text-5xl mt-4 font-museo font-black flex text-center">+250 </h2>
				<span class="xl:text-4xl lg:text-3xl md:text-2xl text-xl text-gray-400 font-museo font-medium text-center uppercase">PROYECTOS</span>
			</div>
			<div class="flex flex-col justify-center  items-center">
				<div class="xl:size-36 lg:size-28 md:size-20 size-20">
					<img class="h-full mx-auto" src="<?= get_template_directory_uri() . '/assets/img/icons/years-icon.svg' ?>" alt="">
				</div>
				<h2 class="xl:text-8xl lg:text-7xl md:text-6xl text-5xl mt-4 text-sky-blue font-museo font-black flex text-center"> +25 </h2>
				<span class="xl:text-4xl lg:text-3xl md:text-2xl text-xl text-sky-blue font-museo font-medium text-center uppercase">AÑOS</span>
			</div>
		</div>
	</div>
</section>

<!-- Team -->
<section class="xl:h-[850px] lg:h-[650px] md:h-[550px] h-[400px] bg-cover bg-no-repeat bg-center overflow-auto" style="background-image: url('<?= get_template_directory_uri() . '/assets/img/banners/cta-nosotros.jpg' ?>');">
	<div class="container h-full flex flex-col md:justify-end justify-center md:items-end items-center xl:pb-32 lg:pb-24 md:pb-20 pb-0">
		<h2 class="xl:text-5xl lg:text-4xl md:text-3xl text-3xl text-white font-cocogoose font-extralight md:text-end text-center uppercase">
			Nuestro <br><div class="xl:text-6xl lg:text-5xl md:text-4xl text-4xl"><span class="text-sky-blue">E</span>quipo</div>
		</h2>
		<hr class="bg-sky-blue text-sky-blue rounded-md h-1.5 mt-1 w-28 md:mb-8 mb-4">
		<a href="<?= get_site_url() . '/nosotros' ?>" class="xl:text-4xl lg:text-[1.65rem] md:text-xl text-2xl font-museo font-light text-white md:text-end text-center">Conócenos ...</a>
	</div>
</section>

<?php
$customers = array(
	"customer1" => array(
		'image' => get_template_directory_uri() . '/assets/img/logos/customers/nutricia.png',
	),
	"customer2" => array(
		'image' => get_template_directory_uri() . '/assets/img/logos/customers/sanofi.png',
	),
	"customer3" => array(
		'image' => get_template_directory_uri() . '/assets/img/logos/customers/bristal-myers.png',
	),
	"customer4" => array(
		'image' => get_template_directory_uri() . '/assets/img/logos/customers/cnt.png',
	),
	"customer5" => array(
		'image' => get_template_directory_uri() . '/assets/img/logos/customers/novartis.png',
	),
	"customer6" => array(
		'image' => get_template_directory_uri() . '/assets/img/logos/customers/qroma.png',
	),
	"customer7" => array(
		'image' => get_template_directory_uri() . '/assets/img/logos/customers/sima.png',
	),
	"customer8" => array(
		'image' => get_template_directory_uri() . '/assets/img/logos/customers/recalcine.png',
	),
	"customer9" => array(
		'image' => get_template_directory_uri() . '/assets/img/logos/customers/stendhal.png',
	),
	"customer10" => array(
		'image' => get_template_directory_uri() . '/assets/img/logos/customers/mayekawa.png',
	),
	"customer11" => array(
		'image' => get_template_directory_uri() . '/assets/img/logos/customers/habitat-iii.png',
	)
);
// Customers
get_template_part('template-parts/sliders/customers', 'slider', array('banners' => $customers));
?>

<!-- Projects -->
<section class=" relative w-full md:h-[55rem] sm:h-[20rem] bg-cover bg-center " style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/white-concrete-wall-5-scaled.jpg');">
	<div class="container w-full h-full  relative translate-y-10 ">

		<div class="md:w-full   md:border-r-4 sm:border-r-2 border-sky-blue relative mt-10 flex items-end ">
			<div class=" md:w-[90%] sm:w-full h-full grid grid-cols-4 grid-rows-2 md:gap-3 sm:gap-1   ">
				<div class="col-span-2 row-span-2">
					<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244253804_1913345092171178_377135258163533003_n.jpeg" alt="Imagen 1" class="w-full h-full object-cover">
				</div>
				<div class=" col-span-1">
					<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/37282239_928063084032722_6560287920136126464_n.jpeg" alt="Imagen 2" class="w-full h-full object-cover">
				</div>
				<div class=" col-span-1">
					<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244079091_1913345055504515_4195074341419206271_n.jpeg" alt="Imagen 3" class="w-full h-full object-cover">
				</div>
				<div class="relative col-span-2 ">
					<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/37256962_928062957366068_515493240565137408_n.jpeg" alt="Imagen 4" class="w-full h-full object-cover">
					<button class=" absolute sm:text-[8px] md:text-base md:bottom-5 right-5 sm:bottom-1 border-white bg-transparent  text-white font-bold md:py-3 sm:py-0.25 md:px-5 sm:px-0.5 rounded " style="border-radius: 25px; border-width: 2px;">Ver más... </button>
				</div>



			</div>
			<span class="block text-4xl text-sky-blue -rotate-90  font-black md:text-[60px] sm:text-[16px] uppercase md:w-20 sm:w-6 md:-translate-y-6 md:translate-x-8 sm:translate-x-1 sm:translate-y-1">proyectos</span>

		</div>

	</div>
</section>

<?php
get_footer();
?>
