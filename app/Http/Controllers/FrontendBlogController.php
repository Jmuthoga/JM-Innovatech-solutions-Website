<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\Video;
use App\Models\Post;

class FrontendBlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        $trendingPosts = Post::latest()->take(5)->get();
        $adverts = Advert::all();
        $videos = Video::all();

        return view('frontend.blog.index', compact('posts', 'trendingPosts', 'adverts', 'videos'));
    }

    public function show(Post $post)
    {
        // Increment views (starting count from 23 if null)
        if (is_null($post->views) || $post->views < 23) {
            $post->views = 23;
            $post->save();
        }
    
        $post->increment('views');
    
        $trendingPosts = Post::latest()->take(5)->get();
        $adverts = Advert::all();
        $videos = Video::all();
    
        return view('frontend.blog.show', compact('post', 'trendingPosts', 'adverts', 'videos'));
    }


}
