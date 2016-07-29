<?php get_header();

echo '<div id="mainContent">';

echo '<div class="blackbar">People Are The Best Thing <span class="red">That Can Happen to Anyone</span></div>';

echo '<div class="container">';
$my_query = new WP_Query('post_type=menu&posts_per_page=20&orderby=ASC');
      while ($my_query->have_posts()) : $my_query->the_post(); ?>  
		<div class="menus">
		    <h2 class="menu-title"><?php the_title(); ?></h2>
		    <?php if( get_field('menu_tagline') ): ?>
		    	<div class="menu_tagline"><?php the_field('menu_tagline'); ?></div>
		    <?php endif; ?>

		    <?php if( have_rows('menu_item') ): ?>
		        <?php while( have_rows('menu_item') ): the_row(); ?>
		            <li class="item-details">
		                    <?php if( get_sub_field('menu_item-image') ): ?>
		                        <div class="item-photo">     
		                            <img src="<?php the_sub_field('menu_item-image'); ?>">
		                        </div>
		            	   <div class="menu-desc">
		                    <?php endif; ?>
		            	   	   <h4 class="menu-item"><?php the_sub_field('menu_item-title'); ?></h4>
		            	   	   <?php the_sub_field('menu_item-desc'); ?>
		            	   	   <span class="price"><?php the_sub_field('menu_item-price'); ?></span>
		                    <?php if( get_sub_field('menu_item-image') ): ?>
		            	   </div>
		                    <?php endif; ?>
		            </li>
		        <?php endwhile; ?>
		    <?php endif; ?>
		</div>
<?php endwhile; wp_reset_query(); ?> 	

<div class="drinks">
	<?php $my_query = new WP_Query('post_type=drinks&posts_per_page=20&orderby=ASC');
	      while ($my_query->have_posts()) : $my_query->the_post(); ?>  
			<div class="menus">
		    <h2 class="menu-title"><?php the_title(); ?></h2>
		    <?php if( get_field('menu_tagline') ): ?>
		    	<div class="menu_tagline"><?php the_field('menu_tagline'); ?></div>
		    <?php endif; ?>

		    <?php if( have_rows('menu_item') ): ?>
		        <?php while( have_rows('menu_item') ): the_row(); ?>
		            <li class="item-details">
		                    <?php if( get_sub_field('menu_item-image') ): ?>
		                        <div class="item-photo">     
		                            <img src="<?php the_sub_field('menu_item-image'); ?>">
		                        </div>
		            	   <div class="menu-desc">
		                    <?php endif; ?>
		            	   	   <h4 class="menu-item"><?php the_sub_field('menu_item-title'); ?></h4>
		            	   	   <?php the_sub_field('menu_item-desc'); ?>
		            	   	   <span class="price"><?php the_sub_field('menu_item-price'); ?></span>
		                    <?php if( get_sub_field('menu_item-image') ): ?>
		            	   </div>
		                    <?php endif; ?>
		            </li>
		        <?php endwhile; ?>
		    <?php endif; ?>
		</div>
	<?php endwhile; wp_reset_query(); ?> 	
</div>

<?php 
echo '</div>';
echo '</div>';
get_footer(); ?>