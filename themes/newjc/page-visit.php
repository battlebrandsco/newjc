<?php 
    get_header(); 

    global $newjc_objects;
?>

<section id="join-us" class="has-no-padding">
    <div class="hero">
        <div class="hero-panel has-text-align-left has-padding-lg">
            <h1>Join Us In Person</h1>
            <h2 class="is-white">Sundays 7AM / 11AM / 6PM</h2>
            <p>We want to make sure your visit to any one of our services exceeds your expectations and that you feel the love of Christ in a tangible way. We are His arms and feet, and you are welcome to experience new life!</p>
            <a class="btn" href="https://www.google.com/maps/dir//1822+Sharpe+Rd,+Greensboro,+NC+27406/@36.0428333,-79.741993,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x8853227f63b38669:0x84f651dc0d872353!2m2!1d-79.739799!2d36.042829" target="_blank">Get Directions <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="overlay has-background-color-yellow"></div>
    </div>
</section>
<section id="upcoming" class="has-no-padding" style="display: none;">
    <div class="hero">
        <div class="hero-panel">
            <h2>Upcoming Events</h2>
            <p>Here is some text about visiting New Jerusalem Cathedral!</p>
            <a class="btn">View Upcoming Events</a>
        </div>
        <div class="overlay"></div>
    </div>
</section>
<section id="map">
    <div class="container has-width-75">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3226.0769038475046!2d-79.74198768502266!3d36.04282898011167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8853227f63b38669%3A0x84f651dc0d872353!2s1822+Sharpe+Rd%2C+Greensboro%2C+NC+27406!5e0!3m2!1sen!2sus!4v1531290909705" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</section>
<section class="has-padded-height">
    <div class="container is-three-fourths">
        <h2 class="has-text-align-center">Outside of Greensboro?</h2>
        <h3 class="has-text-align-center">Visit a Church of Sound Doctrine</h3>
        <p class="has-text-align-center has-width-50 is-centered is-full-on-mobile" style="margin-bottom: 3em;">New Jerusalem Cathedral is comprised of a network of churches known as the Churches of Sound Doctine. If you're unable to visit us in person, feel free to visit one of our network churches for a life changing word.</p>
        <div class="grid grid-gallery is-vertical-on-mobile">
            <?php foreach( $newjc_objects['cpts']['location']->get( 'all' ) as $location ) :

                    $address = get_post_meta( $location->ID, 'address', true );
                    $city    = get_post_meta( $location->ID, 'city', true );
                    $state   = get_post_meta( $location->ID, 'state', true ); 
                    $zip     = get_post_meta( $location->ID, 'zip', true );
                    $pastor  = get_post_meta( $location->ID, 'pastor', true );
                    $website = get_post_meta( $location->ID, 'website', true );
                    $id = str_replace( ' ', '-', strtolower( $city ) );
                ?>
                <div id="<?php echo $id; ?>" class="col has-border has-padding cosd">
                    <h3><?php echo esc_attr( $city ); ?>, <?php echo esc_attr( $state ); ?></h3>
                    <h4><?php echo $location->post_title; ?></h4>
                    <p><?php echo esc_attr( $address ); ?> <?php echo esc_attr( $city ); ?>, <?php echo esc_attr( $state ); ?> <?php echo esc_attr( $zip ); ?></br /><?php echo esc_attr( $pastor ); ?></p>
                    <a class="btn btn-sm" href="<?php echo esc_attr( $website ); ?>">Visit <i class="fas fa-chevron-right show-on-hover"></i></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>