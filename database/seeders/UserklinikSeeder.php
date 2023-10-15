<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Userklinik;

class UserklinikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Userklinik::create([
            "nama" => "mirza",
            "email" => "mirzachairat5@gmail.com",
            "password" => bcrypt("123456"),
            "phone" => "082113409031"
        ]);
    }
}
