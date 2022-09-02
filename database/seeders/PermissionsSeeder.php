<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'create-teams']);

        $adminRole = Role::create(['name' => 'Admin']);
        $userRole = Role::create(['name' => 'Editor']);

        $adminRole->givePermissionTo([
            'create-teams',
        ]);

        $userRole->givePermissionTo([
        ]);

        $user = User::where("name", "Coman Cosmin Admin")->first();
        $user->assignRole("admin");
    }
}
