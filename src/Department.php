<?php

namespace InosoftUniversity\SharedModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quota',
        'start_reg',
        'end_reg',
        'min_math_grade',
        'min_science_grade',
        'total_students_registered',
    ];

    /**
     * courses
     */
    public function courses() {
        return $this->hasMany(Course::class);
    }
}