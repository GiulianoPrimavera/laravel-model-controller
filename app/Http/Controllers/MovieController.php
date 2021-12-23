<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index() {
        $model = Movie::all();
        // $model = Movie::where("id", 1)->get();

        /* echo "<pre>";
        var_dump($model); */
        
        
        return view('home', [ "model" => $model]);
        
    }
}
