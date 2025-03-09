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
        // Define a list of positions
        $positions = [
            'President',
            'Vice President',
            'Secretary',
            'Treasurer',
            'Auditor',
            'PRO',
            'Externals',
            'Communications',
            'Logistics',
            'Membership',
            'Events',
            'Marketing'
        ];

        // Fetch all members who are officers from the membership_types table
        $officers = DB::table('membership_types')
            ->join('members', 'membership_types.members_id', '=', 'members.id')
            ->where('membership_types.type', 'Officer')
            ->select('members.id as member_id')
            ->get();

        // Insert officers into the officers table with predefined positions
        foreach ($officers as $index => $officer) {
            DB::table('officers')->insert([
                'id' => \Illuminate\Support\Str::uuid(),
                'member_id' => $officer->member_id,
                'position' => $positions[$index % count($positions)], // Assign positions in a cyclic manner
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}