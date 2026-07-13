<?php
function dev_portfolio_theme_options() {
    
    if (function_exists('acf_add_options_page')) {
        
        acf_add_options_page([
            'page_title'      => 'Ustawienia Portfolio',
            'menu_title'      => 'Portfolio Settings',
            'menu_slug'       => 'portfolio-settings',
            'capability'      => 'edit_theme_options',   
            'redirect'        => false,
            'position'        => 58,
            'icon_url'        => 'dashicons-portfolio',
            'updated_message' => 'Ustawienia portfolio zostały zapisane.',
        ]);
    }
}
add_action('acf/init', 'dev_portfolio_theme_options');