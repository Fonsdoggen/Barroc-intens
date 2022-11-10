<?php

namespace Database\Seeders;

use App\Models\MaintenanceItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maintenance_item')->insert([
            'name' => 'Rubber',
            'price' => '0,45',
            'length' => '10 mm'
        ]);
    }
}
