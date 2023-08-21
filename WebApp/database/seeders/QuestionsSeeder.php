<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $option = $faker->word;

            Question::create([
                'test_id' => 1,
                'QuestionContent' => $faker->sentence,
                'OptionA' => $option,
                'OptionB' => $faker->word,
                'OptionC' => $faker->word,
                'OptionD' => $faker->word,
                'CorrectOption' => $option,
            ]);
        }
    }
}
