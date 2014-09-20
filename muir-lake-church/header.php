<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Muir Lake
 <img src="<?php bloginfo('template_directory'); ?>/images/menu-button.png">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" 
      type="image/png" 
      href="/favicon.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page container" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<a href="#" id="show-menu-button"><div style="font-size: 25px;background-color: white;" class="dashicons dashicons-menu"></div></a>

		<div class="container">
			<div class="site-branding">

				<div class="header-left">
					<a href="/"><img  src="<?php bloginfo('template_directory'); ?>/images/transparent.png"></img></a>
				</div>

				<div class="header-right">
					<div class="email-subscribe">
						<div class="widget-area" role="complementary">
							<aside id="blog_subscription-2" class="widget jetpack_subscription_widget"><h1 class="widget-title"><label for="subscribe-field">Subscribe</label></h1>
								<form action="#" method="post" accept-charset="utf-8" id="subscribe-blog-blog_subscription-2">
								<p id="subscribe-text"></p>
								<p id="subscribe-email"><input type="text" name="email" value="Email Address" id="subscribe-field" onclick="if ( this.value == 'Email Address' ) { this.value = ''; }" onblur="if ( this.value == '' ) { this.value = 'Email Address'; }" /></p>

							<p id="subscribe-submit">
								<input type="hidden" name="action" value="subscribe" />
								<input type="hidden" name="source" value="http://muirlake.ap-design.ca/" />
								<input type="hidden" name="sub-type" value="widget" />
								<input type="hidden" name="redirect_fragment" value="blog_subscription-2" />
								<input type="submit" value="Subscribe" name="jetpack_subscriptions_widget" />
							</p>
							</form>
						</aside>	</div>
					</div>
					<div class="site-tagline">&quot;Making followers of Jesus who love God and others selflessly.&quot;</div>
				</div>

			</div><!-- #site-branding -->
		</div><!-- #container -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="container-desktop-nav">
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'muir-lake' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</div><!-- #container-desktop-nav -->
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
	<div id="content" class="site-content">
