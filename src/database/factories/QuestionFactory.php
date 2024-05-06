<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker = app(Generator::class);
        return [
            // https://github.com/fzaninotto/Faker/issues/1512#issuecomment-450109983
            // 'answerId' => $this->faker->unique(true)->numberBetween(1, Answer::count()),
            'userId' => function () {
                return User::factory()->create()->id;
            },
            'answerId' => function () {
                return Answer::factory()->create()->id;
            },
            'content' => $this->faker->realText(200, 2),
        ];
    }

    public function noAttributes()
    {
        $faker = \Faker\Factory::create();

        return [
            'userId' => function () {
                return User::factory()->create()->id;
            },
            'answerId' => null,
            'content' => $faker->realText(200, 2),
        ];
    }
}
