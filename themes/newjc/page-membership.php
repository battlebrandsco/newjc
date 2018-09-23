<?php get_header(); ?>

<section>
    <div class="hero">
        <div class="hero-panel">
            <h1>Become a Member</h1>
            <p>Becoming a member is simple. Please take a moment to share some information with us and someone from our Deacons Ministry will reach out to you.</p>
            <a class="btn" href="<?php echo home_url('forms/membership'); ?>">Become A Member</a>
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