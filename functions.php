<?php
function neapsys_theme(){
    add_theme_support('title-tag');
}
function register_assets(){
//CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-custom.css',false );
    wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/css/ionicons.min.css',false );
    wp_enqueue_style( 'tiny', get_template_directory_uri() . '/css/tiny-slider.css',false );
    wp_enqueue_style( 'lity', get_template_directory_uri() . '/css/lity.min.css',false );
    wp_enqueue_style( 'simplebar', get_template_directory_uri() . '/css/simplebar.min.css',false );
    wp_enqueue_style( 'YTPlayer', get_template_directory_uri() . '/css/jquery.mb.YTPlayer.min.css',false );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css',false );
    wp_enqueue_style( 'main-neapsys', get_template_directory_uri() . '/css/colors/main-neapsys.css',false );
    wp_enqueue_style( 'main-custom', get_template_directory_uri() . '/css/custom.css',false );
//JS
    wp_deregister_script('jqueryS');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js',false );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js',false );
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js',false );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js',false );
    wp_enqueue_script( 'animatedModal', get_template_directory_uri() . '/js/animatedModal.js',false );
    wp_enqueue_script( 'tiny', get_template_directory_uri() . '/js/tiny-slider.js',false );
    wp_enqueue_script( 'lity', get_template_directory_uri() . '/js/lity.min.js',false );
    wp_enqueue_script( 'simplebar', get_template_directory_uri() . '/js/simplebar.min.js',false );
    wp_enqueue_script( 'jquery_mb', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.min.js',false );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js',false );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js',false );
}
add_action('after_setup_theme','neapsys_theme');
add_action('wp_enqueue_scripts', 'register_assets');

