<?php
/*
Plugin Name: PWA Custom Filters
Description: Filters for the official PWA Plugin https://wordpress.org/plugins/pwa/
Plugin URI:  
Author:      Inge Reck
Version:     0.0.1
*/

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;
	}

// adds the 'purpose' property to the manifest
add_filter( 'web_app_manifest', function( $manifest ) {
	$manifest['icons'] = array_map(
		function ( $icon ) {
			if ( ! isset( $icon['purpose'] ) ) {
				$icon['purpose'] = 'any maskable';
			}
			return $icon;
		},
		$manifest['icons']
	);
	return $manifest;
} );

