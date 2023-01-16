<?php

namespace Database\Factories;

use App\Models\Backend;
use Illuminate\Database\Eloquent\Factories\Factory;

class BackendFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


     protected $model = Backend::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'age' => $this->faker->randomDigit(10, 80),
            'address' => $this->faker->address,
        ];
    }
}
