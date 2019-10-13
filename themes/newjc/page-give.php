<?php get_header(); ?>

<section id="give" class="has-no-padding">
    <div class="hero">
        <div class="hero-panel">
            <h1>Your Giving Changes Lives</h1>
            <p>Whether it's weekly feeding the hungry, building new homes or providing emergency relief to an entire community, giving allows us to show our love for the community and each other.</p>
            <i class="fas fa-chevron-down"></i>
        </div>
        <div class="overlay"></div>
    </div>
</section>
<section>
    <div class="container has-text-align-center has-width-50 is-full-on-mobile">
        <h2>With God, All Things Are Possible</h2>
        <p>Throughout 43 years of serving the community of faith, we have seen God heal the sick, raise the dead, and literally do the impossible. We are confident that the best is not behind us, but just ahead, and your giving has the power to move us there.</p>
    </div>
    <div class="grid has-width-75 has-text-align-center has-padding-top is-vertical-on-mobile">
        <div class="col">
            <a href="https://giv.li/3jbzrx"><i class="fas fa-money-bill-wave is-xl is-white has-background-color-yellow"></i></a>
            <h3>Givelify</h3>
            <p>Giving is available on the <a href="https://giv.li/3jbzrx">Givelify</a> app by searching for "New Jerusalem Cathedral"</p>
        </div>
        <div class="col">
            <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QNHCAZ37ZMVBN"><i class="far fa-credit-card is-xl is-yellow"></i></a>
            <h3>Credit/Debit</h3>
            <p>Secure credit or debit via <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QNHCAZ37ZMVBN">PayPal</a></p>
        </div>
        <div class="col">
            <a href="<?php echo home_url('visit'); ?>"><i class="fas fa-hand-holding-usd is-xl is-yellow"></i></a>
            <h3>In Person</h3>
            <p>Available at any <a href="<?php echo home_url('visit'); ?>">worship service</a></p>
        </div>
        <div class="col">
            <a href="<?php echo home_url('contact'); ?>"><i class="fas fa-gift is-xl is-yellow"></i></a>
            <h3>In-kind Gifts</h3>
            <p>During normal <a href="<?php echo home_url('contact'); ?>">business hours</a></p>
        </div>
    </div>
</section>
<section id="construction" class="has-padded-height">
    <div class="container has-half">
        <div class="grid has-padding vertical-align is-vertical-on-mobile">
            <div class="col">
                <h2>Creating room for you</h2>
                <p>Our church has been blessed weekly with a growing number of attendees who are constantly seeking  sound doctrine. The Word is truly life changing and is evident in the lives of many in the Triad area and beyond. We are committed to souls being saved and your contribution to our campus expansion can assist greatly by allowing us to accomodate more people. </p>
                <!-- <a class="btn btn-outlined red" href="<?php echo home_url( 'give/campus-expansion' ); ?>">Learn More <i class="fas fa-chevron-right"></i></a> -->
            </div>
            <div class="col">
                <div class="img-wrap img-4-x-3">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/crowd-shot-raising-hands-smiling.jpg' ?>" />
                </div>
            </div>
        </div>
    </div>
    <div class="overlay has-background-color-yellow" style="opacity: .8; "></div>
</section>
<section id="missions" class="has-padded-height">
    <div class="container has-half">
        <div class="grid has-padding vertical-align is-vertical-on-mobile">
            <div class="col">
                <div class="img-wrap img-4-x-3">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/kids-in-street-smiling-india.jpg' ?>" />
                </div>
            </div>
            <div class="col">
                <h2>Supporting Local &amp; Foreign Missions</h2>
                <p>With missions in Port Elizabeth, South Africa, and Delhi, India we are endeavoring to empower people of all ages and cultures to fulfill the will of God in their lives by means of evangelism, motivational programs, scriptural, and human support.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>