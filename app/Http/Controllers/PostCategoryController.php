<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index()
    {
        $categories = PostCategory::latest()->paginate(10);
        return view('admin.post_category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.post_category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:post_categories,name',
            'slug' => 'required|unique:post_categories,slug',
        ]);

        PostCategory::create($request->all());
        return redirect()->route('post_category.index')->with('success', 'Category created.');
    }

    public function edit($id)
    {
        $category = PostCategory::findOrFail($id);
        return view('admin.post_category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = PostCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:post_categories,name,' . $category->id,
            'slug' => 'required|unique:post_categories,slug,' . $category->id,
        ]);

        $category->update($request->all());
        return redirect()->route('post_category.index')->with('success', 'Category updated.');
    }

    public function destroy($id)
    {
        PostCategory::findOrFail($id)->delete();
        return redirect()->route('post_category.index')->with('success', 'Category deleted.');
    }
}
