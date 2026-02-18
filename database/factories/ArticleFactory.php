<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NOMA' => $this->faker->words(2, true),
            'COULEUR' => $this->faker->safeColorName(),
            'PRIXACHAT' => $this->faker->randomFloat(2, 10, 100),
            'PRIXVENTE' => $this->faker->randomFloat(2, 110, 200),
            'QTESTK' => $this->faker->numberBetween(1, 50),
        ];
    }
}
