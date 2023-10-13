<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages=Messages::with('user')->get();
        return view('admin.messages.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=User::pluck('name','id');
        return view('admin.messages.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Messages::create($request->all());
        return redirect()->route('messages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message=Messages::find($id);
        return view('admin.messages.show',compact('message'));
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
        $message=Messages::find($id);
        $message->delete();
        return back();
    }
}
