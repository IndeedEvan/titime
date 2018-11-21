<?php

//Evan McDonald - P3

// Mise en place du thème enfant

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// Retire le breadcrumb woocommerce
 
add_action( 'init', 'wc_remove_storefront_breadcrumbs');

function wc_remove_storefront_breadcrumbs() {
  remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10 );
}

// Page de login modifié

function childtheme_custom_login() {
 echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/style.css" />';
}

add_action('login_head', 'childtheme_custom_login');


//Sécurité - masquer la version de wordpress

remove_action("wp_head", "wp_generator");

function wpt_remove_version() {
	return ''; 
}

add_filter('the_generator', 'wpt_remove_version');

?>