<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    ?>
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
            <div id="user">
                <ul>
                    <li><a href="/#">Login</a></li>
                    <li><a href="/#">Sign Up</a></li>
                    <li><a href="/#">Languages</a></li>
                </ul>
            </div>
        </div>
        <div id="main-header" class="bg-dark">
            <a href="/"><img src="<?php echo get_stylesheet_directory_uri()."/assets/images/logo.svg" ?>" alt="5 Star Review"></a>
            <div id="menu">
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
            </div>
        </div>
    </header>