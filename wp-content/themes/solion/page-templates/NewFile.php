<?php
/* Template Name: Free Video Download Page */

// Load WordPress environment
get_header('v7');

// Get the current page ID and fetch video details
$page_id = get_the_ID();
$video_title = get_field('video_title'); // Using ACF for the video title
$video_file_url = get_field('video_file_url'); // Using ACF for the video file URL
$video_price = "Free"; // Price for display, can be dynamic

// Check if the video file URL is set
if (empty($video_file_url)) {
    $video_file_url = '#'; // Prevent empty download links
}
?>

<div class="container">
    <br><br>
    <div class="video-download-page">
        <div class="row">
            <!-- Video Player Section -->
            <div class="col-md-4">
                <video width="100%" controls>
                    <?php if ($video_file_url): ?>
                        <source src="<?php echo esc_url($video_file_url); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    <?php else: ?>
                        <p>No video available.</p>
                    <?php endif; ?>
                </video>
            </div>

            <!-- Video Details Section -->
            <div class="col-md-8">
                <h2><?php echo esc_html($video_title); ?></h2>
                <p><?php echo wp_kses_post(get_field('text')); ?></p>
                <p>Price: <?php echo esc_html($video_price); ?></p>

                <!-- Download Button -->
                <?php if ($video_file_url && $video_file_url !== '#'): ?>
                    <p>
                        <a href="<?php echo esc_url($video_file_url); ?>" download="<?php echo esc_attr($video_title); ?>.mp4">
                            Download the Video
                        </a>
                    </p>
                <?php else: ?>
                    <p>Download link is not available.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <br><br>
    <h3><?php echo esc_html($video_title); ?></h3>
    <?php the_content(); ?>
	
	<br><br>
	
	<a href="https://brandnamaste.com/law/disclaimer-for-audios/" class="dish" style="
    font-size: 18px;
">Disclaimer <i class="vc_btn3-icon fas fa-arrow-right"></i></a>

  

</div>

<br><br>

<!-- JavaScript to stop video after 5 seconds -->
<script type="text/javascript">
    var video = document.querySelector('video');
    if (video) {
        video.onplay = function() {
            setTimeout(function() {
                video.pause(); // Pause the video after 5 seconds
            }, 5000); // 5000ms = 5 seconds
        };
    }
</script>

<?php
get_footer('v1');
?>
