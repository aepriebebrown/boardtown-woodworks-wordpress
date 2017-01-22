<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays the front page.
 * Please note that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package boardtown-woodworks
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="wrapper">
	            <div class="recent-projects">
						<?php query_posts('posts_per_page=6'); ?>
					     <?php while ( have_posts() ) : the_post(); ?>
							 <div class="project-showcase">
							 <h2 class="mobile"><?php the_title(); ?></h2>
							 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							 <h2 class="not-mobile"><?php the_title(); ?></h2>
							 <?php the_excerpt(); ?>
							 <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
							 </div><!--end project-showcase-->
					     <?php endwhile; ?>
					    <?php wp_reset_query(); ?>
	            </div><!--end of recent projects-->
	            <div class="about-contact">
	                <div class="two-column">
						<?php query_posts('pagename=about'); ?>
						<?php while ( have_posts() ) : the_post(); ?>
	                    <h2 class="bottom-border"><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
						<a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
	                </div>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
	                <div class="two-column">
						<?php query_posts('pagename=contact'); ?>
						<?php while ( have_posts() ) : the_post(); ?>
	                    <h2 class="bottom-border"><?php the_title(); ?></h2>
	                    <?php the_content(); ?>
	                </div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
	            </div>
	        </div><!--end of wrapper-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
