<?php

if (!function_exists('pico_theme_setup')) {
    function pico_theme_setup()
    {
        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        add_editor_style('editor-style.css');
    }
}
add_action('after_setup_theme', 'pico_theme_setup');
