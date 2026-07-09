<?php


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