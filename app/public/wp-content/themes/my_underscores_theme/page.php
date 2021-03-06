<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_underscores_theme
 */

get_header();

$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');

?>

<main id="primary" class="site-main">
	<section>
		fda
		<?php if(!empty($income_section_description)):?>
			<h1><?php echo $income_section_description?></h1>
		<?php endif; ?>

		<?php if(!empty($income_section_title)):?>
			<h1><?php echo $income_section_title?></h1>
		<?php endif; ?>
		hhhh
	</section>


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
