<?php

/*
 * Template Name: Front Page Template
 */

get_header(); ?>

<video class="hidden-xs" autoplay muted poster="<?php bloginfo('template_directory'); ?>/assets/videos/MIDICI_web-video.jpg" id="bgvid" loop>
	<source src="<?php bloginfo('template_directory'); ?>/assets/videos/midici.webm" type="video/webm">
	<source src="<?php bloginfo('template_directory'); ?>/assets/videos/midici.ogv" type="video/ogv">
	<source src="<?php bloginfo('template_directory'); ?>/assets/videos/midici.mp4" type="video/mp4">
</video>

<div class="visible-xs" id="featureImage" data-parallax='{"y" : 230, "smoothness": 1}' style="background:url('<?php bloginfo('template_directory'); ?>/assets/images/location-bg.jpg') no-repeat scroll center / cover"></div>

<div id="mainContent">

	<div class="blackbar">
		People Are The Best Thing <span class="red">That Can Happen to Anyone</span>
	</div>

	<div class="container">

		<section class="half">
			<div class="outer">
				<div class="inner">
					<div class="row">
						<div class="col-sm-6" data-animation="slideInLeft">
							<img src="<?php echo bloginfo('template_directory');?>/assets/images/Pizza.png" alt="" />
						</div>
						<div class="col-sm-6 textwrap" data-animation="slideInRight">
							<div class="outer">
								<div class="inner">
									<h2>Neapolitan Pizza <br /> Is the better pizza.</h2>
									<p>
										Neapolitan Pizza exalts the flavors, and celebrates the senses. 
										Each bite distributes an array of flavors, an arrangement of textures.
										Neapolitan Pizza is fine pizza. Pizza with a capital N.
									</p>
									<a class="btn-main" href="">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="half">
			<div class="outer">
				<div class="inner">
					<div class="row">
						<div class="col-sm-6 visible-xs" data-animation="slideInRight">
							<img src="<?php echo bloginfo('template_directory');?>/assets/images/polaroid.png" alt="" />
						</div>
						<div class="col-sm-6 textwrap" data-animation="slideInLeft">
							<div class="outer">
								<div class="inner">
									<h2>People. <br />That's our passion.</h2>
									<p>
										They move us, shape us, excite us and inspire us.
										We believe people are the best thing that can happen to anyone.
										That's why we created MidiCi. We wanted a place for people to
										meet up, sit back and be social without the media.
										Because we believe it is moments we remember, not days,
										not posts, not pictures.
									</p>
									<a class="btn-main" href="">Learn More</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 hidden-xs" data-animation="slideInRight">
							<img src="<?php echo bloginfo('template_directory');?>/assets/images/polaroid.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

</div>

<div class="m-scooch m-fluid">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<h3 class="feed-title">Instagram Feed <a href="">@midici</a></h3>
			</div>
			<div class="col-sm-6 connect hidden-xs">
				Let's Connect
				<ul class="socials">
		     	   <li><a class="twit" href="http://www.twitter.com/mymidici" target="_blank"><i class="fa fa-twitter"></i></a></li>
		     	   <li><a class="fb" href="http://www.facebook.com/mymidici" target="_blank"><i class="fa fa-facebook"></i></a></li>
		     	   <li><a class="ig" href="http://www.instagram.com/mymidici" target="_blank"><i class="fa fa-instagram"></i></a></li>
		     	   <li><a class="yelp" href="http://www.yelp.com/biz/midici-the-neapolitan-pizza-company-sherman-oaks?osq=midici" target="_blank"><i class="fa fa-yelp"></i></a></li>
		     	</ul>
			</div>
		</div>
	</div>
	<div class="arrowWrap">
		<div class="gradients">
			<div class="left"></div>
			<div class="right"></div>
		</div>
		<div class="arrows m-scooch-controls">
			<i class="arrow left fa fa-angle-left" data-m-slide="prev"></i>
			<i class="arrow right fa fa-angle-right" data-m-slide="next"></i>
		</div>
		<div id="instafeed" class="m-scooch-inner"></div>
	</div>
	<div class="col-sm-6 connect visible-xs">
		Let's Connect
		<ul class="socials">
     	   <li><a class="twit" href="http://www.twitter.com/mymidici" target="_blank"><i class="fa fa-twitter"></i></a></li>
     	   <li><a class="fb" href="http://www.facebook.com/mymidici" target="_blank"><i class="fa fa-facebook"></i></a></li>
     	   <li><a class="ig" href="http://www.instagram.com/mymidici" target="_blank"><i class="fa fa-instagram"></i></a></li>
     		<li><a class="yelp" href="http://www.yelp.com/biz/midici-the-neapolitan-pizza-company-sherman-oaks?osq=midici" target="_blank"><i class="fa fa-yelp"></i></a></li>
     	</ul>
	</div>
</div>

<?php get_footer(); ?>