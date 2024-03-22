<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductModel;
use App\Models\AliasModel;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $alias = $faker->slug;
        AliasModel::create([
            'alias' => $alias,
            'type' => 3
        ]);
        foreach (range(1, 10) as $index) {
            ProductModel::create([
                'name' => $faker->word,
                'cateid' => $faker->numberBetween(1, 10), // Đảm bảo cateid tồn tại trong tbl_category.
                'trademarkid' => $faker->numberBetween(1, 10), // Đảm bảo trademarkid tồn tại trong tbl_trademarks.
                'type' => $faker->word,
                'alias' => $alias,
                'image' => $faker->imageUrl(),
                'thumb' => $faker->imageUrl(),
                'webp' => $faker->imageUrl(),
                'des' => $faker->text,
                'content' => $faker->paragraph,
                'properity' => $faker->sentence,
                'qty' => $faker->numberBetween(1, 100),
                'price' => $faker->randomFloat(2, 10, 1000),
                'price_sale' => $faker->randomFloat(2, 1, 500),
                'status' => $faker->boolean,
                'hot' => $faker->boolean,
                'sort' => $faker->numberBetween(1, 100),
                'publish' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}