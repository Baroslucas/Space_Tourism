<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crew>
 */
class CrewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'role' => $this->faker->jobTitle,
            'bio' => $this->faker->paragraph,
            'image_url' => $this->faker->imageUrl(640, 480, 'people')
        ];
    }
}
