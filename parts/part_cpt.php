<?php

// Register Restaurant Custom Post Type
function ac_restaurants() {

    $labels = array(
        'name'                  => 'Restaurant',
        'singular_name'         => 'Restaurant',
        'menu_name'             => 'Restaurants',
        'name_admin_bar'        => 'Restaurants',
        'archives'              => 'Restaurant Archives',
        'attributes'            => 'Restaurant Attributes',
        'parent_item_colon'     => 'Parent Restaurant:',
        'all_items'             => 'All Restaurants',
        'add_new_item'          => 'Add New Restaurant',
        'add_new'               => 'Add New',
        'new_item'              => 'New Restaurant',
        'edit_item'             => 'Edit Restaurant',
        'update_item'           => 'Update Restaurant',
        'view_item'             => 'View Restaurant',
        'view_items'            => 'View Restaurants',
        'search_items'          => 'Search Restaurant',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into restaurant',
        'uploaded_to_this_item' => 'Uploaded to this restaurant',
        'items_list'            => 'Restaurants list',
        'items_list_navigation' => 'Restaurants list navigation',
        'filter_items_list'     => 'Filter restaurants list',
    );
    $args = array(
        'label'                 => 'Restaurant',
        'description'           => 'Restaurants listing',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'category', 'post_tag', 'res_country' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-home',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'rest_base'             => 'restaurants',
    );
    register_post_type( 'ac_restaurants', $args );

}

// Register Vendor Custom Post Type
function ac_vendors() {

    $labels = array(
        'name'                  => 'Vendor',
        'singular_name'         => 'Vendor',
        'menu_name'             => 'Vendors',
        'name_admin_bar'        => 'Vendors',
        'archives'              => 'Vendor Archives',
        'attributes'            => 'Vendor Attributes',
        'parent_item_colon'     => 'Parent Vendor:',
        'all_items'             => 'All Vendors',
        'add_new_item'          => 'Add New Vendor',
        'add_new'               => 'Add New',
        'new_item'              => 'New Vendor',
        'edit_item'             => 'Edit Vendor',
        'update_item'           => 'Update Vendor',
        'view_item'             => 'View Vendor',
        'view_items'            => 'View Vendors',
        'search_items'          => 'Search Vendor',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into vendor',
        'uploaded_to_this_item' => 'Uploaded to this vendor',
        'items_list'            => 'Vendors list',
        'items_list_navigation' => 'Vendors list navigation',
        'filter_items_list'     => 'Filter vendors list',
    );
    $args = array(
        'label'                 => 'Vendor',
        'description'           => 'Vendors listing',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'category', 'post_tag', 'res_country' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-store',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'rest_base'             => 'vendors',
    );
    register_post_type( 'ac_vendors', $args );

}

