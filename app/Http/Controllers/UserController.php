<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        if(Auth::user()->hasRole('Admin')) {
            if($user = User::create($request->all())) {
                return redirect()->back()->with('success','El usuario se ha creado correctamente');
            }
            return redirect()->back()->with('error','No se pudo crear el usuario correctamente');
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
        if(Auth::user()->hasRole('Admin')) {
            $user = User::find($request['id']);
            if ($user) {
                if ($user->update($request->all())) {
                    return redirect()->back()->with('success','El registro se ha actualizado correctamente');
                }
            }
            return redirect()->back()->with('error','No se pudo actualizar el registro correctamente');;
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
        if(Auth::user()->hasRole('Admin')) {
            $user = User::find($request['id']);
            if($user){
                if ($user->delete()) {
                    return response()->json([
                        'message' => 'Registro eliminado correctamente',
                        'code' => '200',
                    ]);
                }
            }
            return response()->json([
                'message' => 'No se pudo eliminar el registro',
                'code' => '400',
            ]);
        }
    }
}

