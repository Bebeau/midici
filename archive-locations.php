<?php
/**
 * The template for displaying Locations
 *
 */
get_header(); ?>

<div id="featureImage" data-parallax='{"y" : 230, "smoothness": 1}' style="background:url('<?php bloginfo('template_directory'); ?>/assets/images/location-bg.jpg') no-repeat scroll center / cover"></div>

<div id="mainContent">

	<div class="blackbar">
		People Are The Best Thing <span class="red">That Can Happen to Anyone</span>
	</div>

	<div class="container">

		<?php while ( have_posts() ) : the_post(); 
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'large' );
			echo '<div class="row post location" data-animation="slideUp">';
				echo '<div class="col-sm-6 location-image clearfix">';
					echo '<a class="crust-image" href="'.get_permalink().'" style="background: url('.$image[0].') no-repeat scroll center / cover"></a>';
				echo '</div>';
				echo '<div class="col-sm-6 post-copy">';
					echo '<div class="outer">';
						echo '<div class="inner">';
							if( get_field('location_address') ) {
								echo '<div class="location-details">';
									echo '<h3>'.get_field('location_title').'</h3>';
									echo '<address>'.get_field('location_address').'</address>';
									if( get_field('location_phone') ) {
										echo '<span class="phone">'.get_field('location_phone').'</span>';
									}
								echo '</div>';
							}
							if( get_field('location_details') ) {
								echo '<div class="details">'.get_field('location_details').'</div>';
							}
							if( get_field('location_google-link') ) {
								echo '<a class="btn-main" href="'.get_field('location_google-link').'">Get Directions</a>';
							}
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		endwhile; ?>

	</div>

</div>

<?php get_footer(); ?>
