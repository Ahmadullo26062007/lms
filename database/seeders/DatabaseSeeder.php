<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => "Admin",
            'email' => 'admin@admin.com',
            'phone_number'=>'123456789',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => "Sardor",
            'email' => 'teacher@gmail.com',
            'phone_number'=>'123456789',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => "Alijon",
            'email' => 'student@gmail.com',
            'phone_number'=>'123456789',
            'password' => bcrypt('password')
        ]);

        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
            SubjectSeeder::class,
            StudentSeeder::class,
            TeachersSeeder::class,
            SalarySeeder::class,
            CourseSeeder::class
        ]);
    }
}
