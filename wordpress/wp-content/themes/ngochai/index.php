<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NgocHai
 */

get_header();
?>
	<?php get_template_part('templates/template-slider'); ?>
	<?php get_template_part('templates/modul-3'); ?>
	<?php get_template_part('templates/modul-4'); ?>
	<?php get_template_part('templates/modul-6'); ?>
	<?php get_template_part('templates/modul-7'); ?>
	<?php get_template_part('templates/modul-8'); ?>
	<?php get_template_part('templates/modul-9'); ?>

<?php
get_sidebar();
get_footer();
