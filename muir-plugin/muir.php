<?php
/*
Plugin Name: muir plugin
Plugin URI: http://www.muirlakealliance.ca/
Description: Various Shortcodes
Author: Matthew Loewen
Version: 1.0
Author URI: http://www.mlplace.ca
*/

if ( ! defined( 'MP_PLUGIN_DIR' ) )
	define( 'MP_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . basename( dirname( __FILE__ ) ) . '/' );



// Add Shortcode
function custom_bibly() {
	// Code
return '<script async src="http://www.blueletterbible.org/scripts/blbToolTip/BLB_ScriptTagger-min.js" type="text/javascript"></script>
<script type="text/javascript">
BLB.Tagger.Translation = "ESV";
BLB.Tagger.HyperLinks = "all";
BLB.Tagger.HideTranslationAbbrev = false;
BLB.Tagger.TargetNewWindow = true;
BLB.Tagger.Style = "par";
</script>';
/*
return '<script src="http://code.bib.ly/bibly.min.js"></script>
<link href="http://code.bib.ly/bibly.min.css" rel="stylesheet" />
*/
}
function tabs_init( $atts, $content = null ) {
global $tabsnum;
return '<link async rel="stylesheet" href="' . plugins_url( 'muir-plugin/css/tabs.css' , dirname(__FILE__)) . '" type="text/css" />
<script async src="' . plugins_url( 'muir-plugin/js/tabs.js' , dirname(__FILE__)) . '"></script><div class="tabs">
<ul class="tab-links">' . do_shortcode($content) . '</div>';
}

function muir_tab_title( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title' => 'Summary',
		'title2' => 'false',
		'title3' => 'false',
	), $atts );
	$return ='<li class="active"><a href="#tab1">' . esc_attr($a['title']) . '</a></li>';
	if (esc_attr($a['title2']) !== 'false'){
		$return = $return . '<li><a href="#tab2">' . esc_attr($a['title2']) .'</a></li>';
		if (esc_attr($a['title3']) !== 'false'){
			$return = $return . '<li><a href="#tab3">' . esc_attr($a['title3']) .'</a></li>';
	}
	$return = $return . '</ul><div class="tab-content">';
   return $return;
}
}

function muir_tab( $atts, $content = null ) {
	global $tabsnum;
	++$tabsnum;
	$a = shortcode_atts( array(
		'default' => 'false',
	), $atts );
	$return = esc_attr($a['active']);
	if ($tabsnum == 1){
		$return = '<div id="tab' . $tabsnum . '" class="tab active">';
	} else {
		$return = '<div id="tab' . $tabsnum . '" class="tab">';
	}  
	$return = $return . do_shortcode($content) . '</div>';
   return $return;
}


add_shortcode( 'reftag', 'custom_bibly' );
add_shortcode( 'tabsinit', 'tabs_init' );
add_shortcode( 'tabstitle', 'muir_tab_title' );
add_shortcode( 'tabcontent', 'muir_tab' );
?>
