<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\User;
use App\Models\Category;
use Auth;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole('Admin')) {
            $loans = Loan::with('movie','user')->get();
            $movies = Movie::All();
            $users = User::All();
            return view ('loans.admin', compact('loans','movies', 'users'));
        } else if(Auth::user()->hasRole('User')) {
            $loans = Loan::with('movie','user')->get();
            $movies = Movie::All();
            $user = Auth::user();
            return view ('loans.user', compact('loans','movies'));
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
        if(Auth::user()->hasPermissionTo('add loans')) {
            if($loan = Loan::create($request->all())) {
                return redirect()->back()->with('success','Loan created successfully');
            }
            return redirect()->back()->with('error','We couldnt create the new loan');
        }
    }

    /**
     * Display the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if(Auth::user()->hasRole('Admin')) {
            $loan = Loan::find($request['id']);
            $categories = Category::All();
            $users = User::All();
            $movies = Movie::All();
            return view ('loans.index', compact('loan','categories', 'users', 'movies'));
        } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        
            $loan = Loan::find($request['id']);
            if ($loan) {
                if ($loan->update($request->all())) {
                    return redirect()->back()->with('success','El registro se ha actualizado correctamente');
                }
            }
            return redirect()->back()->with('error','No se pudo actualizar el registro correctamente');;
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
