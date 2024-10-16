<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'file_path' => '/storage/img/handstand-paralleles.png',
                'ebook_id' => 1,
            ],
        ];

        foreach ($data as $item) {
            Image::create($item);
        }
    }
}
