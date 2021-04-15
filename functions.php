<?php
 
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

//boostrap calls
function boostrap_theme() {
	wp_enqueue_script( 'boot1', get_stylesheet_directory_uri() .'/js/bootstrap.min.js', array( 'jquery' ),'',true );
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap-glyphicons.css');


}
add_action( 'wp_enqueue_scripts', 'boostrap_theme' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

//Filtering a Class in Navigation Menu Item
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if(is_single() && $item->title == 'Blog'){
             $classes[] = 'current-menu-item';
     }
     return $classes;
}