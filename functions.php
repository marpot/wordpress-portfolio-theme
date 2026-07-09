<?php

function theme_assets() {

    $vite_dev = 'http://localhost:5173';

    if (wp_get_environment_type() === 'development') {

        add_action('wp_head', function () use ($vite_dev) {

            // Vite HMR client
            echo '<script type="module" src="' . $vite_dev . '/@vite/client"></script>';

            // Vite entry TypeScript (imports SCSS)
            echo '<script type="module" src="' . $vite_dev . '/js/main.ts"></script>';

        });

        return;
    }


    // Production build
    wp_enqueue_style(
        'vite-style',
        get_template_directory_uri() . '/dist/assets/main.css',
        [],
        null
    );

    wp_enqueue_script(
        'vite-build',
        get_template_directory_uri() . '/dist/assets/main.js',
        [],
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'theme_assets');


// Disable Gutenberg
add_filter('use_block_editor_for_post_type', '__return_false');

add_action('init', function () {
    remove_post_type_support('page', 'editor');
    remove_post_type_support('post', 'editor');
});


// Remove unnecessary WP styles
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}, 100);