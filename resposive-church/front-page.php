<?php
/**
 * The landing page template file.
 *
 * This is the template that will render for the landing page, which we set in the WP admin panel.
 *
 * @package Muir Lake
 */

?>
<?php get_header(); ?>

<div id="main">
	<div class="container">
		<h2>Welcome</h2>
<p>Muir Lake Community Alliance Church (MLCAC) was originally planted by <a href=
"http://www.sgac.net/"> Spruce Grove Alliance Church  </a> and some faithful believers, circa 1982. The purpose of planting the church was to reach the community of Muir Lake for Jesus which continues to be our mandate.</p>

<p>Our church continues today to powerfully live out the mission God gave us: “To make followers of Jesus who love God and others selflessly.” With the help of the Holy Spirit we are seeing His Word proclaimed, lives transformed, and our community impacted.</p>

	<div class="clearfix"></div>

		<div class="promo-links">
			<a class="meet" href="/leadership">

				<img class="small-link-image" src="<?php bloginfo('template_directory'); ?>/images/meet-wide.jpg"><img class="large-link-image" src="<?php bloginfo('template_directory'); ?>/images/meet.jpg">
<!--				<img alt='Meet!' data-src-base="<?php bloginfo('template_directory'); ?>/images/" data-src="<1049:meet-wide.jpg,
						>1049:meet.jpg" />
				<noscript><img alt='Meet!' src="<?php bloginfo('template_directory'); ?>/images/meet-wide.jpg" /></noscript> -->
				<h3>Meet</h3></a>
				<a href="/sermons">
				<img class="small-link-image" src="<?php bloginfo('template_directory'); ?>/images/listen-wide.jpg"><img class="large-link-image" src="<?php bloginfo('template_directory'); ?>/images/listen.jpg">
<!--				<img alt='Listen!' data-src-base="<?php bloginfo('template_directory'); ?>/images/" data-src="<1049:listen-wide.jpg,
						>1049:listen.jpg" />
				<noscript><img alt='Listen!' src="<?php bloginfo('template_directory'); ?>/images/listen-wide.jpg" /></noscript> -->
				<h3>Listen</h3></a>
				<a href="/events">
			<img class="small-link-image" src="<?php bloginfo('template_directory'); ?>/images/calendar-wide.jpg"><img class="large-link-image" src="<?php bloginfo('template_directory'); ?>/images/calendar.jpg">
<!--				<img alt='Events!' data-src-base="<?php bloginfo('template_directory'); ?>/images/" data-src="<1049:calendar-wide.jpg,
						>1049:calendar.jpg" />
				<noscript><img alt='Events!' src="<?php bloginfo('template_directory'); ?>/images/calendar-wide.jpg" /></noscript> -->
				<h3>Events</h3></a>
		</div>
	<div class="clearfix"></div>
<!--	<div class="google-map"></div> -->

	</div><!-- #container -->
</div><!-- #main -->

<div id="secondary">
	<div class="container">

		<div class="title">
			<h2 class="widget-title">Information</h2>
		</div>

		<div class="col-1">
		<?
//		echo do_shortcode('[my_calendar_upcoming template="<strong>{date}</strong>, {time}: {link_title}" before="0" after="4" type="events" order="asc"]');
		echo do_shortcode('[gcal id="2945"]');
		?>
		</div>

		<div class="col-2">
			<a href="http://maps.google.com/maps?ll=53.61226,-114.002863&z=14&t=m&hl=en-US&gl=CA&mapclient=embed&cid=12458683173179926907">
				<img src="<?php bloginfo('template_directory'); ?>/images/map.jpg" alt="">
			</a>
<!--			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4734.055161458964!2d-114.00124327273849!3d53.610810556212215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xace622564a86a97b!2sMuir+Lake+Community+Alliance+Church!5e0!3m2!1sen!2sca!4v1395692564490" width="290" height="250" frameborder="0" style="border:0"></iframe>  -->
		</div>

		<div class="col-3">
			<p><strong>DIRECTIONS:</strong> From Jennifer Heil Way, Spruce Grove. Turn left to merge onto Yellowhead Highway West. Take exit 355 toward Calahoo. Merge onto AB-779 North. Go north 4.5 km. Just past the Muir Lake School on the left side (east) is the church.</p>
			<p><strong>OLD WEBSITE:</strong> <a href="http://w.muirlakealliance.ca">w.muirlakealliance.ca</a></p>
		</div>
		<div class="clearfix"></div>
		
	</div><!-- #container -->
</div><!-- #secondary -->
<!--<script>
$(document).ready(function(){
  $("button").click(function(){
    $("div.google-map").replaceWith("Hello world!");
  });
});
</script>
-->
<?php get_footer(); ?>