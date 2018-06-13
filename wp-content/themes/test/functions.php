<?php

add_action( 'wp_enqueue_scripts', 'test_media' );
add_action( 'init', 'prefix_register_name' );

function prefix_register_name() {
	register_post_type( 'flats', [
		'labels'              => [
			'name'               => __( 'Квартиры', 'text-domain' ),
			'singular_name'      => __( 'Квартира', 'text-domain' ),
			'add_new'            => _x( 'Добавить новую', 'text-domain', 'text-domain' ),
			'add_new_item'       => __( 'Добавить ', 'text-domain' ),
			'edit_item'          => __( 'Редактировать', 'text-domain' ),
			'new_item'           => __( 'Добавить', 'text-domain' ),
			'view_item'          => __( 'View Singular Name', 'text-domain' ),
			'search_items'       => __( 'Search Plural Name', 'text-domain' ),
			'not_found'          => __( 'No Plural Name found', 'text-domain' ),
			'not_found_in_trash' => __( 'No Plural Name found in Trash', 'text-domain' ),
			'parent_item_colon'  => __( 'Parent Singular Name:', 'text-domain' ),
			'menu_name'          => __( 'Квартиры', 'text-domain' ),
		],
		'description'         => 'description',
		'public'              => true,
		'has_archive'         => true,
		'query_var'           => true,
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail'
	)] );

	register_taxonomy( 'city', ['flats'],  [
		'labels'              => [
			'name'               => __( 'Города', 'text-domain' ),
			'singular_name'      => __( 'Город', 'text-domain' ),
			'add_new'            => _x( 'Добавить новую', 'text-domain', 'text-domain' ),
			'add_new_item'       => __( 'Добавить ', 'text-domain' ),
			'edit_item'          => __( 'Редактировать', 'text-domain' ),
			'new_item'           => __( 'Добавить', 'text-domain' ),
			'view_item'          => __( 'View Singular Name', 'text-domain' ),
			'search_items'       => __( 'Search Plural Name', 'text-domain' ),
			'not_found'          => __( 'No Plural Name found', 'text-domain' ),
			'not_found_in_trash' => __( 'No Plural Name found in Trash', 'text-domain' ),
			'parent_item_colon'  => __( 'Parent Singular Name:', 'text-domain' ),
			'menu_name'          => __( 'Города', 'text-domain' ),
		],
		'description'         => 'description',
		'public'              => true,
		'has_archive'         => true,
		'query_var'           => true,
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail'
		)]);
}

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

add_theme_support( 'post-thumbnails');
add_image_size( 'flats-thumb', 400, 250, true );

function test_get_title($title){
	return str_replace(search, replace, subject);
}

add_shortcode( 'test_recent', 'test_recent' );

function test_recent(){
	echo 'shortcode';
}



/*add_filter( 'document_title_separator', 'filter_function_name_8645' );
function filter_function_name_8645( $sep ){

	return '|';
}
*//*add_filter('pre_get_document_title', 'test_calc');

function test_calc($title){
	return str_replace('&#8212;', '|', $title);
}*/

/*add_filter('the_content', 'change_content');
function change_content(){
	return 1;
}*/

add_filter('widget_text', 'do_shortcode');
