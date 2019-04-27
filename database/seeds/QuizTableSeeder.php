<?php

use Illuminate\Database\Seeder;
use App\Quiz;
class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Quiz::create([
                'title' => $faker->sentence,
                'skilltype' => $faker->sentence,
                'passScore' => 1,
                'duration' => 1,
            ]);
        }
    }
}
