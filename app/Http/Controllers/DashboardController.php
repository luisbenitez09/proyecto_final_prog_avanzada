<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use App\Models\User;
use App\Models\Loan;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(Auth::user()->hasRole('User')) {
            $movies = Movie::All();
            return view ('dashboard.user', compact('movies'));
        } else if(Auth::user()->hasRole('Admin')) {
            $movies = Movie::All();
            $categories = Category::All();
            $users = User::All();
            $loans = Loan::All();
            return view ('dashboard.admin', compact('movies','categories','users','loans'));
        }

    }
}
