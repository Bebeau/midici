<?php
/**
 * The template for displaying Locations
 *
 */
get_header(); ?>

<div id="featureImage" data-parallax='{"y" : 230, "smoothness": 1}' style="background:url('<?php bloginfo('template_directory'); ?>/assets/images/careers-bg.jpg') no-repeat scroll center / cover"></div>

<div id="mainContent">
	<div class="blackbar">
		People Are The Best Thing <span class="red">That Can Happen to Anyone</span>
	</div>
	<div class="container">
		<?php while ( have_posts() ) : the_post();
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'large' );
			echo '<div class="row post" data-animation="slideUp">';
				echo '<div class="col-sm-4">';
					echo '<a class="crust-image" href="'.get_permalink().'" style="background: url('.$image[0].') no-repeat scroll center / cover"></a>';
				echo '</div>';
				echo '<div class="col-sm-8 post-copy">';
					echo '<div class="outer">';
						echo '<div class="inner">';
							if( get_field('career_title') ) {
								echo '<a href="'.get_permalink().'"><h3>'.get_field('career_title').'</h3></a>';
							}
							if( get_field('career_location') ) {
								echo '<span class="career-location">'.get_field('career_location').'</span>';
							}
							if( get_field('career_short-desc') ) {
								echo '<div class="career-short-desc">'.get_field('career_short-desc').'<a class="btn-main" href="'.get_permalink().'">Learn More</a></div>';
							}
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>
