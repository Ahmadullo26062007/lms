<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers_salary extends Model
{
    use HasFactory;

    protected $fillable=[
        'teacher_id',
        'price',
        'month',
        'year',
    ];
}
