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
                'images' => '/images/ebook1.jpg', 
                'level' => 'Advanced', 
                'equipment' => 'None', 
                'prerequisites' => 'Basic knowledge of PHP', 
                'weeks' => null, 
            ],
            [
                'product_id' => 2, 
                'file_path' => '/ebooks/janesmith.epub', 
                'date_release' => '2023-06-15', 
                'images' => '/images/ebook2.jpg', 
                'level' => 'Intermediate', 
                'equipment' => 'None', 
                'prerequisites' => 'None', 
                'weeks' => null, 
            ],
            
        ];

        
        foreach ($data as $item) {
            Ebook::create($item);
        }

    }
}
