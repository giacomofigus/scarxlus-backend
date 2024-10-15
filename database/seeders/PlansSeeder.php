<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'type' => 'Standard',
                "personalized" => TRUE,
                "test_videocall" => TRUE,
                "send_photos" => FALSE,
                "workout_videocall" => FALSE,
                "product_id" => 5,
            ],
            [
                'type' => 'Elite',
                "personalized" => TRUE,
                "test_videocall" => TRUE,
                "send_photos" => TRUE,
                "workout_videocall" => FALSE,
                "product_id" => 6,
            ],
            [
                'type' => 'Personal Trainer',
                "personalized" => TRUE,
                "test_videocall" => TRUE,
                "send_photos" => TRUE,
                "workout_videocall" => TRUE,
                "product_id" => 7,
            ],
        ];

        foreach($data as $item){
            Plan::create($item);
        }
    }
}
