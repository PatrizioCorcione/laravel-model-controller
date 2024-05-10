<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('home', compact('movies'));
    }

    public function piuVisti()
    {
        $movies = Movie::where('vote', '>', 9)->get();
        return view('home', compact('movies'));
    }

    public function dettagliFilm($id)
    {
        $movies = Movie::find($id);
        return view('movie-detail', compact('movies'));
    }
}
