<?php

// Register Custom Post Type Custom Post
function create_custompost_cpt() {

    $labels = array(
        'name' => _x('Custom Posts', 'Post Type General Name', 'huda'),
        'singular_name' => _x('Custom Post', 'Post Type Singular Name', 'huda'),
        'menu_name' => _x('Custom Posts', 'Admin Menu text', 'huda'),
        'name_admin_bar' => _x('Custom Post', 'Add New on Toolbar', 'huda'),
        'archives' => __('Custom Post Archives', 'huda'),
        'attributes' => __('Custom Post Attributes', 'huda'),
        'parent_item_colon' => __('Parent Custom Post:', 'huda'),
        'all_items' => __('All Custom Posts', 'huda'),
        'add_new_item' => __('Add New Custom Post', 'huda'),
        'add_new' => __('Add New', 'huda'),
        'new_item' => __('New Custom Post', 'huda'),
        'edit_item' => __('Edit Custom Post', 'huda'),
        'update_item' => __('Update Custom Post', 'huda'),
        'view_item' => __('View Custom Post', 'huda'),
        'view_items' => __('View Custom Posts', 'huda'),
        'search_items' => __('Search Custom Post', 'huda'),
        'not_found' => __('Not found', 'huda'),
        'not_found_in_trash' => __('Not found in Trash', 'huda'),
        'featured_image' => __('Featured Image', 'huda'),
        'set_featured_image' => __('Set featured image', 'huda'),
        'remove_featured_image' => __('Remove featured image', 'huda'),
        'use_featured_image' => __('Use as featured image', 'huda'),
        'insert_into_item' => __('Insert into Custom Post', 'huda'),
        'uploaded_to_this_item' => __('Uploaded to this Custom Post', 'huda'),
        'items_list' => __('Custom Posts list', 'huda'),
        'items_list_navigation' => __('Custom Posts list navigation', 'huda'),
        'filter_items_list' => __('Filter Custom Posts list', 'huda'),
    );

    $args = array(
        'label' => __('Custom Post', 'huda'),
        'description' => __('', 'huda'),
        'labels' => $labels,
        'menu_icon' => 'dashicons-layout', // Added custom Dashicon
        'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'custom-fields', 'elementor'),
        'taxonomies' => array('hea_category'), // Removed default 'category' taxonomy
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    );

    register_post_type('hea_custom_post', $args);
}
add_action('init', 'create_custompost_cpt', 0);

// Register Custom Taxonomy for Custom Categories
function create_custompost_taxonomy() {
    $labels = array(
        'name' => _x('Custom Categories', 'taxonomy general name', 'huda'),
        'singular_name' => _x('Custom Category', 'taxonomy singular name', 'huda'),
        'search_items' => __('Search Categories', 'huda'),
        'all_items' => __('All Categories', 'huda'),
        'parent_item' => __('Parent Category', 'huda'),
        'parent_item_colon' => __('Parent Category:', 'huda'),
        'edit_item' => __('Edit Category', 'huda'),
        'update_item' => __('Update Category', 'huda'),
        'add_new_item' => __('Add New Category', 'huda'),
        'new_item_name' => __('New Category Name', 'huda'),
        'menu_name' => __('Custom Categories', 'huda'),
    );

    $args = array(
        'hierarchical' => true, // True for category-like, false for tag-like
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'custom-category'),
        'show_in_rest' => true, // Enables taxonomy for Gutenberg & Elementor
    );

    register_taxonomy('hea_category', array('hea_custom_post'), $args);
}
add_action('init', 'create_custompost_taxonomy');

// Remove Default WordPress Categories from Custom Post Type
function remove_default_categories_metabox() {
    remove_meta_box('categorydiv', 'hea_custom_post', 'side'); // Hides default categories
}
add_action('admin_menu', 'remove_default_categories_metabox');
