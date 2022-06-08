<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rumahsakit>
 */
class RumahsakitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rumahsakit' => $this->faker->company(),
            'alamat' => $this->faker->address(),
            'email' => $this->faker->email(),
            'telepon' => $this->faker->phoneNumber(),

        ];
    }
}
