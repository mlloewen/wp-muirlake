<?php
/**
 * The Template for displaying single sermon posts.
 *
 *
 */

get_header();
?>
<div id="main">
	<div class="container">
		<div id="content" role="main">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<p><h2 class="entry-title"><?php the_title(); ?></h2></p>		
				<?php render_wpfc_sermon_single(); ?>
				<div class="entry-utility">
					<?php edit_post_link( __( 'Edit', 'sermon-manager' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-utility -->
			</div><!-- #post-## -->

		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'sermon-manager' ) . '</span> %title' ); ?></div>
			<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'sermon-manager' ) . '</span>' ); ?></span>
		</div><!-- #nav-below -->

		</div><!-- #content -->
	</div><!-- #container -->
</div>

<?php

	get_footer(); 
?>
