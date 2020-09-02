<?php
/**
 * The template for displaying the home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Esperanza
 */

get_header();
?>

	<main id="primary" class="site-main">
        <section class="esperanza-banner">
            <?php get_template_part( 'template-parts/content', 'banner' ); ?>
        </section>
        <section class="esperanza-services">
            <?php get_template_part( 'template-parts/content', 'services' ); ?>
        </section>
        <section class="esperanza-causes">
            <?php get_template_part( 'template-parts/content', 'causes' ); ?>
        </section>
        <section class="esperanza-vision">
            <?php get_template_part( 'template-parts/content', 'vision' ); ?>
        </section>
        <section class="esperanza-volunteer">
            <?php get_template_part( 'template-parts/content', 'volunteer' ); ?>
        </section>
        <section class="esperanza-blog">
            <?php get_template_part( 'template-parts/content', 'blog' ); ?>
        </section>
        <section class="esperanza-testimonial">
            <?php get_template_part( 'template-parts/content', 'testimonial' ); ?>
        </section>

	</main><!-- #main -->

<?php
get_footer();
