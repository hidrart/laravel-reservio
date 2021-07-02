<?php

namespace Database\Factories;

use App\Models\Stand;
use Illuminate\Database\Eloquent\Factories\Factory;

class StandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = ['vip', 'regular', 'private', 'bussiness'];
        return [
            'name' => $this->faker->word(), 
            'description' => $this->faker->paragraphs(rand(3,5), true),
            'cover' => $this->faker->imageUrl(640, 480, 'restaurant', true),
            'type' => $category[rand(0,3)],
            'seat' => $this->faker->numberBetween(2, 8)
            
        ];
    }
}
