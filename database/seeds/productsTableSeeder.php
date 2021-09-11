<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->insert([
        	[
            'Product_name' => 'Bioderma',
            'price' => '55.00',
            'image' => '1590532411.png'
            ],
            [
             'Product_name' => 'Chanca Piedra',
             'price' => '70.00',
             'image' => '1590532478.png'
            ],
            [
             'Product_name' => 'Umcka Cold Care',
             'price' => '120.00',
             'image' => '1590532536.png'
            ],
            [
             'Product_name' => 'Cetyl Pure',
             'price' => '145.00',
             'image' => '1590532599.png'
            ],
            [
             'Product_name' => 'CLA Core',
             'price' => '38.00',
             'image' => '1590532616.png'
            ],
            [
             'Product_name' => 'Poo Pourri',
             'price' => '89.00',
             'image' => '1590532579.png'
            ]
     ]);
    }
}
