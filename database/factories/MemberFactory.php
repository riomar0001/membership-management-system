<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MemberFactory extends Factory
{
    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'student_id' => fake()->unique()->numberBetween(100000, 599999), // Ensures uniqueness
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'umindanao_email' => function (array $attributes) {
                return strtolower(substr($attributes['first_name'], 0, 1) . '.' . $attributes['last_name'] . '.' . $attributes['student_id'] . '@umindanao.edu.ph');
            },
            'program' => 'Full name of the program',
            'year_level' => fake()->numberBetween(1, 4),
            'proof_of_membership' => 'some_image.jpg',
            'agree_to_terms_and_conditions' => true,
        ];
    }
}
