<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\listing>
 */
class listingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'company' => fake()->company(),
            'description' =>fake()->sentence(5),
            'location' =>fake()->city(),
            'website' =>fake()->url(),
            'email' => fake()->email()
        ];
    }
}
