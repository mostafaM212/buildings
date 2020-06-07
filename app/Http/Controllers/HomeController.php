<?php

namespace App\Http\Controllers;

use App\Bu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['welcome']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function welcome () {
        $bus=Bu::where('bu_status',1)->paginate(8) ;
//        $bus->paginate(8);
        return view('welcome',compact('bus'));
    }
}
