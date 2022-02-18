<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class HolidayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //crea dati fake per ogni colonna 
        for($i = 0; $i < 10; $i++) {
            $types = [
                'Relax',
                'Adrenaline',
                'Family'
            ];

            $months = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December'
            ];


            $new_travel = new Travel();
            $new_travel->type = $faker->randomElement($types);
            $new_travel->state = $faker->state();
            $new_travel->city = $faker->city();
            $new_travel->days = rand(5, 30);
            $new_travel->price = rand(200, 15000);
            $new_travel->leaving = $faker->randomElement($months);
            $new_travel->description = $faker->text(400);
            $new_travel->is_available = rand(0, 1);

            $new_travel->save();
        }
    }
}
