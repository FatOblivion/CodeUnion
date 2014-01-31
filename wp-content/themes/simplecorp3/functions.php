<?php
	require_once('library/siteframework.php');		// core functions
	require('theme-options.php');          			// theme options

	add_action( 'add_meta_boxes', 'action_add_meta_boxes', 10, 2 );
	function action_add_meta_boxes() {
		global $_wp_post_type_features;
		if (isset($_wp_post_type_features['post']['editor']) && $_wp_post_type_features['post']['editor']) {
			unset($_wp_post_type_features['post']['editor']);
			add_meta_box(
				'description_section',
				__('Editor'),
				'inner_custom_box',
				'post', 'normal', 'default'
			);
		}

		if (isset($_wp_post_type_features['page']['editor']) && $_wp_post_type_features['page']['editor']) {
			unset($_wp_post_type_features['page']['editor']);
			add_meta_box(
				'description_sectionid',
				__('Editor'),
				'inner_custom_box',
				'page', 'normal', 'default'
			);
		}
	}
	function inner_custom_box( $post ) {
		the_editor($post->post_content);
	}


	// remove_filter('get_the_excerpt', 'wp_trim_excerpt');
	// add_filter('get_the_excerpt', 'custom_trim_excerpt');
	// function custom_trim_excerpt($text = '')
	// {
	// 	$raw_excerpt = $text;
	// 	if ( '' == $text ) {
	// 		$text = get_the_content('');
	 
	// 		//$text = strip_shortcodes( $text );
	 
	// 		$text = apply_filters('the_content', $text);
	// 		$text = str_replace(']]&gt;', ']]&gt;', $text);
	// 		$excerpt_length = apply_filters('excerpt_length', 55);
	// 		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
	// 		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	// 	}
	// 	return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
	// }
	
	// add_filter('get_the_excerpt','do_shortcode');

?>