<?php
/**
 * The template for displaying the projects page.
 *
 * This is the template that displays the projects page by default.
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
                <div class="projects-main">
                    <?php query_posts(); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="project-wrapper">
                        <div class="project-1-main-img">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="project-1-main-text">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div>
                    </div>
    			    <? endwhile; ?>
            </div><!--#wrapper-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
