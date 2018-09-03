<?php get_header(); ?>

<section>
    <div class="hero">
        <div class="hero-panel">
            <h1>Watch</h1>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="grid grid-gallery">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'loop', 'sermons' ); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>