<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title = $this->faker->sentence;
        $description = $this->faker->paragraph;

        $title = substr($title, 0, 50);
        $description = substr($description, 0, 200);

        return [
            'title' => $title,
            'description' => $description,
            'difficulty_level' => $this->faker->randomElement(['facil', 'media', 'dificil']),
            'gif_url' => $this->faker->imageUrl(),
            'is_done' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
