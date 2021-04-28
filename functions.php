<?php
function reviewstore_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'reviewstore-styles', get_stylesheet_directory_uri(). "/style.css", array(), $version, 'all' );
}

add_action( 'wp_enqueue_scripts', 'reviewstore_register_styles');

?>