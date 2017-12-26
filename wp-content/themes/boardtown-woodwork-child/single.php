<?php
/**
 * The template for displaying the projects pages.
 *
 * This is the template that displays the individual projects pages.
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
                    <?php while ( have_posts() ) : the_post();
					$image_1 = get_field('image_1');
					$image_2 = get_field('image_2');
					$image_3 = get_field('image_3');
					$image_4 = get_field('image_4');
					$image_5 = get_field('image_5');
					$fullsize = "full"; ?>
                        <div class="project-wrapper">
                            <div class="project-1-main-img">
                                <a href="<?php the_permalink(); ?>"><?php if($image_1) {
									echo wp_get_attachment_image( $image_1, $fullsize );
									} ?></a>
                            </div>
                            <div class="project-1-main-text">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                        </div>
                </div>
                <?php endwhile; ?>
	        </div><!--end of wrapper-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
