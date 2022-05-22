<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'user_id' => 1,
            'tag_id' => 1,
            'slug' => $this->faker->slug(),
            'status' => $this->faker->randomElement($array =['Published','Drafted']),
            'contents' => $this->faker->paragraph(),
        ];
    }
}
