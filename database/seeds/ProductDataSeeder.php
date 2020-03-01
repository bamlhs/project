<?php

use Illuminate\Database\Seeder;

class ProductDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10),
            'price' => Int::random(3),
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10),
            'price' => Int::random(3),
        ]);
    }
}
