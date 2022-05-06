<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feature>
 */
class FeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'logo' => 'one.jpg',
            'title' => $this->faker->realText(50),
            'excerpt' => $this->faker->paragraph(rand(2, 4)),
            'link' => $this->faker->imageUrl()
        ];
    }
}
