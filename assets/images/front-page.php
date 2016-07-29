<?php
/**
 * Template Name: Front Page Template
 */
get_header(); ?>
<div id="boxes">
  <div id="dialog" class="window">
    <div class="pop-up-logo">
 		<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
    </div>
    <h1 class="pop-up-deals">
    	SIGN UP TO RECEIVE SPECIAL DEALS!
    </h1>
    <div class="pop-up-form">
    	<form class="my-form" action="/subscribe" method="post">
			<input type="text" placeholder="E-mail Address" /><br />
			<input type="submit" value="SIGN UP">
		</form>
    </div>
  </div>
  <div id="mask"></div>
</div>
<div class="blackbar">
	People Are The Best Thing <span class="red">That Can Happen to Anyone</span>
</div>




<div id="fullwidth" class="home-about">
	<div class="container-new-home">
		<div class="home-blurbs">
			<div class="row">
				<div class="col-xs-12 col-md-7">
					<img class="home-blurb-img-pizza" src="<?php echo get_template_directory_uri(); ?>/images/Pizza.png"/>
				</div>
				<div class="col-xs-12 col-md-5">
					<h3 class="home-red-blurb">
						NEAPOLITAN PIZZA IS THE BETTER PIZZA.
					</h3>
					<h3 class="home-blurb-text">
						Neapolitan Pizza exhalts the flavors, and celebrates the senses. Each bite distributes an array of flavors, an arrangement of textures. Neapolitan Pizza is fine pizza. Pizza with a capital N!
					</h3>
				</div>
			</div>
			<div class="row" style="margin-top:140px;">
				<div class="col-xs-12 col-md-5">
					<h3 class="home-red-blurb">
						NEAPOLITAN PIZZA IS THE BETTER PIZZA.
					</h3>
					<h3 class="home-blurb-text">
						They move us, shape us, excite us, and inspire us. We believe people are the best thing that can happen to anyone. That's why we created MidiCi. We wanted a place for people to meet up, sit back, and be social without the media. Because we believe it is moments we remember, not days, posts, or pictures. 
					</h3>
				</div>
				<div class="col-xs-12 col-md-7">
					<img class="home-blurb-img" src="<?php echo get_template_directory_uri(); ?>/images/Poloroid_Girls.png"/>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="fullwidth" class="home-video">
	<video autoplay  poster="<?php bloginfo('template_directory'); ?>/videos/MIDICI_web-video.jpg" id="bgvid" loop>
		<!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop 		turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by 		pressing the "Pause" button  -->
		<source src="<?php bloginfo('template_directory'); ?>/videos/Midici_Brand_Video_1.webm" type="video/webm">
		<source src="<?php bloginfo('template_directory'); ?>/videos/Midici_Brand_Video_1.webm" type="video/mp4">
	</video>
</div>

<div id="fullwidth" class="home-instagram">
	<div class="home-bg-placeholder" style="background-image: url(<?php echo get_template_directory_uri();?>/images/midici_bottomhalf.jpg)">
	</div>
</div>

<!--<div id="fullwidth" class="home-location">
	<div class="container">
		<a href="/locations">Find A Location</a>
	</div>
</div>-->
<!--<?php get_footer(); ?>-->
<script>
$(document).ready(function() {	

var id = '#dialog';
	
//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();
	
//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(2000);	
$('#mask').fadeTo("slow",0.9);	
	
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
              
//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
	
//transition effect
$(id).fadeIn(2000); 	
	
//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
	
});
</script>
