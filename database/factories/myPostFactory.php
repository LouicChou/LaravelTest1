<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class myPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $order = 1; // 讓user_id產生整數遞增的資料
        return [
            // 'title' => fake()->title(), //title會出現Mr.  Miss. Dr.
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'status' => rand(0, 1),
            'Publish_date' => fake()->date(),
            'user_id' => $order++,
            'category_id' => rand(1, 4)
        ];
    }
}
