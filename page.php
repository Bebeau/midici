<?php get_header();

if (have_posts()) : while (have_posts()) : the_post();
	// get image and set it as background of parallax div
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'large' ); ?>
	<div id="featureImage" data-parallax='{"y" : 230, "smoothness": 1}' style="background:url(<?php echo $image[0]; ?>) no-repeat scroll center / cover"></div>

	<?php
	echo '<div id="mainContent">';
		echo '<div class="blackbar">People Are The Best Thing <span class="red">That Can Happen to Anyone</span></div>';
		echo '<div class="container" data-animation="slideUp">';
			the_content();
		echo '</div>';
	echo '</div>';

	endwhile; 
endif;

get_footer(); ?>