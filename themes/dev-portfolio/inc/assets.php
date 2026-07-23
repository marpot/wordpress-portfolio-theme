<?php

function theme_assets() {

    $vite_dev = 'http://localhost:5173';

    if (wp_get_environment_type() === 'development') {

        add_action('wp_head', function () use ($vite_dev) {

            echo '<script type="module" src="' . $vite_dev . '/@vite/client"></script>';

            echo '<script type="module" src="' . $vite_dev . '/js/main.ts"></script>';

        });

        return;
    }


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