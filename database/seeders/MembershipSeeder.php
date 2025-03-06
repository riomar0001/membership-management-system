<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define departments and programs
        $departments = [
            'College of Computer Studies' => ['BS Computer Science', 'BS Information Technology', 'BS Information Systems'],
            'College of Business Administration' => ['BS Business Administration', 'BS Accountancy', 'BS Economics'],
            'College of Education' => ['BS Elementary Education', 'BS Secondary Education', 'BS Special Education'],
            'College of Engineering' => ['BS Civil Engineering', 'BS Electrical Engineering', 'BS Mechanical Engineering'],
            'College of Arts and Sciences' => ['BS Psychology', 'BA Communication', 'BS Biology']
        ];

        // Define membership types
        $membershipTypes = ['New', 'Old', 'Volunteer', 'Officer'];

        // Define status options
        $statusOptions = ['Pending', 'Approved', 'Rejected'];

        // Define approval/rejection staff
        $staff = ['Dr. Santos', 'Prof. Reyes', 'Dean Mendoza', 'Dir. Aquino'];

        // Generate 20 members
        for ($i = 1; $i <= 50; $i++) {
            // Generate student details
            $firstName = $this->getRandomFirstName();
            $lastName = $this->getRandomLastName();
            $studentId = rand(300000, 599999);
            $email = strtolower(substr($firstName, 0, 1) . '.' . $lastName . '.' . $studentId . '@umindanao.edu.ph');

            // Get random department and program
            $department = array_rand($departments);
            $programs = $departments[$department];
            $program = $programs[array_rand($programs)];

            // Generate member UUID
            $memberId = Str::uuid()->toString();

            // Insert member
            DB::table('members')->insert([
                'id' => $memberId,
                'student_id' => $studentId,
                'first_name' => $firstName,
                'last_name' => $lastName,
                'umindanao_email' => $email,
                'program' => $program,
                'year_level' => rand(1, 5),
                'proof_of_membership' => 'storage/app/private/receipts/receipt_' . $studentId . '.jpg',
                'agree_to_terms_and_conditions' => true,
                'created_at' => Carbon::now()->subDays(rand(1, 60)),
                'updated_at' => Carbon::now()->subDays(rand(0, 30)),
            ]);

            // Generate random status
            $status = $statusOptions[array_rand($statusOptions)];
            $statusId = Str::uuid()->toString();

            // Insert membership status
            DB::table('membership_status')->insert([
                'id' => $statusId,
                'members_id' => $memberId,
                'status' => $status,
                'approved_by' => $status == 'Approved' ? $staff[array_rand($staff)] : null,
                'rejected_by' => $status == 'Rejected' ? $staff[array_rand($staff)] : null,
                'rejection_title' => $status == 'Rejected' ? $this->getRandomRejectionTitle() : null,
                'rejection_reason' => $status == 'Rejected' ? $this->getRandomRejectionReason() : null,
                'update_token' => Str::random(64),
                'created_at' => Carbon::now()->subDays(rand(1, 30))->milliseconds(rand(0, 999)),
                'updated_at' => Carbon::now()->subDays(rand(0, 15))->milliseconds(rand(0, 999)),
            ]);

            // Insert membership type
            DB::table('membership_types')->insert([
                'id' => Str::uuid()->toString(),
                'members_id' => $memberId,
                'type' => $membershipTypes[array_rand($membershipTypes)],
                'created_at' => Carbon::now()->subDays(rand(1, 30))->milliseconds(rand(0, 999)),
                'updated_at' => Carbon::now()->subDays(rand(0, 15))->milliseconds(rand(0, 999)),
                'reviewed_by' => rand(0, 1) ? $staff[array_rand($staff)] : null,
            ]);
        }
    }

    /**
     * Get a random Filipino first name.
     *
     * @return string
     */
    private function getRandomFirstName()
    {
        $firstNames = [
            'Juan', 'Maria', 'Jose', 'Ana', 'Carlo', 'Sofia', 'Miguel', 'Gabriela',
            'Rafael', 'Isabella', 'Antonio', 'Camille', 'Luis', 'Margarita', 'Francisco',
            'Patricia', 'Eduardo', 'Teresa', 'Manuel', 'Victoria', 'Ricardo', 'Rosario',
            'Gabriel', 'Angela', 'Emmanuel', 'Andrea', 'Daniel', 'Juana', 'Marco'
        ];

        return $firstNames[array_rand($firstNames)];
    }

    /**
     * Get a random Filipino last name.
     *
     * @return string
     */
    private function getRandomLastName()
    {
        $lastNames = [
            'Santos', 'Reyes', 'Cruz', 'Bautista', 'Ocampo', 'Garcia', 'Mendoza', 'Torres',
            'Romualdez', 'Lim', 'Aquino', 'Ramos', 'Diaz', 'Castro', 'Gonzales', 'Rodrigo',
            'Villanueva', 'Lopez', 'Ramirez', 'Hernandez', 'Perez', 'Rivera', 'Tan', 'De Leon',
            'Tolentino', 'Mercado', 'Del Rosario', 'Zamora', 'Dalisay', 'Enriquez', 'Pascual'
        ];

        return $lastNames[array_rand($lastNames)];
    }

    /**
     * Get a random rejection title.
     *
     * @return string
     */
    private function getRandomRejectionTitle()
    {
        $titles = [
            'Incomplete Documentation',
            'Invalid Student ID',
            'Duplicate Application',
            'Ineligible Program',
            'Unverifiable Information',
            'Missing Prerequisites',
            'Expired Requirements'
        ];

        return $titles[array_rand($titles)];
    }

    /**
     * Get a random rejection reason.
     *
     * @return string
     */
    private function getRandomRejectionReason()
    {
        $reasons = [
            'The submitted proof of membership is unreadable or incomplete.',
            'The student ID provided does not match our records.',
            'We already have an active membership for this student ID.',
            'Your program is currently not eligible for this membership.',
            'We could not verify the information provided in your application.',
            'You must complete the orientation program before applying.',
            'The submitted requirements have expired and need to be updated.'
        ];

        return $reasons[array_rand($reasons)];
    }
}
