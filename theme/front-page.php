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
<section class="w-full h-[50rem] flex justify-start items-end bg-cover bg-no-repeat bg-center" style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/8fc8ec2f-b995-456b-b1a9-60669b9f1b68.jpg');">
	<!-- Banner -->
	<h2 class="text-[89px] text-white font-black leading-none">
		New </br><u class="text-teal-300"><span class="text-teal-300">B</span>e</u>ginnings
	</h2>
</section>

<section class="w-full h-[50rem] flex justify-end items-end bg-cover bg-no-repeat bg-center" style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/catrin-johnson-ym96FAhQ8o4-unsplash-scaled.jpg');">
	<!-- Quienes somos -->
	<div>

		<h2 class="text-[89px] text-white font-black leading-none">
			<span class="text-teal-300">Q</span>uiénes </br>som<u class="text-white"><span class="text-white"></span>os</u>
		</h2>

		<h3 class="text-[20px] text-white">Comunicación eficaz para tu marca <br>o producto. <br>Más de 25 años de experiencia en la <br>industria del Marketing & Publicidad.
		</h3>
	</div>
</section>


<section class="bg-auto bg-white  flex items-center justify-center h-screen">
	<!-- ¿por qué elegirnos? -->

	<div>
		<h2 class="text-[40px] text-teal-300 font-black flex text-center"> ¿POR QUÉ ELEGIRNOS?</h2>
		<div style="image-rendering: url('');"></div>
		<div class="grid grid-cols-3 gap-3">
			<div class="bg-auto bg-start flex justify-end items-center h-48" style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/catrin-johnson-ym96FAhQ8o4-unsplash-scaled.jpg');">
			</div>
			<div class="bg-auto bg-start flex justify-end items-center h-48" style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/catrin-johnson-ym96FAhQ8o4-unsplash-scaled.jpg');">
			</div>
			<div class="bg-auto bg-start flex justify-end items-center h-48" style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/catrin-johnson-ym96FAhQ8o4-unsplash-scaled.jpg');">
			</div>
			<div>
				<h2 class="text-[40px] text-teal-300 font-black flex text-center"> +200 </h2>
				<span class="font-normal text-[30px] text-teal-300 text-center">CLIENTES</span>
			</div>
			<div>
				<h2 class="text-[40px] text-gray-400 font-black flex text-center"> +250 </h2>
				<span class="font-normal text-[30px] text-gray-400 text-center">PROYECTOS</span>
			</div>
			<div>
				<h2 class="text-[40px] text-teal-300 font-black flex text-center"> +25 </h2>
				<span class="font-normal text-[30px] text-teal-300 text-center">AÑOS</span>
			</div>
		</div>
	</div>
</section>


<section class="w-full h-[50rem] bg-cover bg-teal-300 flex justify-end items-center" style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/group-of-people-working-out-business-plan-in-an-office-scaled.jpg');">
	<!-- Nuestro equipo  -->

	<div>

		<h2 class="text-[89px] text-white font-normal leading-none">
			NUESTRO</br><span class="text-teal-300 font-black">E</span><span class="text-white font-black">Q</span><u class="text-teal-300"><span class="text-white font-black">UIPO</span></u>
		</h2>
		<h3 class="text-[20px] text-white ">Conócenos... <br>(nos lleva a la pag institucional)
		</h3>
	</div>
</section>

<section class=" w-full h-[20rem] bg-auto bg-white  flex justify-center">
	<!-- ¿Nuestros Clientes? -->

	<div>
		<h2 class="text-[40px] text-teal-300 font-black justify-center"> NUESTROS CLIENTES</h2>
		<div style="image-rendering: url('');"></div>

	</div>
</section>

<section class=" w-full h-[50rem] bg-cover bg-center  " style="background-image: url('http://umbrella.local/wp-content/uploads/2024/02/white-concrete-wall-5-scaled.jpg');">
	<!-- Proyectos -->
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
				<div class="border-r-4 border-teal-300 h-full flex justify-center items-end">
					<span class="block text-4xl text-teal-300 -rotate-90 -translate-y-48 font-black text-[60px] uppercase">proyectos</span>
				</div>
			</div>

		</div>

	</div>
</section>

<?php
get_footer();
?>