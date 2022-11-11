<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Finance',
            'email' => 'finance'.'@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => '1'
        ]);
        DB::table('users')->insert([
            'name' => 'Inkoop',
            'email' => 'inkoop'.'@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => '2'
        ]);
        DB::table('users')->insert([
            'name' => 'Maintenance',
            'email' => 'maintenance'.'@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => '3'
        ]);
        DB::table('users')->insert([
            'name' => 'Sales',
            'email' => 'sales'.'@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => '4'
        ]);

        DB::table('users')->insert([
            'name' => 'Testgebruiker',
            'email' => 'testgebruiker@gmail.com',
            'password' => Hash::make('password'),
            'role_id' => '5'
        ]);

       DB::table('users')->insert([
           'name' => 'Fons',
           'email' => 'fonsdoggen@gmail.com',
           'password' => Hash::make('hallo123'),
           'role_id' => '3'
       ]);
    }
}
