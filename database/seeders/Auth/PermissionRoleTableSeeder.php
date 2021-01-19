<?php

namespace Database\Seeders\Auth;

use App\Models\Auth\Permission;
use App\Models\Auth\Role;
use App\Models\Auth\User;
use Carbon\Carbon;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

/**
 * Class PermissionRoleTableSeeder.
 */
class PermissionRoleTableSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master super administrator
        User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'superadmin@admin.com',
            'email_verified_at' => Carbon::now()->tz(settings('timezone')),
            'password' => 'secret',
            'active' => true,
            'timezone' => 'America/Santo_Domingo',
        ]);

        // Add the main administrator
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Istrator',
            'email' => 'admin@admin.com',
            'email_verified_at' => Carbon::now()->tz(settings('timezone')),
            'password' => 'secret',
            'active' => true,
            'timezone' => 'America/Santo_Domingo',
        ]);

        // Create Roles
        Role::create([
            'name' => config('boilerplate.access.role.super_admin'),
            'description' => 'Perfil de Acceso completo a todos los módulos del sistema.',
        ]);

        Role::create([
            'name' => config('boilerplate.access.role.admin'),
            'description' => 'Perfil de Administración de los módulos del sistema.',
        ]);

        Role::create([
            'name' => config('boilerplate.access.role.default'),
            'description' => 'Perfil predeterminado de un Usuario.',
        ]);

        // Seed the default permissions
        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            foreach ($perms['name'] as $key => $name) {
                Permission::firstOrCreate([
                    'module_id' => $perms['module_id'],
                    'name' => $name,
                    'display_name' => $perms['display_name'][$key],
                ]);
            }
        }

        User::find(1)->assignRole(config('boilerplate.access.role.super_admin'));
        User::find(2)->assignRole(config('boilerplate.access.role.admin'));

        Role::find(3)->givePermissionTo('dashboard.read');

        $this->enableForeignKeys();
    }
}
