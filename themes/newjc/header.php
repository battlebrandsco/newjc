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
                    <img alt="New Jerusalem Cathedral Logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/NJC Logo.svg' ?>" height="60px" />
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
            </div>
            <div class="overlay"></div>
        </div>
        <header class="is-fixed three-columns">
            <div class="container">
                <div class="grid vertical-align">
                    <div class="col">
                        <a href="<?php echo home_url(); ?>" class="logo">
                            <img alt="New Jerusalem Cathedral Logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/NJC Logo.svg' ?>" height="60px" />
                        </a>
                    </div>
                    <div class="col col-half has-text-align-center hide-on-mobile">
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
                        <a class="reveal-menu"><i class="fas fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </header>