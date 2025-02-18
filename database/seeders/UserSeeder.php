<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'id' => (string) Str::uuid(),
            'student_id' => 123456,
            'first_name' => 'Admin',
            'last_name' => 'User',
            'umindanao_email' => 'a.user.123456@umindanao.edu.ph',
            'department' => 'College of Computer Education',
            'program' => 'Full name of the program',
            'year_level' => 4,
            'position' => 'Administrator',
            'role' => 'admin',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'id' => (string) Str::uuid(),
            'student_id' => 234567,
            'first_name' => 'President',
            'last_name' => 'User',
            'umindanao_email' => 'p.user.234567@umindanao.edu.ph',
            'department' => 'College of Computer Education',
            'program' => 'Full name of the program',
            'year_level' => 4,
            'position' => 'President',
            'role' => 'president',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'id' => (string) Str::uuid(),
            'student_id' => 345678,
            'first_name' => 'Officer',
            'last_name' => 'User',
            'umindanao_email' => 'o.user.345678@umindanao.edu.ph',
            'department' => 'College of Computer Education',
            'program' => 'Full name of the program',
            'year_level' => 4,
            'position' => 'Officer',
            'role' => 'officer',
            'password' => Hash::make('password123'),
        ]);
    }
}
