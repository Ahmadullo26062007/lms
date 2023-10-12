<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            ['teacher_id'=>1,'title'=>'English','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.','image'=>'course.png','category_id'=>1,'min_members'=>10,'price'=>100000],
            ['teacher_id'=>2,'title'=>'Rus','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.','image'=>'course.png','category_id'=>2,'min_members'=>10,'price'=>100000],
            ['teacher_id'=>3,'title'=>'Math','description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.','image'=>'course.png','category_id'=>3,'min_members'=>10,'price'=>150000],
        ]);
    }
}
