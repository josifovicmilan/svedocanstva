<?php

namespace Database\Factories;

use App\Models\ClassType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClassType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->randomElement(['природно-математички смер', 'друштвено-језички смер']),
            'year_started' => $this->faker->randomElement([2016,2017, 2018, 2019, 2020, 2021]),
            'class_number' => $this->faker->randomElement([6,7,8,9]),
            'study_duration' => 4,
        ];
    }
}
