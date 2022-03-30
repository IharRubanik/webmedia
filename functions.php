<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/swiper.css' );
	wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/assets/css/reset.css' );
	
	
	
	wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/js/swiper.js', array(), null, true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true );
});



add_theme_support('post-thumbnails');
add_theme_support('tatle-tag');
add_theme_support('custom-logo');

?>

