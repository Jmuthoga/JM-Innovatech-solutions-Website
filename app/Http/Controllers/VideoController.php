<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'youtube_link' => 'required|url',
        ]);
    
        // Save new video
        Video::create([
            'youtube_link' => $request->youtube_link,
        ]);
    
        return redirect()->route('videos.index')->with('success', 'Video saved successfully.');
    }
    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'youtube_link' => 'required|url',
        ]);
    

        $video->update([
            'youtube_link' => $request->youtube_link,
        ]);
    
        return redirect()->route('videos.index')->with('success', 'Video link updated successfully.');
    }


}
