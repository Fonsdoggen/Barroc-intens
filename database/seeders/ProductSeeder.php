<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Barroc Intens Italian Light',
            'description' => 'S234FREKT',
            'image_path' => 'img/machine-bit-light.png',
            'price' => '289',
            'stock_status' => '0',
            'stock' => '0',
            'InOrder' => false,
            'product_category_id' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Barroc Intens Italian',
            'description' => 'S234KNDPF',
            'image_path' => 'img/machine-bit-light.png',
            'price' => '289',
            'stock_status' => '1',
            'stock' => '0',
            'InOrder' => false,
            'product_category_id' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Barroc Intens Italian Deluxe',
            'description' => 'S234NNBMV',
            'image_path' => 'img/machine-bit-deluxe.png',
            'price' => '375',
            'stock_status' => '1',
            'stock' => '0',
            'InOrder' => true,
            'product_category_id' => '2'
        ]);
        DB::table('products')->insert([
            'name' => 'Barroc Intens Italian Deluxe Special',
            'description' => 'S234MMPLA',
            'image_path' => 'img/machine-bit-deluxe.png',
            'price' => '375',
            'stock_status' => '1',
            'stock' => '69',
            'InOrder' => false,
            'product_category_id' => '2'
        ]);

        DB::table('products')->insert([
            'name' => 'Espresso Beneficio',
            'description' => 'Een toegankelijke en zachte koffie. Hij is afkomstig van de Finca El Limoncillo, een weelderige plantage aan de rand van het regenwoud in de Matagalpa regio in Nicaragua.',
            'image_path' => 'img/Coffee.jpg',
            'price' => '21.60',
            'stock_status' => '1',
            'stock' => '0',
            'InOrder' => false,
            'product_category_id' => '3'
        ]);
        DB::table('products')->insert([
            'name' => 'Yellow Bourbon Brasil',
            'description' => 'Koffie van de oorspronkelijke koffiestruik (de Bourbon) met gele koffiebessen. Deze zeldzame koffie heeft de afgelopen 20 jaar steeds meer erkenning gekregen en vele prijzen gewonnen.',
            'image_path' => 'img/Coffee.jpg',
            'price' => '23.20',
            'stock_status' => '1',
            'stock' => '0',
            'InOrder' => true,
            'product_category_id' => '3'
        ]);
        DB::table('products')->insert([
            'name' => 'Espresso Roma',
            'description' => 'Een Italiaanse espresso met een krachtig karakter en een aromatische afdronk.',
            'image_path' => 'img/Coffee.jpg',
            'price' => '20.80',
            'stock_status' => '0',
            'stock' => '0',
            'InOrder' => false,
            'product_category_id' => '3'
        ]);
        DB::table('products')->insert([
            'name' => 'Red Honey Honduras',
            'description' => 'De koffie is geproduceerd volgens de honey-methode. Hierbij wordt de koffieboon in haar vruchtvlees gedroogd, waardoor de zoete fruitsmaak diep in de boon trekt. Dit levert een éxtra zoete koffie op.',
            'image_path' => 'img/Coffee.jpg',
            'price' => '27.80',
            'stock_status' => '1',
            'stock' => '0',
            'InOrder' => false,
            'product_category_id' => '3'
        ]);

        Product::factory(15)->create();

    }
}
