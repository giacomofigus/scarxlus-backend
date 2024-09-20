<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $ebooks = Category::where('name', 'ebooks')->first();
        $workout_plans = Category::where('name', 'workout_plans')->first();

        $data = [
            [
                'name' => 'Handstand',
                'price' => 14.99,
                'description' => 'In questo libro scoprirai i migliori esercizi per poter allenare la verticale',
                'category_id' => $ebooks->id,
            ],
            [
                'name' => 'Planche',
                'price' => 29.99,
                'description' => 'In questo libro scoprirai i migliori esercizi per poter allenare la planche',
                'category_id' => $ebooks->id,
            ],
            [
                'name' => 'Standard',
                'price' => 75.00,
                'description' => 'In questa scheda di allenamento troverai:',
                'category_id' => $workout_plans->id,
            ],
        ];

        foreach ($data as $item) {
            Product::create($item);
        }
    }
}