// Register Recipe Custom Post Type
function ac_recipes() {

    $labels = array(
        'name'                  => 'Recipe',
        'singular_name'         => 'Recipe',
        'menu_name'             => 'Recipes',
        'name_admin_bar'        => 'Recipes',
        'archives'              => 'Recipe Archives',
        'attributes'            => 'Recipe Attributes',
        'parent_item_colon'     => 'Parent Recipe:',
        'all_items'             => 'All Recipes',
        'add_new_item'          => 'Add New Recipe',
        'add_new'               => 'Add New',
        'new_item'              => 'New Recipe',
        'edit_item'             => 'Edit Recipe',
        'update_item'           => 'Update Recipe',
        'view_item'             => 'View Recipe',
        'view_items'            => 'View Recipes',
        'search_items'          => 'Search Recipe',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into recipe',
        'uploaded_to_this_item' => 'Uploaded to this recipe',
        'items_list'            => 'Recipes list',
        'items_list_navigation' => 'Recipes list navigation',
        'filter_items_list'     => 'Filter Recipes list',
    );
    $args = array(
        'label'                 => 'Recipe',
        'description'           => 'Recipes listing',
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'taxonomies'            => array( 'category', 'res_country', 'res_dietary_types' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-food',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'rest_base'             => 'recipes',
    );
    register_post_type( 'ac_recipes', $args );

}

// Register Club Custom Post Type
function ac_clubs() {

    $labels = array(
        'name'                  => 'Club',
        'singular_name'         => 'Club',
        'menu_name'             => 'Clubs',
        'name_admin_bar'        => 'Clubs',
        'archives'              => 'Club Archives',
        'attributes'            => 'Club Attributes',
        'parent_item_colon'     => 'Parent Club:',
        'all_items'             => 'All Clubs',
        'add_new_item'          => 'Add New Club',
        'add_new'               => 'Add New',
        'new_item'              => 'New Club',
        'edit_item'             => 'Edit Club',
        'update_item'           => 'Update Club',
        'view_item'             => 'View Club',
        'view_items'            => 'View Clubs',
        'search_items'          => 'Search Club',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into club',
        'uploaded_to_this_item' => 'Uploaded to this club',
        'items_list'            => 'Clubs list',
        'items_list_navigation' => 'Clubs list navigation',
        'filter_items_list'     => 'Filter clubs list',
    );
    $args = array(
        'label'                 => 'Club',
        'description'           => 'Clubs listing',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array( 'category', 'post_tag', 'res_country' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-beer',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'rest_base'             => 'clubs',
    );
    register_post_type( 'ac_clubs', $args );

}

// Register Country Custom Taxonomy
function res_country() {

    $labels = array(
        'name'                       => 'Countries',
        'singular_name'              => 'Country',
        'menu_name'                  => 'Country',
        'all_items'                  => 'All Countries',
        'parent_item'                => 'Parent Country',
        'parent_item_colon'          => 'Parent Country:',
        'new_item_name'              => 'New Country Name',
        'add_new_item'               => 'Add New Country',
        'edit_item'                  => 'Edit Country',
        'update_item'                => 'Update Country',
        'view_item'                  => 'View Country',
        'separate_items_with_commas' => 'Separate countries with commas',
        'add_or_remove_items'        => 'Add or remove countries',
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => 'Popular Countries',
        'search_items'               => 'Search Countries',
        'not_found'                  => 'Not Found',
        'no_terms'                   => 'No countries',
        'items_list'                 => 'Countries list',
        'items_list_navigation'      => 'Countries list navigation',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'Country', array( 'ac_clubs', 'ac_recipes', 'ac_vendors', 'ac_restaurants' ), $args );

}

// Register Dietary Type Custom Taxonomy
function res_dietary_types() {

    $labels = array(
        'name'                       => 'Dietary Types',
        'singular_name'              => 'Dietary Type',
        'menu_name'                  => 'Dietary Type',
        'all_items'                  => 'All Dietary Types',
        'parent_item'                => 'Parent Dietary Type',
        'parent_item_colon'          => 'Parent Dietary Type:',
        'new_item_name'              => 'New Dietary Type',
        'add_new_item'               => 'Add New Dietary Type',
        'edit_item'                  => 'Edit Dietary Type',
        'update_item'                => 'Update Dietary Type',
        'view_item'                  => 'View Dietary Type',
        'separate_items_with_commas' => 'Separate dietary types with commas',
        'add_or_remove_items'        => 'Add or remove dietary types',
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => 'Popular Dietary Types',
        'search_items'               => 'Search Dietary Types',
        'not_found'                  => 'Not Found',
        'no_terms'                   => 'No dietary types',
        'items_list'                 => 'Dietary Types list',
        'items_list_navigation'      => 'Dietary Types list navigation',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'Dietary Type', array( 'ac_recipes', 'ac_vendors', 'ac_restaurants' ), $args );

}

// Register Service Type Custom Taxonomy
function ven_service_types() {

    $labels = array(
        'name'                       => 'Service Types',
        'singular_name'              => 'Service Type',
        'menu_name'                  => 'Service Type',
        'all_items'                  => 'All Service Types',
        'parent_item'                => 'Parent Service Type',
        'parent_item_colon'          => 'Parent Service Type:',
        'new_item_name'              => 'New Service Type',
        'add_new_item'               => 'Add New Service Type',
        'edit_item'                  => 'Edit Service Type',
        'update_item'                => 'Update Service Type',
        'view_item'                  => 'View Service Type',
        'separate_items_with_commas' => 'Separate service types with commas',
        'add_or_remove_items'        => 'Add or remove service types',
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => 'Popular Service Types',
        'search_items'               => 'Search Service Types',
        'not_found'                  => 'Not Found',
        'no_terms'                   => 'No service types',
        'items_list'                 => 'Service Types list',
        'items_list_navigation'      => 'Service Types list navigation',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'Service Type', array( 'ac_vendors' ), $args );

}

// Register Venue Type Custom Taxonomy
function ven_venue_types() {

    $labels = array(
        'name'                       => 'Venue Types',
        'singular_name'              => 'Venue Type',
        'menu_name'                  => 'Venue Type',
        'all_items'                  => 'All Venue Types',
        'parent_item'                => 'Parent Venue Type',
        'parent_item_colon'          => 'Parent Venue Type:',
        'new_item_name'              => 'New Venue Type',
        'add_new_item'               => 'Add New Venue Type',
        'edit_item'                  => 'Edit Venue Type',
        'update_item'                => 'Update Venue Type',
        'view_item'                  => 'View Venue Type',
        'separate_items_with_commas' => 'Separate venue types with commas',
        'add_or_remove_items'        => 'Add or remove venue types',
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => 'Popular Venue Types',
        'search_items'               => 'Search Venue Types',
        'not_found'                  => 'Not Found',
        'no_terms'                   => 'No venue types',
        'items_list'                 => 'Venue Types list',
        'items_list_navigation'      => 'Venue Types list navigation',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'Venue Type', array( 'ac_clubs' ), $args );

}

// Register Music Type Custom Taxonomy
function ven_music_types() {

    $labels = array(
        'name'                       => 'Music Types',
        'singular_name'              => 'Music Type',
        'menu_name'                  => 'Music Type',
        'all_items'                  => 'All Music Types',
        'parent_item'                => 'Parent Music Type',
        'parent_item_colon'          => 'Parent Music Type:',
        'new_item_name'              => 'New Music Type',
        'add_new_item'               => 'Add New Music Type',
        'edit_item'                  => 'Edit Music Type',
        'update_item'                => 'Update Music Type',
        'view_item'                  => 'View Music Type',
        'separate_items_with_commas' => 'Separate music types with commas',
        'add_or_remove_items'        => 'Add or remove music types',
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => 'Popular Music Types',
        'search_items'               => 'Search Music Types',
        'not_found'                  => 'Not Found',
        'no_terms'                   => 'No music types',
        'items_list'                 => 'Music Types list',
        'items_list_navigation'      => 'Music Types list navigation',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'Music Type', array( 'ac_clubs' ), $args );

}

add_action( 'init', 'ac_restaurants', 0 );
add_action( 'init', 'ac_vendors', 0 );
add_action( 'init', 'ac_recipes', 0 );
add_action( 'init', 'ac_clubs', 0 );
add_action( 'init', 'res_country', 0 );
add_action( 'init', 'res_dietary_types', 0 );
add_action( 'init', 'ven_dietary_types', 0 );
add_action( 'init', 'ven_venue_types', 0 );
add_action( 'init', 'ven_music_types', 0 );