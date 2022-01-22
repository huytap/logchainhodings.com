<?php

return [
    [
        'label' => 'Dashboard',
        'route' => 'dashboard'
    ],
    [
        'label' => 'Menu',
        'route' => 'menu.index',
        'items'   => [
            'label' => 'Add new',
            'route' => 'menu.create'
        ]
    ],
    [
        'label' => 'Content',
        'route' => 'content.index',
        'items'   => [
            'label' => 'Page 1',
            'route' => ''
        ]
    ],
    [
        'label' => 'Setting',
        'route' => 'setting.index',
        'items'   => [
            'label' => 'Page 1',
            'route' => ''
        ]
    ]
];
