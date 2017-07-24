<?php
/**
 * The template for displaying the contact page
 *
 * This is the template that displays the contact page by default.
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
                <div class="contact-main">
                    <div class="contact-main-text">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div><!--end of wrapper-->
			<? endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
