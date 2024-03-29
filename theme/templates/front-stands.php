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
$args = array(
	'post_type'      => 'stands',
	'posts_per_page' => -1,
	'order' 		  => 'DESC',

);

$query = new WP_Query($args);

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
	<div class="grid md:grid-cols-2 grid-cols-1 place-content-center p-10">
		<div class="flex justify-center items-center  ">
			<!-- Slides -->
			<?php if ($query->have_posts()) :
				while ($query->have_posts()) :
					$query->the_post();
					$image = umbrella_get_image_data(get_field('logo')); ?>
					<div class="swiper-slide w-full  bg-contain bg-center " style="background-image: url(<?= $image['url'] ?>);">

					</div>

			<?php
				endwhile;
				// Restablecer la consulta
				wp_reset_query();
			endif; ?>


		</div>

		<div class="container flex justify-center items-center  text-black ">
			<div class="lg:w-full w-full">
				<div class="flex items-center justify-center xl:text-3xl lg:text-2xl md:text-xl text-lg text-center  font-museo font-light">
					<?php if ($query->have_posts()) :
						while ($query->have_posts()) :
							$query->the_post();
					?>
							<div class="md:text-2xl text-sm py-5  pr-11 text-center justify-center font-black"><?= get_field('description') ?></div>
				</div>

		<?php
						endwhile;
						// Restablecer la consulta
						wp_reset_query();
					endif; ?>

			</div>
		</div>
	</div>

	<div class="grid md:grid-cols-4 grid-cols-2 md:gap-x-10 md:gap-y-5 gap-x-2 gap-y-2 place-content-center my-10 md:p-0 p-5 border-4">
		<?php if ($query->have_posts()) :
			while ($query->have_posts()) :
				$query->the_post();
				$images = get_field('gallery');

				// Verifica si hay imágenes en la galería
				if ($images) :
					$first_image = $images[0]; // Obtiene la primera imagen de la galería
					$banner = umbrella_get_image_data($first_image['id']);
		?>
					<div class="md:col-span-2 col-span-1 md:row-span-2 row-span-1">
						<a href="<?php echo esc_url($banner['url']); ?>">
							<img class="w-full h-96 object-cover object-center" src="<?= $banner['url']; ?>" alt="<?= $banner['name']; ?>" srcset="<?= $banner['srcset']; ?>">
						</a>
					</div>
				<?php endif; ?>

		<?php endwhile;
			// Restablecer la consulta
			wp_reset_query();
		endif; ?>
		<?php if ($query->have_posts()) :
			while ($query->have_posts()) :
				$query->the_post();
				$images = get_field('gallery');

				// Verifica si hay imágenes en la galería
				if ($images) :
					$first_image = $images[1]; // Obtiene la primera imagen de la galería
					$banner = umbrella_get_image_data($first_image['id']);
		?>
					<div class="md:col-span-2 col-span-1 md:row-span-2 row-span-1">
						<a href="<?php echo esc_url($banner['url']); ?>">
							<img class="w-full h-96 object-cover object-center" src="<?= $banner['url']; ?>" alt="<?= $banner['name']; ?>" srcset="<?= $banner['srcset']; ?>">
						</a>
					</div>
				<?php endif; ?>

		<?php endwhile;
			// Restablecer la consulta
			wp_reset_query();
		endif; ?>
		<?php if ($query->have_posts()) :
			while ($query->have_posts()) :
				$query->the_post();
				$images = get_field('gallery');

				// Verifica si hay imágenes en la galería
				if ($images) :
					$first_image = $images[2]; // Obtiene la primera imagen de la galería
					$banner = umbrella_get_image_data($first_image['id']);
		?>
					<div class="md:col-span-3 col-span-1">
						<a href="<?php echo esc_url($banner['url']); ?>">
							<img class="w-full h-96 object-cover object-center" src="<?= $banner['url']; ?>" alt="<?= $banner['name']; ?>" srcset="<?= $banner['srcset']; ?>">
						</a>
					</div>
				<?php endif; ?>

		<?php endwhile;
			// Restablecer la consulta
			wp_reset_query();
		endif; ?>
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
	<div class="grid md:grid-cols-10 grid-cols2 md:gap-x-5 gap-x-2 gap-y-2 place-content-center md:p-0 p-5">
		<a class="col-span-6 row-span-2" data-fancybox="gallery-pan" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-HAYPAN.mp4">
			<video class="w-full h-full object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-HAYPAN.mp4" type="video/mp4" controls></video>
		</a>
		<a class="md:col-span-2 col-span-3" data-fancybox="gallery-pan" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Stand-HAYPAN.mp4">
			<video class="w-full md:h-full h-60 object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Stand-HAYPAN.mp4" type="video/mp4" controls></video>
		</a>
		<a class="md:col-span-2 col-span-3" data-fancybox="gallery-pan" data-src="<?= get_template_directory_uri() . '/assets/img/stands/pan-stand-1.jpg' ?>">
			<img class="w-full md:h-full h-60 object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stands/pan-stand-1.jpg' ?>" alt="">
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
	<div class="grid md:grid-cols-10 grid-cols-2 md:gap-5 gap-2 place-content-center md:p-0 p-5">
		<a class="md:col-span-6  col-span-2 row-span-2 " data-fancybox="gallery-montero" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-MONTERO.mp4">
			<video class="w-full h-full object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-MONTERO.mp4" type="video/mp4" controls></video>
		</a>
		<a class="md:col-span-2 col-span-1" data-fancybox="gallery-montero" data-src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-1.jpg' ?>">
			<img class="w-full md:h-72 h-60 object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-1.jpg' ?>" alt="">
		</a>
		<a class="md:col-span-2 col-span-1" data-fancybox="gallery-montero" data-src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-2.jpg' ?>">
			<img class="w-full md:h-72 h-60 object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-2.jpg' ?>" alt="">
		</a>
		<a class="md:col-span-2 col-span-1 md:block hidden" data-fancybox="gallery-montero" data-src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-3.jpg' ?>">
			<img class="w-full md:h-72 h-60 object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-3.jpg' ?>" alt="">
		</a>
		<a class="md:col-span-2 col-span-1 md:block hidden" data-fancybox="gallery-montero" data-src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-4.jpg' ?>">
			<img class="w-full md:h-72 h-60 object-cover object-center" src="<?= get_template_directory_uri() . '/assets/img/stands/montero-stand-4.jpg' ?>" alt="">
		</a>




	</div>
	<div class="lg:w-3/4 md:w-full w-full mx-auto lg:my-28 md:my-20 my-10 md:p-0 p-5">
		<h3 class="text-sky-blue text-center md:text-6xl text-2xl lg:mb-28 md:mb-20 mb-10  font-cocogoose font-extralight">Nuestros clientes</h3>
		<div class="grid md:grid-cols-2 grid-cols-1 gap-6 place-content-center">
			<div class="flex flex-col justify-center items-center gap-5">
				<a class="col-span-6 row-span-2 " data-fancybox="gallery-happycat" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-HAPPY-CAT-.mp4">
					<video class="w-full h-72 object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Diseno-HAPPY-CAT-.mp4" type="video/mp4" controls></video>
				</a>

				<span class="text-sky-blue lg:text-5xl text-xl font-cocogoose font-extralight">Propuesta</span>
			</div>
			<div class="flex flex-col justify-center items-center gap-5">
				<a class="md:col-span-6 md:row-span-2 row-span-1" data-fancybox="gallery-happycat" data-src="http://umbsolut.com/wp-content/uploads/2024/03/Stand-HAPPY-CAT.mp4">
					<video class="md:w-full  h-72 w-96 object-cover object-center" src="http://umbsolut.com/wp-content/uploads/2024/03/Stand-HAPPY-CAT.mp4" type="video/mp4" controls></video>
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
