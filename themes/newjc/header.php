<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Marcellus+SC|Barlow" rel="stylesheet" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( 'class-name' ); ?>>
        <header class="is-fixed three-columns">
            <div class="container">
                <div class="grid vertical-align">
                    <div class="col">
                        <a href="<?php echo home_url(); ?>" class="logo">
                            <img alt="New Jerusalem Cathedral Logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/NJC Logo.svg' ?>" height="60px" />
                        </a>
                    </div>
                    <div class="col col-half center-align">
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
                    <div class="col right-align">
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
                </div>
            </div>
        </header>