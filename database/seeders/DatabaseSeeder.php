<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //create roles
        $role_admin = \Spatie\Permission\Models\Role::create(['name' => 'Administrator']);
        $role_user = \Spatie\Permission\Models\Role::create(['name' => 'InfUser']);
    }
}
