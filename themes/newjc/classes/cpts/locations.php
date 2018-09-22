<?php

namespace NewJC\Classes\CPTs;

class Locations extends \Weaverbird\Helpers\CPT {

    public function __construct() {

        $this->name     = 'location';

        $this->settings = [
            'public'      => true,
            'label'       => 'Locations',
            'has_archive' => true,
            'menu_icon'   => 'dashicons-location',
            'rewrite'     => [
                'slug' => 'locations',
            ],
            'supports'    => [ 'title', 'thumbnail' ],
        ];

        parent::__construct();
    }
}