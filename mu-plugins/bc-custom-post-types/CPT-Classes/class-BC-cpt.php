<?php 
	/* 	Big Cat Custom Post Type base class
		* Template for Cutsom Post Types in Wordpress builds
		* The Shortcode is used for custom formatting
	*/
	class BCCustomPostType {	
		/* 
			* Class attributes 
		*/
		protected static $bc_cpts_list = []; //List of all post types created [$bc_cpt_post_type]
		//Post type string
		protected $bc_cpt_post_type = NULL;
		//Readable name string used to register post type
		protected $bc_cpt_name = NULL;
		//register_post_type() args[]
		protected $bc_cpt_args = NULL;
		
		/* Contructor */
		function __construct($cpt_name, $cpt_post_type, $cpt_args) {
			$this->bc_cpt_post_type = $cpt_post_type;
			$this->bc_cpt_name = $cpt_name;
			$this->bc_cpt_args = $cpt_args;
			//Kick off -- Add actions
			add_action('init', [$this, 'create_bc_cpt']);
			//add_action('init', [$this, 'create_bc_cpt_categories']);
		}
		
		/* 
			* Class Methods 
		*/
		//create new post type
		public function create_bc_cpt() {
			$labels = array(
				'name'               => 'BC Custom Post Types',
				'singular_name'      => 'BC Custom Post Type',
				'menu_name'          => 'BC Custom Post Types',
				'name_admin_bar'     => 'BC Custom Post Type',
				'add_new'            => 'Add New',
				'add_new_item'       => 'Add New BC Custom Post Type',
				'new_item'           => 'New BC Custom Post Type',
				'edit_item'          => 'Edit BC Custom Post Type',
				'view_item'          => 'View BC Custom Post Type',
				'all_items'          => 'All BC Custom Post Types',
				'search_items'       => 'Search BC Custom Post Types',
				'parent_item_colon'  => 'Parent BC Custom Post Type',
				'not_found'          => 'No BC Custom Post Types Found',
				'not_found_in_trash' => 'No BC Custom Post Types Found in Trash'
			);

			$args = array_merge([
				'labels'              => $labels,
				'public'              => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'show_ui'             => true,
				'show_in_nav_menus'   => true,
				'show_in_menu'        => true,
				'show_in_admin_bar'   => true,
				'menu_position'       => 5,
				'menu_icon'           => 'dashicons-admin-appearance',
				'capability_type'     => 'post',
				'hierarchical'        => true,
				'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt'),
				'has_archive'         => true,
				'rewrite'             => array( 'slug' => 'bc-custom-posts' ),
				'query_var'           => true
			], $this->bc_cpt_args);
			
			register_post_type($this->bc_cpt_post_type, $this->bc_cpt_args );
			//flush_rewrite_rules();
		}//create_post_type()
		
		//Create Categories support
		public function create_bc_cpt_categories() {
			$labels = array(
				'name'              => $this->bc_cpt_name . ' categories',
				'singular_name'     => $this->bc_cpt_name . ' category',
				'search_items'      => 'Search ' . $this->bc_cpt_name . ' categories',
				'all_items'         => 'All ' . $this->bc_cpt_name . ' Categories',
				'parent_item'       => $this->bc_cpt_name .' parent category',
				'parent_item_colon' => $this->bc_cpt_name .' parent category:',
				'edit_item'         => 'Edit ' . $this->bc_cpt_name . ' category',
				'update_item'       => 'Update ' . $this->bc_cpt_name . ' category',
				'add_new_item'      => 'Add new ' . $this->bc_cpt_name . ' category',
				'new_item_name'     => 'New ' . $this->bc_cpt_name . ' category name',
				'menu_name'         => $this->bc_cpt_name . ' categories'
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true
			);

			register_taxonomy($this->bc_cpt_post_type, $this->bc_cpt_post_type, $args);
		}
		
		
	}//class BCCustomPostType ?>