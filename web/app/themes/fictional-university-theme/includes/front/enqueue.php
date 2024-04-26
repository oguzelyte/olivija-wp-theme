<?php

function fictional_uni_enqueue()
{

    wp_register_style(
        'font_awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
    );

    wp_register_style(
        'custom_fonts',
        'https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',
    );


    wp_register_style(
        'fictional_uni_style',
        get_theme_file_uri('/assets/public/app.css'),
    );

    wp_register_style(
        'extra_fictional_uni_style',
        get_theme_file_uri('/assets/public/index.css'),
    );

    wp_register_script(
        'fictional_uni_scripts',
        get_theme_file_uri('/assets/public/scripts.js'),
        ['jquery'],
        '1.0',
        true
    );

    wp_enqueue_style('fictional_uni_style');
    wp_enqueue_style('extra_fictional_uni_style');
    wp_enqueue_style('font_awesome');
    wp_enqueue_style('custom_fonts');
    wp_enqueue_script('fictional_uni_scripts');
}
