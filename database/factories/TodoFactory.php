<?php

namespace Database\Factories;

use App\models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Todo::class;
    /**
     * Define the mode'sdefault state.
     * 
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->sentence
        ];
    }
}
