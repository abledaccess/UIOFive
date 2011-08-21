<?php

// remove WordPress version info from head and feeds
	function complete_version_removal() {
		return '';
	}
	add_filter('the_generator', 'complete_version_removal');

// register main navigation
	add_action( 'init', 'register_main_nav_menu' );

	function register_main_nav_menu() {
		register_nav_menu( 'main_nav', __( 'Main Navigation Menu' ) );
	}

// register sidebar widget
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'before_widget' => '<li class="fl-widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h2 class="widgettitle">',
			'after_title' => '</h2>',
		));
	}

// Credit
	function custom_admin_footer() {
		echo 'FSSFive is developed by <a href="http://abledaccess.com/">Abledaccess</a> in partnership with <a href="http://fluidproject.org/">The Fluid Project</a>.';
	} 
	add_filter('admin_footer_text', 'custom_admin_footer');

// add Twitter handle in user profiles
	function FSSFive_contactmethods($contactmethods) {
		$contactmethods['twitter'] = 'Twitter Handle';
		return $contactmethods;
	}
	
	add_filter('user_contactmethods', 'FSSFive_contactmethods', 10, 1);

// enable threaded comments
	function enable_threaded_comments(){
		if (!is_admin()) {
			if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
				wp_enqueue_script('comment-reply');
			}
	}
	add_action('get_header', 'enable_threaded_comments');

?>