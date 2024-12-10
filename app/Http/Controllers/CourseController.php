<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::all();

        return view('admin.course', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'course_name' => ['required'],
            'course_hour' => ['required'],
            'course_price' => ['required'],
            'description' => ['required'],
        ]);

        Course::create([
            'course_name' => $validatedData['course_name'],
            'course_hour' => $validatedData['course_hour'],
            'course_price' => $validatedData['course_price'],
            'description' => $validatedData['description'],
        ]);

        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.edit', ['course' => Course::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'course_name' => ['required'],
            'course_hour' => ['required'],
            'course_price' => ['required'],
            'description' => ['required'],
        ]);

        $course = Course::find($id);

        $course->update ([
            'course_name'=>$request->course_name,
            'course_hour'=>$request->course_hour,
            'course_price'=>$request->course_price,
            'description'=>$request->description,
        ]);

        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::find($id)->delete();

        return redirect()->route('course.index');
    }
}
