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
	"banner1" => get_template_directory_uri() . '/assets/img/banners/banner-home-1.jpg',
	"banner2" => get_template_directory_uri() . '/assets/img/banners/banner-home-2.jpg',
	"banner3" => get_template_directory_uri() . '/assets/img/banners/banner-home-3.jpg',
);
get_template_part('template-parts/sliders/home', 'page', array('banners' => $sliderHome));

?>
<!-- Slider -->
<section class="w-full h-[4rem] flex justify-start items-end   absolute ">

	<div class="container absolute z-10">


		<h2 class="md:text-[89px] sm:text-6xl text-white font-black leading-none">
			New </br><span class="text-sky-blue">B</span>eginnings
			<div class=" flex justify-start">
				<hr class="bg-sky-blue rounded-md h-1 w-32 -mt-1 mb-36 ">
			</div>
		</h2>
	</div>

</section>

<!-- About Us-->
<section class="relative w-full md:h-[40rem] sm:h-[30rem] flex justify-end items-center bg-cover bg-no-repeat bg-center overflow-hidden" style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/catrin-johnson-ym96FAhQ8o4-unsplash-scaled.jpg');">
	<div class="md:mr-36 sm:mr-10">
		<h2 class="md:text-[89px] sm:text-6xl text-white font-black leading-none text-end">
			<span class="text-sky-blue">Q</span>uiénes </br>somos
		</h2>
		<div class=" flex justify-end">
			<hr class="bg-white rounded-md h-1.5 w-28 -mt-1 mb-8 ">
		</div>
		<h3 class="text-[20px] text-white text-end">Comunicación eficaz para tu marca <br>o producto. <br>Más de 25 años de experiencia en la <br>industria del Marketing & Publicidad.
		</h3>
	</div>
</section>

<!-- Why choosen -->
<section class="relative w-full md:h-[35rem] sm:[60rem] bg-auto bg-white  flex items-center justify-center ">
	<div class="mt-10 mb-10">
		<h2 class="text-[40px] text-sky-blue font-black  text-center"> ¿POR QUÉ ELEGIRNOS?</h2>
		<div class=" flex justify-center">
			<hr class="bg-sky-blue rounded-md h-1 w-24 -mt-1 mb-8 ">
		</div>

		<div class=" container flex justify-evenly md:gap-40 sm:gap-10 mt-10 sm:flex-col md:flex-row space-y-0 ">

			<div class="flex flex-col justify-center  items-center sm:mt-0 border-4">
				<img class="md:size-36 sm:size-20" src="http://umbrella.local/wp-content/uploads/2024/02/Vector.svg" alt="">
				<h2 class="md:text-8xl sm:text-6xl mt-4  text-sky-blue font-black flex text-center"> +200 </h2>
				<span class="font-normal md:text-4xl sm:text-2xl text-sky-blue text-center">CLIENTES</span>
			</div>

			<div class="flex flex-col justify-center  items-center border-4">
				<img class="md:size-36 sm:size-20" src="http://umbrella.local/wp-content/uploads/2024/02/Vector-2.svg" alt="">
				<h2 class="md:text-8xl sm:text-6xl mt-4 text-gray font-black flex text-center"> +250 </h2>
				<span class="font-normal text-4xl text-gray-400 text-center">PROYECTOS</span>
			</div>

			<div class="flex flex-col justify-center  items-center">
				<img class="md:size-36 sm:size-20" src="http://umbrella.local/wp-content/uploads/2024/02/Vector-3.svg" alt="">
				<h2 class="md:text-8xl sm:text-6xl mt-4 text-sky-blue font-black flex text-center"> +25 </h2>
				<span class="font-normal text-4xl text-sky-blue text-center">AÑOS</span>
			</div>
		</div>
	</div>
</section>

<!-- Team -->
<section class="relative w-full md:h-[50rem] sm:h-[30rem] bg-cover bg-center bg-sky-blue flex justify-end items-end" style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/group-of-people-working-out-business-plan-in-an-office-scaled.jpg');">

	<div class="md:mb-24 md:mr-24 sm:mb-10 sm:mr-10">

		<h2 class="md:text-7xl sm:text-5xl text-white font-normal leading-none text-end">
			NUESTRO</br><span class="text-sky-blue font-black md:text-8xl sm:text-5xl">E</span><span class="text-white font-black md:text-8xl sm:text-5xl">QUIPO</span>
		</h2>
		<div class=" flex justify-end">
			<hr class="bg-sky-blue rounded-md h-1.5 w-52 -mt-1 mb-8 ">
		</div>
		<h3 class="text-[20px] text-white text-end">Conócenos... <br>(nos lleva a la pag institucional)
		</h3>
	</div>
</section>

<!-- Clients -->
<section class="relative w-full md:h-[20rem] sm:h-[16rem] bg-auto bg-white  flex justify-center mt-20 ">
	<div>
		<h2 class="text-[40px] text-sky-blue font-black justify-center"> NUESTROS CLIENTES</h2>
		<div class=" flex justify-center">
			<hr class="bg-sky-blue rounded-md h-1 w-24 -mt-1 mb-8 ">
		</div>
	</div>
</section>

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
