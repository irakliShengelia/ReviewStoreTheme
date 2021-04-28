<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Star Review - Boost your online reputation</title>
    <?php
    wp_head();
    ?>
</head>
<body>
    <header>
        <div id="sub-header">
            <div id="icons">
                <ul>
                    <li><a href="/#">FB</a></li>
                    <li><a href="/#">IG</a></li>
                    <li><a href="/#">TW</a></li>
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
                <ul>
                    <li><a href="/#">Main Advantages</a></li>
                    <li><a href="/#">Services</a></li>
                    <li><a href="/#">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section id="hero">
        <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/reviews.PNG" ?>" alt="5 Star Review">
        <div id="cta">
            <span class="display-text">The ultimate boost for your business</span>
            <a href="#" class="cta-link-button">Get It Now</a>
        </div>
        <span id="cart-overlay">Cart</span>
    </section>
    <?php wp_footer(); ?>
</body>
</html>