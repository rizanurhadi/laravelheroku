<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stock>
 */
class StockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->unique()->numberBetween(1, 10),
            'qty' => $this->faker->numberBetween(0, 100),
            'qty_category' => 'Pak',
            'location' => 'gudang A',
            'desc' => '',
        ];
    }
}
