<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

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
        $this->belongsTo(User::class);
    }

    public function subject()
    {
        $this->belongsTo(Subject::class);
    }
}
