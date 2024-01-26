<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'parent_id' => null,
                'order' => 1,
                'label' => 'Dashboard',
                'heading_label' => null,
                'link' => '/dashboard',
                'permission' => 'dashboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => null,
                'order' => 2,
                'label' => 'Master Data',
                'heading_label' => 'Master Data',
                'link' => '#',
                'permission' => 'master-data',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 2,
                'order' => 1,
                'label' => 'Permission',
                'heading_label' => null,
                'link' => '/master/permission',
                'permission' => 'master-data.permission-management',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 2,
                'order' => 2,
                'label' => 'Role',
                'heading_label' => null,
                'link' => '/master/role',
                'permission' => 'master-data.role-management',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'parent_id' => 2,
                'order' => 3,
                'label' => 'User',
                'heading_label' => null,
                'link' => '/master/user',
                'permission' => 'master-data.user-management',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($menus as $menu) {
            \App\Models\Menu::firstOrCreate($menu);
        }
    }
}
