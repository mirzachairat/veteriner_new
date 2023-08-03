<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nama" => "mirza",
            "nama_jabatan" => "staff",
            "no_hp" => "0812343354",
            "jabatan_id" => 1,
            "instansi" => "PT.A",
            "email" => "mirzachairat5@gmail.com",
            "password" => bcrypt("123456"),
            "longitude" => "",
            "latitude" => ""

        ]);
        User::create([
            "nama" => "penerima",
            "nama_jabatan" => "staff",
            "no_hp" => "08123354",
            "jabatan_id" => 2,
            "instansi" => "staff",
            "email" => "penerima@gmail.com",
            "password" => bcrypt("123456"),
            "longitude" => "",
            "latitude" => ""

        ]);
        User::create([
            "nama" => "manager",
            "nama_jabatan" => "manager",
            "no_hp" => "08123354",
            "jabatan_id" => 3,
            "instansi" => "staff",
            "email" => "manager@gmail.com",
            "password" => bcrypt("123456"),
            "longitude" => "",
            "latitude" => ""
        ]);
        User::create([
            "nama" => "penyelia",
            "nama_jabatan" => "penyelia",
            "no_hp" => "08123354",
            "jabatan_id" => 4,
            "instansi" => "staff",
            "email" => "penyelia@gmail.com",
            "password" => bcrypt("123456"),
            "longitude" => "",
            "latitude" => ""
        ]);
        User::create([
            "nama" => "penguji",
            "nama_jabatan" => "penguji",
            "no_hp" => "08123354",
            "jabatan_id" => 5,
            "instansi" => "staff",
            "email" => "penguji@gmail.com",
            "password" => bcrypt("123456"),
            "longitude" => "",
            "latitude" => ""
        ]);
        User::create([
            "nama" => "admin",
            "nama_jabatan" => "admin",
            "no_hp" => "08123354",
            "jabatan_id" => 6,
            "instansi" => "staff",
            "email" => "admin@gmail.com",
            "password" => bcrypt("123456"),
            "longitude" => "",
            "latitude" => ""
        ]);
        User::create([
            "nama" => "bendahara",
            "nama_jabatan" => "bendahara",
            "no_hp" => "08123354",
            "jabatan_id" => 7,
            "instansi" => "staff",
            "email" => "bendahara@gmail.com",
            "password" => bcrypt("123456"),
            "longitude" => "",
            "latitude" => ""
        ]);
    }
}