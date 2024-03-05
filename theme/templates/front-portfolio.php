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
<section class="container ">
	<!-- Testimoniales -->
	<section class="w-full bg-auto bg-white  flex items-start justify-center">
		<div class="container  sm:w-full sm:p-0 md:p-20">
			<h2 class="text-[40px] text-sky-blue font-bold  text-center md:mt-10 sm:mt-4"> Testimoniales</h2>
			<hr class="bg-sky-blue text-sky-blue rounded-md h-1 w-24 mb-8 mx-auto">
			<div class=" container flex justify-center gap-40  mx-0 border-x-0 p-0">
				<div class="slider grid grid-cols-1 grid-rows-1 gap-5 overflow-hidden  relative  mx-0">
					<div class="slides grid grid-cols-3 gap-5 transition-transform duration-300">
						<div class="slide flex flex-col col-span-2 row-span-3 justify-center  items-center">
							<img class="w-full h-full" src="<?= get_template_directory_uri() . '/assets/img/banners/portafolio-1.jpg' ?>" alt="">
						</div>
						<div class="slide flex flex-col justify-center  items-center">
							<img class="w-full h-full" src="<?= get_template_directory_uri() . '/assets/img/banners/portafolio-3.jpg' ?>" alt="">
						</div>
						<div class="slide flex flex-col justify-center  items-center">
							<img class="w-full h-full" src="<?= get_template_directory_uri() . '/assets/img/banners/portafolio-1.jpg' ?>" alt="">
						</div>
						<div class="slide flex flex-col justify-center  items-center">
							<img class="w-full h-full" src="<?= get_template_directory_uri() . '/assets/img/banners/portafolio-4.jpg' ?>" alt="">
						</div>
					</div>
				</div>
			</div>
			<?php
			$testimonials = array(
				"test1" => array(
					'name' => 'Anthony Almeida, VETERINO',
					'description' => 'El profesionalismo de UMBRELLA SOLUTIONS es de calidad internacional. Trabajan con los mejores materiales y la disposición de su equipo para cualquier proyecto se refleja en los resultados finales. ¡Superan expectativas!'
				),
				"test2" => array(
					'name' => 'Anthony Almeida, VETERINO',
					'description' => 'El profesionalismo de UMBRELLA SOLUTIONS es de calidad internacional. Trabajan con los mejores materiales y la disposición de su equipo para cualquier proyecto se refleja en los resultados finales. ¡Superan expectativas!'
				)
			);
			get_template_part('template-parts/sliders/testimonial', 'slider', array('testimonials' => $testimonials)); ?>
			<!-- <p class="text-center md:text-3xl leading-snug mt-16 sm:text-lg">El profesionalismo de UMBRELLA SOLUTION'S es de calidad <br> internacional. Trabajan con los mejores materiales y la <br> disposición de su equipo para cualquier proyecto se refleja en <br> los resultados finales. ¡Superan expectativas!</p>
			<span class="block text-center md:text-3xl text-lg text-gray leading-snug mt-5 italic">Anthony Almeida, VETERINO</span> -->
		</div>
			<button class="prev absolute top-1/2 left-0 transform -translate-y-1/2 text-4xl"><</button>
  			<button class="next absolute top-1/2 right-0 transform -translate-y-1/2 text-4xl">></button>

			<h2 class="text-center md:text-3xl leading-snug mt-16 sm:text-lg">El profesionalismo de UMBRELLA SOLUTION'S es de calidad <br> internacional. Trabajan con los mejores materiales y la <br> disposición de su equipo para cualquier proyecto se refleja en <br> los resultados finales. ¡Superan expectativas!</h2>
			<h2 class="text-center  md:text-3xl text-black leading-snug mt-5 sm:text-lg">Anthony Almeida, VETERINO</h2>
	</div>


</section>

<section class="w-full md:h-[62rem] sm:h-auto bg-auto bg-white  flex items-end justify-center ">

	<div class="container p-0 ">

		<div class="flex items-center justify-center relative">

			<img class="size-36" src="http://umbrella.local/wp-content/uploads/2024/02/g3924.svg" alt="">
			<!-- Bullets -->
	<div class="absolute top-0  md:-mt-28 md:mb-4 sm:-mt-20 sm:mb-2 mr-4"style="z-index: 10 ">
  	<span class="bg-sky-blue rounded-full w-4 h-4 inline-block mr-14 hover:bg-white focus:ring focus:bg-sky-blue"></span>
    	<span class="bg-sky-blue rounded-full w-4 h-4 inline-block mr-14"></span>
  	<span class="bg-sky-blue rounded-full w-4 h-4 inline-block mr-14"></span>
   	 <span class="bg-sky-blue rounded-full w-4 h-4 inline-block "></span>
  </div>

			<h2 class="md:text-8xl sm:text-6xl font-black leading-none font-cocogoose">
	</section>
	<!-- Premios -->
	<section class="container">
		<div class="flex justify-center items-center gap-5 my-10">
			<img class="xl:size-36 lg:size-28 md:size-20 size-16" src="<?= get_template_directory_uri() . '/assets/img/icons/cup-icon.svg' ?>" alt="Cup icon">
			<h2 class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl font-cocogoose">
				<span class="text-sky-blue">P<span class="text-light-gray">remios</span>
			</h2>
		</div>
		<?php
		$sliderAwards = array(
			"banner1" => array(
				'image' => get_template_directory_uri() . '/assets/img/banners/premio.jpg',
				'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut'
			),
			"banner2" => array(
				'image' => get_template_directory_uri() . '/assets/img/banners/premio.jpg',
				'description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut'
			)
		);
		get_template_part('template-parts/sliders/awards', 'slider', array('banners' => $sliderAwards)); ?>
	</section>
</section>

<?php
get_footer();
