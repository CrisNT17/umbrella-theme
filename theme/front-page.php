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
?>
<!-- Slider -->
<section class="w-full h-[50rem] flex justify-start items-end bg-cover bg-no-repeat bg-center" style="background-image: url('<?= get_template_directory_uri() . '/assets/img/banner-home.jpg' ?>');">
	<div class="container">
		<h2 class="text-[89px] text-white font-black leading-none">
			New </br><u class="text-sky-blue"><span class="text-sky-blue">B</span>e</u>ginnings
		</h2>
	</div>

</section>

<!-- About Us-->
<section class="w-full h-[50rem] flex justify-end items-end bg-cover bg-no-repeat bg-center" style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/catrin-johnson-ym96FAhQ8o4-unsplash-scaled.jpg');">
	<div>
		<h2 class="text-[89px] text-white font-black leading-none">
			<span class="text-sky-blue">Q</span>uiénes </br>som<u class="text-white"><span class="text-white"></span>os</u>
		</h2>
		<h3 class="text-[20px] text-white">Comunicación eficaz para tu marca <br>o producto. <br>Más de 25 años de experiencia en la <br>industria del Marketing & Publicidad.
		</h3>
	</div>
</section>

<!-- Why choosen -->
<section class="bg-auto bg-white  flex items-center justify-center h-screen">
	<div>
		<h2 class="text-[40px] text-sky-blue font-black  text-center"> ¿POR QUÉ ELEGIRNOS?</h2>
		<div style="image-rendering: url('');"></div>
		<div class=" container flex justify-evenly gap-40">



			<div class="flex flex-col justify-center  items-center">
				<img class="size-36" src="http://umbrella.local/wp-content/uploads/2024/02/Vector.svg" alt="">
				<h2 class="text-8xl  text-sky-blue font-black flex text-center"> +200 </h2>
				<span class="font-normal text-4xl text-sky-blue text-center">CLIENTES</span>
			</div>
			<div class="flex flex-col justify-center  items-center">
			<img class ="size-36" src="http://umbrella.local/wp-content/uploads/2024/02/Vector-2.svg" alt="">
			<h2 class="text-8xl  text-gray font-black flex text-center"> +250 </h2>
				<span class="font-normal text-4xl text-gray-400 text-center">PROYECTOS</span>
			</div>
			<div class="flex flex-col justify-center  items-center">
				<img class="size-36" src="http://umbrella.local/wp-content/uploads/2024/02/Vector-3.svg" alt="">

				<h2 class="text-8xl  text-sky-blue font-black flex text-center"> +25 </h2>
				<span class="font-normal text-4xl text-sky-blue text-center">AÑOS</span>
			</div>
		</div>
	</div>
</section>

<!-- Team -->
<section class="w-full h-[50rem] bg-cover bg-sky-blue flex justify-end items-center" style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/group-of-people-working-out-business-plan-in-an-office-scaled.jpg');">

	<div>

		<h2 class="text-[89px] text-white font-normal leading-none">
			NUESTRO</br><span class="text-sky-blue font-black">E</span><span class="text-white font-black">Q</span><u class="text-sky-blue"><span class="text-white font-black">UIPO</span></u>
		</h2>
		<h3 class="text-[20px] text-white ">Conócenos... <br>(nos lleva a la pag institucional)
		</h3>
	</div>
</section>
<!-- Clients -->
<section class=" w-full h-[20rem] bg-auto bg-white  flex justify-center">
	<div>
		<h2 class="text-[40px] text-sky-blue font-black justify-center"> NUESTROS CLIENTES</h2>
	</div>
</section>

<!-- Projects -->
<section class=" w-full h-[50rem] bg-cover bg-center  " style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/white-concrete-wall-5-scaled.jpg');">
	<div class="container mx-auto my-auto">
		<div class="grid grid-cols-10 grid-rows-2 gap-3">
			<div class="col-span-4 row-span-2">
				<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244253804_1913345092171178_377135258163533003_n.jpeg" alt="Imagen 1" class="w-full h-full object-cover">
			</div>
			<div class=" col-span-2">
				<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/37282239_928063084032722_6560287920136126464_n.jpeg" alt="Imagen 2" class="w-full h-full object-cover">
			</div>
			<div class=" col-span-2">
				<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/244079091_1913345055504515_4195074341419206271_n.jpeg" alt="Imagen 3" class="w-full h-full object-cover">
			</div>
			<div class="relative col-span-4 ">
				<img class="w-full h-full" src="http://umbrella.local/wp-content/uploads/2024/02/37256962_928062957366068_515493240565137408_n.jpeg" alt="Imagen 4" class="w-full h-full object-cover">
				<button class=" absolute bottom-5 right-5 border-white bg-transparent  text-white font-bold py-2 px-4 rounded" style="border-radius: 25px; border-width: 2px;">Ver más... </button>
			</div>
			<div class="row-span-2">
				<div class="border-r-4 border-sky-blue h-full flex justify-center items-end">
					<span class="block text-4xl text-sky-blue -rotate-90 -translate-y-48 font-black text-[60px] uppercase">proyectos</span>
				</div>
			</div>

		</div>

	</div>
</section>

<?php
get_footer();
?>
