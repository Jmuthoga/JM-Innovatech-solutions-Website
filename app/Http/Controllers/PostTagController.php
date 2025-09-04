<?php

namespace App\Http\Controllers;

use App\Models\PostTag;
use Illuminate\Http\Request;

class PostTagController extends Controller
{
    public function index()
    {
        $tags = PostTag::latest()->paginate(10);
        return view('admin.post_tag.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.post_tag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:post_tags,name',
            'slug' => 'required|unique:post_tags,slug',
        ]);

        PostTag::create($request->all());
        return redirect()->route('post_tag.index')->with('success', 'Tag created.');
    }

    public function edit($id)
    {
        $tag = PostTag::findOrFail($id);
        return view('admin.post_tag.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $tag = PostTag::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:post_tags,name,'.$tag->id,
            'slug' => 'required|unique:post_tags,slug,'.$tag->id,
        ]);

        $tag->update($request->all());
        return redirect()->route('post_tag.index')->with('success', 'Tag updated.');
    }

    public function destroy($id)
    {
        PostTag::findOrFail($id)->delete();
        return redirect()->route('post_tag.index')->with('success', 'Tag deleted.');
    }
}
