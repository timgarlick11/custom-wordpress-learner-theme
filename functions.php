<?php  

function tim_script_enqueue() {

	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/custom-styles.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/actions.js', array(), '1.0.0', true);


}

add_action( 'wp_enqueue_scripts', 'tim_script_enqueue' );


function tim_theme_setup() {
	add_theme_support('menus');
	register_nav_menu( 'primary-header', 'Primary Header Navigation' );
	register_nav_menu( 'primary-footer', 'Primary Footer Navigation' );
}
add_action('init', 'tim_theme_setup');

add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );

?>