<?php

namespace NewJC\Classes\Metaboxes;

class Locations extends \Weaverbird\Helpers\Metaboxes {

    public function __construct() {

        $this->metaboxes = [
            [
                'id'        => 'location-attributes', 
                'title'     => __( 'Attributes' ),
                'post_type' => 'location',
                'fields'    => [
                    [
                        'type'  => 'text',
                        'id'    => 'address',
                        'name'  => 'address',
                        'label' => __( 'Address' ),
                        'size'  => 50,
                    ],
                    [
                        'type'  => 'text',
                        'id'    => 'city',
                        'name'  => 'city',
                        'label' => __( 'City' ),
                        'size'  => 50,
                    ],
                    [
                        'type'  => 'text',
                        'id'    => 'state',
                        'name'  => 'state',
                        'label' => __( 'State' ),
                    ],
                    [
                        'type'  => 'text',
                        'id'    => 'zip',
                        'name'  => 'zip',
                        'label' => __( 'Zip' ),
                        'size'  => 10,
                    ],
                    [
                        'type'  => 'text',
                        'id'    => 'pastor',
                        'name'  => 'pastor',
                        'label' => __( 'Pastor' ),
                    ],
                    [
                        'type'  => 'text',
                        'id'    => 'website',
                        'name'  => 'website',
                        'label' => __( 'Website' ),
                        'size'  => 75,
                    ],
                ]
            ],
        ];

        parent::__construct();
    }
}
