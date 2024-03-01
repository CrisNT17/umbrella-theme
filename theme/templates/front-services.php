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
<section class="w-full h-auto flex items-center justify-start">

<div class="container ml-0 mr-1 pl-0 pr-0">
	<!-- Publicidad Aérea -->
	<div class="flex items-center mt-10">

		<div class="slider overflow-hidden relative w-3/5  ">
			<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/78cf2973-3dde-4f98-be95-98cedfbda7c7.jpg" alt="">

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

		<div class="mx-auto ">
			<h2 class=" text-5xl text-sky-blue text-end">
			Publicidad <br><span class="text-7xl font-bold">Aérea</span>

			</h2>
			<div class=" flex justify-end"> <hr class="bg-sky-blue rounded-md h-2 w-20 mb-3 ">  </div>

			<h2 class="text-end text-2xl mt-4">
			Donde todo el mundo te ve.
			</h2>
		</div>


	</div>
	<!-- comunicación integral -->
	<div class="flex items-center mt-8">

		<div class="mx-auto">
			<h2 class=" text-5xl text-sky-blue text-end ">
				Comunicación <br><span class="text-7xl font-bold">Integral</span>

			</h2>
			<div class=" flex justify-end"> <hr class="bg-sky-blue rounded-md h-2 w-20 mb-3 ">  </div>
			<h2 class="text-end text-2xl mt-4">
			La imagen de tu marca <br> habla por sí sola. <br>Branding <br>Packaging <br>Logo (Proceso creativo)

			</h2>
		</div>
		<div class="slider overflow-hidden relative w-1/2 h-full">
			<img class="w-full" src="http://umbrella.local/wp-content/uploads/2024/02/disenador-grafico-haciendo-logo-cuaderno-scaled.jpg" alt="">

						<!-- Bullets -->
  <div class="absolute bottom-0 right-0 mb-4 mr-4" style="z-index: 10">
  	<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
    	<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  	<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
   	 <span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
   	 <span class="bg-white rounded-full w-2 h-2 inline-block mr-2"></span>
  </div>
			<div class="absolute inset-0  bg-gradient-to-b from-transparent to-black" style="top: 70%; height: 50%; "></div>
		</div>
	</div>

	<!-- Publicidad BTL -->

	<div class="flex items-center mt-8">

		<div class="w-3/5 h-[34rem]  overflow-hidden slider relative">
			<img class="w-full h-full object-cover " src="http://umbrella.local/wp-content/uploads/2024/02/d70f23f6-4a0e-4ac7-9809-9b7c5a789908.jpg" alt="">

						<!-- Bullets -->
  			<div class="absolute bottom-0 right-0 mb-4 mr-4" style="z-index: 10">
  				<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  			  	<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  				<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  			 	 <span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  			 	 <span class="bg-white rounded-full w-2 h-2 inline-block mr-2"></span>
  			</div>
			<div class="absolute inset-0  bg-gradient-to-b from-transparent to-black" style="top: 70%; height: 50%; "></div>
		</div>
		<div class="mx-auto">
			<h2 class=" text-5xl text-sky-blue text-end">
			Publicidad <br><span class="text-7xl font-bold">BTL</span>

			</h2>
					<div class=" flex justify-end"> <hr class="bg-sky-blue rounded-md h-2 w-20 mb-3 ">  </div>
			<h2 class="text-end text-2xl mt-4">
			Donde todo el mundo te ve.
			</h2>
		</div>


	</div>
	<!-- Diseño y construcción -->
	<div class="flex items-center  mt-8">

		<div class="mx-auto">
			<h2 class=" text-5xl text-sky-blue text-end">
			Diseño y construcción de <br><span class="text-7xl font-bold">Stands</span>

			</h2>
			<div class=" flex justify-end"> <hr class="bg-sky-blue rounded-md h-2 w-20 mb-3 ">  </div>
			<h2 class="text-end text-2xl mt-4">
			Creatividad y estrategia para <br> posicionamiento de tu marca en ferias,<br> exposiciones, eventos, centros<br> comerciales... <br> ¡Y más!

			</h2>
		</div>
		<div class="slider overflow-hidden relative w-1/2">
			<img class="w-full h-[32rem]" src="http://umbrella.local/wp-content/uploads/2024/02/aa1093d7-ed7d-4c61-aa04-9a017ae8c880.jpeg" alt="">
			<!-- botón -->
			<button class=" absolute bottom-5 right-5 border-white bg-transparent  text-white font-bold py-2 px-4 rounded" style="border-radius: 25px; border-width: 2px; z-index: 10;">Ver más... </button>


			<div class="absolute inset-0  bg-gradient-to-b from-transparent to-black" style="top: 70%; height: 50%; "></div>
		</div>


	</div>
	<!-- Rotulación -->
	<div class="flex items-center  mt-8 ">

		<div class="w-3/5 h-full slider overflow-hidden relative  ">
			<img class="w-full h-[32rem]" src="http://umbrella.local/wp-content/uploads/2024/02/65876-scaled.jpg" alt="">

						<!-- Bullets -->
  			<div class="absolute bottom-0 right-0 mb-4 mr-4" style="z-index: 10">
  				<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  			  	<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  				<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  			 	 <span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  			 	 <span class="bg-white rounded-full w-2 h-2 inline-block mr-2"></span>
  			</div>
			<div class="absolute inset-0  bg-gradient-to-b from-transparent to-black" style="top: 70%; height: 50%; "></div>
		</div>
		<div class="mx-auto">
			<h2 class=" text-5xl text-sky-blue text-end">
			Rotulación <br><span class="text-7xl font-bold">Publicitaria</span>

			</h2>
			<div class=" flex justify-end"> <hr class="bg-sky-blue rounded-md h-2 w-20 mb-3 ">  </div>
			<h2 class="text-end text-2xl mt-4">
			La fuerza de tu marca en <br>exteriores e interiores

			</h2>
		</div>


	</div>
	<!-- Comunicación digital -->
	<div class="flex items-center  mt-8">

		<div class="mx-auto">
			<h2 class=" text-5xl text-sky-blue text-end">
			Comunicación <br><span class="text-7xl font-bold">Digital</span>

			</h2>
			<div class=" flex justify-end"> <hr class="bg-sky-blue rounded-md h-2 w-20 mb-3 ">  </div>
			<h2 class="text-end text-2xl mt-4">

			Conversación y conexión digital entre tu <br> marca y tus clientes. <br> RRSS • Desarrollo web • CRM <br>Pauta digital (FB, IG, Google, YT
			</h2>
		</div>

		<div class="slider overflow-hidden relative w-1/2">
			<img class="w-full h-[32rem]" src="http://umbrella.local/wp-content/uploads/2024/02/jovenes-usando-carretes-scaled.jpg" alt="">

			<!-- Bullets -->
			<div class="absolute bottom-0 right-0 mb-4 mr-4" style="z-index: 10">
  	<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
    	<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  	<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
   	 <span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
   	 <span class="bg-white rounded-full w-2 h-2 inline-block mr-2"></span>
  </div>
		</div>
	</div>
	<!-- Diseño Interior -->
	<div class="flex items-center mt-8 mb-12">

		<div class="slider overflow-hidden relative w-3/5">
			<img class="w-full" src="http://umbrella.local/wp-content/uploads/2024/02/cerrar-proyecto-dibujo-arquitecto-scaled.jpg" alt="">

						<!-- Bullets -->
  <div class="absolute bottom-0 right-0 mb-4 mr-4"style="z-index: 10 ">
  	<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
    	<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
  	<span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
   	 <span class="bg-white rounded-full w-2 h-2 inline-block mr-3"></span>
   	 <span class="bg-white rounded-full w-2 h-2 inline-block mr-2"></span>
  </div>
			<div class="absolute inset-0  bg-gradient-to-b from-transparent to-black" style="top: 70%; height: 50%; "></div>
		</div>
		<div class="mx-auto">
			<h2 class=" text-5xl text-sky-blue text-end">
			Diseño <br><span class="text-7xl font-bold">Interior</span>

			</h2>
			<div class=" flex justify-end"> <hr class="bg-sky-blue rounded-md h-2 w-20 mb-3 ">  </div>
			<h2 class="text-end text-2xl mt-4">
			Diseño interior para autoservicios, <br> farmacias, locales y presencia en <br>percha. (videos)
			</h2>
		</div>


	</div>

</div>

</section>
<?php
get_footer();
