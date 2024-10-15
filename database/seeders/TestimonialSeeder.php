<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Giovanni Braga',
                'plan' => 'Elite da 1 anno',
                'review' => "Ero arrivato ad un punto in cui con il calisthenics non riuscivo ad andare avanti, dopo uno/ due annetti da autodidatta e qualche mese in un corso ho capito che era arrivato il momento",
                'profile-pic' =>  '/storage/img/propic-1.png',
                'img-testimonial' =>  null,
            ],
            [
                'name' => 'Riccardo Trincas',
                'plan' => 'Standard da 1 anno',
                'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante sapien, vehicula quis ipsum id, volutpat facilisis enim. Duis porta vulputate urna, et pretium orci ornare ac.",
                'profile-pic' => '/storage/img/propic-2.png' ,
                'img-testimonial' => null ,
            ],
            [
                'name' => 'Marco Rossi',
                'plan' => 'Standard da 1 anno',
                'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante sapien, vehicula quis ipsum id, volutpat facilisis enim. Duis porta vulputate urna, et pretium orci ornare ac.",
                'profile-pic' => '/storage/img/propic-3.png' ,
                'img-testimonial' => null ,
            ],
            [
                'name' => 'Nicola Piga',
                'plan' => ' Elite da 2 anni',
                'review' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ante sapien, vehicula quis ipsum id, volutpat facilisis enim. Duis porta vulputate urna, et pretium orci ornare ac.",
                'profile-pic' => '/storage/img/propic-4.png' ,
                'img-testimonial' => null ,
            ],
        ];

        
        foreach ($data as $item) {
            Testimonial::create($item);
        }
    }
}
