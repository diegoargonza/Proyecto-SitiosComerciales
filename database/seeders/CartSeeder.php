<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cart::insert([
            [
                'name' => 'cart1',
                'sale_id' => '1',
                'date' => '2025-04-28'
            ],

            [
                'name' => 'cart2',
                'sale_id' => '1',
                'date' => '2025-04-28'
            ],

            [
                'name' => 'cart3',
                'sale_id' => '2',
                'date' => '2025-04-28'
            ],
        ]);
        
    }
}
