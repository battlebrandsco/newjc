<?php

namespace NewJC\Classes\CPTs;

class Sermons extends \Weaverbird\Helpers\CPTs {

    public function __construct() {

        $this->name = 'sermon';

        $this->settings = [
            'public'      => true,
            'label'       => 'Sermons',
            'has_archive' => true,
            'menu_icon'   => 'dashicons-editor-video',
            'rewrite'     => [
                'slug' => 'sermons',
            ],
            'supports'    => [ 'editor', 'title', 'thumbnail' ],
        ];

        parent::init();
    }
}