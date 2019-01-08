<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Wisata;

class DashboardController extends Controller
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
    public function index()
    {
        if (auth()->user()->bool !== 0) {
            return redirect('\about')->with('error','Unauthorized Page');
        }
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('posts',$user->posts);
    }
}
