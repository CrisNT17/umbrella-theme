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

?>
<section class="w-full h-[50rem] bg-cover bg-center flex justify-start items-center" >
	<?= get_template_part('template-parts/banners/internal', 'page') ?>
	<div class="container">
	<h2 class="text-[89px] text-white font-black leading-none">
			New </br><u class="text-sky-blue"><span class="text-sky-blue">B</span>e</u>ginnings
		</h2>
	</div>
</section>

<!-- Why choosen -->
<section class="w-full h-[50rem] bg-auto bg-white  flex items-start justify-start ">
	<div class="container">

		<h2 class="text-[40px] text-sky-blue font-black  text-center"> TESTIMONIALES</h2>
		<div style="image-rendering: url('');"></div>
		<div class=" container flex justify-evenly gap-40">

		<div class="slider grid grid-cols-3 grid-rows-3 gap-3 overflow-hidden relative">

			<div class="flex flex-col col-span-2 row-span-3 justify-center  items-center">
				<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244253804_1913345092171178_377135258163533003_n.jpeg" alt="">
			</div>
			<div class="flex flex-col justify-center  items-center">
			<img class ="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244250619_1913344878837866_7039778878385101219_n.jpeg" alt="">
			</div>
			<div class="flex flex-col justify-center  items-center">
				<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244273434_1913344755504545_8294063936522850181_n.jpeg" alt="">
			</div>
			<div class="flex flex-col justify-center  items-center">
				<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244079091_1913345055504515_4195074341419206271_n.jpeg" alt="">
			</div>
			<button class="prev absolute top-1/2 left-0 transform -translate-y-1/2"><</button>
  			<button class="next absolute top-1/2 right-0 transform -translate-y-1/2">></button>
		</div>
	</div>
	</div>
</section>
<section>
<div class="slider grid grid-cols-3 gap-4 overflow-hidden relative">
  <div class="slides grid grid-cols-3 transition-transform duration-300">
    <div class="slide bg-gray-200">Slide 1</div>
    <div class="slide bg-gray-300">Slide 2</div>
    <div class="slide bg-gray-400">Slide 3</div>
  </div>
  <button class="prev absolute top-1/2 left-0 transform -translate-y-1/2">Anterior</button>
  <button class="next absolute top-1/2 right-0 transform -translate-y-1/2">Siguiente</button>
</div>
</section>


<?php
get_footer();
