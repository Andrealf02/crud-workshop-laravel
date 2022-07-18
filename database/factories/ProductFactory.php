<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->text(),
            'quantity' => $this->faker->randomElement([2, 4, 8, 15, 30]),
            'price' => $this->faker->numberBetween(5, 100),
        ];
    }
}
