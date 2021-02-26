<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->unique()->randomElement(['Српски језик','Математика',"Енглески језик", "Физика", "Хемија", "Биологија"]),
            'type' => $this->faker->randomElement(['oбавезни', 'изборни']),
            'position' => $this->faker->randomFloat(0,1, 10000),
        ];
    }
}
