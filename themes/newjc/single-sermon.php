<?php get_header(); ?>

<section id="video-container">
    <div class="hero">
        <div class="hero-panel">
            <?php 
                $youtube_link = get_post_meta( get_the_ID(), 'youtube_link', true );
                $youtube_link = str_ireplace( 'watch?v=', 'embed/', $youtube_link );
            ?>
            <iframe width="682" height="513" src="<?php echo $youtube_link; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
</section>

<section style="display: none;">
    <div class="container is-half">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>