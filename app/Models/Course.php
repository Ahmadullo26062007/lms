<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable=[
        'teacher_id',
        'title',
        'description',
        'image',
        'category_id',
        'min_members',
        'price',
    ];

   public function teacher()
    {
        return $this->belongsTo(Teachers::class);
    }

   public function category()
    {
        return $this->belongsTo(Subject::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
}
