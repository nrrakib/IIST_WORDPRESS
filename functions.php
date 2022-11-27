<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function theme_scripts() {
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(),array(), _S_VERSION );
	wp_enqueue_style( 'theme-boot', get_template_directory_uri().'./assets/css/bootstrap.min.css', array(), _S_VERSION );
	

	wp_enqueue_script( 'theme-navigation', get_template_directory_uri() . './assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );

	
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

?>