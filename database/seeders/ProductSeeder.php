<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'E-book 1',
                'price' => 14.99,
                'description' => 'Un fantastico e-book su Laravel',
            ],
            [
                'name' => 'Workout Plan 1',
                'price' => 29.99,
                'description' => 'Un piano di allenamento completo',
            ],
        ];

        foreach ($data as $item) {
            Product::create($item);
        }
    }
}
