<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $id = 0;

        return view('home.home', compact(
            'id'
        ));
    }

    public function home_main()
    {
        $id = 'none';

        return view('home.home_main', compact(
            'id'
        ));
    }
}
