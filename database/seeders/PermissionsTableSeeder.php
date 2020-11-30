<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roles

        $admin = Role::create(['name' => 'Admin']);
        $user = Role::create(['name' => 'User']);

        //Categories
        Permission::create(['name' => 'view categories']);
        Permission::create(['name' => 'add categories']);
        Permission::create(['name' => 'update categories']);
        Permission::create(['name' => 'delete categories']);

        //Movies
        Permission::create(['name' => 'view movies']);
        Permission::create(['name' => 'add movies']);
        Permission::create(['name' => 'update movies']);
        Permission::create(['name' => 'delete movies']);

        //Clients
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'add users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        //Loans
        Permission::create(['name' => 'view loans']);
        Permission::create(['name' => 'add loans']);
        Permission::create(['name' => 'update loans']);
        Permission::create(['name' => 'delete loans']);

        $admin->givePermissionTo([
            'view categories',
            'add categories',
            'update categories',
            'delete categories',

            'view movies',
            'add movies',
            'update movies',
            'delete movies',

            'view users',
            'add users',
            'update users',
            'delete users',
            
            'view loans',
            'add loans',
            'update loans',
            'delete loans'
        ]);

        $user->givePermissionTo([
            'view loans',
            'view movies',
            'add loans'
        ]);

        $users = User::all();
        foreach ($users as $user) {
            if ($user->role_id != null) {
                $user->assignRole($user->role_id);
        }
    }

    }
}
