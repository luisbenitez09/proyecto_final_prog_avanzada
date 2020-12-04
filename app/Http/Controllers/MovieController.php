<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use App\Models\User;
use App\Models\Loan;
use Illuminate\Http\Request;
use Auth;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasrole('User')) {
            $movies = Movie::with('loan')->get();
            $user = Auth::user();
            return view ('movies.user', compact('movies', 'user'));
        }
        else if(Auth::user()->hasRole('Admin')) {
            $movies = Movie::with('category')->get();
            $categories = Category::All();
            //$users = User::All();
            //$loans = Loan::All();
            return view ('movies.admin', compact('movies','categories'));
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
        if(Auth::user()->hasPermissionTo('add movies')) {
            if ($movie = Movie::create($request->all())) {
                if ($request->hasFile('cover_file')) {
                    
                    $file = $request->file('cover_file');
                    $file_name = 'cover_movie'.$movie->id.'.'.$file->getClientOriginalExtension();

                    $path = $request->file('cover_file')->storeAs(
                        'img', $file_name
                    );
                    $movie->cover = $file_name;
                    $movie->save();
                }
                return redirect()->back()->with('success','Movie created successuflly');
            }
            return redirect()->back()->with('error','We couldnt create the movie');
        }
    }

    /**
     * Display the specified resource.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if(Auth::user()->hasRole('Admin')) {
            $movie = Movie::find($request['id']);
            $categories = Category::All();
            $users = User::All();
            $loans = Loan::All();
            return view ('movies.index', compact('movie','categories', 'users', 'loans'));
        } 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function get(Movie $movie)
    {
        if ($movie) {
            return response()->json([
                'message' => 'Registro consultado correctamente',
                'code' => '200',
                'movie' => $movie
            ]);
        }
        return response()->json([
            'message' => 'Registro no encontrado',
            'code' => '400',
            'movie' => array()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(Auth::user()->hasPermissionTo('update movies')) {
            $movie = Movie::find($request['id']);
                if ($movie->update($request->all())) {
                    if ($request->hasFile('cover_file')) {
                        $file = $request->file('cover_file');
                        $file_name = 'cover_movie'.$movie->id.'.'.$file->getClientOriginalExtension();
                        $path = $request->file('cover_file')->storeAs(
                            'img', $file_name
                        );
                        $movie->cover = $file_name;
                        $movie->save(); 
                    }
                    return redirect()->back()->with('success','Movie updated successuflly');
                }
            return redirect()->back()->with('error','We couldnt update the movie');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(Auth::user()->hasPermissionTo('delete movies')) {
            $movie = Movie::find($request['id']);
            if($movie){
                if ($movie->delete()) {
                    return response()->json([
                        'message' => 'Movie deleted successfully',
                        'code' => '200',
                    ]);
                }
            }
            return response()->json([
                'message' => 'We couldt delete the movie',
                'code' => '400',
            ]);
        }
    }
}
