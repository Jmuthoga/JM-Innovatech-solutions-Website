<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'name',
        'email',
        'comment',
    ];

    // Relationship to Post
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
