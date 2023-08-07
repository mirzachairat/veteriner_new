<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Role = Role::create([
            "id" => "1",
            "name" => "staff"
        ]);
        $Role = Role::create([
            "id" => "2",
            "name" => "manager"
        ]);
        $Role = Role::create([
            "id" => "3",
            "name" => "penyelia"
        ]);
        $Role = Role::create([
            "id" => "4",
            "name" => "penguji"
        ]);
        $Role = Role::create([
            "id" => "5",
            "name" => "admin"
        ]);
        $Role = Role::create([
            "id" => "5",
            "name" => "admin"
        ]);
    }
}
