<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\MembershipType;
use App\Models\Member;

class MembershipTypeFactory extends Factory
{
    protected $model = MembershipType::class;

    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'members_id' => Member::factory(),
            'type' => $this->faker->randomElement(['New', 'Old', 'Volunteer', 'Officer']),
            'reviewed_by' => $this->faker->optional()->name,
        ];
    }
}
