<?php

namespace InosoftUniversity\SharedModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
