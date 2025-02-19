<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\MembershipStatus;
use App\Models\Member;

class MembershipStatusFactory extends Factory
{
    protected $model = MembershipStatus::class;

    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'members_id' => Member::factory(),
            'status' => $this->faker->randomElement(['Pending', 'Approved', 'Rejected']),
            'approved_by' => $this->faker->optional()->name,
            'rejected_by' => $this->faker->optional()->name,
            'rejection_title' => $this->faker->optional()->sentence,
            'rejection_reason' => $this->faker->optional()->paragraph,
            'update_token' => Str::random(10),
        ];
    }
}
