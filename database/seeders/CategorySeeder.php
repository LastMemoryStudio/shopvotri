<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryModel;
use App\Models\AliasModel;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $alias = $faker->slug;
            AliasModel::create([
                'alias' => $alias,
                'type' => 1
            ]);
            CategoryModel::create([
                'parentid' => $faker->numberBetween(1, 10), // Đảm bảo parentid tồn tại trong tbl_category.
                'name' => $faker->word,
                'des' => $faker->text,
                'home' => $faker->boolean,
                'publish' => true,
                'sort' => $faker->numberBetween(1, 100),
                'alias' => $alias,
                'image' => $faker->imageUrl(),
                'thumb' => $faker->imageUrl(),
                'webp' => $faker->imageUrl(),
                'webp_thumb' => $faker->imageUrl(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}