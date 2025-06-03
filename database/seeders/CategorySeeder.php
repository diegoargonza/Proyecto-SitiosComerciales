<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::insert([
            [
                'name' => 'Electronica',
                'is_status' => 1
            ],
            [
                'name' => 'Ropa',
                'is_status' => 1
            ],
            [
                'name' => 'Linea blanca',
                'is_status' => 1
            ],     
        ]);
        
    }
}
