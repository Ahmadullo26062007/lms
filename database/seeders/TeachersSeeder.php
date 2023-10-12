<?php

namespace Database\Seeders;

use App\Models\Teachers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teachers::insert([
            ['user_id'=>1,'role_id'=>4,'subject_id'=>1,'gender_type'=>0,'first_name'=>'Sardor','last_name'=>'Toirov'],
            ['user_id'=>1,'role_id'=>4,'subject_id'=>2,'gender_type'=>0,'first_name'=>'Sardor1','last_name'=>'Toirov1'],
            ['user_id'=>1,'role_id'=>4,'subject_id'=>3,'gender_type'=>0,'first_name'=>'Sardor2','last_name'=>'Toirov2'],
            ['user_id'=>1,'role_id'=>4,'subject_id'=>1,'gender_type'=>0,'first_name'=>'Sardor3','last_name'=>'Toirov3'],
            ['user_id'=>1,'role_id'=>4,'subject_id'=>2,'gender_type'=>0,'first_name'=>'Sardor4','last_name'=>'Toirov4'],
        ]);
    }
}
