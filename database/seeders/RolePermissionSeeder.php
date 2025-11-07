<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            'Admin' =>[
                'access user',
                'insert user',
                'edit user',
                'update user',
                'delete user',
                'view user',

                'access college',
                'insert college',
                'edit college',
                'update college',
                'delete college',
                'view college',

                'access program',
                'insert program',
                'edit program',
                'update program',
                'delete program',
                'view program',

                'access event',
                'insert event',
                'edit event',
                'update event',
                'delete event',
                'view event',

                'access news',
                'insert news',
                'edit news',
                'update news',
                'delete news',
                'view news',

                'access transparency',
                'insert transparency',
                'edit transparency',
                'update transparency',
                'delete transparency',
                'view transparency',

                'access philgeps',
                'insert philgeps',
                'edit philgeps',
                'update philgeps',
                'delete philgeps',
                'view philgeps',

                'access downloadables',
                'insert downloadables',
                'edit downloadables',
                'update downloadables',
                'delete downloadables',
                'view downloadables',

            ],
        ];

        foreach ($roles as $role => $permissions) {
            $db_role = Role::where('name', $role)->first();
            if(!$db_role)
            {
                // CREATE NEW ROLE
                $db_role = Role::create(['name' => $role]);
            }
            // ADD PERMISSION
            foreach ($permissions as  $permission) {
                $new_permission = Permission::where('name', $permission)->first();
                if(!$new_permission)
                {
                    $new_permission = Permission::create([
                        'name' => $permission
                    ]);
                }
                if(!$db_role->hasPermissionTo($permission))
                {
                    $db_role->givePermissionTo($permission);
                }
            }
        }
        // ASSIGN SUPER ADMIN ROLE
        $user = User::findOrFail(1);
        $user->assignRole('Admin'); // SUPER ADMIN
    }
}
