<?php

namespace Database\Factories;

use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mark::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'mark' => $this->faker->randomElement(['1','2','3','4','5']),
            'school_year' => $this->faker->randomElement(['2018/2019','2019/2020', '2020/2021']),
            'grade' => 1
        ];
    }
}
