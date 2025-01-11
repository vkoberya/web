<?php
/* Template Name: Video Payment Link */

// Make sure you load the WordPress environment
get_header('v7');

// Get the current page ID and use it to fetch the video details (or you can use custom fields or metadata)
$page_id = get_the_ID();
$video_title = get_post_meta($page_id, 'video_title', true); // Custom field for video title
$video_file_url = get_post_meta($page_id, 'video_file_url', true); // Custom field for video file URL
$payment_link = get_post_meta($page_id, 'payment_link', true); // Custom field for payment link (Stripe payment URL)

?>

<div class="container">
<br><br>
<div class="video-payment-page">

<div class="row">

<div class="col-md-4">
    <!-- Display Video -->
    <video width="100%" controls>
    	<?php if( get_field('video_file_url') ): ?>
        <source src="<?php the_field('video_file_url'); ?>" type="video/mp4">
        Your browser does not support the video tag.
        <?php endif; ?>
    </video>
    </div>
    
    <div class="col-md-8">
    <h2><?php echo esc_html($video_title); ?></h2>
    <p><?php echo wp_kses_post ( get_field('text') ); ?></p>
    <p style="
    color: #c3a243;
    font-weight: 700;
">Price: $ <?php echo esc_html( get_field('price') ); ?></p>

    <!-- Payment Button -->
    <a href="<?php echo esc_url($payment_link); ?>" class="stripe-payment-button" target="_blank">Pay</a>
    
    </div>
    
</div>
</div>

<br><br>	
<?php the_content(); ?>	
	
</div>
<br><br>
<?php
get_footer('v1');
?>