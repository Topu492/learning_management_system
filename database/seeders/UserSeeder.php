<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $users = [
            [
                'name' => 'Jhon Deo',
                'email' => 'user86702@gmail.com',
                'password' => bcrypt('user86702'),
                'role' => 'student',
                'approve_status' => 'approved'
            ],
            [
                'name' => 'Instructor',
                'email' => 'instructor86702@gmail.com',
                'password' => bcrypt('instructor86702'),
                'role' => 'instructor',
                'approve_status' => 'approved'
            ],
        ];

        User::insert($users);
        
    }
    }

