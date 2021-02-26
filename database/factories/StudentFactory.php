<?php

namespace Database\Factories;

use App\Models\ClassType;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'first_name' => $firstName = $this->faker->firstName,
            'last_name' => $lastName = $this->faker->lastName,
            'jmbg' => $this->faker->randomFloat(0, 9999999),
            'fathers_name' => $this->faker->firstName,
            'birth_date' => $this->faker->date,
            'ordering_number_in_classroom' => null,
            'classes_id' => ClassType::inRandomOrder()->first()->id,
        ];
    }
}
