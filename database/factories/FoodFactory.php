<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Food::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {
        
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\id_ID\Restaurant($faker));
        $faker->addProvider(new \Xvladqt\Faker\LoremFlickrProvider($faker));

        $category = ['Main','Beverage','Dairy','Vegetable','Meat'];
        $type = $category[rand(0,4)];

        switch ($type) {
            case 'Main':
                $food = $faker->foodName();
                break;
            case 'Beverage':
                $food = $faker->beverageName();
                break;
            case 'Dairy':
                $food = $faker->dairyName();
                break;
            case 'Vegetable':
                $food = $faker->vegetableName();
                break;
            case 'Meat':
                $food = $faker->meatName();
                break;
            default:
            $food = $faker->foodName();
            break;;
          }

        return [
            'name' => $food,
            'description' => $this->faker->paragraphs(rand(3,5), true),
            'cover' => $faker->imageUrl($width = 640, $height = 480, [$faker->foodName()], false),
            'type' => $type,
            'price' => $this->faker->randomFloat(1, 2, 3) * 10000,      
            'score' => $this->faker->randomFloat(1, 3, 5)  
        ];
    }
}
