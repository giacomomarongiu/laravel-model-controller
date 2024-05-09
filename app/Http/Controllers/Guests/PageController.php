<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;
//use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
         //dd($movies);
        return view('guests/welcome', compact('movies'));
    }

    public function americans()
    {
        //Filter by nationality
        //This is something like Where in sql queries
        //dd(Movie::where('nationality','american')->get());
        $americans = Movie::where('nationality','american')->get();
        //dd($americans);

        return view('guests/americans', compact('americans'));
    }
}
