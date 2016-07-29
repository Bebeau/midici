<?php 

get_header(); ?>

<div id="featureImage" data-parallax='{"y" : 230, "smoothness": 1}' style="background:url('<?php bloginfo('template_directory'); ?>/assets/images/menu-header.jpg') no-repeat scroll center / cover"></div>

<?php
echo '<div id="mainContent">';

echo '<div class="blackbar">People Are The Best Thing <span class="red">That Can Happen to Anyone</span></div>';

echo '<div class="container">';

$my_query = new WP_Query('post_type=menu&posts_per_page=20&order=ASC');
while ($my_query->have_posts()) : $my_query->the_post(); 
	echo '<div class="menus" data-animation="slideUp">';
	    echo '<div class="menu-top">';
	    	echo '<div class="toggle"><i class="fa fa-plus"></i></div>';
		    echo '<h2 class="menu-title">'.get_the_title().'</h2>';
		    if( get_field('menu_tagline') ) {
		    	echo '<div class="menu_tagline">'.get_field('menu_tagline').'</div>';
		    }
		echo '</div>';
	    if( have_rows('menu_item') ):
	    	echo '<ul>';
	        while( have_rows('menu_item') ): the_row();
	            echo '<li class="item-details">';
                    if( get_sub_field('menu_item-image') ) {
                        echo '<div class="item-photo"><img src="'.get_sub_field('menu_item-image').'"></div>';
                    }
                    echo '<div class="item-desc">';
	            	   	echo '<h4 class="menu-item">'.get_sub_field('menu_item-title').'</h4>';
	            	   	echo '<div class="menu-desc">'.get_sub_field('menu_item-desc').'</div>';
	            	   	echo '<span class="price red">'.get_sub_field('menu_item-price').'</span>';
	            	echo '</div>';
	            echo '</li>';
	        endwhile;
	    	echo '</ul>';
	    endif;
	echo '</div>';
endwhile; 
wp_reset_query(); ?> 	

<div class="drinks">
	<?php $my_query = new WP_Query('post_type=drinks&posts_per_page=20&orderby=ASC');
	    while ($my_query->have_posts()) : $my_query->the_post(); 
			echo '<div class="menus" data-animation="slideUp">';
				echo '<div class="menu-top">';
					echo '<div class="toggle"><i class="fa fa-plus"></i></div>';
				    echo '<h2 class="menu-title">'.get_the_title().'</h2>';
				    if( get_field('menu_tagline') ) {
				    	echo '<div class="menu_tagline">'.get_field('menu_tagline').'</div>';
				    }
				echo '</div>';
			    if( have_rows('menu_item') ):
			    	echo '<ul>';
			        while( have_rows('menu_item') ): the_row();
			            echo '<li class="item-details">';
		                    if( get_sub_field('menu_item-image') ) {
		                        echo '<div class="item-photo"><img src="'.get_sub_field('menu_item-image').'"></div>';
		                    }
		                    echo '<div class="item-desc">';
			            	   	echo '<h4 class="menu-item">'.get_sub_field('menu_item-title').'</h4>';
			            	   	echo '<div class="menu-desc">'.get_sub_field('menu_item-desc').'</div>';
			            	   	echo '<span class="price red">'.get_sub_field('menu_item-price').'</span>';
			            	echo '</div>';
			            echo '</li>';
			        endwhile;
			    	echo '</ul>';
			    endif;
			echo '</div>';
		endwhile; 
wp_reset_query(); ?> 	
</div>

<?php 
echo '</div>';
echo '</div>';
get_footer(); ?>