		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<a href="<?php echo site_url(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png">
						</a>
					</div>
					<div class="col-sm-8" id="legal">
						<?php echo '<span class="legal hidden-xs">&copy; '.date("Y").' '.get_bloginfo("name").' - The Neoplitan Pizza Company. All Rights Reserved.</span>'; ?>
						<a href="/contact">Contact Us</a>
						<a href="http://mymidicifranchise.com/">Franchise</a>
					</div>
					<div class="col-sm-2">
						<ul class="socials">
				     	   <li><a class="twit" href="http://www.twitter.com/mymidici" target="_blank"><i class="fa fa-twitter"></i></a></li>
				     	   <li><a class="fb" href="http://www.facebook.com/mymidici" target="_blank"><i class="fa fa-facebook"></i></a></li>
				     	   <li><a class="ig" href="http://www.instagram.com/mymidici" target="_blank"><i class="fa fa-instagram"></i></a></li>
				     	   <li><a class="yelp" href="http://www.yelp.com/biz/midici-the-neapolitan-pizza-company-sherman-oaks?osq=midici" target="_blank"><i class="fa fa-yelp"></i></a></li>
				     	</ul>
				     	<?php echo '<span class="legal visible-xs">&copy; '.date("Y").' '.get_bloginfo("name").' - The Neoplitan Pizza Company. All Rights Reserved.</span>'; ?>
				    </div>
				</div>
			</div>		
		</footer>
    
	</body>
</html>

<?php wp_footer(); ?>  