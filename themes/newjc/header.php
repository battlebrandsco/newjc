<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Marcellus+SC|Barlow" rel="stylesheet" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( '' ); ?>>
        <div class="menu-overlay has-text-align-center is-hidden hide-on-desktop">
            <a id="close-menu" class="is-absolute is-close-button"><i class="fas fa-times"></i></a>
            <div>
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img alt="New Jerusalem Cathedral Logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/NJC Logo.png' ?>" height="60px" />
                </a>
                <nav>
                    <?php
                        wp_nav_menu( [ 
                            'theme_location' => 'header-menu',
                            'container'      => null,
                            'menu_class'     => 'menu has-no-margin',
                        ] ); 
                    ?>
                    <?php
                        wp_nav_menu( [ 
                            'theme_location' => 'social-menu',
                            'container'      => null,
                            'menu_class'     => 'menu social-menu has-no-margin',
                        ] ); 
                    ?>
                </nav>
                <hr />
                <h4>Contact</h4>
                <p>1822 Sharpe Road<br />
                    Greensboro, NC 27406<br />
                    (336) 370-8583<br />
                    <a href="mailto:info@newjc.org">info@newjc.org</a><br /></p>
                <ul class="menu">
                    <li><a href="<?php echo home_url( 'contact#pastors-staff' ); ?>">Pastor &amp; Staff</a></li>
                </ul>
            </div>
            <div class="overlay"></div>
        </div>
        <header class="is-absolute">
            <div class="container">
                <div class="grid vertical-align">
                    <div class="col">
                        <a href="<?php echo home_url(); ?>" class="logo">
                            <img alt="New Jerusalem Cathedral Logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/NJC Logo.png' ?>" height="60px" />
                        </a>
                    </div>
                    <div class="col has-width-75 has-text-align-center hide-on-mobile">
                        <nav>
                            <?php
                                wp_nav_menu( [ 
                                    'theme_location' => 'header-menu',
                                    'container'      => null,
                                    'menu_class'     => 'menu horizontal has-no-margin',
                                ] ); 
                            ?>
                        </nav>
                    </div>
                    <div class="col has-text-align-right hide-on-mobile">
                        <nav>
                            <?php
                                wp_nav_menu( [ 
                                    'theme_location' => 'social-menu',
                                    'container'      => null,
                                    'menu_class'     => 'menu horizontal social-menu has-no-margin',
                                ] ); 
                            ?>
                        </nav>
                    </div>
                    <div class="col has-text-align-right hide-on-desktop">
                        <nav>
                            <ul class="menu horizontal has-no-margin">
                                <li><a class="phone-number">(336) 370-8583</a></li>
                                <li><a class="reveal-menu"><i class="fas fa-bars"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- <div class="overlay"></div> -->
        </header>