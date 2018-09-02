<?php get_header(); ?>

<section>
    <div class="hero">
        <div class="hero-panel">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<section>
    <div class="container is-half">
        <?php echo the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>