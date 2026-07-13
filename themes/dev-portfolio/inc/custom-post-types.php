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