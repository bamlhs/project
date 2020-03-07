<?php

use App\Coupon;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'coupoun' => 'abc',
            'type' => 'fixed',
            'value' => 30      
        ]);

        Coupon::create([
            'coupoun' => 'def',
            'type' => 'percent',
            'percent_off' => 50     
        ]);

    }

    
}
