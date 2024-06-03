<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstname = $this->faker->firstName;
        $lastname = $this->faker->lastName;
        $randomNumber = random_int(0, 1);

        return [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'profile' => $this->faker->imageUrl(40, 40, $firstname, false, '', true, 'png'),
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'),
            'role' => $randomNumber === 0 ? null : 'gestionnaire',
        ];
    }
}
