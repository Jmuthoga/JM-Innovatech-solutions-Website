<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = PostCategory::all();
        $tags = PostTag::all();
        $users = User::all();
        return view('admin.post.create', compact('categories', 'tags', 'users'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:post_categories,id',
            'title' => 'required|unique:posts,title',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'tag_id' => 'nullable|array',
            'tag_id.*' => 'exists:post_tags,id',
            // Notice: no direct 'author' validation here anymore
        ]);
    
        // Pick author from dropdown or typed input
        $author = $request->author_select ?: $request->author_text;
    
        if (!$author) {
            return back()->withErrors(['author_select' => 'Please select or type an author.'])->withInput();
        }
    
        $slug = Str::slug($request->title);
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHis') . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/posts'), $filename);
            $imagePath = 'images/posts/' . $filename;
        }
    
        $post = Post::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $slug,
            'author' => $author, // ✅ using combined author field
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'image' => $imagePath,
        ]);
    
        if ($request->has('tag_id')) {
            $post->tags()->attach($request->tag_id);
        }
    
        return redirect()->route('post.index')->with('success', 'Post created.');
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = PostCategory::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
    
        $request->validate([
            'category_id' => 'required|exists:post_categories,id',
            'title' => 'required|unique:posts,title,'.$post->id,
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'tag_id' => 'nullable|array',
            'tag_id.*' => 'exists:post_tags,id',
        ]);
    
        $author = $request->author_select ?: $request->author_text;
        if (!$author) {
            return back()->withErrors(['author_select' => 'Please select or type an author.'])->withInput();
        }
    
        $slug = Str::slug($request->title);
    
        $imagePath = $post->image;
        if ($request->hasFile('image')) {
            if ($post->image && file_exists(public_path($post->image))) {
                unlink(public_path($post->image));
            }
            $file = $request->file('image');
            $filename = date('YmdHis') . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/posts'), $filename);
            $imagePath = 'images/posts/' . $filename;
        }
    
        $post->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $slug,
            'author' => $author, // ✅ combined author field
            'excerpt' => $request->excerpt,
            'content' => $request->content,
            'image' => $imagePath,
        ]);
    
        if ($request->has('tag_id')) {
            $post->tags()->sync($request->tag_id);
        } else {
            $post->tags()->detach();
        }
    
        return redirect()->route('post.index')->with('success', 'Post updated.');
    }


    
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.show', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if ($post->image && file_exists(public_path($post->image))) {
            unlink(public_path($post->image));
        }
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Post deleted.');
    }
}
