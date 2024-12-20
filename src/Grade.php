<?php

namespace InosoftUniversity\SharedModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'grade'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
