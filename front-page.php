<?php 
    get_header();
?>
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
        <?php while ( have_posts() ) : the_post(); ?>
        <?php $advantage_1 = get_field('advantage_1'); ?>
        <div class="advantage-card">
            <img src="<?php echo $advantage_1["icon"] ?>" class="advantage-block-icon">
            <h3><?php echo $advantage_1["name"] ?></h3>
            <p><?php echo $advantage_1["description"] ?></p>
        </div>
        <?php $advantage_2 = get_field('advantage_2'); ?>
        <div class="advantage-card">
            <img src="<?php echo $advantage_2["icon"] ?>" class="advantage-block-icon">
            <h3><?php echo $advantage_2["name"] ?></h3>
            <p><?php echo $advantage_2["description"] ?></p>
        </div>
        <?php $advantage_3 = get_field('advantage_3'); ?>
        <div class="advantage-card">
            <img src="<?php echo $advantage_3["icon"] ?>" class="advantage-block-icon">
            <h3><?php echo $advantage_3["name"] ?></h3>
            <p><?php echo $advantage_3["description"] ?></p>
        </div>
        <?php endwhile; // end of the loop. ?>
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
<section id="contact" class="container-inset text-white">
    <img class="bg-image" src="<?php echo get_stylesheet_directory_uri()."/assets/images/contact.png" ?>" alt="5 Star Review">
    <h3 class="header-text text-white">Contact</h3>
    <div id="contact-columns">
        <div id="contact-prompt">
            <p>Simply fill out the form and tell us the key data of your planned campaign</p>
            <img src="<?php echo get_stylesheet_directory_uri()."/assets/images/google-review.png" ?>" alt="Google Reviews">
        </div>
        <form id="contact-form" autocomplete="off">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="E-mail Address">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button type="submit" class="submit-button w-50">Send</button>
        </form>
    </div>
</section>

<?php 
    get_footer();
?>