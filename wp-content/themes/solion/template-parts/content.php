<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package solion
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- Single Item -->
<div class="single-item">
<div class="item">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="thumb">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('solion-blog-standard'); ?>
        </a>
    </div> <?php } ?>
    <div class="info">
        <div class="meta">
             <?php if ( is_sticky() ) :
                echo '<div class="post-sticky"><span>';
                esc_attr_e('STICKY POST' , 'solion');
                echo '</span></div>'; 
                    endif;?>
            <ul>
                <li><i class="fas fa-calendar-alt"></i> <?php the_time(get_option('date_format')) ?></li>
                <li><i class="fas fa-comments"></i> <?php comments_number( esc_html__('0 Comments', 'solion'), esc_html__('1 Comment', 'solion'), esc_html__('% Comments', 'solion') ); ?></a></li>
            </ul>
        </div>
        <h3>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <div class="bottom">
            <a href="#">
                <?php echo get_avatar($comment,$size='80' ); ?>
                <span><?php echo get_the_author(); ?></span>
            </a>
            <a class="btn circle btn-theme effect btn-md" href="<?php the_permalink(); ?>"><?php esc_html_e ('Read More','solion' ); ?></a>
        </div>
    </div>
</div>
</div>
<!-- End Single Item -->
</div>