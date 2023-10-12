<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teachers extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        "user_id",
        "role_id",
        "subject_id",
        "salary_id",
        "first_name",
        "last_name",
        "gender_type",
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function salaries()
    {
        return $this->hasMany(Teachers_salary::class);
    }
    public function coursee()
    {
        return $this->hasMany(Course::class);
    }
    const GENDER=[
        '0'=>'ayol',
        '1'=>'erkak'
    ];
}
