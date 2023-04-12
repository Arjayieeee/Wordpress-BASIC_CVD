<?php

function CVD_custom_post(){

    // Services Post
    $servicesPost_label = array(
        'name'               => __('Services Post','textdomain'),
        'singular_name'      => __('Services Post','textdomain'),
        'add_new'            => __('Add Services Post','textdomain'),
        'add_new_item'       => __('Add New Services','textdomain'),
        'edit_item'          => __('Edit Services Post','textdomain'),
        'all_items'          => __('Services Post','textdomain')

    );

    $servicesPost_args = array(
        'labels'                 => $servicesPost_label,
        'public'                 => true,
        'capability_type'        => 'post',
        'show_ui'                => true,
        'taxonomies'             => array ('post_tag', 'category'),
        'supports'                => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('servicesPost', $servicesPost_args);


    // Trends Post
    $trendsPost_label = array(
        'name'               => __('Trends Post','textdomain'),
        'singular_name'      => __('Trends Post','textdomain'),
        'add_new'            => __('Add Trends Post','textdomain'),
        'add_new_item'       => __('Add New Trends','textdomain'),
        'edit_item'          => __('Edit Trends Post','textdomain'),
        'all_items'          => __('Trends Post','textdomain')

    );

    $trendsPost_args = array(
        'labels'                 => $trendsPost_label,
        'public'                 => true,
        'capability_type'        => 'post',
        'show_ui'                => true,
        'taxonomies'             => array ('post_tag', 'category'),
        'supports'                => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('trendsPost', $trendsPost_args);

    // ABOUT-Projects
    $projectsPost_label = array(
        'name'               => __('Projects Post','textdomain'),
        'singular_name'      => __('Projects Post','textdomain'),
        'add_new'            => __('Add Projects Post','textdomain'),
        'add_new_item'       => __('Add New Projects','textdomain'),
        'edit_item'          => __('Edit Projects Post','textdomain'),
        'all_items'          => __('Projects Post','textdomain')

    );

    $projectsPost_args = array(
        'labels'                 => $projectsPost_label,
        'public'                 => true,
        'capability_type'        => 'post',
        'show_ui'                => true,
        'taxonomies'             => array ('post_tag', 'category'),
        'supports'                => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('projectsPost', $projectsPost_args);


}
    add_action('init', 'CVD_custom_post');