<?php


function reviewstore_theme_support(){
    //Adds Support for title tag in wp_head()
    add_theme_support( 'title-tag' );
    //Adds Menu submenu in Appereance
    add_theme_support( 'menus' );
}

function reviewstore_add_woocommerce_support() {
    add_theme_support( 'woocommerce' ); // <<<< here
}
add_action( 'after_setup_theme', 'reviewstore_add_woocommerce_support' );

add_action('after_setup_theme','reviewstore_theme_support');


function reviewstore_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'reviewstore-styles', get_stylesheet_directory_uri(). "/style.css", array(), $version, 'all' );
}

add_action( 'wp_enqueue_scripts', 'reviewstore_register_styles');


/* Woocommerce ovverides */



?>