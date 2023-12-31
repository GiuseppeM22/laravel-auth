<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i < 10; $i++) { 
            $portfolio = new Portfolio();
            $portfolio->name = $faker->sentence(3);
            $portfolio->image = $faker->imageUrl(800, 600, 'animals', true);
            $portfolio->description = $faker->text(500);
            $portfolio->link = $faker->url();
            $portfolio->save();
        }
    }
}
