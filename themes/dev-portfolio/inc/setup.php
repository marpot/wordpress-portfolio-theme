<?php


// Theme setup

function dev_portfolio_setup() {


    add_theme_support('title-tag');


    add_theme_support('post-thumbnails');


    register_nav_menus([

        'primary' => 'Primary Menu',

    ]);


}


add_action(
    'after_setup_theme',
    'dev_portfolio_setup'
);




// Disable Gutenberg

add_filter(
    'use_block_editor_for_post_type',
    '__return_false'
);


add_action('init', function () {

    remove_post_type_support(
        'page',
        'editor'
    );

    remove_post_type_support(
        'post',
        'editor'
    );

});




// Remove unnecessary WP styles

add_action(
    'wp_enqueue_scripts',
    function () {

        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('wp-block-library-theme');
        wp_dequeue_style('global-styles');

    },
    100
);


// Polylang translations

// Polylang translations

function dev_portfolio_register_translations() {

    if (function_exists('pll_register_string')) {


        // Experience

        pll_register_string(
            'experience_label',
            'Doświadczenie zawodowe',
            'Dev Portfolio'
        );


        pll_register_string(
            'experience_title',
            'Moja ścieżka zawodowa',
            'Dev Portfolio'
        );



        // Skills

        pll_register_string(
            'skills_label',
            'Umiejętności',
            'Dev Portfolio'
        );

        pll_register_string(
            'skills_title',
            'Technologie, z których korzystam',
            'Dev Portfolio'
        );



        // Projects

        pll_register_string(
            'projects_label',
            'Projekty',
            'Dev Portfolio'
        );



        // Contact

        pll_register_string(
            'contact_label',
            'Kontakt',
            'Dev Portfolio'
        );
        
    }

}


add_action(
    'init',
    'dev_portfolio_register_translations'
);