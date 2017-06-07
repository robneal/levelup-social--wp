<?php


	// ADD THE STYLESHEETS
	function wpdj_theme_styles(){
		wp_enqueue_style('googlefont_css' , 'https://fonts.googleapis.com/css?family=Roboto:100,300i,400,400i,700');
		// wp_enqueue_style('main_css' , get_template_directory_uri() . '/style.css');
		wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
	}
	add_action('wp_enqueue_scripts', 'wpdj_theme_styles');
	

	// ADD JAVASCRIPT
	function wplevelup_theme_js(){
		wp_enqueue_script('Mobile_Menu_js', 
			get_template_directory_uri() . '/js/modules/MobileMenu.js',
			array('jquery') ,'', true
		);

		wp_enqueue_script('smooth_Scrolling_js', 
			get_template_directory_uri() . '/js/modules/smoothScrolling.js',
			array('jquery') ,'', true
		);

	}
	add_action('wp_enqueue_scripts', 'wplevelup_theme_js');


	// Customize exerpt word count length
	function custom_excerpt_length(){
		return 20;
	}
	function new_excerpt_more( $more ) {
    	return '';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	add_filter("excerpt_length", "custom_excerpt_length");
?>