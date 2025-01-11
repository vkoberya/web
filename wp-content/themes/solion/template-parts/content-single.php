<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solion
 */

?><div class="item">

    <div class="blog-item-box">
    <?php if ( has_post_thumbnail() ) { ?>
        <!-- Start Post Thumb -->
        <div class="thumb">
            <?php the_post_thumbnail('solion-blog-sidebar'); ?>
        </div>
        <!-- Start Post Thumb -->
    <?php } ?>
        <div class="info">
            <div class="meta">
                <ul>
                    <li><i class="fas fa-calendar-alt"></i> <?php the_time(get_option('date_format')) ?></li>
                <li><i class="fas fa-comments"></i> <?php comments_number( esc_html__('0 Comments', 'solion'), esc_html__('1 Comment', 'solion'), esc_html__('% Comments', 'solion') ); ?></a>
                </ul>
            </div>
             <?php the_content(); ?>
        <?php wp_link_pages(); ?>
        <?php if(has_tag()) { ?>
                    <!-- Start Post Tags-->
                    <div class="post-tags share">
                        <div class="tags">
                            <?php the_tags('','',''); ?>
                        </div>
                    </div>
                    <!-- End Post Tags -->
                    <?php } ?>
        </div>
    </div>
</div>

<!-- Start Post Pagination -->
<div class="post-pagi-area">
    <?php if (empty(get_adjacent_post(false,'',true)->ID)) {} else { ?>
    <a href="<?php echo get_permalink( get_adjacent_post(false,'',true)->ID ); ?>">
        <i class="fas fa-angle-double-left"></i> <?php esc_html_e('Previous Post' , 'solion'); ?>
        <h5><?php echo get_the_title( get_adjacent_post(false,'',true)->ID ); ?></h5>
        
    </a>
    <?php } ?>
    <?php if (empty(get_adjacent_post(false,'',false)->ID)) {} else { ?>
    <a href="<?php echo get_permalink( get_adjacent_post(false,'',false)->ID );  ?>">
        <?php esc_html_e('Next Post' , 'solion'); ?> <i class="fas fa-angle-double-right"></i>
        <h5><?php echo get_the_title( get_adjacent_post(false,'',false)->ID ); ?></h5>
    </a>
<?php } ?>
</div>
<!-- End Post Pagination -->