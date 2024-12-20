<?php

namespace InosoftUniversity\SharedModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursePrerequisite extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'prerequisite_course_id'];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function prerequisiteCourse() {
        return $this->belongsTo(Course::class, 'prerequisite_course_id');
    }
}
