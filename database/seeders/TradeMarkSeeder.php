<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TradeMarkModel;
use App\Models\AliasModel;
use Faker\Factory as Faker;

class TradeMarkSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $alias = $faker->slug;
        AliasModel::create([
            'alias' => $alias,
            'type' => 2
        ]);
        foreach (range(1, 10) as $index) {
            TradeMarkModel::create([
                'alias' => $alias,
                'name' => $faker->word,
                'image' => $faker->imageUrl(),
                'thumb' => $faker->imageUrl(),
                'des' => $faker->text,
                'sort' => $faker->numberBetween(1, 100),
                'publish' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}