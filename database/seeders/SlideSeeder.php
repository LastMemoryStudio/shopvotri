<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SlideModel;
use Faker\Factory as Faker;

class SlideSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            SlideModel::create([
                'name' => "Slide $i",
                'type' => rand(1, 2),
                'image' => $faker->imageUrl(),
                'webp' => $faker->imageUrl(),
                'hot' => rand(0, 1),
                'home' => rand(0, 1),
                'sort' => $i,
                'publish' => rand(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
