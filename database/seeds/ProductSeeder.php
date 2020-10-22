<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i < 10; $i++){
            Product::create(['name' => "some product  $i", 'count'=> $i + 2, 'price'=> $i +22]);
        }
    }
}
