<?php

add_action('after_setup_theme','gg_aps_start', 16);

function gg_aps_start(){
	add_action('wp_enqueue_scripts', 'gg_aps_scripts_and_aps_styles', 999);
	//add_theme_support( 'post-thumbnails' );
}

//Bootstrap
function load_bootstrap(){
	wp_enqueue_script( 'bootstrap-js' );
	wp_enqueue_style( 'bootstrap-css' );
}

add_action('bp_before_profile_loop_content', 'load_bootstrap');

function gg_aps_scripts_and_aps_styles(){

	wp_register_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '3.0.1', true );
	wp_register_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.css', null, '3.0.1', 'all' );
	wp_register_style('gg_aps_fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
	wp_register_style('gg_aps_roboto', 'http://fonts.googleapis.com/css?family=Oswald:300|Roboto:500,300&subset=latin,latin-ext');
	wp_register_style('gg_aps_stylesheet', get_stylesheet_uri()); 

	//Load Fonts then stylesheet
	wp_enqueue_style('gg_aps_fontawesome');
	wp_enqueue_style('gg_aps_roboto');
	wp_enqueue_style( 'gg_aps_stylesheet');

	//Load Javascript
	wp_register_script('aps', get_stylesheet_directory_uri() . '/js/aps.js', array('jquery'), null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('aps');

}

function aps_theme_load_login_css(){
	wp_enqueue_style('gg_aps_login_css', get_stylesheet_directory_uri() . '/css/login-styles.css', false);
}

add_action('login_enqueue_scripts', 'aps_theme_load_login_css');

function aps_theme_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'gg-aps' ),
        'id' => 'aps-sidebar', 
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'gg-aps' ),
        'before_widget' => '<div id="%1$s">',
        'after_widget' => '</div>'
    ) );
}

add_action( 'widgets_init', 'aps_theme_widgets_init' );

/*
*  Options Page
*/

if( function_exists('acf_add_options_page') ){
	acf_add_options_page();
}


/* Remove admin bar for non-editor */
add_action('after_setup_theme', 'aps_theme_remove_admin_bar');

function aps_theme_remove_admin_bar() {
	if (!current_user_can('edit_posts') && !is_admin()) {
	  show_admin_bar(false);
	}
}

add_filter('term_link', 'aps_filter_category_link', 10, 3);

function aps_filter_category_link($url, $term, $slug){
	switch($term->slug){
		case 'scholarship':
			$url .= "?status=complete&orderby=pubdate_DESC";
			break;
		case 'news':
			$url .= "?orderby=posted_DESC";
			break;
		case 'opportunities':
			$url .= "?status=current&orderby=expiration_ASC";
			break;
		case 'print': 
			$url .= "?orderby=city_ASC";
			break;
	}
	return $url;
}

add_action('wp_logout','aps_theme_go_home');

function aps_thme_go_home(){
  wp_redirect( home_url() );
  exit();
}

