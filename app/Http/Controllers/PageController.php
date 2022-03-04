<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index() {

        $lista_movies = Movie::all();
        
        return view('home', ['lista_movies' => $lista_movies]);
    }
}
