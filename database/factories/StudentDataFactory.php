<?php

namespace Database\Factories;

use App\Models\StudentData;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'school_number' => $this->faker->randomNumber(6),
            'registration_number' => $this->faker->randomNumber(),
            'borough_of_birth' => 'Kruševac',
            'city_of_birth' => 'Kruševac',
            'country_of_birth' => 'Srbija',
        ];
    }
}
