<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BigBikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model_name' => $this->faker->randomElement(['HONDA CB1000R', 'BMW G 310R', 'BMW R nineT Scambler', 'BMW R nine T URBAN G/S', 'BMW F 800 R', 'BMW R nine T', 'BMW F 700 GS', 'BMW R 1200 GS']),
            'rpm' => $this->faker->randomElement(['9500', '7750', '8000', '7000', '7500', '10,500', '1170', '8500']),
            'price' => $this->faker->randomElement(['Php785,000.00', 'Php1,415,000.00', 'Php795,000.00', 'Php1,200,000.00', 'Php1,,120,000.00', 'Php970,000.00', 'Php785,000.00', 'Php865,000.00']),
            'color' => $this->faker->randomElement(['black', 'white', 'grey', 'blue', 'red', 'green', 'matte black', 'orange']),
        ];
    }
}
