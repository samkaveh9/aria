<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = ["عنوان عروسک اول", "عنوان صنایع دستی اول", "عنوان کل اول", "عنوان گل مصنوعی اول"];
        $price = [20000, 30000, 40000, 50000, 60000, 70000];

        return [
            'title' => $this->faker->randomElement($title),
            'category_id' => Category::all()->random()->id,
            'image' => 'img.jpg',
            'price' => $this->faker->randomElement($price),
            'off_price' => $this->faker->randomElement($price),
        ];
    }
}
