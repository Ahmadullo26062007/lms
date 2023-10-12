<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use App\Models\Teachers;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('teacher')->get();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teachers::pluck('first_name', 'id');
        $categories=Subject::pluck('title','id');
        return view('admin.courses.create',compact('teachers','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'teacher_id'=>'required',
            'category_id'=>'required',
            'image'=>'required',
            'price'=>'required',
            'min_members'=>'required',
            'description'=>'required',
        ]);
        $data = $request->all();
        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $data['image'] = $image_name;
        $file->move(public_path('images'), $image_name);

        Course::create($data);
        return redirect()->route('courses.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course=Course::find($id);
        return view('admin.courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course=Course::find($id);
        $teachers = Teachers::pluck('first_name', 'id');
        $categories=Subject::pluck('title','id');
        return view('admin.courses.edit',compact('course','teachers','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course=Course::find($id);
        $data = $request->all();
        $file = $request->file('image');
        $image_name = uniqid().$file->getClientOriginalName();
        $data['image'] = $image_name;
        if ($course->image) {
            $file->move(public_path('images'), $image_name);
        }else{
            $file->move(public_path('images'), $image_name);
        }
        $course->update($data);
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course=Course::find($id);
        $course->delete();
        return back();
    }
}
