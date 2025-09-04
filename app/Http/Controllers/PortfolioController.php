<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Multipic;

class PortfolioController extends Controller
{
   public function index($category = null)
{
    $categories = Multipic::select('category')
        ->whereNotNull('category')
        ->distinct()
        ->pluck('category');

    if ($category) {
        $decodedCategory = urldecode($category);
        $images = Multipic::where('category', $decodedCategory)->get();
    } else {
        $images = Multipic::all();
    }

    return view('pages.portfolio', compact('images', 'categories', 'category'));
}


    public function edit($id)
    {
        $image = Multipic::findOrFail($id);

        // Get all distinct categories for dropdown
        $categories = Multipic::select('category')
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category');

        return view('admin.port.edit', compact('image', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'nullable|string',
            'link'        => 'nullable|string',
            'category'    => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif'
        ]);

        $image = Multipic::findOrFail($id);
        $image->description = $request->description;
        $image->link = $request->link;
        $image->category = $request->category;

        // If a new image file is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHis') . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/portfolio'), $filename);
            $image->image = 'images/portfolio/' . $filename;
        }

        $image->save();

       return redirect()->route('portfolio')->with('success', 'Portfolio item updated successfully');

    }
}
