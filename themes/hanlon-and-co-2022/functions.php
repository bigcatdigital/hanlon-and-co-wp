<?php 
	// ******************** Crunchify Tips - Clean up WordPress Header START ********************** //
		function crunchify_remove_version() {
			return '';
		}
		add_filter('the_generator', 'crunchify_remove_version');

		remove_action('wp_head', 'rest_output_link_wp_head', 10);
		remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
		remove_action('template_redirect', 'rest_output_link_header', 11, 0);

		remove_action ('wp_head', 'rsd_link');
		remove_action( 'wp_head', 'wlwmanifest_link');
		remove_action( 'wp_head', 'wp_shortlink_wp_head');

		function crunchify_cleanup_query_string( $src ){
			$parts = explode( '?', $src );
			return $parts[0];
		}
		//add_filter( 'script_loader_src', 'crunchify_cleanup_query_string', 15, 1 );
		//add_filter( 'style_loader_src', 'crunchify_cleanup_query_string', 15, 1 );
	
	/**
	* Disable the emoji's
	*/
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
	add_action( 'init', 'disable_emojis' );

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
	// ******************** Clean up WordPress Header END ********************** //


	function build_project_styles() {
		
		wp_enqueue_style('fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Oswald:wght@200;400;500;600&display=swap', NULL, time());
		wp_enqueue_style('cn-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@300;400;700&family=Noto+Serif+SC:wght@400;700&display=swap', NULL, time());
		

		wp_enqueue_style('flickty-styles',  'https://unpkg.com/flickity@2/dist/flickity.min.css', NULL, time());	
		wp_enqueue_style('project-styles', get_theme_file_uri('/assets/css/style.css'), NULL, time(), 'all');	
	}
	add_action('wp_enqueue_scripts', 'build_project_styles'); 
	function build_project_scripts() {
		wp_enqueue_script('project-scripts',  get_theme_file_uri('/assets/scripts/app-concat.js'), NULL, time(), true);	
	}
	add_action('wp_enqueue_scripts', 'build_project_scripts');

	function project_features() {
		add_theme_support('title-tag');	
		register_nav_menu('main-navigation',__( 'Main navigation' ));
		register_nav_menu('footer-navigation',__( 'Footer navigation' ));
	
	}
	add_action('after_setup_theme', 'project_features');
	/* Navigation menus */
	function fwc_main_nav_menu() {
		register_nav_menu('main-navigation',__( 'Main site navigation' ));
	}
	//add_action( 'init', 'fwc_main_nav_menu' );
	
	function custom_project_settings() {
		add_filter('acf_the_content', 'wpautop');
	}
	add_action( 'init', 'custom_project_settings' );

	


	//Preload scripts
	// add_action('wp_head', function () {
  // 	global $wp_scripts;
	//   foreach ($wp_scripts->queue as $handle) {
	//     $script = $wp_scripts->registered[$handle];
	//     //-- If version is set, append to end of source.
	//     $source = $script->src . ($script->ver ? "?ver={$script->ver}" : "");
	//     //-- Spit out the tag.
	//     echo "<link rel='preload' href='{$source}' as='script'/>\n";
	//   }
	// }, 1);
	

/** REST API filters **/
//Function to add all CPT ACF fields to REST API response 
// function bc_add_CPT_to_rest($post_type) {
// 	function bc_rest_prepare_post($data, $post, $request) {
// 		$_data = $data->data;	
// 		$fields = get_fields($post->ID);	
// 		foreach ($fields as $key => $value){
// 			$_data[$key] = get_field($key, $post->ID);
// 		}
// 		$data->data = $_data; 
// 		return $data;
// 	}
// 	add_filter('rest_prepare_' . $post_type, 'bc_rest_prepare_post', 10, 3);
// }
add_filter( 'staffprofile_post_type_args', 'rewrite_profiles_slug' );
function rewrite_profiles_slug( $args ) {
  $args['rewrite']['slug'] = 'staff';
  return $args;
}
flush_rewrite_rules();

?>