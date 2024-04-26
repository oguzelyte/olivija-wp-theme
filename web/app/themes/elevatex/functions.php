<?php

// Variables

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));
include(get_theme_file_path('/includes/setup.php'));

// Hooks
add_action('wp_enqueue_scripts', 'elevatex_enqueue');
add_action('wp_head', 'elevatex_head', 2);
add_action('after_setup_theme', 'elevatex_setup_theme');
