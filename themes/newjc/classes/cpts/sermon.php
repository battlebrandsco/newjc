<?php

namespace NewJC\Classes\CPTs;

class Sermon extends \Weaverbird\Helpers\CPT {

    public function __construct() {

        $this->name     = 'sermon';

        $this->settings = [
            'public'      => true,
            'label'       => 'Sermons',
            'has_archive' => true,
            'menu_icon'   => 'dashicons-microphone',
            'rewrite'     => [
                'slug' => 'sermons',
            ],
            'supports'    => [ 'editor', 'title', 'thumbnail' ],
        ];

        parent::__construct();
    }
}