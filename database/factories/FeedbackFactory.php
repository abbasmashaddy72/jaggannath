<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $data = ["IP", "OP"];
        $type = $data[array_rand($data)];

        return [
            'type' => $type,
            'name' => $this->faker->name(),
            'number' => rand(7000000, 9000000),
            'email' => $this->faker->safeEmail(),
            'phone' => rand(7000000000, 9000000000),
            'how' => $this->faker->paragraph(rand(1, 2)),
            'initial_response' => $this->faker->paragraph(rand(1, 2)),
            'explanation_of_treatment' => $this->faker->paragraph(rand(1, 2)),
            'cost_treatment' => $this->faker->paragraph(rand(1, 2)),
            'reception_rating' => rand(0, 5),
            'dmo_rating' => rand(0, 5),
            'nurse_rating' => rand(0, 5),
            'house_keeping' => rand(0, 5),
            'treatment_rating' => rand(0, 5),
            'any_other' => $this->faker->paragraph(rand(1, 2))
        ];
    }
}
