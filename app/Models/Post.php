<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'author',
        'image',
        'excerpt',
        'content',
    ];

    // Relationship to Category
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }

    // Relationship to Comments
    public function comments()
    {
        return $this->hasMany(PostComment::class, 'post_id');
    }

    // Relationship to Tags - optional, requires pivot table (post_post_tag)
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_post_tag', 'post_id', 'tag_id');
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }


}
