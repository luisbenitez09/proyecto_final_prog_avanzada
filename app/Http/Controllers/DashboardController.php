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
        
        if(Auth::user()->hasRole('User')) {
            $movies = Movie::skip(1)->take(6)->get();
            $movies2 = Movie::skip(7)->take(4)->get();
            return view ('dashboard.user', compact('movies','movies2'));
        } else if(Auth::user()->hasRole('Admin')) {
            $movies = Movie::All();
            $categories = Category::All();
            $users = User::All();
            $loans = Loan::All();
            $resultLoanSep = DB::table('loans')->whereBetween('loan_date', ['2020-09-01', '2020-09-30'])->count();
            $resultLoanOct = DB::table('loans')->whereBetween('loan_date', ['2020-10-01', '2020-10-31'])->count();
            $resultLoanNov = DB::table('loans')->whereBetween('loan_date', ['2020-11-01', '2020-11-30'])->count();
            $resultLoanDec = DB::table('loans')->whereBetween('loan_date', ['2020-12-01', '2020-12-31'])->count();
            return view ('dashboard.admin', compact('movies','categories','users','loans','resultLoanNov','resultLoanDec', 'resultLoanSep', 'resultLoanOct'));
        }

    }
}
