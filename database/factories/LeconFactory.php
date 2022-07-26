<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leçon>
 */
class LeconFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>'Nom de la leçon',
            'content'=>$this->faker->paragraph(15 , true).'\n'.$this->faker->paragraph(10 , true).'\n'.$this->faker->paragraph(10 , true),

        ];
    }
}
