<?php	if ( !function_exists('media_handle_upload') ) {
		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		require_once(ABSPATH . "wp-admin" . '/includes/file.php');
		require_once(ABSPATH . "wp-admin" . '/includes/media.php');
	}


	//Add Featured Image Support
add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );


function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu',
			'left-menu' => 'Left menu',
			'right-menu' => 'Right menu'
		)
	);
}
add_action( 'init', 'register_menus' );


function prefix_register_name() {

	$labels = array(
		'name'                => __( 'Nyheter', 'text-domain' ),
		'singular_name'       => __( 'Nyhet', 'text-domain' ),
		'add_new'             => _x( 'Lägg till en ny nyhet', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Add New Singular Name', 'text-domain' ),
		'edit_item'           => __( 'Edit Singular Name', 'text-domain' ),
		'new_item'            => __( 'New Singular Name', 'text-domain' ),
		'view_item'           => __( 'View Singular Name', 'text-domain' ),
		'search_items'        => __( 'Search Plural Name', 'text-domain' ),
		'not_found'           => __( 'No Plural Name found', 'text-domain' ),
		'not_found_in_trash'  => __( 'No Plural Name found in Trash', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Singular Name:', 'text-domain' ),
		'menu_name'           => __( 'Nyheter', 'text-domain' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array('category'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array('slug' => 'nyhet'),
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'editor', 'author', 'thumbnail',
			'excerpt','custom-fields', 'trackbacks', 'comments',
			'revisions', 'page-attributes', 'post-formats',
			)
	);

	register_post_type( 'nyhet', $args );
}

add_action( 'init', 'prefix_register_name' );


?>