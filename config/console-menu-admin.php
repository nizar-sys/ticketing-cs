<?php
return [
    [
        'label' => 'Dashboard',
        'link' => '/console/dashboard',
        'icon' => 'ic_dashboard.png',
        'permission' => 'dashboard',
        'have_heading' => false,
        'heading_label' => false,
        'childs' => []
    ],
    [
        'label' => 'Master',
        'link' => '#',
        'icon' => 'ic_master.png',
        'permission' => 'master',
        'have_heading' => true,
        'heading_label' => 'Master Data',
        'childs' => [
            [
                'label' => 'User',
                'link' => '/console/master/user',
                'icon' => 'ic_user.png',
                'permission' => 'master-user',
                'have_heading' => false,
                'heading_label'=> false,
                'childs' => []
            ],
            [
                'label' => 'Role',
                'link' => '/console/master/role',
                'icon' => 'ic_role.png',
                'permission' => 'master-role',
                'have_heading' => false,
                'heading_label'=> false,
                'childs' => []
            ],
            [
                'label' => 'Permission',
                'link' => '/console/master/permission',
                'icon' => 'ic_permission.png',
                'permission' => 'master-permission',
                'have_heading' => false,
                'heading_label'=> false,
                'childs' => []
            ],
        ]
    ],
    [
        'label' => 'Setting',
        'link' => '#',
        'icon' => 'ic_setting.png',
        'permission' => 'setting',
        'have_heading' => true,
        'heading_label' => 'Setting Data',
        'childs' => [
            [
                'label' => 'Profile',
                'link' => '/console/setting/profile',
                'icon' => 'ic_profile.png',
                'permission' => 'setting-profile',
                'have_heading' => false,
                'heading_label'=> false,
                'childs' => []
            ],
            [
                'label' => 'Change Password',
                'link' => '/console/setting/change-password',
                'icon' => 'ic_change_password.png',
                'permission' => 'setting-change-password',
                'have_heading' => false,
                'heading_label'=> false,
                'childs' => []
            ],
        ]
    ]
];
