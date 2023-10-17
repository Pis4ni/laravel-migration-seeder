<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

use Faker\Generator as Faker;
class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100 ; $i++) { 
            # code...
            $train = new Train();
            
            $train->company = $faker->company();
            $train->train_code = $faker->randomNumber(6, true);
            $train->departure_station = $faker->city();
            $train->arriving_station = $faker->city();
            $train->departure_date = $faker->date();
            $train->departure_time = $faker->time();
            $train->arriving_date = $faker->date();
            $train->arriving_time = $faker->time();
            $train->on_time = $faker->numberBetween(0, 1);
            $train->train_carriages = $faker->numberBetween(1, 20);
            $train->cancelled = $faker->numberBetween(0, 1);
    
            $train->save();
        }
    }
}