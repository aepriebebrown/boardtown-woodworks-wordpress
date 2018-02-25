<?php
/**
 * The template for displaying the gallery page.
 *
 * This is the template that displays the gallery page.
 * Please note that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package boardtown-woodwork
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="wrapper">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="gallery-main">
                        <div class="gallery-main-text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
	        </div><!--end of wrapper-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
