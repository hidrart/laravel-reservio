<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Restaurant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = ['cafe', 'restaurant', 'bar', 'lounge'];
        return [
            'name' => "The" . " " . $this->faker->domainWord() . " " . "Restaurant" , 
            'description' => $this->faker->paragraphs(3, true),
            'address' => $this->faker->address(),
            'cover' => $this->faker->imageUrl(640, 480, 'restaurant', true),
            'type' => $category[rand(0,3)],
            'score' => $this->faker->numberBetween(1, 5)
        ];
    }
}
