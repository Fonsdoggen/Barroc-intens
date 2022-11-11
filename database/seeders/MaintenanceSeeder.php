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
            'price' => '0,39',
            'length' => '10 mm'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Rubber',
            'price' => '0,45',
            'length' => '14 mm'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Slang',
            'price' => '4,45'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Voeding (elektra)',
            'price' => '68,69'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Ontkalker',
            'price' => '4,00',
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Waterfilter',
            'price' => '299,45'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Reservoir sensor',
            'price' => '89,99'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Druppelstop',
            'price' => '122,43'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Electrische pomp',
            'price' => '478,59'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Tandwiel',
            'price' => '5,45',
            'length' => '110 mm'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Tandwiel',
            'price' => '5,25',
            'length' => '70 mm'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Maalmotor',
            'price' => '119,20'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Zeef',
            'price' => '28,80'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Reinigingstabletten',
            'price' => '3,45'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Reiningsborsteltjes',
            'price' => '8,45'
        ]);
        DB::table('maintenance_item')->insert([
            'name' => 'Ontkalkingspijp',
            'price' => '21,70'
        ]);
    }
}
