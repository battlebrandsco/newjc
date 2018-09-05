<?php

$scripture = get_post_meta( get_the_ID(), 'scripture', true );
$scripture = $scripture ? $scripture . ' - ' : ''; 
$speaker   = get_post_meta( get_the_ID(), 'speaker', true );

?>

<div class="col" style="background-image: url( '<?php echo get_the_post_thumbnail_url(); ?>' );">
    <a class="video-play" href="<?php the_permalink(); ?>">
        <div class="video-title">
            <h3><?php the_title(); ?></h3>
            <span><?php echo esc_attr( $scripture ); ?><?php echo esc_attr( $speaker ); ?></span>
            <!-- <i class="fas fa-play-circle"></i> -->
        </div>
    </a>
</div>