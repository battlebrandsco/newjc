<?php get_header(); ?>

<section>
    <div class="hero">
        <div class="hero-panel">
            <h1>Sermons</h1>
            <a class="btn" href="<?php echo home_url('watch'); ?>">Watch Live</a>
        </div>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="grid grid-gallery">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'loop', 'sermons' ); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>