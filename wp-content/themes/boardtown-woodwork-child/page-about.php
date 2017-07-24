<?php
/**
 * The template for displaying the about page.
 *
 * This is the template that displays the about page.
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
                    <div class="about-main">
                        <div class="about-main-img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="about-main-text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
	        </div><!--end of wrapper-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
