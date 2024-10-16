<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ebook;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'product_id' => 1, 
                'file_path' => '/ebooks/johndoe.pdf', 
                'date_release' => '2024-01-01', 
                // 'images' => '/images/ebook1.jpg', 
                'level' => 'Advanced', 
                'equipment' => 'Rings, loops, weighs', 
                'prerequisites' => 'Planche full 10s; Dips: 50 rep', 
                'weeks' => 6, 
            ],
            [
                'product_id' => 2, 
                'file_path' => '/ebooks/janesmith.epub', 
                'date_release' => '2023-06-15', 
                // 'images' => '/images/ebook2.jpg', 
                'level' => 'Basic', 
                'equipment' => 'None', 
                'prerequisites' => 'Push-up: 20; Dips: 30', 
                'weeks' => 4, 
            ],
            [
                'product_id' => 3, 
                'file_path' => '/ebooks/janesmith.epub', 
                'date_release' => '2023-06-15', 
                // 'images' => '/images/ebook2.jpg', 
                'level' => 'Basic', 
                'equipment' => 'Paralleles, loops', 
                'prerequisites' => 'Push-up: 30; Dips: 30; Planche lean: 10s', 
                'weeks' => 4, 
            ],
            [
                'product_id' => 4, 
                'file_path' => '/ebooks/janesmith.epub', 
                'date_release' => '2023-06-15', 
                // 'images' => '/images/ebook2.jpg', 
                'level' => 'Basic', 
                'equipment' => 'Dip bars, loops', 
                'prerequisites' => 'Pull-ups: 10; Front tuck: 5s', 
                'weeks' => 4, 
            ],
        ];

        
        foreach ($data as $item) {
            Ebook::create($item);
        }

    }
}
