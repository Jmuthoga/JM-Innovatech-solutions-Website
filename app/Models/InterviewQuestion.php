<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewQuestion extends Model {
    protected $fillable = ['career_id','question','answer'];

    public function career() {
        return $this->belongsTo(Career::class);
    }
}

