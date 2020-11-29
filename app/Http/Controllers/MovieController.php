<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
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
        if(Auth::user()->hasRole('User')) {
            $movies = Movie::with('loan')->get();;
            return view ('movies.user', compact('movies'));
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

            return redirect()->back();
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
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
    public function update(Request $request, Movie $movie)
    {
        if ($movie) {
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

                return redirect()->back();
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
