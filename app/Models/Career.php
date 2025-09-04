<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model {
    protected $fillable = [
        'title','slug','description','responsibilities','instructions','poster_path','upload_date','deadline','status'
    ];

    public function interviewQuestions() {
        return $this->hasMany(InterviewQuestion::class);
    }

    protected static function booted() {
        static::creating(function($career){
            $career->slug = \Str::slug($career->title);
        });
    }

    public function updateStatus() {
        $this->status = now()->toDateString() > $this->deadline ? 'Closed' : 'Open';
        $this->save();
    }
}
