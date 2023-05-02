<?php
function do_breadcrumbs() {
	//Do the breadcrumbs in reverse
	$breadcrumbs = '<li>' . get_the_title() . '</li>' . '</ul>' ;	
	//This page parent id
	$parent_id = wp_get_post_parent_id(get_the_id());
	//URL for SVG sprite
	$svg_file = get_theme_file_uri('assets/media/svg/icons/bc-svgs.svg') . '#carat';
	//WHile this page has a parent
	while ($parent_id !== 0 && strcmp(strtolower(get_the_title($parent_id)), strtolower('Areas of practice')) !== 0) {
		//Build up an li for the parent
		$next_item = '<li>';
		$next_item = $next_item . '<a href="'. get_page_link($parent_id) .'">' . get_the_title($parent_id) . '</a>';
		$next_item = $next_item . '<svg class="svg-icon bc-site-header__menu-link__close ">';
		$next_item = $next_item .	'<use xlink:href="' . $svg_file .'"></use>';
		$next_item = $next_item . '</svg>'; 
		$next_item = $next_item . '</li>';
		//Prepend onto the $breadcrumbs ul
		$breadcrumbs = $next_item . $breadcrumbs;
		//Reset the parent ID
		$parent_id = wp_get_post_parent_id($parent_id);
	}
	//If we're at the top
	if ($parent_id === 0 || strcmp(strtolower(get_the_title($parent_id)), strtolower('Areas of practice')) === 0) {
		//Prepend the hompage link
		$breadcrumbs = '</li>' . $breadcrumbs;
		$breadcrumbs = '</svg>' . $breadcrumbs; 
		$breadcrumbs =	'<use xlink:href="' . $svg_file . '"></use>' . $breadcrumbs;
		$breadcrumbs = '<svg class="svg-icon bc-site-header__menu-link__close ">' . $breadcrumbs;
		$breadcrumbs = '<a href="'. site_url() .'">' . 'Home' . '</a>' . $breadcrumbs; 
		$breadcrumbs = '<li>' . $breadcrumbs;
	}
	$breadcrumbs = '<ul class="bc-breadcrumbs-nav__list">' . $breadcrumbs;
	return $breadcrumbs;
}
?>