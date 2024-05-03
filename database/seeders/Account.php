<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Account extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dummyaccounts = [
            [
                'student_id' => '202012021',
                'last_name' => 'Doe',
                'first_name' => 'John',
                'middle_name' => 'Smith',
                'position' => 'Student',
                'college' => 'Engineering',
                'course' => 'Computer Science',
                'sex' => 'male',
                'age' => 30,
                'birthdate' => '1992-01-01',
                'religion' => 'Christian',
                'civil_status' => 'single',
                'email_address' => 'john@gmail.com',
                'password' => bcrypt('1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202120122',
                'last_name' => 'Doe',
                'first_name' => 'Jane',
                'middle_name' => 'Smith',
                'position' => 'Student',
                'college' => 'Engineering',
                'course' => 'Computer Science',
                'sex' => 'male',
                'age' => 30,
                'birthdate' => '1992-01-01',
                'religion' => 'Christian',
                'civil_status' => 'single',
                'email_address' => 'jana@gmail.com',
                'password' => bcrypt('1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202021212',
                'last_name' => 'Doe',
                'first_name' => 'Justin',
                'middle_name' => 'Smith',
                'position' => 'Student',
                'college' => 'Engineering',
                'course' => 'Computer Science',
                'sex' => 'male',
                'age' => 30,
                'birthdate' => '1992-01-01',
                'religion' => 'Christian',
                'civil_status' => 'single',
                'email_address' => 'justin@gmail.com',
                'password' => bcrypt('1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202020222',
                'last_name' => 'Doe',
                'first_name' => 'Jasmine',
                'middle_name' => 'Smith',
                'position' => 'Student',
                'college' => 'Engineering',
                'course' => 'Computer Science',
                'sex' => 'male',
                'age' => 30,
                'birthdate' => '1992-01-01',
                'religion' => 'Christian',
                'civil_status' => 'single',
                'email_address' => 'jasmine@gmail.com',
                'password' => bcrypt('1234'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more arrays for more dummy data
        ];

        foreach ($dummyaccounts as $data) {
            DB::table('accounts')->insert($data);
        }
    }
}
