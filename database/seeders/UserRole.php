<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $roles = [
            'admin',
            'counselee',
            'head_counselee',
            'student',
            'faculty',
            'employee'
        ];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('user_roles')->insert([
                'account_id' => $i,
                'role_id' => array_search($roles[$i % count($roles)], $roles) + 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
