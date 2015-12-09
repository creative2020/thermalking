<?php

require_once('lib/wp_bootstrap_navwalker.php');

add_action( 'after_setup_theme', function() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menu( 'primary', 'Primary Menu' );
} );

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
} );

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_script( 'bootstrap',
		'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js',
		[ 'jquery' ], false, true );
} );
