<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
	Prova2
	$iphm=getenv('REMOTE_ADDR');
	if($iphm=="87.24.122.59" || $iphm=="193.238.137.235" || $iphm=="193.238.139.242"){
		define('WP_USE_THEMES', true);

		/** Loads the WordPress Environment and Template */
		require( dirname( __FILE__ ) . '/wordpress/wp-blog-header.php' );
	}else{
		require('update/work_in_progress.php');
	}
?>