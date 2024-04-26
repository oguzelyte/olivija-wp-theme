<?php

function elevatex_enqueue()
{
    wp_register_style(
        'elevatex_fonts',
        'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
        [],
        null
    );

    wp_register_style(
        'elevatex_bootstrap',
        get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
    );

    wp_register_style(
        'elevatex_style',
        get_theme_file_uri('assets/public/index.css'),
    );

    wp_enqueue_style('elevatex_fonts');
    wp_enqueue_style('elevatex_bootstrap');
    wp_enqueue_style('elevatex_style');
}
