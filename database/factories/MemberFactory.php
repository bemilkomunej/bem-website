<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'division' => $this->faker->randomElement($array =['BPH','KOMINFO','ADKESMA', 'PSDM']),
            'position' => 'Staff',
            'linkedin' => 'https://www.linkedin.com/company/bemilkom/',
            'instagram' => 'https://instagram.com/bemilkomunej',
            'thumbnail' => '204f107f94433a61527fa10be4aefb93.png',
        ];
    }
}
