<?php

namespace NewJC\Classes\CPTs;

class Watch {

    public function __construct() {
        self::init();
    }

    public function init() {
        add_action( 'init', [ $this, 'register' ], 10 );
    }

    public function register() {

        $args = [
            'public'      => true,
            'label'       => 'Sermons',
            'has_archive' => true,
            'menu_icon'   => 'dashicons-editor-video',
            'rewrite'     => [
                'slug' => 'watch',
            ],
            'supports'    => [ 'editor', 'title', 'thumbnail' ],
        ];

        register_post_type( 'sermon', $args );
    }
}