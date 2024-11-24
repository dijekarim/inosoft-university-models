<?php

namespace InosoftUniversity\SharedModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'department_id', 'credit', 'quota', 'total_students_registered'];

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function registrations() {
        return $this->hasMany(Registration::class);
    }

    public function prerequisites() {
        return $this->hasMany(CoursePrerequisite::class);
    }
}
