<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
            ['role_id'=>5,'first_name'=>'Alijon','last_name'=>'Valijonov', 'phone_number' => '123456789'],
            ['role_id'=>5,'first_name'=>'Alijon1','last_name'=>'Valijonov1', 'phone_number' => '123456789'],
            ['role_id'=>5,'first_name'=>'Alijon2','last_name'=>'Valijonov2', 'phone_number' => '123456789'],
            ['role_id'=>5,'first_name'=>'Alijon3','last_name'=>'Valijonov3', 'phone_number' => '123456789'],
            ['role_id'=>5,'first_name'=>'Alijon4','last_name'=>'Valijonov4', 'phone_number' => '123456789'],
        ]);
    }
}
