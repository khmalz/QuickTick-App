<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $adminPermissions = [
            'transportation_access',
            'transportation_manage',
            'verification_access',
            'verification_manage',
            'tiket_access',
            'tiket_manage',
            'petugas_manage',
        ];

        $petugasPermissions = [
            'verification_access',
            'verification_manage',
            'tiket_access',
            'tiket_manage',
        ];

        $penumpangPermissions = [
            'order_access',
            'payment_access',
        ];

        $allPermissions = array_unique(array_merge($adminPermissions, $petugasPermissions, $penumpangPermissions));
        foreach ($allPermissions as $permission) {
            Permission::insert([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        $role = Role::create(['name' => 'Admin']);
        foreach ($adminPermissions as $permission) {
            $role->givePermissionTo($permission);
        }

        $role = Role::create(['name' => 'Petugas']);
        foreach ($petugasPermissions as $permission) {
            $role->givePermissionTo($permission);
        }

        $role = Role::create(['name' => 'Penumpang']);
        foreach ($penumpangPermissions as $permission) {
            $role->givePermissionTo($permission);
        }
    }
}
