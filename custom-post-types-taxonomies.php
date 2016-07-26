<?php

/*
Plugin Name: Custom Post Types + Taxonomies
Plugin URI:  https://github.com/asheabbott/wordpress-custom-post-types-taxonomies.git
Description: Lightweight plugin to add custom post types and taxonomies. Create custom post types and taxonomies in plugin code.
Version:     1.0
Author:      Ashe Abbott
Author URI:  http://ashe.xyz
*/

// custom taxonomies

add_action( 'init', 'custom_taxonomies' );

function custom_taxonomies() {

    // create hierarchical taxonomy (like categories)
    register_taxonomy(
        'project-type',
        'portfolio',
        array(
            'labels' => array(
                'name' => 'Project Types',
                'singular_name' => 'Project Type',
                'all_items' => 'All Project Types',
                'edit_item' => 'Edit Project Type',
                'view_item' => 'View Project Type',
                'update_item' => 'Update Project Type',
                'add_new_item' => 'Add New Project Type',
                'new_item_name' => 'New Project Type Name',
                'parent_item' => 'Parent Project Type',
                'parent_item_colon' => 'Parent Project Type:',
                'search_items' => 'Search Project Types',
                'not_found' => 'No project types found.'
            ),
            'show_admin_column' => true,
            // 'rewrite' => array( 'slug' => 'project-type' ),
            'hierarchical' => true
        )
    );

    // create non-hierarchical taxonomy (like tags)
    register_taxonomy(
        'project-attribute',
        'portfolio',
        array(
            'labels' => array(
                'name' => 'Project Attributes',
                'singular_name' => 'Project Attribute',
                'all_items' => 'All Project Attributes',
                'edit_item' => 'Edit Project Attribute',
                'view_item' => 'View Project Attribute',
                'update_item' => 'Update Project Attribute',
                'add_new_item' => 'Add New Project Attribute',
                'new_item_name' => 'New Project Attribute Name',
                'search_items' => 'Search Project Attributes',
                'popular_items' => 'Popular Project Attributes',
                'add_or_remove_items' => 'Add or remove project attributes',
                'choose_from_most_used' => 'Choose from the most used project attributes',
                'not_found' => 'No project attributes found.'
            ),
            // 'rewrite' => array( 'slug' => 'project-attribute' ),
            'hierarchical' => false
        )
    );

}

// custom post types

add_action( 'init', 'custom_post_types' );

function custom_post_types() {

    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => 'Projects',
                'singular_name' => 'Project',
                'add_new_item' => 'Add New Project',
                'edit_item' => 'Edit Project',
                'new_item' => 'New Project',
                'view_item' => 'View Project',
                'search_items' => 'Search Projects',
                'not_found' => 'No projects found.',
                'not_found_in_trash' => 'No projects found in trash.',
                'all_items' => 'All Projects',
                'archives' => 'Project Archives',
                'insert_into_item' => 'Insert into project',
                'uploaded_to_this_item' => 'Uploaded to this project',
                'menu_name' => 'Portfolio'
             ),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-art',
            'supports' => array('title','editor','thumbnail','excerpt','revisions'),
            'has_archive' => true
        )
    );

}

?>