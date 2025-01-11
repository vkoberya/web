<?php
global $solion_options;
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package solion
 */
?>
<!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
					
					 <div class="col-lg-4 col-md-6 item">
                        <div class="f-item address">
                            <h4 class="widget-title"><?php echo esc_html($solion_options['contactinfo1']); ?></h4>
                            <div class="address">
                                <ul>
                                <li>
									<i class="<?php echo esc_attr($solion_options['footertitle1']); ?>"></i><?php echo esc_html($solion_options['footertext1']); ?></li>
                                
                            </ul>
                            
                            
                            </div>
							<br>
							<i class="fa fa-link" aria-hidden="true"></i>
<a href="https://brandnamaste.com/law/disclaimer/" style="
    margin-left: 13px;
">Disclaimer</a>
                        </div>
                    </div>
					
                    <div class="col-lg-5 col-md-6 item">
                        <div class="f-item about">
                            <img src="<?php echo esc_url($solion_options['footerlogo']['url']); ?>" alt="<?php echo esc_attr__( 'Logo', 'solion' )?>">
                            
                        </div>
                    </div>
                   

                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item address">
                            <h4 class="widget-title"><?php echo esc_html($solion_options['contactinfo1']); ?></h4>
                            <div class="address">
                                <ul>
                                <li>
                                    <i class="<?php echo esc_attr($solion_options['footertitle2']); ?>"></i>
                                    <a href="mailto:<?php echo esc_url($solion_options['footertext2']); ?>"><?php echo esc_html($solion_options['footertext2']); ?></a>
                                </li>
                                <li>
                                    <i class="<?php echo esc_attr($solion_options['footertitle3']); ?>"></i>
                                    <?php echo esc_html($solion_options['footertext3']); ?><br><?php echo esc_html($solion_options['footertext33']); ?>
                                </li>
									
								<li>
                                    <i class="fas fa-phone"></i>
                                    +353(0)1.963.0777 (IRELAND)
								</li>
                            </ul>
                            
                            
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-left"><?php echo esc_html($solion_options['copyright']); ?></p>
                    </div>
					<div class="col-md-6">
                        <div class="social">
                        <ul>
                            <li>
                                <a href="<?php echo esc_url($solion_options['sl1']); ?>">
                                    <i class="<?php echo esc_attr($solion_options['sicon1']); ?>"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url($solion_options['sl2']); ?>">
                                    <i class="<?php echo esc_attr($solion_options['sicon2']); ?>"></i>
                                </a>
                            </li>
                            <li>
                                 <a href="<?php echo esc_url($solion_options['sl3']); ?>">
                                    <i class="<?php echo esc_attr($solion_options['sicon3']); ?>"></i>
                                </a>
                            </li>
							
							<li>
                                 <a href="https://www.linkedin.com/company/law-offices-of-caro-kinsella">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
							
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
   <!-- End Footer -->
<?php wp_footer(); ?>

<script>
	function openVideoPopup() {
  document.getElementById('videoPopup').style.display = 'block';
}

function closeVideoPopup() {
  document.getElementById('videoPopup').style.display = 'none';
  // Reset the video by clearing and re-adding the src attribute
  const videoFrame = document.getElementById('videoFrame');
  videoFrame.src = videoFrame.src;
}

</script>

<script>
  var video = document.getElementById("video-banner");
  var playPauseBtn = document.getElementById("play-pause-btn");

  // On page load, try to play the video with sound
  window.onload = function () {
    video.muted = false; // Ensure the video is unmuted
    video.play().catch(function (error) {
      console.log("Autoplay with sound prevented. User interaction is required.");
    });
  };

  // Handle Play/Pause Button Click
  playPauseBtn.addEventListener("click", function () {
    if (video.paused) {
      video.play();
      playPauseBtn.textContent = "Pause";
    } else {
      video.pause();
      playPauseBtn.textContent = "Play";
    }
  });
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' id='font-awesome-css' href='https://brandnamaste.com/law/wp-content/themes/solion/css/font-awesome.min.css?ver=6.7.1' media='all' />


</body>
</html>