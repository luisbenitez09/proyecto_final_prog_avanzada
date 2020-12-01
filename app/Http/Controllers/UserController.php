<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasPermissionTo('view users')) {
            $users = User::All();
            return view('users.index',compact('users'));
        } else {
            return view('index');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->hasPermissionTo('add users')) {
            if($user = User::create([
                'name' => $request['name'],
                'lastname' => $request['lastname'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ])) {
                return redirect()->back()->with('success','User created successfully');
            }
            return redirect()->back()->with('error','We couldnt create the new user');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(Auth::user()->hasPermissionTo('update users')) {
            $user = User::find($request['id']);
            if ($user) {
                if ($user->update($request->all())) {
                    return redirect()->back()->with('success','The user was updated successfully');
                }
            }
            return redirect()->back()->with('error','We coulnt update the user');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(Auth::user()->hasPermissionTo('delete users')) {
            $user = User::find($request['id']);
            if($user){
                if ($user->delete()) {
                    return response()->json([
                        'message' => 'User deleted successfully',
                        'code' => '200',
                    ]);
                }
            }
            return response()->json([
                'message' => 'We coulnt delete the user',
                'code' => '400',
            ]);
        }
    }
}

