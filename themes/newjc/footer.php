
        <footer>
            <div class="container">
                <div class="grid left-align is-vertical-on-mobile">
                    <div class="col">
                        <h4>Take The Next Steps</h4>
                        <ul class="menu">
                            <li><a href="<?php echo home_url( 'salvation' ); ?>">Salvation</a></li>
                            <li><a href="<?php echo home_url( 'membership' ); ?>">Membership</a></li>
                            <li><a href="<?php echo home_url( 'get-involved' ); ?>">Get Involved</a></li>
                            <li><a href="<?php echo home_url( 'kingdom-life' ); ?>">Life Groups</a></li>
                            <li><a href="<?php echo home_url( 'give#missions' ); ?>">Missions</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Follow Pastor Williams</h4>
                        <?php
                            wp_nav_menu( [ 
                                'theme_location' => 'williams-menu',
                                'container'      => null,
                                'menu_class'     => 'menu',
                            ] ); 
                        ?>
                    </div>
                    <hr class="is-vertical-on-desktop is-yellow" />
                    <div class="col">
                        <h4>Contact</h4>
                        <p>1822 Sharpe Road<br />
                            Greensboro, NC 27406<br />
                            (336) 370-8583<br />
                            <a href="mailto:info@newjc.org">info@newjc.org</a><br /></p>
                        <ul class="menu">
                            <li><a href="<?php echo home_url( 'contact' ); ?>">Pastor &amp; Staff</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Churches of Sound Doctrine</h4>
                        <p>New Jerusalem Cathedral is comprised of a network of churches known as the Churches of Sound Doctine.</p>
                        <ul class="menu">
                            <li><a href="<?php echo home_url( 'visit#winston-salem' ); ?>">Winston-Salem, NC</a></li>
                            <li><a href="<?php echo home_url( 'visit#durham' ); ?>">Durham, NC</a></li>
                            <li><a href="<?php echo home_url( 'visit#high-point' ); ?>">High Point, NC</a></li>
                            <li><a href="<?php echo home_url( 'visit#houston' ); ?>">Houston, TX</a></li>
                            <li><a href="<?php echo home_url( 'visit#east-london' ); ?>">East London, South Africa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <footer id="copyright" class="has-background-color-bronze">
            <div class="grid is-vertical-on-mobile">
                <div class="col is-yellow">&copy; 2018 New Jerusalem Cathedral. All Rights Reserved.</div>
                <div class="col has-text-align-center has-text-align-left-on-mobile has-margin-bottom-on-mobile"><a href="https://www.bible.com/bible/116/rev.21.nlt" target="_blank">Revelation 21:2</a></div>
                <div class="col has-text-align-right has-text-align-left-on-mobile is-yellow">Branded by Battle Branding</div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>