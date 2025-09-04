<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdvertController extends Controller
{
    // Display a listing of adverts
    public function index()
    {
        $adverts = Advert::all();
        return view('admin.adverts.index', compact('adverts'));
    }

    // Show the form for creating a new advert
    public function create()
    {
        return view('admin.adverts.create');
    }

    // Store a newly created advert in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:poster,flyer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        $fileName = time() . '_' . $request->image->getClientOriginalName();
        $request->image->move(public_path('uploads/adverts'), $fileName);

        // Create the advert
        Advert::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'image' => $fileName,
        ]);

        return redirect()->route('adverts.index')->with('success', 'Advert created successfully.');
    }

    // Show the form for editing a specific advert
    public function edit(Advert $advert)
    {
        return view('admin.adverts.edit', compact('advert'));
    }

    // Update a specific advert
    public function update(Request $request, Advert $advert)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|in:poster,flyer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
        ];

        // Handle optional image replacement
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if (File::exists(public_path('uploads/adverts/'.$advert->image))) {
                File::delete(public_path('uploads/adverts/'.$advert->image));
            }

            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/adverts'), $fileName);
            $data['image'] = $fileName;
        }

        $advert->update($data);

        return redirect()->route('adverts.index')->with('success', 'Advert updated successfully.');
    }

    // Delete a specific advert
    public function destroy(Advert $advert)
    {
        if (File::exists(public_path('uploads/adverts/'.$advert->image))) {
            File::delete(public_path('uploads/adverts/'.$advert->image));
        }

        $advert->delete();

        return redirect()->route('adverts.index')->with('success', 'Advert deleted successfully.');
    }
}

