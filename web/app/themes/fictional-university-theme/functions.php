<?php

// Includes
include('includes/front/enqueue.php');
include('includes/front/head.php');
include('includes/setup.php');

// Hooks
add_action('wp_enqueue_scripts', 'fictional_uni_enqueue');
add_action('after_setup_theme', 'fictional_uni_setup_theme', 2);
