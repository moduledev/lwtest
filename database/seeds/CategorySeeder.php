<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create(['name'=> 'adidas','slug'=>'adidas']);
        \App\Category::create(['name'=> 'nike','slug'=>'nike']);
    }
}
