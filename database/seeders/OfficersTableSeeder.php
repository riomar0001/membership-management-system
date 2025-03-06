<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all members who are officers from the membership_types table
        $officers = DB::table('membership_types')
            ->join('members', 'membership_types.members_id', '=', 'members.id')
            ->where('membership_types.type', 'Officer')
            ->select('members.id as member_id', 'membership_types.type as position')
            ->get();

        // Insert officers into the officers table
        foreach ($officers as $officer) {
            DB::table('officers')->insert([
                'id' => \Illuminate\Support\Str::uuid(),
                'member_id' => $officer->member_id,
                'position' => $officer->position,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}