<?php get_header(); ?>
	
	<div id="mainContent">
		<h2 class="pageTitle">Press</h2>
		<div class="container">
			<?php if (have_posts()) : while (have_posts()) : the_post(); 
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'large' ); ?>
				<div class="row post" data-animation="slideUp">
					<div class="col-sm-4 col-sm-offset-1">
						<a class="crust-image" href="<?php echo the_permalink(); ?>" style="background: url(<?php echo $image[0]; ?>) no-repeat scroll center / cover"></a>
					</div>
					<div class="col-sm-6 post-copy">
						<div class="outer">
							<div class="inner">
								<a href="<?php echo the_permalink(); ?>">
									<?php the_title('<h3>','</h3>'); ?>
								</a>
						    	<?php the_excerpt(); ?>
						    	<a class="btn-main" href="<?php echo the_permalink(); ?>">
									Read More
								</a>
						    </div>
						</div>
				    </div>
				</div>
			<?php endwhile; endif; ?>
		</div>

	</div>

<?php get_footer(); ?>