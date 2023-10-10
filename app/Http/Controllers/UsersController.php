<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::with('roles')->get();
        return view('admin.usermenegment.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles=Role::pluck('title','id');
        return view('admin.usermenegment.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'password'=>'required',
            'phone_number'=>'required|numeric',
            'roles'=>'required',
        ]);
        if ($request->email){
        $user=User::create([
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'password'=>bcrypt($request->password),
            'email'=>$request->email
        ]);
        }else{
            $user=User::create([
                'name'=>$request->name,
                'phone_number'=>$request->phone_number,
                'password'=>bcrypt($request->password),
            ]);
        }
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::find($id);
        return view('admin.usermenegment.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
        $roles=Role::pluck('title','id');
        return view('admin.usermenegment.users.edit',compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'phone_number'=>'required|numeric',
            'roles'=>'required',
        ]);
        $user=User::find($id);
        if ($request->email){
            $user->update([
                'name'=>$request->name,
                'phone_number'=>$request->phone_number,
                'email'=>$request->email
            ]);
        }else{
            $user->update([
                'name'=>$request->name,
                'phone_number'=>$request->phone_number,
            ]);
        }
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
