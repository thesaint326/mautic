<?php


return [
    'name' => 'FooBar CRUD',
    'description' => 'Foo Bar Simple CRUD',
    'version' => '0.1',
    'author' => 'FooBar',
    'menu' => [
        'main' => [
            'plugin.foo.index' => [
                'iconClass' => 'fa-chevron-circle-right',
                'route'     => 'mautic_foo.bar_index',
                'priority'  => 99
            ]
        ]
    ],
    'routes'   => [
        'main' => [
            'mautic_foo.bar_index' => [
                'path'       => '/bar/{page}',
                'controller' => 'FooBundle:Bar:index',
            ],
            'mautic_foo.bar_action' => [
                'path'       => '/bar/{objectAction}/{objectId}',
                'controller' => 'FooBundle:Bar:execute',
            ]
        ]
    ],
    'services' => [
        'models' => [
            'mautic.foo.model.bar' => [
                'class'     => 'MauticPlugin\FooBundle\Model\BarModel'
            ]
        ],
        'forms' => [
            'mautic.bar.type.form' => [
                'class'     => 'MauticPlugin\FooBundle\Form\Type\BarType',
                'arguments' => 'mautic.factory',
                'alias'     => 'bar',
            ],
        ]
    ]
];
