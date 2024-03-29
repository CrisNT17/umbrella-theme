<?php

/**
 * Template Name: General
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

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main bg-blue-500">
        <?php
        // Start the loop.
        while ( have_posts() ) :
            the_post();
			the_content();
            // End of the loop.
        endwhile;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
