<?php
/*
Plugin Name: zingtree
Plugin URI: http://wordpress.org/plugins/zingtree/
Description: [zingtree name="Zingtree" id="123456789" ] shortcode
Version: 2.0
Author: Zingtree
Author URI: http://zingtree.com
License: GPLv3
*/

// tell WP about our shortcode
add_shortcode( 'zingtree', 'zingtree_handler' );


function zingtree_handler( $atts ) 
{
	
// set defaults	
	$defaults = array(
		'name' => 'Zingtree',	// tree name
		'id' => '148196706',	// Zingtree Tour
		'style' => 'buttons',	// style = buttons or panels
		'persist_names' => '',	// names of persistent buttons
		'persist_node_ids' => ''	// node IDs of persistent buttons
	);



	foreach ( $defaults as $default => $value ) { // add defaults
		if ( ! @array_key_exists( $default, $atts ) ) { // mute warning with "@" when no params at all
			$atts[$default] = $value;
		}
	}
	
	
// handle persistent buttons	
	
	$persist_names = $atts['persist_names'] ;
	$persist_node_ids = $atts['persist_node_ids'] ;
	
	if ($persist_names != '')
		$persist = "&persist_names=$persist_names&persist_node_ids=$persist_node_ids" ;	
	else
		$persist = '' ;


// deploy according to style

	$style = $atts['style'] ;
	if ($style == "panels")
		$deploy_url = "panels.php" ;
	else
		$deploy_url = "" ;	// buttons style uses just /deploy/

		
// build auto resizing iFrame code

	$html = sprintf ("	
	<iframe width=\"100%%\" frameborder=\"0\" seamless src=\"//zingtree.com/deploy/{$deploy_url}?deploy_name=%s&deploy_id=%s%s\">
	</iframe>
	<script type=\"text/javascript\" src=\"//zingtree.com/js/iframeResizer.js\"></script>
	<script type=\"text/javascript\">
	iFrameResize();
	</script>", wp_specialchars($atts['name']), wp_specialchars($atts['id']), wp_specialchars($persist) ) ;


// inject the code

	return($html);
	
}

