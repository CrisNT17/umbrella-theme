<?php

/**
 * Template part for displaying slider in home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Umbrella
 */

?>
<div class="grid md:grid-cols-11 grid-cols-1 gap-10">
    <div class="col-span-5 flex flex-col justify-center md:items-end items-center xl:w-3/4 lg:w-3/4 md:w-full w-full font-cocogoose md:p-10 mb-10">
        <?php
        // Dividir el título en todas las palabras excepto la última
        $title_parts = explode(' ', $args['title']);
        $first_part = implode(' ', array_slice($title_parts, 0, -1)); // Todas las palabras excepto la última
        $last_part = end($title_parts); // Última palabra
        ?>
        <h3 class="xl:text-5xl lg:text-4xl md:text-3xl text-2xl text-sky-blue text-end font-extralight whitespace-normal max-w-full ">
            <?= $first_part; ?> <br> <span class="xl:text-7xl lg:text-6xl md:text-5xl text-4xl tracking-widest"><?= $last_part; ?></span>
        </h3>
        <hr class="bg-sky-blue text-sky-blue md:h-2 h-1 md:w-44 w-20 mb-3 mt-3 font-museo font-light">
        <span class="xl:text-2xl lg:text-lg md:text-lg text-base md:text-end text-center mt-4"><?= $args['description']; ?></span>
    </div>
    <div class="col-span-6">
        <div class="service-right-slider overflow-hidden">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php foreach ($args['gallery'] as $image): ?>
                    <?php $banner = umbrella_get_image_data($image['id']); ?>
                    <div class="swiper-slide w-full">
                        <img class="w-full h-full object-cover object-center" src="<?= $banner['url']; ?>" alt="<?= $banner['name']; ?>" srcset="<?= $banner['srcset']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


