<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Muir Lake
 */

get_header(); ?>

<div id="main">
	<div class="container">

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>    
				
				<?php the_content(); ?>
			
			<?php endwhile; ?>
		<?php endif; ?>

		<div class="clearfix"></div>

	</div><!-- #container -->
</div><!-- #main -->

<?php get_footer(); ?>
