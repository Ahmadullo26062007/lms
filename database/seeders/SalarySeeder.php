<?php

namespace Database\Seeders;

use App\Models\Salary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Salary::insert([
            ['type'=>0,'teacher_id'=>1,'taking_present'=>'70','price'=>0],
            ['type'=>0,'teacher_id'=>2,'taking_present'=>'70','price'=>0],
            ['type'=>0,'teacher_id'=>3,'taking_present'=>'70','price'=>0],
            ['type'=>0,'teacher_id'=>4,'taking_present'=>'70','price'=>0],
            ['type'=>0,'teacher_id'=>5,'taking_present'=>'70','price'=>0],
        ]);
    }
}
