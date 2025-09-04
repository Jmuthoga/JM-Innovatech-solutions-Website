<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    // You may want a many-to-many relationship with posts if you want tags to link to posts
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_post_tag', 'post_tag_id', 'post_id');
    }
}
