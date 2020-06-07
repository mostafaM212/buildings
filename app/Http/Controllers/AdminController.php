<?php

namespace App\Http\Controllers;

use App\User;
use App\Bu ;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(User $users ,Bu $bus){
        $users=$users->take(8)->orderBy('id','desc') ->get();
        $bus =$bus->take(7)->orderBy('id','desc')->get();
        return view('admin.home.index',compact(['users','bus']));
    }
}
