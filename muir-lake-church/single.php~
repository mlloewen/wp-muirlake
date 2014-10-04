<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Muir Lake
 */

get_header(); ?>

<div id="main">
	<div class="container">

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>    
				
				<?php the_title(); ?>
				<?php the_content(); ?>
				<?php muir_lake_post_nav(); ?>

			<?php endwhile; ?>
		<?php endif; ?>

		<div class="clearfix"></div>

	</div><!-- #container -->
</div><!-- #main -->

<?php get_footer(); ?>