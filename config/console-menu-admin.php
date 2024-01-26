<?php
return [
    [
        'label' => 'Dashboard',
        'link' => '/dashboard',
        'permission' => 'dashboard',
        'have_heading' => false,
        'heading_label' => false,
        'childs' => []
    ],
    [
        'label' => 'Master Data',
        'link' => '#',
        'permission' => 'master-data',
        'have_heading' => true,
        'heading_label' => 'Master Data',
        'childs' => [
            [
                'label' => 'Permission',
                'link' => '/master/permission',
                'permission' => 'master-data.permission-management',
                'have_heading' => false,
                'heading_label'=> false,
                'childs' => []
            ],
            [
                'label' => 'Role',
                'link' => '/master/role',
                'permission' => 'master-data.role-management',
                'have_heading' => false,
                'heading_label'=> false,
                'childs' => []
            ],
            [
                'label' => 'User',
                'link' => '/master/user',
                'permission' => 'master-data.user-management',
                'have_heading' => false,
                'heading_label'=> false,
                'childs' => []
            ],
        ]
    ],
];
