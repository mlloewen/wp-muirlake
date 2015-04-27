<?php
/**
 * The template for displaying Sermon Archive pages.
 * To see this visit the http://yourdomain.com/sermons if you have permalinks enabled 
 * or http://yourdomain.com/?post_type=wpfc_sermon if not.
 * 
 */

get_header(); ?>

<div id="main">
		<div class="container">
			<div id="content" role="main">
				<?php
				$sermon_settings = get_option('wpfc_options');
				?>
				<h2 class="page-title">Sermons</h2>
				<p><a class="anchor" href="http://muirlakealliance.ca/sermons/feed/" title="Podcast" rel="bookmark">PodCast</a></p>
			
				<?php render_wpfc_sorting(); ?>
				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<div id="nav-above" class="navigation">
						<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'sermon-manager' ) ); ?></div>
						<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'sermon-manager' ) ); ?></div>
					</div><!-- #nav-above -->
				<?php endif; ?>

				<?php /* If there are no posts to display, such as an empty archive page */ ?>
				<?php if ( ! have_posts() ) : ?>
					<div id="post-0" class="post error404 not-found">
						<h1 class="entry-title"><?php _e( 'Not Found', 'sermon-manager' ); ?></h1>
						<div class="entry-content">
							<p><?php _e( 'Apologies, but no sermons were found.', 'sermon-manager' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</div><!-- #post-0 -->
				<?php endif; ?>

				<?php
					/* Start the Loop.
					 *
					 * In Twenty Ten we use the same loop in multiple contexts.
					 * It is broken into three main parts: when we're displaying
					 * posts that are in the gallery category, when we're displaying
					 * posts in the asides category, and finally all other posts.
					 *
					 * Additionally, we sometimes check for whether we are on an
					 * archive page, a search page, etc., allowing for small differences
					 * in the loop on each template without actually duplicating
					 * the rest of the loop that is shared.
					 *
					 * Without further ado, the loop:
					 */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sermon-manager' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<!--	<div class="m-button"> -->
							<p><a class="anchor" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'sermon-manager' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">Sermon(audio, summary, notes, study questions)</a></p>
						<!--	</div> -->

							<!-- <div class="entry-meta">
								<span class="meta-prep meta-prep-author">Preached on </span> <?php wpfc_sermon_date('l, F j, Y'); ?><span class="meta-sep"> by </span> <?php echo the_terms( $post->ID, 'wpfc_preacher', '', ', ', ' ' ); ?>
   							</div>
   							
   							--><!-- .entry-meta -->

							<div class="entry-content">
								<?php render_wpfc_sermon_excerpt(); ?>
							</div>  <!-- .entry-content -->

							<div class="entry-utility">
								<?php edit_post_link( __( 'Edit', 'sermon-manager' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
							</div><!-- .entry-utility -->
						</div><!-- #post-## -->

				<?php endwhile; // End the loop. Whew. ?>
				
				Old web site for older sermons can be found at <a href="http://w.muirlakealliance.ca">http://w.muirlakealliance.ca</a>.

				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
								<div id="nav-below" class="navigation">
									<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'sermon-manager' ) ); ?></div>
									<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'sermon-manager' ) ); ?></div>
								</div><!-- #nav-below -->
				<?php endif; ?>
		
				</div><!-- #content -->
			</div><!-- #container -->
</div>

<?php get_footer(); ?>