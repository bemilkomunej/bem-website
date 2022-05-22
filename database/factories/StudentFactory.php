<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thumbnail' => '204f107f94433a61527fa10be4aefb93.png',
            'name' => $this->faker->name(),
            'nim' => $this->faker->numberBetween(192410102001,192410102092),
            'study_program' => 'Teknologi Informasi',
            'entry_year' => 2019,
            'category' => 'wisenut',
            'point' => $this->faker->numberBetween(0,100),
               
        ];
    }
}
