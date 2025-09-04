<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\InterviewQuestion;

class CareerController extends Controller {

    // Frontend: List all careers
    public function index()
    {
        $careers = Career::latest()->paginate(6); // instead of get()
        $questions = InterviewQuestion::latest()->take(10)->get();
    
        return view('frontend.careers.index', compact('careers','questions'));
    }


    // Frontend: Show career details
    public function show($slug) {
        $career = Career::where('slug', $slug)->with('interviewQuestions')->firstOrFail();
        $career->updateStatus();
        return view('frontend.careers.show', compact('career'));
    }

    // Admin: Show all careers in dashboard
    public function adminIndex() {
        $careers = Career::orderBy('upload_date','desc')->get();
        return view('admin.careers.index', compact('careers'));
    }

    // Admin: Show create form
    public function create() {
        return view('admin.careers.create');
    }

    // Admin: Store career
    public function store(Request $request) {
        $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required',
            'responsibilities'=>'required',
            'instructions'=>'required',
            'deadline'=>'required|date',
            'poster'=>'nullable|image|max:2048',
            'questions'=>'required|array',
            'answers'=>'required|array'
        ]);
    
        $posterPath = null;
        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $filename = date('YmdHis') . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/careers'), $filename);
            $posterPath = 'images/careers/' . $filename;
        }
    
        $career = Career::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'responsibilities'=>$request->responsibilities,
            'instructions'=>$request->instructions,
            'poster_path'=>$posterPath,
            'deadline'=>$request->deadline,
            'upload_date'=>now(),
        ]);
    
        foreach($request->questions as $index => $question){
            InterviewQuestion::create([
                'career_id'=>$career->id,
                'question'=>$question,
                'answer'=>$request->answers[$index],
            ]);
        }
    
        return redirect()->route('admin.careers.index')
                         ->with('success','Career created successfully');
    }


    // Admin: Show edit form
    public function edit(Career $career) {
        $career->load('interviewQuestions');
        return view('admin.careers.edit', compact('career'));
    }

    // Admin: Update career
    public function update(Request $request, Career $career) {
        $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required',
            'responsibilities'=>'required',
            'instructions'=>'required',
            'deadline'=>'required|date',
            'poster'=>'nullable|image|max:2048',
            'questions'=>'required|array',
            'answers'=>'required|array'
        ]);
    
        if ($request->hasFile('poster')) {
            // delete old poster if exists
            if ($career->poster_path && file_exists(public_path($career->poster_path))) {
                unlink(public_path($career->poster_path));
            }
    
            $file = $request->file('poster');
            $filename = date('YmdHis') . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/careers'), $filename);
            $career->poster_path = 'images/careers/' . $filename;
        }
    
        $career->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'responsibilities'=>$request->responsibilities,
            'instructions'=>$request->instructions,
            'deadline'=>$request->deadline,
        ]);
    
        // refresh questions
        $career->interviewQuestions()->delete();
        foreach($request->questions as $index => $question){
            InterviewQuestion::create([
                'career_id'=>$career->id,
                'question'=>$question,
                'answer'=>$request->answers[$index],
            ]);
        }
    
        return redirect()->route('admin.careers.index')
                         ->with('success','Career updated successfully');
    }

    // Admin: Delete career
    public function destroy(Career $career) {
        $career->delete();
        return redirect()->route('admin.careers.index')->with('success','Career deleted successfully');
    }
}

