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
            <a href="#" class="cta-link-button w-50">Get It Now</a>
        </div>
        <span id="cart-overlay">Cart</span>
    </section>
    <section id="advantages" class="container-inset">
        <h2 class="header-text">Main Advantages</h2>
        <span>Why Choose Us?</span>
        <div id="advantage-blocks">
            <div class="advantage-card">
                <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/fast.png" ?>" class="advantage-block-icon">
                <h3>Fast</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi doloremque accusamus laudantium cumque cupiditate odit voluptatem exercitationem perspiciatis beatae fuga blanditiis veniam, ipsam explicabo. Quo nostrum iusto suscipit consequatur voluptatem.</p>
            </div>
            <div class="advantage-card">
            <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/affordable.png" ?>" class="advantage-block-icon">
                <h3>Affordable Pricing</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi doloremque accusamus laudantium cumque cupiditate odit voluptatem exercitationem perspiciatis beatae fuga blanditiis veniam, ipsam explicabo. Quo nostrum iusto suscipit consequatur voluptatem.</p>
            </div>
            <div class="advantage-card">
            <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/secure.png" ?>" class="advantage-block-icon">
                <h3>Secure Payment</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi doloremque accusamus laudantium cumque cupiditate odit voluptatem exercitationem perspiciatis beatae fuga blanditiis veniam, ipsam explicabo. Quo nostrum iusto suscipit consequatur voluptatem.</p>
            </div>
        </div>
    </section>
    <section id="services" class="container-inset">
        <h2 class="header-text">Services</h2>
        <div id="service-blocks">
            <div class="service-block">
                <h3>Basic</h3>
                <div class="price-block">€ 99,00<span class="price-subtitle">month</span></div>
                <p>max. 50 reviews per month</p>
                <div class="service-rating">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star-faded.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star-faded.png" ?>" class="rating-star">
                </div>
                <a href="#" class="cta-link-button">Book now</a>
            </div>
            <div class="service-block">
                <h3>Basic</h3>
                <div class="price-block">€ 199,00<span class="price-subtitle">month</span></div>
                <p>max. 200 reviews per month</p>
                <div class="service-rating">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star-faded.png" ?>" class="rating-star">
                </div>
                <a href="#" class="cta-link-button">Book now</a>
            </div>
            <div class="service-block">
                <h3>Basic</h3>
                <div class="price-block">€ 499,00<span class="price-subtitle">month</span></div>
                <p>max. 500 reviews per month</p>
                <div class="service-rating">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                    <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/star.png" ?>" class="rating-star">
                </div>
                <a href="#" class="cta-link-button">Book now</a>
            </div>
        </div>
    </section>
    <?php wp_footer(); ?>
</body>
</html>