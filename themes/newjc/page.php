<?php get_header(); ?>

<section>
    <div class="hero">
        <div class="hero-panel">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<section id="main">
    <div class="container is-half">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>