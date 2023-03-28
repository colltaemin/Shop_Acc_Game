<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 100),
            'product_id' => $this->faker->numberBetween(1, 2),
            'user_name' => $this->faker->userName,
            'password' => $this->faker->password,
            'sever' => $this->faker->randomElement(['EU', 'NA', 'ASIA']),
            'weapon' => random_int(1, 16),
            'rank' => random_int(1, 10),
            'class' => $this->faker->randomElement(['Thổ', 'Hỏa', 'Dao găm', 'Thủy', 'Lôi']),
            'status' => $this->faker->randomElement(['Đăng kí ảo', 'Đăng kí thật']),
            'detail' => $this->faker->text(100),
            'image' => $this->faker->imageUrl(640, 480, 'cats', true),
            'price' => $this->faker->numberBetween(100000, 1000000),
            'level' => $this->faker->numberBetween(1, 100),
        ];
    }
}
