<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Define permissions
        $permissions = [
            'manage schools',
            'view schools',
            'manage forms',
            'view forms',
            'manage applicants',
            'view applicants',
            'manage payments',
            'view payments',
            'manage exports',
            'view reports',
            'manage roles',
        ];

        foreach ($permissions as $permissionName) {
            Permission::firstOrCreate(['name' => $permissionName]);
        }

        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $clientRole = Role::firstOrCreate(['name' => 'client']);

        // Assign all permissions to admin
        $adminRole->syncPermissions(Permission::all());

        // Assign a subset to client
        $clientPermissions = [
            'manage forms',
            'view forms',
            'manage applicants',
            'view applicants',
            'view payments',
            'view reports',
            'manage exports',
        ];
        $clientRole->syncPermissions(Permission::whereIn('name', $clientPermissions)->get());
    }
}


