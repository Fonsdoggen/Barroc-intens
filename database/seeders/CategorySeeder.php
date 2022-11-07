<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            'name' => 'Light',
            'is_employee_only' => '1',
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Deluxe',
            'is_employee_only' => '2',
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Coffee',
            'is_employee_only' => '2',
        ]);
    }
}
