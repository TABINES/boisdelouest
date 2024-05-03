<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
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
            // 'userId' => $this->faker->unique()->numberBetween(1, User::count()),
            'userId' => function () {return User::factory()->create()->id;},
            'content' => $this->faker->realText($maxNbChars = 200, $indexSize = 2)
        ];
    }
}
