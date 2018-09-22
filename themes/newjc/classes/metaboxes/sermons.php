<?php

namespace NewJC\Classes\Metaboxes;

class Sermons extends \Weaverbird\Helpers\Metaboxes {

    public function __construct() {

        $this->metaboxes = [
            [
                'id'        => 'sermon-attributes', 
                'title'     => __( 'Attributes' ),
                'post_type' => 'sermon',
                'fields'    => [
                    [
                        'type'  => 'text',
                        'id'    => 'sermon-youtube-link',
                        'name'  => 'youtube_link',
                        'label' => __( 'YouTube Link' ),
                        'size'  => 50,
                    ],
                    [
                        'type'  => 'text',
                        'id'    => 'sermon-speaker',
                        'name'  => 'speaker',
                        'label' => __( 'Speaker' )
                    ],
                    [
                        'type'  => 'text',
                        'id'    => 'sermon-scripture',
                        'name'  => 'scripture',
                        'label' => __( 'Scripture' ),
                    ]
                ]
            ],
        ];

        parent::__construct();
    }
}
