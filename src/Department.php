<?php

namespace InosoftUniversity\SharedModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    /**
     * courses
     */
    public function courses() {
        return $this->hasMany(Course::class);
    }
}