<?php

namespace Flynt\Components\GridContentLists;

use Flynt\Api;

Api::registerFields('GridContentLists', [
    'layout' => [
        'name' => 'GridContentLists',
        'label' => 'List: Grid Content Lists',
        'sub_fields' => [
            [
                'label' => 'Pre-Content',
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'instructions' => 'Want to add a headline? And a paragraph? Go ahead! Or just leave it empty and nothing will be shown.',
                'tabs' => 'visual,text',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 1,
                'wrapper' => [
                    'class' => 'autosize',
                ],
            ],
            [
                'label' => 'Blocks',
                'type' => 'repeater',
                'name' => 'blocks',
                'collapsed' => '',
                'layout' => 'block',
                'button_label' => 'Add Block',
                'wrapper' => [
                    'width' => '100'
                ],
                'sub_fields' => [
                    [
                        'label' => 'Content',
                        'name' => 'contentHtml',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'toolbar' => 'full',
                        'media_upload' => 0,
                        'delay' => 1,
                        'wrapper' => [
                            'class' => 'autosize',
                        ],
                    ]
                ]
            ]
        ]
    ]
]);
