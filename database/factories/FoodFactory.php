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
                $n = 2;
                $m = 3;
                break;
            case 'Beverage':
                $food = $faker->beverageName();
                $n = 1;
                $m = 2;
                break;
            case 'Dairy':
                $food = $faker->dairyName();
                $n = .5;
                $m = 1.5;
                break;
            case 'Vegetable':
                $food = $faker->vegetableName();
                $n = .5;
                $m = 1.5;
                break;
            case 'Meat':
                $food = $faker->meatName();
                $n = 2;
                $m = 4;
                break;
            default:
            $food = $faker->foodName();
            break;;
          }

        return [
            'name' => $food,
            'description' => $this->faker->paragraphs(rand(3,5), true),
            'cover' => $faker->imageUrl($width = 640, $height = 480, [$food]),
            'type' => $type,
            'price' => $this->faker->randomFloat(1, $n, $m) * 10000,      
            'score' => $this->faker->randomFloat(1, 3, 5)  
        ];
    }
}
