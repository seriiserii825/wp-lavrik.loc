<?php

add_action( 'wp_enqueue_scripts', 'test_media' );

function test_media() {
	wp_enqueue_style( 'test_main_css', get_stylesheet_uri() );
	
	wp_enqueue_script( 'test_main_js', get_template_directory_uri() . '/assets/js/script.js', [], null, true );
}

add_action( 'after_setup_theme', 'setup_test_theme' );

function setup_test_theme() {
	register_nav_menu( 'top', 'Меню в шапке' );
}

add_action( 'widgets_init', 'register_widgets' );

function register_widgets() {
	register_sidebar([
		'name' => 'sidebar_right',
		'id' => 'sidebar-right',
		'description' => 'Правая колонка',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>'
	]);
}
