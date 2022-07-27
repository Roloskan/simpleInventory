<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            //Product table fake data
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'image' => 'https://images.designtrends.com/wp-content/uploads/2016/04/01102639/Packed-Products-Icon.png',
            'price' => $this->faker->randomFloat(2, 0, 100),
            'quantity' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->numberBetween(0, 1),
            'user_id' => 1,
        ];
    }
}
