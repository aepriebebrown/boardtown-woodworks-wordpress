<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

            $services = get_field('services');
            $link = get_field('link');
            $image_1 = get_field('image_1');
            $size = "thumbnail"; ?>
            <div id="projects-wrap">
                <div class="projects" style="clear:both; padding:2%;">
                    <div class="projects-images" style="float:left;">
                        <?php if($image_1) {
                            echo wp_get_attachment_image( $image_1, $size );
                            } ?>
                    </div>
                    <div class="projects-descriptions" style="float:right;">
                        <h2><?php the_title(); ?></h2>
                        <h5><?php echo $services; ?></h5>
                		<?php the_content(); ?>
                        <p><strong><a href="<?php echo $link; ?>">Link</a></strong></p>
                    </div>
                </div>
            </div>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
