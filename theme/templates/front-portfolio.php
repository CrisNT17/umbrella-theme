<?php

/**
 * Template Name: Portafolio
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
 get_template_part('template-parts/banners/internal', 'page')
?>
<section class="container">
<!-- Testimoniales -->
<section class="w-full h-[50rem] bg-auto bg-white  flex items-start justify-center">
	<div class="container ">
		<h2 class="text-[40px] text-sky-blue font-bold  text-center mt-10"> Testimoniales</h2>
		<div class=" flex justify-center"> <hr class="bg-sky-blue rounded-md h-1 w-24 -mt-1 mb-8 ">  </div>
		<div class=" container flex justify-strech gap-40">

			<div class="slider grid grid-cols-1 grid-rows-1 gap-5 overflow-hidden relative">
				<div class="slides grid grid-cols-3 gap-5 transition-transform duration-300">
					<div class="slide flex flex-col col-span-2 row-span-3 justify-center  items-center">
						<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244253804_1913345092171178_377135258163533003_n.jpeg" alt="">
					</div>
					<div class="slide flex flex-col justify-center  items-center">
						<img class ="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244250619_1913344878837866_7039778878385101219_n.jpeg" alt="">
					</div>
					<div class="slide flex flex-col justify-center  items-center">
						<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244273434_1913344755504545_8294063936522850181_n.jpeg" alt="">
					</div>
					<div class="slide flex flex-col justify-center  items-center">
						<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244079091_1913345055504515_4195074341419206271_n.jpeg" alt="">
					</div>
				</div>
			</div>
		</div>
			<button class="prev absolute top-1/2 left-0 transform -translate-y-1/2 text-4xl"><</button>
  			<button class="next absolute top-1/2 right-0 transform -translate-y-1/2 text-4xl">></button>

			<h2 class="text-center text-3xl leading-snug mt-16">El profesionalismo de UMBRELLA SOLUTION'S es de calidad <br> internacional. Trabajan con los mejores materiales y la <br> disposición de su equipo para cualquier proyecto se refleja en <br> los resultados finales. ¡Superan expectativas!</h2>
			<h2 class="text-center  text-3xl text-black leading-snug mt-5">Anthony Almeida, VETERINO</h2>
	</div>


</section>

<section class="w-full h-[62rem] bg-auto bg-white  flex items-end justify-center">

	<div class="container">

		<div class="flex items-center justify-center relative">

			<img class="size-36" src="http://umbrella.local/wp-content/uploads/2024/02/g3924.svg" alt="">
			<!-- Bullets -->
	<div class="absolute top-0  -mt-28 mb-4 mr-4"style="z-index: 10 ">
  	<span class="bg-sky-blue rounded-full w-4 h-4 inline-block mr-14 hover:bg-white focus:ring focus:bg-sky-blue"></span>
    	<span class="bg-sky-blue rounded-full w-4 h-4 inline-block mr-14"></span>
  	<span class="bg-sky-blue rounded-full w-4 h-4 inline-block mr-14"></span>
   	 <span class="bg-sky-blue rounded-full w-4 h-4 inline-block "></span>
  </div>

			<h2 class="text-8xl font-black leading-none">
				<span class="text-sky-blue">P<span class="text-light-gray">remios</span>
			</h2>

		</div>
		<h2 class="flex items-center justify-center leading-snug text-6xl">
			Mejor stand
		</h2>
		<h2 class="flex items-center justify-center leading-snug text-6xl font-black">
			EXPO GANADERA 2022
		</h2>
	</div>
</section>

<section class="w-full h-[60rem] bg-auto bg-white  flex items-start justify-center">
	<div class="container">

			<div class="slider  overflow-hidden relative">
				<div class="slides  transition-transform duration-300">
					<div class="slide flex  justify-center  items-center">
						<img class="size-7/12" src="http://umbrella.local/wp-content/uploads/2024/02/image.png" alt="">
					</div>
				</div>
				<button class="prev absolute top-1/2 left-0 transform -translate-y-1/2 text-4xl"><</button>
  				<button class="next absolute top-1/2 right-0 transform -translate-y-1/2 text-4xl">></button>
			</div>

			  <h2 class="flex items-center justify-center text-center text-3xl leading-snug mt-8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed <br> diam nonummy nibh euismod tincidunt ut laoreet dolore <br> magna aliquam erat volutpat. Ut wisi enim ad minim veniam,<br> quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut  </h2>
	</div>
</section>
</section>

<?php
get_footer();
