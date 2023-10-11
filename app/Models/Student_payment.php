<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_payment extends Model
{
    use HasFactory;

    protected $fillable=[
        'student_id',
        'course_id',
        'price',
        'month',
        'year',
        'payed',
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
