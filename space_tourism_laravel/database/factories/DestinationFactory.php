<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destination>
 */
class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucfirst($this->faker->word),
            'description' => $this->faker->paragraph(1),
            'distance' => $this->faker->numberBetween(100000, 100000000) . ' km',
            'travel_time' => $this->faker->numberBetween(10, 200) . ' jours',
            'image_url' => 'https://via.placeholder.com/150'
        ];
    }
}
