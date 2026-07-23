<?php

function dev_portfolio_register_post_types() {

    register_post_type('experience', [

        'labels' => [
            'name' => 'Experience',
            'singular_name' => 'Experience',
            'add_new_item' => 'Add Experience',
            'edit_item' => 'Edit Experience',
        ],


        'public' => true,

        'show_ui' => true,

        'show_in_rest' => true,

        'has_archive' => false,

        'menu_icon' => 'dashicons-businessperson',


        'supports' => [
            'title',
            'editor',
            'page-attributes',
        ],

    ]);

}


add_action(
    'init',
    'dev_portfolio_register_post_types'
);

function dev_register_project_cpt() {

    $labels = array(
        'name' => 'Projects',
        'singular_name' => 'Project',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'new_item' => 'New Project',
        'view_item' => 'View Project',
        'search_items' => 'Search Projects',
        'not_found' => 'No projects found',
        'not_found_in_trash' => 'No projects found in trash',
    );


    $args = array(

        'labels' => $labels,

        'public' => true,

        'show_ui' => true,

        'show_in_rest' => true,


        'menu_icon' => 'dashicons-portfolio',


        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'page-attributes'
        ),


        'has_archive' => false,


        'rewrite' => array(
            'slug' => 'projects'
        ),


    );


    register_post_type(
        'project',
        $args
    );

}


add_action(
    'init',
    'dev_register_project_cpt'
);