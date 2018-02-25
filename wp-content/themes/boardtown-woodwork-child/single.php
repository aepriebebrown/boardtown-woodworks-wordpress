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
					$image_5 = get_field('image_5'); ?>
                        <div class="project-wrapper">
                            <section class="project-1-main-img" data-featherlight-gallery data-featherlight-filter="a">
								<a href="<?php echo $image_1; ?>"><?php if($image_1) { ?>
									<img src="<?php echo $image_1; ?>"/>
								<?php } ?></a>
								<a href="<?php echo $image_2; ?>"><?php if($image_2) { ?>
									<img src="<?php echo $image_2; ?>"  style="display:none;"/>
								<?php } ?></a>
								<a href="<?php echo $image_3; ?>"><?php if($image_3) { ?>
									<img src="<?php echo $image_3; ?>"  style="display:none;"/>
								<?php } ?></a>
								<a href="<?php echo $image_4; ?>"><?php if($image_4) { ?>
									<img src="<?php echo $image_4; ?>"  style="display:none;"/>
								<?php } ?></a>
								<a href="<?php echo $image_5; ?>"><?php if($image_5) { ?>
									<img src="<?php echo $image_5; ?>"  style="display:none;"/>
								<?php } ?></a>
                            </section>
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
