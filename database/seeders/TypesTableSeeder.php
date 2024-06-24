<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $data = config("type");
        for ($i = 0; $i < 5; $i++) {
            $newType = new Type();
            $newType->name = $faker->sentence(4);
            $newType->save();
        }
    }
}
