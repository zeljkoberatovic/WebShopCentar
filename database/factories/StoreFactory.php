<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    protected $model = \App\Models\Store::class;

     
    public function definition(): array
    {
        return [
            
            'name' => $this->faker->company,
            'location' => $this->faker->address,
            'description' => $this->faker->sentence(10),
            'image' => $this->faker->imageUrl(640, 480, 'business', true),
        ];
    }
}
