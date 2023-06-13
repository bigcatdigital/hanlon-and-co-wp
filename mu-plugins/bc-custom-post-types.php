<?php
	/*
		* Big Cat Custom Post types
		* 
		* @author				Michael Mason Big Cat Design			
		* Plugin Name: 	Big Cat Custom Post types
		* Plugin URI: 	example.com
		* Version: 			0.1.0
		* Author: 			Michael Mason Big Cat Design
		* Description: 	Adds Custom post types to a Wordpress build
	*/

	define('CPTSHOME', plugin_dir_path(__FILE__));

	//Base class 
	require CPTSHOME . 'bc-custom-post-types/CPT-Classes/class-BC-cpt.php';

	/* 
	* Hanlon & Co Custom Post Types:
	*/
	//Testimonial
	$testimonial_labels = array(
		'name'               => 'Client testimonial',
		'singular_name'      => 'Client testimonial',
		'menu_name'          => 'Client testimonials',
		'name_admin_bar'     => 'Client testimonial',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add Testimonial',
		'new_item'           => 'New Testimonial',
		'edit_item'          => 'Edit Testimonial',
		'view_item'          => 'View Testimonial',
		'all_items'          => 'All Testimonials',
		'search_items'       => 'Search Client testimonials',
		'parent_item_colon'  => 'Parent Client testimonial',
		'not_found'          => 'No Client testimonials Found',
		'not_found_in_trash' => 'No Client testimonials Found in Trash'
	);

	$testimonial_args = array(
		'labels'              => $testimonial_labels,
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-star-empty',
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'supports'            => array( 'title', 'author', 'thumbnail'),
		'has_archive'         => true,
		'rewrite'             => array( 'slug' => 'testimonials' ),
		'query_var'           => true
	);
	new BCCustomPostType('Client testimonial', 'clienttestimonial', $testimonial_args);

	//Contact info
	$contact_labels = array(
		'name'               => 'Contact info',
		'singular_name'      => 'Contact info',
		'menu_name'          => 'Contact info',
		'name_admin_bar'     => 'Contact info',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add Contact info',
		'new_item'           => 'New Contact info',
		'edit_item'          => 'Edit Contact info',
		'view_item'          => 'View Contact info',
		'all_items'          => 'All Contact info posts',
		'search_items'       => 'Search Contact infos',
		'parent_item_colon'  => 'Parent Contact info',
		'not_found'          => 'No Contact info posts Found',
		'not_found_in_trash' => 'No Contact info posts Found in Trash'
	);

	$contact_args = array(
		'labels'              => $contact_labels,
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-phone',
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'supports'            => array( 'title', 'author', 'thumbnail'),
		'has_archive'         => true,
		'rewrite'             => array( 'slug' => 'client-testimonials' ),
		'query_var'           => true
	);
	new BCCustomPostType('Contact info', 'contactinfo', $contact_args);
	//Staff profiles
	$profile_labels = array(
		'name'               => 'Staff profile',
		'singular_name'      => 'Staff profile',
		'menu_name'          => 'Staff profiles',
		'name_admin_bar'     => 'Staff profile',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add Staff profile',
		'new_item'           => 'New Staff profile',
		'edit_item'          => 'Edit Staff profile',
		'view_item'          => 'View Staff profile',
		'all_items'          => 'All Staff profiles',
		'search_items'       => 'Search Staff profiles',
		'parent_item_colon'  => 'Parent Staff profile',
		'not_found'          => 'No Staff profiles Found',
		'not_found_in_trash' => 'No Staff profiles Found in Trash'
	);

	$profile_args = array(
		'labels'              => $profile_labels,
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-users',
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'supports'            => array( 'title', 'author', 'thumbnail'),
		'has_archive'         => true,
		'rewrite'             => array( 'slug' => 'staff' ),
		'query_var'           => true
	);
	new BCCustomPostType('Staff profile', 'staffprofile', $profile_args);

flush_rewrite_rules();
	/* Activation */
	//Check version, upgrades

	/* Deactivation */
	//Unregister postypes

	/* Uninstall */
	//Ensure data is not deleted, moves to Post ?>