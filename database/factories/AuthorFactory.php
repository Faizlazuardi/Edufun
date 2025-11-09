<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Specialization = ['Data Science', 'Network Security'];
        return [
            'name' => $this->faker->name(),
            'profile_picture' => $this->faker->imageUrl(200, 200, 'people', true),
            'specialization' => $this->faker->randomElement($Specialization)
        ];
    }
}
