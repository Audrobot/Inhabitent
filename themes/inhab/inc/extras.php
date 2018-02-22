<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_custom_login_logo() {
	echo '<style type="text/css">                                                                   
			.login h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important; 
			height: 120px !important; width: 410px !important; margin-left: -40px;}                            
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

function the_url( $url ) {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );

function inhabitent_login_title() {
	return 'Inhabitent';
}
add_filter('login_headertitle', 'inhabitent_login_title');

function about_hero_image() {
	if( !is_page_template('page-templates/about.php') ) {
		return;
	}
	
	$img = CFS()->get( 'image' );
	if ( ! $img) {
		return;
	}
	
	$custom_css = "
					.page-template-about .site-header {
							background: 
							linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 10%),
							url({$img});
							background-size: cover, cover;
				}
	";
	wp_add_inline_style('inhabitent', $custom_css);
}
add_action('wp_enqueue_scripts', 'about_hero_image');