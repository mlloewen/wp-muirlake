<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Muir Lake
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div id="footer-content">
				<h2>Contact</h2>
				<div id="contact">
					<p><strong>PHONE:</strong> 780.963.9975</p>
					<p><strong>FAX:</strong> 780.963.5635</p>
					<p><strong>EMAIL:</strong> <a href="mailto:info@muirlakealliance.ca" target="_blank">info@muirlakealliance.ca</a></p>
					<p id="copyright-paragraph">© 2014 Muir Lake Alliance</p>	
				</div><!-- #contact -->

				<div id="copyright-single">
					<p>© 2014 Muir Lake Alliance</p>
				</div><!-- #copyright-single -->
			</div><!-- #footer-content -->
		</div><!-- #container -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	jQuery('#show-menu-button').click(function(){
		if( jQuery('body').hasClass('show-menu') ){
			jQuery('body').removeClass('show-menu');
		} else {
			jQuery('body').addClass('show-menu');
		}
	});
</script>

</body>
</html>
