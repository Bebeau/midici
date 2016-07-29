<?php get_header();

if (have_posts()) : while (have_posts()) : the_post();

	echo '<div id="mainContent">';
		echo '<div class="container" data-animation="slideUp">';
			the_content();
		echo '</div>';
	echo '</div>';

	endwhile; 
endif;

get_footer(); ?>