<?php

namespace Database\Seeders;

use App\Enums\AuthGuard;
use App\Models\Auth\Admin;
use App\Models\Permissions\Permission;
use App\Models\Permissions\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'superadmin',
                'guard_name' => AuthGuard::ADMIN
            ]
        ];

        $admins = [
            [
                'email' => 'superadmin@pentacode.id',
                'role' => 'superadmin'
            ]
        ];

        $permissions = [
            // roles
            'view_shield::role',
            'view_any_shield::role',
            'create_shield::role',
            'update_shield::role',
            'delete_shield::role',
            'delete_any_shield::role',
        ];

        foreach($roles as $role) {
            Role::updateOrCreate([
                'name' => $role['name']
            ], [
                'guard_name' => AuthGuard::ADMIN
            ]);
        }

        foreach($permissions as $permission) {
            Permission::updateOrCreate([
                'name' => $permission
            ], [
                'guard_name' => AuthGuard::ADMIN
            ]);
        }

        $superadminPermissions = Permission::pluck('name')->toArray();
        $superadminRole = Role::where('name', 'superadmin')->first();
        foreach($superadminPermissions as $permission) {
            $superadminRole->givePermissionTo($permission);
        }

        foreach($admins as $admin) {
            $adminModel = Admin::where('email', $admin['email'])->first();
            if(!empty($adminModel)) {
                $adminModel->assignRole($admin['role']);
                continue;
            }

            $adminModel = Admin::factory()->create([
                'email' => $admin['email']
            ]);
            $adminModel->assignRole($admin['role']);
        }
    }
}
