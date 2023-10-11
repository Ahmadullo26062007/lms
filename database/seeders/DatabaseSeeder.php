<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

            'name' => "Sardor",
            'email' => 'admin@admin.com',
            'phone_number'=>'123456789',
            'password' => bcrypt('password')
        ]);

        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,

        ]);
    }
}
