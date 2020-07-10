<?php

/**
 * Table of Contents
 *
 * 0.0 Global base code
 *     0.1 Disable Gutenberg
 *     0.2 Disable the emoji's
 *     0.3 Miscellaneous
 *
 * 1.0 Theme functions
 *     1.0.1 Load scripts
 *     1.0.2 Menus
*/

/**
 * 0.0 Global base code
 */

/** 0.1 Disable Gutenberg */
add_filter( 'use_block_editor_for_post', '__return_false' );
add_action( 'wp_enqueue_scripts', 'br_disable_gutenberg_css' );

function br_disable_gutenberg_css(){
	wp_dequeue_style( 'wp-block-library' );
}

/** 0.2 Disable the emoji's */
add_action( 'init', 'disable_emojis' );

function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}
	return $urls;
}

/** 0.3 Miscellaneous */

// add feature image support
add_theme_support( 'post-thumbnails', array( 'post', 'events', 'news', 'testimonials' ) );

// hide admin bar
show_admin_bar(false);

/**
 * 1.0 Theme functions
 */

/** 1.0.1 Load scripts */
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function load_scripts() {
  	wp_deregister_script( 'jquery' );
	wp_register_script( 'scripts', get_template_directory_uri() . '/dist/js/scripts.js', array(), false, true);
	wp_register_script( 'app', get_template_directory_uri() . '/dist/js/app.js', array(), false, true);
	wp_enqueue_script( 'scripts' );
	wp_enqueue_script( 'app' );
    // create theme directory link for JS
    $theme_dir = array( 'themeDir' => get_stylesheet_directory_uri() );
    wp_localize_script( 'app', 'object_name', $theme_dir );
}

/** 1.0.2 Menus */
function register_theme_menus() {
	register_nav_menus(array(
		'main-navigation' => 'Main Navigation'
	));
}
add_action( 'init', 'register_theme_menus' );
