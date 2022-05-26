<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data = ['انواع عروسک','انواع صنایع دستی', 'انواع گل های طبیعی', 'انواع گل های مصنوعی'];
        return [
            'title' => $this->faker->randomElement($data)
        ];
    }
}
