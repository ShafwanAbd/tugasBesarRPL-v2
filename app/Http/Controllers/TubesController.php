<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TubesController extends Controller
{

    public function home(){
        return view('home.home'); 
    }

    public function home_main(){
        return view('home.home_main'); 
    }
}
