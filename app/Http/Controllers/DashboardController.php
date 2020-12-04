<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use App\Models\User;
use App\Models\Loan;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        if(Auth::user()->hasRole('Admin')) {
            $movies = Movie::All();
            $categories = Category::All();
            $users = User::All();
            $loans = Loan::All();

            $terror = DB::table('movies')->where('category_id', 1)->count();
            $comedy = DB::table('movies')->where('category_id', 2)->count();
            $romance = DB::table('movies')->where('category_id', 3)->count();
            $action = DB::table('movies')->where('category_id', 4)->count();
            $drama = DB::table('movies')->where('category_id', 5)->count();
            $animation = DB::table('movies')->where('category_id', 6)->count();
            $adventure = DB::table('movies')->where('category_id', 7)->count();
            $musical = DB::table('movies')->where('category_id', 8)->count();
            $war = DB::table('movies')->where('category_id', 9)->count();
            $science = DB::table('movies')->where('category_id', 10)->count();
            $crime = DB::table('movies')->where('category_id', 11)->count();
            $family = DB::table('movies')->where('category_id', 12)->count();

            $terrorRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 1)->count();
            $comedyRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 2)->count();
            $romanceRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 3)->count();
            $actionRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 4)->count();
            $dramaRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 5)->count();
            $animationRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 6)->count();
            $adventureRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 7)->count();
            $musicalRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 8)->count();
            $warRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 9)->count();
            $scienceRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 10)->count();
            $crimeRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 11)->count();
            $familyRented = DB::table('loans')->join('movies', 'movies.id', '=', 'loans.movie_id')->where('category_id', 12)->count();

            $resultSep = DB::table('loans')->whereBetween('loan_date', ['2020-09-01', '2020-09-30'])->count();
            $resultOct = DB::table('loans')->whereBetween('loan_date', ['2020-10-01', '2020-10-31'])->count();
            $resultNov = DB::table('loans')->whereBetween('loan_date', ['2020-11-01', '2020-11-30'])->count();
            $resultDec = DB::table('loans')->whereBetween('loan_date', ['2020-12-01', '2020-12-31'])->count();

            return view ('dashboard.admin', compact('movies','categories','users','loans','resultSep','resultOct', 'resultNov', 'resultDec', 'terror', 'comedy', 'romance', 'action', 'drama', 'animation', 'adventure', 'musical', 'war', 'science', 'crime', 'family', 'terrorRented', 'comedyRented', 'romanceRented', 'actionRented', 'dramaRented', 'animationRented', 'adventureRented', 'musicalRented', 'warRented', 'scienceRented', 'crimeRented', 'familyRented'));
        } else {
            $movies = Movie::skip(1)->take(6)->get();
            $movies2 = Movie::skip(7)->take(4)->get();
            $user = Auth::user();
            return view ('dashboard.user', compact('movies','movies2', 'user'));
        }

    }
}
