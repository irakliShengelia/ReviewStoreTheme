<?php
/**
 * Loop Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! wc_review_ratings_enabled() ) {
	return;
}

echo '<div class="service-rating">';
$fullStar = floor($product->get_average_rating());
if($fullStar > 0){
	$emptyStar = 5 - $fullStar;
	$html = '';
	for($i = 0; $i < $fullStar; $i++){
		echo '<img src="'.get_stylesheet_directory_uri().'/assets/images/star.png" class="rating-star">';
	};
	for($k = 0; $k < $emptyStar; $k++){
		echo '<img src="'.get_stylesheet_directory_uri().'/assets/images/star-faded.png" class="rating-star faded">';
	};
}else{
	echo "<span>No Reviews Yet</span>";
}
echo '</div>';
