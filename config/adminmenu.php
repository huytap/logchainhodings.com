<?php
return [
    [
        'label' => 'Dashboard',
        'route' => 'dashboard'
    ],
    [
        'label' => 'Pages',
        'route' => 'menu.index',
        'items'   => [
            'label' => 'Add new',
            'route' => 'menu.create'
        ]
    ],
    [
        'label' => 'Contents',
        'route' => 'content.index',
        'items'   => [
            'label' => 'Page 1',
            'route' => ''
        ]
    ],
    // [
    //     'label' => 'Eco Systems',
    //     'route' => 'ecosystem.index',
    //     'items'   => [
    //         'label' => 'Page 1',
    //         'route' => ''
    //     ]
    // ],
    // [
    //     'label' => 'Global Network',
    //     'route' => 'network.index',
    //     'items'   => [
    //         'label' => 'Page 1',
    //         'route' => ''
    //     ]
    // ],
    [
        'label' => 'Settings',
        'route' => 'setting.index',
        'items'   => [
            'label' => 'Page 1',
            'route' => ''
        ]
    ]
];
