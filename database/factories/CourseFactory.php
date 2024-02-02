<?php

namespace Database\Factories;


use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $model = Course::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(3, true),
            'user_id'=>User::all()->random()->id
        ];
    }
}
