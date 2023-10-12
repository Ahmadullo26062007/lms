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
            ['user_id'=>2,'role_id'=>5,'first_name'=>'Alijon','last_name'=>'Valijonov'],
            ['user_id'=>2,'role_id'=>5,'first_name'=>'Alijon1','last_name'=>'Valijonov1'],
            ['user_id'=>2,'role_id'=>5,'first_name'=>'Alijon2','last_name'=>'Valijonov2'],
            ['user_id'=>2,'role_id'=>5,'first_name'=>'Alijon3','last_name'=>'Valijonov3'],
            ['user_id'=>2,'role_id'=>5,'first_name'=>'Alijon4','last_name'=>'Valijonov4'],
        ]);
    }
}
