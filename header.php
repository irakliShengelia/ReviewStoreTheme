<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    ?>
    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
    <header>
        <div id="sub-header">
            <div id="icons">
                <ul>
                    <li><a href="/#"><img src="<?php echo get_stylesheet_directory_uri()."/assets/images/facebook.png" ?>" alt="facebook logo"></a></li>
                    <li><a href="/#"><img src="<?php echo get_stylesheet_directory_uri()."/assets/images/instagram.png" ?>" alt="instagram logo"></a></li>
                    <li><a href="/#"><img src="<?php echo get_stylesheet_directory_uri()."/assets/images/twitter.png" ?>" alt="twitter logo"></a></li>
                </ul>
            </div>
            <div id="user-section">
                <ul>
                    <li><a href="/#">Login</a></li>
                    <li><a href="/#">Sign Up</a></li>
                    <li><a href="/#">Languages</a></li>
                </ul>
            </div>
        </div>
        <div id="main-header" class="bg-dark">
            <img id="hamburger" src="<?php echo get_stylesheet_directory_uri().'/assets/images/hamburger.png' ?>" alt="Menu" />
            <a href="/"><img src="<?php echo get_stylesheet_directory_uri()."/assets/images/logo.svg" ?>" alt="5 Star Review"></a>
            <img id="user" src="<?php echo get_stylesheet_directory_uri().'/assets/images/user.png' ?>" alt="User" />
            <div id="menu">
                <!-- Wordpress Menu -->
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/close.png' ?>" id="close-hamburger" alt="close" />
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '<div id="menzzzu">%3$s</div>',
                            'theme_location' => 'primary',
                            'depth' => 0
                        )
                    );
                
                ?>
                <ul id="mobile-social">
                    <li><a href="/#"><img src="<?php echo get_stylesheet_directory_uri()."/assets/images/facebook-white.png" ?>" alt="facebook logo"></a></li>
                    <li><a href="/#"><img src="<?php echo get_stylesheet_directory_uri()."/assets/images/instagram-white.png" ?>" alt="instagram logo"></a></li>
                    <li><a href="/#"><img src="<?php echo get_stylesheet_directory_uri()."/assets/images/twitter-white.png" ?>" alt="twitter logo"></a></li>
                </ul>
            </div>
        </div>
    </header>