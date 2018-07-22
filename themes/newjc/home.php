<?php get_header(); ?>

<section id="welcome" class="has-no-padding">
    <div class="hero hero-lg">
        <div class="hero-panel">
            <h1>Welcome to NEW!</h1>
            <!-- <p>Life. Hope. Peace. Joy.</p> -->
            <p>"Fear will enslave you to complacency and to compromise."<br />-Dr. Kevin Williams <i class="fab fa-twitter"></i></p>
            <a class="btn btn-lg" href="<?php echo home_url('watch'); ?>">Sunday Replay <i class="fas fa-play"></i></a>
            <a class="btn btn-outlined btn-lg" href="<?php echo home_url('visit'); ?>">Visit Us</a>
        </div>
        <div class="overlay"></div>
        <video autoplay muted loop id="myVideo">
            <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/NJC PROMO - low.mp4' ?>" type="video/mp4">
        </video>
    </div>
</section>

<section>
    <div class="container is-half has-padded-height has-top-border">
        <div class="grid grid-content">
            <div class="col center-align">
                <h2 class="yellow">Greetings from<br />New Jerusalem Cathedral!</h2>
                <p>New Jerusalem Cathedral is a rapidly growing church in the Triad of NC and we are so glad that you decided to visit our website.  Our mission is to pursue evangelism as structured in the book of Acts in order to resolve homelessness in Guilford County and greater North Carolina. With a spirit of excellence, courtesy and humility, we endeavor to serve all, regardless of culture, gender, race, socio-economic status, or disability with a Christian attitude that exemplifies our Savior Jesus Christ. Our Bishop, Dr. Kevin A Williams and church staff are here to be a ministry that empowers people of all ages and cultures to fulfill the will of God in their lives by means of evangelism , motivational programs, scriptural, and human support.</p>
                <a class="btn btn-outlined" href="<?php echo home_url('about'); ?>">Read More Here</a>
            </div>
        </div>
    </div>
</section>

<section style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/assets/images/boat-in-storm-on-water.jpg' ?>');">
    <div class="container is-three-fourths">
        <div class="grid vertical-align">
            <div class="col col-half center-align is-padded">
                <p><i class="fas fa-quote-left"></i></p>
                <blockquote class="huge dark">Storms dis<span class="red">courage</span> the fearful but welcome the <span class="yellow">great</span>.</blockquote>
                <hr />
                <p>But Jesus spoke to them at once. "Don't be afraid," he said.<br />"Take courage. I am here!" -Matthew 14:27 (NLT)</p>
                <a class="btn">Where's Dr. Williams?</a>
                <a class="btn btn-outlined is-yellow">Church Calendar</a>
            </div>
        </div>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/dr-kevin-williams.png' ?>" height="400" class="sticker" style="bottom: 0; left: 0;" />
</section>

<?php get_footer(); ?>