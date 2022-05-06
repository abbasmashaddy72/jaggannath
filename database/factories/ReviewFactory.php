<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'team_id' => Team::pluck('id')[$this->faker->numberBetween(1, Team::count() - 1)],
            'name' => $this->faker->name(),
            'image' => 'one.jpg',
            'message' => $this->faker->paragraph(rand(1, 2)),
            'stars' => rand(1, 5)
        ];
    }
}
