<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MovieController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMovie()
    {
        return view('movie\add');
    }

	public function postMovie(Request $request)
	{
		$movie = new Movie;
		$movie->name = $request->input('movie_name');
		$movie->orig_name = $request->input('movie_name');
		$movie->year = 2017;
		$movie->save();
		$request->session()->flash('status', 'Movie added!');
		return view('home');
	}
}
