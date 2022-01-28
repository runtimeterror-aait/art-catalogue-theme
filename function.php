<?php
register_nav_menus( array(
    'menu-1' => __( 'Primary Menu', 'art-catalogue' ),
));

wp_enqueue_style( 'my-stylesheet', get_template_directory_uri() . '/assets/css/index.css' );
wp_enqueue_script( 'my-scripts', get_template_directory_uri() . '/assets/js/index.js' );
add_image_size( 'my-custom-image-size', 640, 999 );
add_theme_support( 'post-thumbnails' );
add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );