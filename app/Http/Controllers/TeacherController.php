<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teachers;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers=Teachers::all();
        return view('admin.teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects=Subject::all();
        return view('admin.teachers.create',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       dd($request->all());
       $request->validate([
           'firstname'=>'required',
           'lastname'=>'required',
           'subject_id'=>'required',
           'password'=>'required',
           'phonenumber'=>'required|numeric',

       ]);
       $u= \App\Models\User::create([
           "name" => $request->firstname,
           "password" => bcrypt($request->password),
           "email" => $request->email,
           "phone_number" => $request->phonenumber
       ]);


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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $t=Teachers::find($id);
      $t->delete();
      return redirect()->route('teachers.index');
    }
}
