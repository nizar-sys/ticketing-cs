<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdministratorPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Permission
        $permission = Permission::firstOrCreate(
            ['name' => 'administrator'],
            ['guard_name' => 'web']
        );

        // Create Role and assign Permission
        $role = Role::firstOrCreate(
            ['name' => 'administrator'],
            ['guard_name' => 'web']
        );
        $role->givePermissionTo($permission);

        // Create User
        $administrator = \App\Models\User::create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com', // Fill in the email
            'password' => bcrypt('password'), // Fill in the password
            'avatar' => 'https://ui-avatars.com/api/?name=Administrator&color=7F9CF5&background=EBF4FF'
        ]);

        // Assign Role to User
        $administrator->assignRole($role);
        $administrator->givePermissionTo($permission);
    }
}
