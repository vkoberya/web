<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;


global $product;


// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>


<li <?php wc_product_class( '', $product ); ?>>

    <div class="product-thumb">
        <?php woocommerce_show_product_loop_sale_flash(); ?>
        <?php //echo woocommerce_get_product_thumbnail(); ?>
		
		<?php if( get_field('short_video') ): ?>
    <video id="limited-video" width="300" controls controlsList="nodownload">
        <source src="<?php the_field('short_video'); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var video = document.getElementById('limited-video');
            video.addEventListener('timeupdate', function() {
                if (video.currentTime >= 10) { // Stop after 10 seconds
                    video.pause();
                    video.currentTime = 0; // Reset to the start
                }
            });
        });
    </script>
<?php endif; ?>


		
    </div>
    <h2 class="wp-river-product-title"><?php woocommerce_template_loop_product_link_open(); ?><?php the_title(); ?></a></h2>

<p>
    <?php 
    woocommerce_template_loop_product_link_open(); // Open product link
    echo '<span class="product-short-description">' . wp_kses_post( wp_trim_words( get_the_excerpt(), 10, '...' ) ) . '</span>';
    woocommerce_template_loop_product_link_close(); // Close product link
    ?>
</p>


	<?php

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>